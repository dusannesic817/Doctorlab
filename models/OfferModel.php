<?php

namespace App\Models;
use \PDO;

use App\Core\DatabaseConnection;

class OfferModel{

    private $dbc;

    public function __construct(DatabaseConnection &$dbc){
        $this->dbc = $dbc;
    }


    public function getById(int $id){
        $sql = "SELECT * FROM offer WHERE offer_id = ?;";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $offer = NULL;

        if($res){
            $offer= $prep->fetch(PDO::FETCH_OBJ);
        }
        return $offer;
    }

    public function getAll(){
        $sql = "SELECT * FROM offer";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();

        $offers = [];

        if($res){
            $offers= $prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $offers;

    }

    public function getAllByOfferID(int $id){
        $sql = "SELECT * FROM offer WHERE auction_id=? ORDER BY created_at ASC;";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $offers = [];

        if($res){
            $offers= $prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $offers;

    }

}