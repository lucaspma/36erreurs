<?php
namespace Controller;
use ThirtySix\Connexion;
use Model\Nominee;
use Model\User;
class CesarController{
  public function gagnantsAction(){
    
    $winners = \Model\Nominee::getWinners($pdo);

    $bestplayers = \Model\User::getBest($pdo);

    $categories = [];
    foreach ($winners as $winner) {
      $categories[$winner['category_id']] = \Model\Category::getById($pdo, $winner['category_id']);
    }
    include "./winners.php";
  }
}