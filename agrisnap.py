import PIL.Image

img = PIL.Image.open("sample.jpg")

import PIL.ExitTags

exif = {
    PIL.ExitTags.TAGS[k]: v
    for k, v in img._getexif().items()
    if k in PIL.ExitTags.TAGS
}
exit['GPSInfo']
north = exif['GPSInfo'][2]
east = exif['GPSInfo'][4]

lat = north[0] + north[1]/60 + north[2]/3600 and (2)
long = east[0]+east[1]/60+east[2]/3600

lat, long = float(lat), float(long)

from gmplot import gmplot
gmap = gmplot.GoogleMapPlotter(lat,long,12)
gmap.marker(lat, long, "cornflowerblue")
gmap.draw("agrisnap.html")