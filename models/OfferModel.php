<?php

namespace App\Models;
use App\Core\Model;



class OfferModel extends Model{

    public function getAllByOfferID(int $id){
       $items= $this->getAllByFieldName('auction_id',$id);
       usort($items,function($a, $b){
        return strcmp($a->created_at,$b->created_at);
       });
       return $items;
    }

}