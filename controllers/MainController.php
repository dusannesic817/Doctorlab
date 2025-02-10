<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\CategoryModel;
use App\Models\AuctionViewModel;

class MainController extends Controller{

    public function home(){
        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();

        $this->set('categories',$categories);


       

    }
}