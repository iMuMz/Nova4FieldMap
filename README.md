![](https://img.shields.io/github/stars/iMuMz/Nova4FieldMap?&style=flat-square)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/iMuMz/Nova4FieldMap?color=yellow&style=flat-square)
![Packagist](https://img.shields.io/packagist/dt/imumz/nova-4-field-map?color=green&logo=testing&style=flat-square)
# Nova4FieldMap
Custom [Laravel Nova 4](https://nova.laravel.com/) map detail field using [Leaflet](https://leafletjs.com/). Supports Google Maps, marker clustering, map height, latitude and longitude coordinates, GeoJSON, marker popup and custom marker icons.

![Screenshot 2024-03-24 at 19 40 10](https://github.com/iMuMz/NovaLeafletMap/assets/22936672/da239977-f423-4b86-ae10-00aac64f5078)

### Installation

```
composer require imumz/nova-4-field-map
```
### Usage

```
use Imumz\Nova4FieldMap\Nova4FieldMap
...
Nova4FieldMap::make()
```
### Available Methods

#### Height
```
Nova4FieldMap::make()
->height('400px') // default is 300px
```
#### Google Maps
By default the provider is OpenStreetMaps.<br> 
You must set your Google Maps API key (https://developers.google.com/maps/documentation/javascript/get-api-key).
```
Nova4FieldMap::make()
->googleApiKey('')
->googleMapType('roadmap'), // roadmap, satellite or hybrid
```
#### Latitude / Longitude (Point)
```
Nova4FieldMap::make('')
->type('LatLon')
->point($this->my_latitude,$this->my_longitude)
```
#### GeoJSON
```
Nova4FieldMap::make()
->type('GeoJson')
->geoJson('')
```
#### GeoJson Example 
```
{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": {
        "popup": "I am a Popup"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [
          23.8623046875,
          -30.221101852485987
        ]
      }
    }
  ]
}
```

#### Popup
```
Nova4FieldMap::make()
->popup('popup')
```
#### Custom Marker Icon
```
Nova4FieldMap::make()
->markerIcon('/images/marker-icon.png')
```
You can pass additional parameters to set the icon size and anchor
```
->markerIcon('/images/marker-icon.png',[100,100],[50,50])
```
![Screenshot 2024-03-24 at 19 44 45](https://github.com/iMuMz/NovaLeafletMap/assets/22936672/65342599-365d-4621-ad51-89acdd8255aa)

