<?php
require_once('inc/data.php');
include('inc/functions.php');


if (!isAjax()) {
  // Nous ne sommes pas en AJAX
  sendServerError("Ouste, rien à voir par ici !");
}

// Si la suppression ne s'est pas bien déroulée on lance un message d'erreur
if (!deleteCard($_GET['id'])) {
  sendServerError("Echec de suppression");
}

echo "Suppression effectuée";
