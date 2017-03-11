<?php
require_once('inc/data.php');
include('inc/functions.php');

if (!isAjax()) {
  // Nous ne sommes pas en AJAX
  sendServerError("Ouste, rien à voir par ici !");
}

$cards = filterCards($_GET['term']);

foreach ($cards as $card) {
  echo generateCard($card['id'],$card['title'],$card['img']);
}
