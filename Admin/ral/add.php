<?php
	$server ="localhost";
	$dbname = "signature";
	$user = "root";
	$pass = "";

    $name = $_POST['name'];

    try{
        $dbco = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sth = $dbco->prepare("
            INSERT INTO t_ral(name)
            VALUES (:name)");
            $sth->bindParam(':name',$name);
        $sth->execute();

        header('Location:ral.php');
        exit;
    } catch(PDOException $e) {
        echo 'Impossible de traiter les donnés. Erreur: '.$e->getMessage();
    }
