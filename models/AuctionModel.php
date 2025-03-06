<?php

namespace App\Models;
use App\Core\Model;
use App\Validators\BitValidator;
use App\Validators\DateTimeValidator;
use App\Core\Field;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;


#App\Models\UserProfile -> user_profile
#UserProfile
#_User_Profile
#_user_profile
#user_profile

class AuctionModel extends Model{
    

    

    public function getAllByCategoryID(int $id){
        return $this->getAllByFieldName('category_id',$id);

    }

    protected function getFields(){
        $fields = [ 
            'auction_id' => new Field((new NumberValidator())->setIntegerLength(10), false),
            'created_at' => new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
            'expire_at' => new Field((new DateTimeValidator())->allowDate()->allowTime()),
            'user_id' => new Field((new NumberValidator())->setIntegerLength(11)),
            'category_id' => new Field((new NumberValidator())->setIntegerLength(11)),
            'title' => new Field((new StringValidator())->setMaxLength(255)),
            'description' => new Field((new StringValidator())->setMaxLength(255)),
            'started_price' => new Field((new NumberValidator())->setUnsigned()->setDecimal()->setIntegerLength(7)->setMaxDecimalDigits(2)),
            'is_active' => new Field((new BitValidator()))
        ];
    
        
    return $fields;
    }

}