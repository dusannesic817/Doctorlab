<?php
namespace App\Controllers;

use App\Core\Controller;

class ApiSessionController extends Controller
{
public function getCaregiverId(){
    header('Content-Type: application/json');

    $caregiver_id = $this->getSession()->get('caregiver_id');

    echo json_encode([
        'caregiver_id' => $caregiver_id
    ]);
}

}
