<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AuctionModel;
use App\Models\AuctionViewModel;
use App\Models\OfferModel;

class AuctionController extends Controller{

    public function show($id){

     
        $auctionModel = new AuctionModel($this->getDatabaseConnection());
        $auction = $auctionModel->getById($id);
        $auctionViewModel= new AuctionViewModel($this->getDatabaseConnection());

        $ipAddress = filter_input(INPUT_SERVER,"REMOTE_ADDR");
        $userAgent = filter_input(INPUT_SERVER,"HTTP_USER_AGENT");
        
        $auctionViewModel->add([
            'auction_id'=> $id,
            "ip_address"=> $ipAddress,
            'user_agent'=>$userAgent,
            

        ]);
        
        

        if(!$auction){
            header('Locataion: /');
            exit();
        }

        $lastOfferPrice = $this->getLastOfferPrice($id);

        if(!$lastOfferPrice){
            $lastOfferPrice= $auction->started_price;
        }

        $this->set('auction',$auction);
        $this->set('lastOfferPrice', $lastOfferPrice);
        
        
    }

    private function getLastOfferPrice($auction_id){
        $offerModel = new OfferModel($this->getDatabaseConnection());
        $offers= $offerModel->getAllByOfferID($auction_id);

        $maxPrice= 0;

        foreach($offers as $value){
            if($maxPrice< $value->price){
                $maxPrice=$value->price;
            }
        }
        return $maxPrice;

    }


    
}