import { fileURLToPath } from 'url';
import { dirname } from 'path';
import express from 'express';
import http from 'http';
import path from 'path';
import bodyParser from 'body-parser';
import cors from 'cors';
import OpenAI from 'openai';
import dotenv from 'dotenv';
import mysql from 'mysql';

dotenv.config();

const apiKey = process.env.API_TOKEN;

if (!apiKey || apiKey.trim() === '') {
  throw new Error("Variabel lingkungan API_TOKEN tidak ada atau kosong; mohon sediakan kunci API.");
}

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);
const app = express();
const server = http.createServer(app);

const publicPath = path.join(__dirname, 'public');

app.use(express.static(path.join(__dirname, '/public')));
app.use(bodyParser.json());
app.use(cors());

server.listen(3000, () => console.log('Server berjalan di localhost:3000'));

app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'index.html')); // Kirim file HTML untuk tampilan
});

app.get('/getAIResult', async (req, res) => {
  try {
    const connection = mysql.createConnection({
      host: '127.0.0.1',
      user: 'root',
      password: '',
      database: 'agriculate'
    });

    connection.connect(async (error) => {
      if (error) {
        console.error('Koneksi gagal:', error);
        res.status(500).send('Koneksi ke database gagal.');
        return;
      }
      console.log('Berhasil terhubung ke database!');

      // Ambil data latitude dan longitude dari tabel locations
      connection.query('SELECT latitude, longitude FROM locations', async (error, results, fields) => {
        if (error) {
          console.error('Gagal mengambil data:', error);
          connection.end(); // Pastikan untuk menutup koneksi jika ada kesalahan
          res.status(500).send('Gagal mengambil data dari database.');
          return;
        }
        console.log('Data yang diambil:', results);

        // Ambil nilai latitude dan longitude dari hasil query
        const locationData = results[0]; // Misalnya, ambil data dari baris pertama
        const { latitude, longitude } = locationData;

        // Gunakan nilai latitude dan longitude untuk permintaan ke OpenAI
        const openai = new OpenAI({ apiKey });

        const prompt = `Latitude: ${latitude}, Longitude: ${longitude}. Sebutkan 2 tanaman pangan apa yang cocok ditanam di kawasan tersebut berdasarkan karakteristik iklim dan lingkungan tersebut?, sebut tanpa penjelasan (contoh: padi dan jagung)`;

        const stream = await openai.completions.create({
          model: "gpt-3.5-turbo-instruct",
          prompt,
          stream: true,
        });

        let output = ''; // Inisialisasi variabel output sebelumnya
        for await (const chunk of stream) {
          output += chunk.choices[0].text;
          // Lakukan apa pun dengan output AI di sini
        }

        // Simpan output ke dalam database
        const saveOutputQuery = 'INSERT INTO hasil_ai (rekomendasi) VALUES (?)'; // Sesuaikan dengan nama tabel dan kolom yang diinginkan

        connection.query(saveOutputQuery, [output], (error, results, fields) => {
          if (error) {
            console.error('Gagal menyimpan output:', error);
            res.status(500).send('Gagal menyimpan output ke database.');
            return;
          }
          console.log('Output berhasil disimpan ke database.');
          connection.end(); // Pastikan untuk menutup koneksi setelah selesai menggunakan database
          res.send(output); // Kirim hasil output AI sebagai respons
        });
      });
    });
  } catch (error) {
    console.error('Koneksi gagal:', error);
    res.status(500).send('Terjadi kesalahan saat terhubung ke database.');
  }
});
