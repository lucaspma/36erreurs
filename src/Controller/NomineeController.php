<?php

namespace Controller;

use ThirtySix\Connexion;
use Model\Nominee;
class NomineeController{
  public function imgAction($id){
    $pdo = Connexion::getInstance();
    $nominee = Nominee::getById($pdo, $id);
    header("Location: ".$nominee['img_url']);
    exit();
  }
}