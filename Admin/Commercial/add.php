<?php
	$server ="localhost";
	$dbname = "signature";
	$user = "root";
	$pass = "";

    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $tel = $_POST['tel'];
    $mail = $_POST['email'];

    try{
        $dbco = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sth = $dbco->prepare("
            INSERT INTO t_com(name,firstname,tel,email)
            VALUES (:name, :firstname, :tel, :email)");
            $sth->bindParam(':name',$name);
            $sth->bindParam(':firstname',$firstname);
            $sth->bindParam(':tel',$tel);
            $sth->bindParam(':email',$mail);
        $sth->execute();

        header('Location:commercial.php');
        exit;
    } catch(PDOException $e) {
        echo 'Impossible de traiter les donnés. Erreur: '.$e->getMessage();
    }
