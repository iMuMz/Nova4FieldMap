<?php

namespace Imumz\Nova4FieldMap;

use Laravel\Nova\Fields\Field;

class Nova4FieldMap extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-4-field-map';
    public $showOnUpdate = false;
    public $showOnIndex = false;

    public function height($height){
        return $this->withMeta([
            'height' => $height
        ]);
    }
    public function zoom($zoom){
        return $this->withMeta([
            'zoom' => $zoom
        ]);
    }
    public function geoJson($geoJson){

        return $this->withMeta([
            'geoJson' => $geoJson
        ]);
    }
    public function markerIcon($markerIcon,$markerIconSize = null,$markerIconAnchor = null){

        return $this->withMeta([
            'markerIcon' => $markerIcon,
            'markerIconSize' => $markerIconSize,
            'markerIconAnchor' => $markerIconAnchor
        ]);
    }

    public function type($type){
        return $this->withMeta([
            'type' => $type
        ]);
    }
    public function popup($popup){
        return $this->withMeta([
            'popup' => $popup
        ]);
    }
    public function point($latitude,$longitude) {
        return $this->withMeta([
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);
    }

    public function googleApiKey($googleApiKey) {

        return $this->withMeta([
            'googleApiKey' => $googleApiKey
        ]);
    }

    public function googleMapType($googleMapType) {

        return $this->withMeta([
            'googleMapType' => $googleMapType
        ]);
    }
}
