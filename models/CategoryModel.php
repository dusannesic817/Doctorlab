<?php

namespace App\Models;
use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;



class CategoryModel extends Model{

    protected function getFields(){
        return[
           'category_id'=> new Field((new NumberValidator())->setIntegerLength(11), false),
           'name' => new Field((new StringValidator())->setMaxLength(255)),

        ];
    }



}