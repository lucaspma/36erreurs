<?php 
namespace Model;

class Nominee{

  const TABLE_NAME = "ce16_nominee";

  public static function getById($pdo, $id){
    $q = $pdo->prepare('SELECT * FROM '.self::TABLE_NAME.' WHERE nominee_id = :id');
    $q->bindParam('nominee_id',$id);
    return $q->fetch();
  }

  public static function getWinners($pdo){
    $q = $pdo->prepare('SELECT * FROM '.self::TABLE_NAME.' WHERE winner = 1');
    $winners = $q->execute();
    return $q->fetchAll();
  }
}