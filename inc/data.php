<?php
//sleep(1);

$host = "localhost";
$user = "exo_cards";
$pass = "exo_cards";
$dbname = "exo_cards";

try {
  $db_connect = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8",$user,$pass);
}
catch(PDOException $e) {
  die('Erreur : '.$e->getMessage());
}

function getAllCards() {
  global $db_connect;
  $sql = 'SELECT * FROM cards ORDER BY id DESC';
  $query = $db_connect->query($sql);
  return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getLastCardId() {
  global $db_connect;
  return $db_connect->lastInsertId();
}

function deleteCard($id){
  global $db_connect;

  $query = $db_connect->prepare('DELETE FROM cards WHERE id = :id');
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  return $query->execute();
}

function createCard($title, $url) {
  global $db_connect;
  // On nettoie les données récupérées
  $title = sanitize($title);
  $img = sanitize($url);

  // On prépare la requête
  $query = $db_connect->prepare('INSERT INTO cards (title, img) VALUES (:title, :img)');

  // on lie les valeurs à notre requête
  $query->bindValue(':title', $title, PDO::PARAM_STR);
  $query->bindValue(':img', $img, PDO::PARAM_STR);

  // On execute la requête
  return $query->execute();
}
function filterCards($term) {
  global $db_connect;

  $sql = 'SELECT * FROM cards WHERE title LIKE :term ORDER BY id DESC';
  $query = $db_connect->prepare($sql);
  $query->bindValue(':term', '%'.sanitize($term).'%', PDO::PARAM_STR);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}
