<!Doctype html>
<html>
	<head>
		<title>GRILLE de Protection</title>
		<link rel="stylesheet" href="style.css">
		<style media="print" type="text/css"> 
			.noImpr {
				display:none;
			} 
		</style>
	</head>
	
	<body>
		<form>
			<table width="100%" border="0">
                				<tr >
					<td>
						<div class="rectangle" >
							<label><i>Client<br /></i>
							<?php echo $_GET['client'] ?>
						</div>
					</td>
					<td>
						<div style="margin:10px; width:250px; border: 1px #000000 solid; height:50px; text-align:center; float: left">
							<label><i>Ral<br /></i></label>
								<?php echo $_GET['ral'] ?>
						</div>
					</td>
					<td >
						<div class="rectangle" >
							<p><label for="fld_986953_1"><B>Date : </b></label><br /></p>
							<?php echo $_GET['date'] ?>
						</div>
					</td>
					<td>
						<div class="rectangle">
							<label><i>Tech<br /></i><?php echo $_GET['technicien'] ?></label>
							
						</div>
					</td>
				</tr>
				<tr>
					<td colspan=4 align="center">
						<h1>GRILLE de protection</h1>
					</td>
				</tr>
				<tr >
					<td>
						<div class="rectangle2" >
							<label><i><b>Rep<br /></b></i><input type="text" name="rep"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Qté<br /></b></i><input type="text" name="qte"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Lg<br /></b></i><input type="text" name="lg"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Ht<br /></b></i><input type="text" name="ht"></label>
						</div>
					</td>
				</tr>
			</table>
			
			<table border="0" width="100%" style="margin-top:45px; border-collapse: collapse">

				<tr align="center">
					<td width="21%"></td>
					<td width="8%" align="left">
							<span>&#8592; <input type="number" style="width:40px; margin-bottom:5px; margin-left:30px; margin-right:30px"> &#8594;</span>
					</td>
					<td width="21%"></td>
					<td width="21%"></td>
					<td width="8%">
							<span>&#8592; <input type="number" style="width:40px; margin-left:30px; margin-right:30px"> &#8594;</span>
					</td>
					<td width="21%"></td>
				</tr>
				<tr>
					<td></td>
					<td><canvas id="canvas1" width="150" height="200"></td>

					<td align="left" style="border-right: 10px #000000 solid;">
						<span>&#8593;<br /><input type="number" style="width:40px; margin-left:5px; margin-top: 50px; margin-bottom: 50px"><br />&#8595;</span>
					</td>
					<td></td>
					<td>
						<canvas id="canvas2" width="150" height="200">
					</td>
					<td>
						<span>&#8593;<br /><input type="number" style="width:40px; margin-top: 50px; margin-bottom: 50px"><br />&#8595;</span>
					</td>
				</tr>
				<tr height="25px">
					<td colspan=2></td>
					<td align="left" style="border-right: 10px #000000 solid;">
					</td>
					<td colspan=3></td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align:center; border: 1px #000000 solid; font-size: 22px">
						<p>Horizontale</p>
					</td>
					<td align="left" style="border-right: 10px #000000 solid;">
					</td>
					<td></td>
					<td style="text-align:center; border: 1px #000000 solid; font-size: 22px">
						<p>Verticale</p>
					</td>
					<td></td>
				</tr>
				
			</table>
		
		<script type="text/javascript" src="script.js"></script>
	</body>
	
	<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top: 925px;">
			<tr align="center">
				<td style="border-top: 2px #000000 solid;"></td>
				<td style="border-top: 2px #000000 solid;" >
					<p><label>Hauteur Point de Niveau / Linteau : </label><input type="number" style="width:25px">&nbsp;<input type="number" style="width:25px">&nbsp;<input type="number" style="width:25px">&nbsp;<input type="number" style="width:25px">&nbsp; </p>
				</td>
				<td style="border-top: 2px #000000 solid;"></td>
				<td style="border-top: 2px #000000 solid;"></td>
				<td style="border-top: 2px #000000 solid;">						
					<p><label>Hauteur Point de Niveau / Sol Fini : </label><input type="number" style="width:25px;">&nbsp;<input type="number" style="width:25px">&nbsp;<input type="number" style="width:25px">&nbsp;<input type="number" style="width:25px">&nbsp; </p>
				</td>
				<td style="border-top: 2px #000000 solid;"></td>
			</tr>
			<tr>
				<td align="right">
					<span>&#8593;<br /><input type="number" style="width:25px;  margin-bottom:10px; margin-top: 10px"> Cm <br />&#8595;</span>
				</td>
				<td>
					<div class="rectangle3" >
						<p style="font-size:24px"><b>Cote Béton</b></p>
					</div><br /><br /><br /><br />
					<p style="margin-left:80px">&#8592; <input type="number" style="width:25px; margin-bottom:5px; margin-left:15px; margin-right:15px"> Cm &#8594;</p>
				</td>	
				<td colspan=3>
					<label><b>Observation: <textarea name="observations" rows=4 cols=40></textarea></b></label>
				</td>
			</tr>
		</table>
	</footer>
	<div class="noImpr">
		<p align="center"><a href="gp1_pdf.php">save</a></button></p>	
		<p align="center"><button><a href="/Signature/nouvelle_prise_de_cote.php?technicien=<?php echo $_GET['technicien'] ?>&numero=<?php echo $_GET['numero'] ?>&date=<?php echo $_GET['date'] ?>&Nchantier=<?php echo $_GET['Nchantier'] ?>&client=<?php echo $_GET['client'] ?>&adresse=<?php echo $_GET['adresse'] ?>&tel=<?php echo $_GET['tel'] ?>&commercial=<?php echo $_GET['commercial'] ?>&Nbrsmenuiserie=<?php echo $_GET['Nbrsmenuiserie'] ?>&ral=<?php echo $_GET['ral'] ?>">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>
	
</html>
<script type="text/javascript">
	document.querySelector("#couleurspe").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#textecouleurspe')).display=='block'){
			document.querySelector("#textecouleurspe").style.display="none";
		} else {
			document.querySelector("#textecouleurspe").style.display="block";
		}
	}
</script>