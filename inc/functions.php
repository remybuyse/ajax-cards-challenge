<?php

function isAjax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

function sendServerError($message = "Erreur") {
  header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
  die($message);
}

function sanitize($str){
  return htmlspecialchars(strip_tags(trim($str)));
}

function generateCard($id, $title, $img) {
  return '
  <div class="col-sm-6 col-md-4 card-container">
    <div class="thumbnail card">
      <img src="'.$img.'" alt="'.$title.'">
      <div class="caption">
        <h3>'.$title.'</h3>
        <a href="delete.php?id='.$id.'" class="btn btn-danger delete-card">Supprimer</a>
      </div>
    </div>
  </div>
  ';
}
