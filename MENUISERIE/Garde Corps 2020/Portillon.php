<!Doctype html>
<html>
	<head>
		<title>Portillon 2020</title>
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
						<h1>PORTILLON 1Vt</h1>
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

					<table align="center" width="100%" border="0" style="border-collapse: collapse">
						<tr align="center">
							<td width="40%">
							</td>
							<td width="33%">
							</td>
							<td width="33%"></td>
						</tr>
						<tr align="right">
							<td>
								<canvas id="canvas1" width="400" height="400" ></canvas>
							</td>
							<td></td>
							<td align="left" >
								<p style="margin-bottom:65px"><input type="checkbox" style="width: 20px; height: 20px"> LISSE RONDE</p>
								<p style="margin-bottom:65px"><input type="checkbox" style="width: 20px; height: 20px"> LISSE PLATE</p>
							</td>
						</tr>
						<tr align="center">
							<td >
								<p style="font-size:24px; margin-top: 25px"><input type="checkbox" style="width:35px; height:35px"> SANS LISSE </p>
							</td>
							<td >
								<p style="font-size:24px; margin-top: 25px"><input type="checkbox" style="width:35px; height:35px"> AVEC 1 LISSE Ronde </p>
							</td>
							<td >
								<p style="font-size:24px; margin-top: 25px"><input type="checkbox" style="width:35px; height:35px"> AVEC 2 LISSEs Ronde </p>
							</td>
						</tr>
						<tr align="center" >
							<td colspan=3 >
								<p style="margin-top:25px">Rappel : Muret Mini 450 pour sinon 1020mm / espacement maximum entre Lisses de 180mm</p>
							</td>
						</tr>
						<tr align="center">
							<td >

							</td>
							<td align="center">
								<div class="rectangle" >
									<label style="font-size: 35px"><b>Coupe 45°</b></label>
								</div>	
							</td>
							<td >
								
							</td>
						</tr>

			<table border="0" width="100%" style="border-collapse: collapse; margin-top:350px;">
				<tr align="center" style="border-top: 2px #000000 solid;">
					<td style="border-top: 2px #000000 solid;">
					</td style="border-top: 2px #000000 solid;">
					<td></td>
					<td colspan=3 style="border-top: 2px #000000 solid;">						
					</td>
				</tr>
				<tr>
					<td align="right" >
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
		</form>
	</footer>
	<div class="noImpr">
		<p align="center"><input type="button" value="Enregistrer" onClick="window.print()"></p>	
		<p align="center"><button><a href="file:///C:/Prise%20de%20cote/Home.html">Nouvelle Prise de Cote</a></button></p>
	</div>
	
<script>
var c = document.getElementById("canvas1");
var ctx = c.getContext("2d");
// Create gradient
var grd = ctx.createLinearGradient(0,0,200,0);
grd.addColorStop(0,"#E7E6E6");
grd.addColorStop(1,"#E7E6E6");
// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(50,100,250,10);

var c = document.getElementById("canvas1");
var ctx = c.getContext("2d");
// Create gradient
var grd = ctx.createLinearGradient(0,0,200,0);
grd.addColorStop(0,"grey");
grd.addColorStop(1,"grey");
// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(50,10,10,300);

var c = document.getElementById("canvas1");
var ctx = c.getContext("2d");
// Create gradient
var grd = ctx.createLinearGradient(0,0,200,0);
grd.addColorStop(0,"grey");
grd.addColorStop(1,"grey");
// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(300,10,10,300);

var d = document.getElementById("canvas1");
var dtx = d.getContext("2d");
dtx.strokeStyle='black';
dtx.moveTo(60, 290);
dtx.lineTo(300, 290);
dtx.stroke();

var e = document.getElementById("canvas1");
var etx = e.getContext("2d");
etx.strokeStyle='black';
etx.moveTo(60, 35);
etx.lineTo(300, 285);
etx.stroke();

var f = document.getElementById("canvas1");
var ftx = f.getContext("2d");
ftx.strokeStyle='black';
ftx.moveTo(300, 35);
ftx.lineTo(60, 285);
ftx.stroke();
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
	
	
	
	
	