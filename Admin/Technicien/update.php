<?php
	$server ="localhost";
	$dbname = "signature";
	$user = "root";
	$pass = "";

    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $tel = $_POST['tel'];
    $mail = $_POST['email'];
    $id = $_GET['id'];

    try{
        $dbco = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sth = $dbco->prepare("
        UPDATE `t_tech` SET `name`='$name',`firstname`='$firstname',`tel`='$tel',`email`='$mail' WHERE `id`='$id'");
        $sth->execute();

        header('Location:technicien.php');
        exit;
    } catch(PDOException $e) {
        echo 'Impossible de traiter les donnés. Erreur: '.$e->getMessage();
    }
