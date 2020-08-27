<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Modifier un Technicien</title>        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>Modifier un Technicien</h2>
            </div>
            <?php 
                $id = $_GET["id"];
                $bdd = new PDO('mysql:host=localhost;dbname=signature;charset=utf8', 'root', '');
                $coms = $bdd->query("SELECT * FROM `t_tech` WHERE `id`='$id'");
                foreach ($coms as $com): 
		    ?>
            <div class="form">
                <form method="POST" action="update.php?id=<?php echo $id ?>">

                    <label for="name">Nom</label><br />
                    <input type="text" name="name" id="name" value="<?php echo $com['name'] ?>"><br />

                    <label for="firstname">Prénom</label><br />
                    <input type="text" name="firstname" id="firstname" value="<?php echo $com['firstname'] ?>"><br />

                    <label for="tel">Téléphone</label><br />
                    <input type="tel" name="tel" id="tel" value="<?php echo $com['tel'] ?>"><br />

                    <label for="email">Email</label><br />
                    <input type="mail" name="email" id="email" value="<?php echo $com['email'] ?>"><br /><br />

                    <input type="submit" value="Enregistrer">

                </form>
            </div>
            <?php endforeach ?>
        </div>
    </body>
</html>