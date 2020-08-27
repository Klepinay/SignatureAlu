<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ajouter une Couleur</title>        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>Ajouter une Couleur</h2>
            </div>

            <div class="form">
                <form method="POST" action="add.php">

                    <label for="name">Couleur</label><br />
                    <input type="text" name="name" id="name"><br />

                    <input type="submit" value="Enregistrer">

                </form>
            </div>
        </div>
    </body>
</html>