<!Doctype html>
<html>
	<head>
		<title>Divers</title>
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
							<label><i>Tech<br /></i><?php echo $_GET['commercial'] ?></label>
							
						</div>
					</td>
				</tr>
				<tr>
					<td colspan=4 align="center">
						<h1>Divers</h1>
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
			
			<table width="100%" style="margin-top: 100px;">	
					<tr align="center">
						<td align="center">
							<canvas id="canvas1" width="1000" height="1000" style="border:2px solid black;"></canvas>	
						</td>
					</tr>
			</table>
				
<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top: 100px;">
			<tr align="center">
				<td style="border-top: 2px #000000 solid;"></td>
				<td style="border-top: 2px #000000 solid;" >
					<p><label>Hauteur Point de Niveau / Linteau : </label><input type="number" >
				</td>
				<td style="border-top: 2px #000000 solid;"></td>
				<td style="border-top: 2px #000000 solid;"></td>
				<td style="border-top: 2px #000000 solid;">						
					<p><label>Hauteur Point de Niveau / Sol Fini : </label><input type="number" >
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
		<p align="center"><input type="button" value="Enregistrer" onClick="window.print()"></p>	
		<p align="center"><button><a href="file:///C:/Prise%20de%20cote/Home.html">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>
	

	
<script language="javascript" type="text/javascript">
var c1=document.getElementById("canvas1");
var pinceau=c1.getContext("2d");

var ecart = 50; //largeur d'un côté des cases
//lignes
for(var h = ecart ; h < c1.height ; h += ecart) {
   pinceau.moveTo(0, h); //déplacer le pinceau à (x,y) sans tracer
   pinceau.lineTo(c1.width, h); //tracer jusqu'à (x,y)
}
//colonnes
for(var w = ecart ; w < c1.width ; w += ecart) {
   pinceau.moveTo(w, 0);
   pinceau.lineTo(w, c1.height);
}
pinceau.stroke();
</script>
<script type="text/javascript">
	document.querySelector("#couleurspe").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#textecouleurspe')).display=='block'){
			document.querySelector("#textecouleurspe").style.display="none";
		} else {
			document.querySelector("#textecouleurspe").style.display="block";
		}
	}
</script>
	
</html>