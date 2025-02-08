<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\CategoryModel;

class CategoryController extends Controller{

    public function show($id){

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $category = $categoryModel->getById($id);

        $this->set('category',$category);
        
    }
}