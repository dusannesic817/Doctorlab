<?php

namespace App\Controllers;
use App\Core\Controller;

use App\Models\CategoryModel;
use App\Models\AuctionViewModel;

class MainController extends Controller{

    public function home(){
        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();

        $this->set('categories',$categories);

        //$this->getSession()->put('neki_kljuc', 'Neka vrednost' . rand(100,999));
       
        

       $staraVrednost= $this->getSession()->get('neki_kljuc', '/');
       $this->set('podatak',$staraVrednost);

      $categoryModel->add([
            'name'=>'Novine'
       ]);
       $auctionModel = new AuctionViewModel($this->getDatabaseConnection());
       /*$auctionModel->add([
            'expire_at'=> '2025-03-03 10:00:00',
            'user_id'=> 2,
            'category_id'=>2,
            'title'=>'Naslov title',
            'description'=>'Neki opis',
            'started_price'=> '100.20',
            'is_active'=> 1,
       ]);*/


    }
}