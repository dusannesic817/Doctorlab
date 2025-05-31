<?php

namespace App\Services;

use Configruation;
use GoogleMaps\GoogleMaps as GMapsClient;

class GoogleMaps{
    protected $gmaps;
   

    public function __construct()
    {
        $apiKey = Configruation::GOOGLE_API_KEY;
        $this->gmaps = new GMapsClient(['key' => $apiKey]);
    }

  
    public function getPlaceDetails(string $placeId): ?array
    {
        try {
            $response = $this->gmaps->load('PlaceDetails')
                                    ->setParam(['place_id' => $placeId])
                                    ->get();

            return json_decode($response, true);
        } catch (\Exception $e) {
            // Možeš logovati ili vratiti null ako želiš tiho greške
            return null;
        }
    }
}
