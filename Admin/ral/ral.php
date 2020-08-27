<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Back Office Administrateur</title>        
        <link href="css\bootstrap.min.css" rel="stylesheet">
        <link href="css\bootstrap.css" rel="stylesheet">
        <link href="css\responsive.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="/signature/Admin/Commercial/commercial.php">Commerical</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/signature/Admin/Technicien/technicien.php">Technicien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/signature/Admin/ral/ral.php">R.A.L</a>
            </li>
        </ul>
        <div class="ral">
            <div class="row">
                <h2>Ral</h2>
            </div>

            <div class="row">               
               <a href="addral.php" id="addral" class="btn btn-success">+ Ajouter une couleur</a>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead align="center">
                            <th>Couleur</th>
                            <th colspan=2>Edition</th>
                        </thead>
                        <tbody align="center">
                        <?php include 'database.php'; 
                            $pdo = Database::connect();
                            $sql = 'SELECT * FROM t_ral ORDER BY id DESC';
                            foreach ($pdo->query($sql) as $row) { 
                                                        
                           echo' <tr>
                                    <td>'.$row['name'].'</td>
                                   <td><a class="btn btn-danger" href="delete.php?id='. $row['id'] .'">Supprimer</a></td>
                                </tr>';

                            } ?>
                        </tbody>
                    </table>                    
                </div>
            </div> 
        </div>
        </div>
    </body>
</html>