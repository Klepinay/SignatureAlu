<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ajouter un Commercial</title>        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>Ajouter un Commercial</h2>
            </div>

            <div class="form">
                <form method="POST" action="add.php">

                    <label for="name">Nom</label><br />
                    <input type="text" name="name" id="name"><br />

                    <label for="firstname">Prénom</label><br />
                    <input type="text" name="firstname" id="firstname"><br />

                    <label for="tel">Téléphone</label><br />
                    <input type="tel" name="tel" id="tel"><br />

                    <label for="email">Email</label><br />
                    <input type="mail" name="email" id="email"><br /><br />

                    <input type="submit" value="Enregistrer">

                </form>
            </div>
        </div>
    </body>
</html>