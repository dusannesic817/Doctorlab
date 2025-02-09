<?php

namespace App\Models;
use \PDO;

use App\Core\DatabaseConnection;

class AuctionModel{

    private $dbc;

    public function __construct(DatabaseConnection &$dbc){
        $this->dbc = $dbc;
    }


    public function getById(int $id){
        $sql = "SELECT * FROM auction WHERE auction_id = ?;";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $auction = NULL;

        if($res){
            $auction= $prep->fetch(PDO::FETCH_OBJ);
        }
        return $auction;
    }

    public function getAll(){
        $sql = "SELECT * FROM auction";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();

        $auctions = [];

        if($res){
            $auctions= $prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $auctions;

    }

    public function getAllByCategoryID(int $id){
        $sql = "SELECT * FROM auction WHERE category_id=?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $auctions = [];

        if($res){
            $auctions= $prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $auctions;

    }

}