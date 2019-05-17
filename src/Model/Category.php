<?php

namespace Model;

class Category
{

  const TABLE_NAME = "ce16_category";
  
  public static function getById($pdo, $id)
  {
    $q = $pdo->prepare('SELECT * FROM ' . self::TABLE_NAME . ' WHERE id = ?');
    $q->execute([$id]);
    return $q->fetch();
  }
}