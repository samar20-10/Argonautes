<?php
if(isset($_POST['valider']))
{
    $pdo = new PDO("mysql:host=localhost;dbname=Lolcos;charset-utf8","root","");
    $data = [
        'name' => $_POST['name'],
    
    ];
    $sql = "INSERT INTO argonautes (name) VALUES (:name)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute($data);
    header("Location:http://localhost/argoBack/");
  
}

?>