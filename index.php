<?php
$pdo = new PDO("mysql:host=localhost;dbname=Lolcos;charset-utf8","root","");
$stmt = $pdo ->prepare("SELECT * FROM argonautes");
$stmt->execute();
$argonautes = $stmt ->fetchAll(PDO:: FETCH_ASSOC);
$stmt->closeCursor();
$infos = json_encode($argonautes);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/style.css">
</head>
<header>
    <div class="titre">  

            <div class="image1">
            <img  src="../ArgoBack/src/logo.png" alt="Wild Code School logo" /><h1>Les Argonautes</h1>

            </div>       
    </div>
 
</header>
<body>
    
    <h2>Ajouter un(e) Argonaute</h2>
  <form class="new-member-form" action="argoAction.php" method="POST">
    <label for="name">Nom de l&apos;Argonaute</label>
    <input name="name" type="text" placeholder="Gautier" />
    <input type="submit" value="Submit" name="valider">
  </form>
  <h2>Membres de l'équipage</h2>
  <table class="table">
  <thead>
    <tr style="font-weight:bold; color:#d3d2d2" class="tr">
        <td  class="th" >Id</td>
        <td  class="th">Nom</td>
    </tr>
</thead>
    <tbody>
    <?php foreach($argonautes as $argonaute):?>
    <tr style="color:#6495ed" >
        <td ><?=$argonaute["id"]?></td>
        <td><?=$argonaute["name"]?></td>
        </tr>
    <?php endforeach?>
    </tbody>
    </table>
<!-- <script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
<scrip src="argonautes.js"></script> -->
</body>
<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>
</html>