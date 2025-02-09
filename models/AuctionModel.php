<?php

namespace App\Models;
use App\Core\Model;


#App\Models\UserProfile -> user_profile
#UserProfile
#_User_Profile
#_user_profile
#user_profile

class AuctionModel extends Model{

    

    public function getAllByCategoryID(int $id){
        return $this->getAllByFieldName('category_id',$id);

    }

}