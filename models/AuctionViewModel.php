<?php

namespace App\Models;
use App\Core\Field;
use App\Core\Model;


#App\Models\UserProfile -> user_profile
#UserProfile
#_User_Profile
#_user_profile
#user_profile

class AuctionViewModel extends Model{

    protected function getFields(){
        return [
            'auction_id'=> new Field('|^[1-9][0-9]{0,10}$|', true),
            'ip_address'=> new Field('|^[0-9]{1,3}(\.[0-9]{1,3}){3}$|', true),
            'user_agent'=> new Field('|^.{0,255}$|', true)
        ];
    }
    

    public function getAllByAuctionID(int $id){
        return $this->getAllByFieldName('auction_id',$id);

    }

    public function getAllByIpAddress(int $ipAdress){
        return $this->getAllByFieldName('ip_address',$ipAdress);

    }



}