<?php
$db = new PDO('mysql:host=localhost;dbname=library','root','');
$result = $db->query('SELECT * FROM book');
$resultat = $result->fetchAll();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nos livres disponibles</h1>
    <?php
    foreach($resultat as $row){
     ?>   
     <div>
        <h1><?= $row['title'];?></h1>
        <p><?= $row['description'];?></p>
        <a href="detail.php?identifiant<?= $row['id_book']?>">en savoir plus sur moby dick</a>
     </div>
        
     <?php   
    }
    ?>
</body>
</html>