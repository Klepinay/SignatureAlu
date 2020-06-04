<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="style.css" rel="stylesheet">
		<title>Nouvelle Prise de cote</title>
	</head>
	
	<body>
		<div id="container">
			<form method="POST" action="mkdir.php" align="center">
				<h1> Nouvelle Prise de cote </h1>
				
				<label><b>Commercial</b></label>
				<select id="commercial" name="commercial" required>
					<option value="">--Choisissez un commercial--</option>
				   <?php
					   $rows = file("txt/commercial.txt", FILE_SKIP_EMPTY_LINES);
					   foreach($rows as $value){
					?>
					   <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
					<?php
					}                                     
				   ?>                             
				</select> <br/> <br />	
				
				<label><b>Technicien</b></label>
				<select id="technicien" name="technicien" required>
					<option value="">--Choisissez un technicien--</option>
				   <?php
					   $rows = file("txt/technicien.txt", FILE_SKIP_EMPTY_LINES);
					   foreach($rows as $value){
					?>
					   <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
					<?php
					}                                     
				   ?>                             
				</select> <br/> <br />
			   
				<label><b>Numero de dossier</b></label><br/>
				<input type="text" name="numero" id="numero" style="width:45%" required> - <input type="text" name="numero2" id="name" style="width:45%" required><br />
				
				<label><b>Nom du client</b></label>
				<input type="text" name="client" id="client" required>
				
				<label><b>RAL</b></label>
				<input type="text" name="ral" id="ral" required>
				
				<label><b>Date</b></label>
				<input type="date" name="date" id="date" required>
				<input type="submit" id="submit" value="CREER">
			</form>
		</div>
	</body>
</html>