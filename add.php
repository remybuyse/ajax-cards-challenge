<?php
require_once('inc/data.php');
include('inc/functions.php');

if (!isAjax()) {
  // Nous ne sommes pas en AJAX
  sendServerError("Ouste, rien à voir par ici !");
}

$card = $_POST['card'];

if (!createCard($card['title'], $card['img'])) {
  sendServerError("Echec de l'enregistrement");
}

echo generateCard( getLastCardId(), $card['title'], $card['img'] );
