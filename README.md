![](https://img.shields.io/github/stars/iMuMz/Nova4FieldMap?&style=flat-square)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/iMuMz/Nova4FieldMap?color=yellow&style=flat-square)
![Packagist](https://img.shields.io/packagist/dt/imumz/nova-4-field-map?color=green&logo=testing&style=flat-square)
# Nova4FieldMap
Custom [Laravel Nova 4](https://nova.laravel.com/) map detail field using [Leaflet](https://leafletjs.com/). Supports Google Maps, marker clustering, map height, latitude and longitude coordinates, GeoJSON, marker popup and custom marker icons.

![image](https://github.com/iMuMz/Nova4FieldMap/assets/22936672/a2ae9819-9115-4a05-8408-92c98edbf010)

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
![image](https://github.com/iMuMz/Nova4FieldMap/assets/22936672/a5da7f18-be4d-406b-968f-9993a528e24e)

