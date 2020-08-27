<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE HTML>
<html>
<head>
	<title>Signature Alu - Nouvelle Prise de Cote</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	
	<body style="color: white">
		<div id="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card2">
				<div class="card-header" style="text-align:center">
					<h3>Nouvelle Prise de Cote</h3>
				</div>
			<div class="card-body">
				<form method="POST" action="mkdir.php" >

					<div class="input-group form-group">
						<div class="input-group-prepend" style="width: 100%">
							<label style="margin-right: 50px"><b>Commercial </b></label>
							<select id="commercial" name="commercial" class="form-control" style="width: 100%" required>
								<option value="">--Choisissez un commercial--</option>
							<?php
								$bdd = new PDO('mysql:host=localhost;dbname=signature;charset=utf8', 'root', '');
								$reqs = $bdd->query("SELECT * FROM t_com ORDER BY id");
								foreach ($reqs as $req):
								?>
								<option value="<?php echo $req['firstname'], $req['name']; ?>"><?php echo $req['firstname'], $req['name']; ?></option>
								<?php
								endforeach                                     
							?>                             
							</select> 
						</div>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend" style="width: 100%">
							<label style="margin-right: 57px"><b>Technicien</b></label>
							<select id="technicien" name="technicien" class="form-control" style="width: 100%"  required>
								<option value="">--Choisissez un technicien--</option>
							<?php
								$bdd = new PDO('mysql:host=localhost;dbname=signature;charset=utf8', 'root', '');
								$reqs = $bdd->query("SELECT * FROM t_tech ORDER BY id");
								foreach ($reqs as $req):
								?>
								<option value="<?php echo $req['firstname'], $req['name']; ?>"><?php echo $req['firstname'], $req['name']; ?></option>
								<?php endforeach ?>                              
							</select>
						</div>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend" style="width: 100%">
							<label style="margin-right: 46px;"><b>Numero de dossier</b></label>
							<input type="text" name="numero" id="numero" style="width:45%; margin-right: 15px;"  class="form-control" required> - <input type="text" name="numero2" class="form-control" id="name" style="width:45%; margin-left: 15px;" required>
						</div>
					</div>
					
					<div class="input-group form-group">
						<div class="input-group-prepend" style="width: 100%">
							<label style="margin-right: 67px"><b>Nom du client</b></label>
							<input type="text" name="client" class="form-control" id="client" required>
						</div>
					</div>
					
					<div class="input-group form-group">
						<div class="input-group-prepend" style="width: 100%">
							<label style="margin-right: 119px"><b>RAL</b></label>
							<select id="ral" name="ral"  class="form-control" required>
								<option value="">--Choisissez une couleur--</option>
							<?php
								$bdd = new PDO('mysql:host=localhost;dbname=signature;charset=utf8', 'root', '');
								$reqs = $bdd->query("SELECT * FROM t_ral ORDER BY id");
								foreach ($reqs as $req):
								?>
								<option value="<?php echo $req['name']; ?>"><?php echo $req['name']; ?></option>
								<?php endforeach ?>                              
							</select>
						</div>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend" style="width: 100%">
							<label style="margin-right: 113px"><b>Date</b></label>
							<input type="date" name="date" id="date" class="form-control" required>
						</div>
					</div>
					<div class="form-group" style="text-align:center">
						<input type="submit" id="submit" value="CREER">
					</div>
				</form>
			</div>
		</div>
		</div>
	</body>
</html>