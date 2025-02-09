<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AuctionModel;
use App\Models\CategoryModel;

class CategoryController extends Controller{

    public function show($id){

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $category = $categoryModel->getById($id);

        $auctionModel = new AuctionModel($this->getDatabaseConnection());
        $auctionsCategory = $auctionModel->getAllByCategoryID($id);

        
        if(!$category){
            header('Locataion: /');
            exit();
        }


        $this->set('category',$category);
        $this->set('auctionsCategory',$auctionsCategory);
        
    }
}