<?php

namespace App\Services;

use Configruation;
use OpenCage\Geocoder\Geocoder;

class GeoCodic{
 private $geocoder;

    public function __construct()
    {
      
        $this->geocoder = new Geocoder(Configruation::GEOCODIC_API_KEY);
    }

    public function geocode($address)
    {
        try {
            $result = $this->geocoder->geocode($address);
            if (empty($result['results'])) {
                return null;
            }
            return [
                'lat' => $result['results'][0]['geometry']['lat'],
                'lng' => $result['results'][0]['geometry']['lng'],
            ];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}