<?php
    require_once('database.php');

    if(isset($_GET['id'])){
        $sql = 'DELETE FROM products WHERE id=:id' ;
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $sth->execute();
    }

header('Location: index.html.twig');