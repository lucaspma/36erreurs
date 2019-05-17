<?php

namespace Controller;

use Model\Nominee;
use ThirtySix\Connexion;
use Model\User;
use Model\Category;
class CesarController
{
  public function gagnantsAction()
  {
    $pdo = Connexion::getInstance();
    $winners = Nominee::getWinners($pdo);
    $bestplayers = User::getBest($pdo);
    $categories = [];
    foreach ($winners as $winner) {
      $categories[$winner['category_id']] = Category::getById($pdo, $winner['category_id']);
    }
    include "./winners.php";
  }
}