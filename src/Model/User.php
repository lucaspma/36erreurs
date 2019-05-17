<?php

namespace Model;

class User

{
  public static function getBest($pdo)
  {
    $sql = "SELECT user_id, u.screen_name, COALESCE(SUM(n.winner),0) as score 
    FROM ce16_user_pronostic pr 
    LEFT JOIN ce16_nominee n ON pr.nominee_id = n.id AND n.winner=1 
    JOIN user u ON pr.user_id = u.id 
    WHERE 1 GROUP BY user_id 
    ORDER BY score
    DESC, screen_name ASC LIMIT 5";
    $q = $pdo->prepare($sql);
    $best = $q->execute();
    return $q->fetchAll();
  }
}