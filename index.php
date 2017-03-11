<?php
require_once('inc/data.php');
require_once('inc/functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cards Manager</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <main class="container">
    <h1>Cards</h1>
    <input type="text" id="filter" placeholder="Filtrer" class="form-control">
    <div class="alert alert-danger hidden" role="alert">...</div>
    <div class="alert alert-success hidden" role="alert">...</div>
    <hr>
    <form class="form-inline" id="form-add-card">
      <input type="text" name="card[title]" class="form-control" placeholder="Titre">
      <input type="text" name="card[img]" class="form-control" placeholder="Image">
      <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    <hr>
    <h2>Listing</h2>
    <hr>
    <div class="row" id="listing">
      <?php
      foreach(getAllCards() as $card) {
        echo generateCard($card['id'], $card['title'], $card['img']);
      }
      ?>
    </div>
  </main>
  <!--Scripts-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
</body>

</html>
