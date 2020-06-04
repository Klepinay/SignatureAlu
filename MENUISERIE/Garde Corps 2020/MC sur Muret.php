<!Doctype html>
<html>
	<head>
		<title>MC sur muret</title>
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
						<h1>MAIN COURANTE SUR MURET</h1>
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
				
				
				<tbody>
					
					<table align="center" width="100%" border="0" style="border-collapse: collapse">
						<tr align="center">
							<td width="40%">
							</td>
							<td width="33%">
							</td>
							<td width="33%"></td>
						</tr>
						<tr align="right">
							<td colspan=2>
								<canvas id="canvas5" width="810" height="310"></canvas>
							</td>
							<td align="left" valign="bottom">
								<p style="margin-bottom:65px"><label>Hauteur MC: <input type="number"></label></p>
								<p style="margin-bottom: 45px"><label>Hauteur Muret: <input type="number"></label></p>
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
						<tr >
							<td align="center" style="padding:25px">
								<input type="checkbox" style="width:35px; height:35px">
							</td>
							<td colspan=2 style="border: 0px #000000 solid;">
								<canvas id="canvas1" width="400" height="50">
							</td>
						</tr>
						<tr>
							<td align="center" style="padding:25px">
								<input type="checkbox" style="width:35px; height:35px">
							</td>
							<td colspan=2>
								<canvas id="canvas2" width="600" height="50" >
							</td>
						</tr>
						<tr>
							<td align="center" style="padding:25px">
								<input type="checkbox" style="width:35px; height:35px">
							</td>
							<td colspan=2>
								<canvas id="canvas3" width="500" height="50" >
							</td>
						</tr>
						<tr>
							<td colspan=3>
								<p align="center" style="font-size:24px"><b> Style de Fixation / Lisse</b></p>
							</td>
						</tr>
						<tr >
							<td style="padding-left: 250px;"> <input type="checkbox" style="width:20px; height:20px" id="SD"><label for="SD">Sabot sur Dalle</label> </td>
							<td style="padding-left: 100px;"><label>Qté : <input type="number" style="width:35px"></label></td>
							<td> <input type="checkbox" style="width:20px; height:20px" id="LR"><label for="LR">Lisse RONDE</label> </td>
						</tr>
						<tr >
							<td style="padding-left: 250px;"> <input type="checkbox" style="width:20px; height:20px" id="SA"><label for="SA">Sabot en Applique</label> </td>
							<td style="padding-left: 100px;"><label>Qté : <input type="number" style="width:35px"></label></td>
							<td> <input type="checkbox" style="width:20px; height:20px" id="LP"><label for="LP">Lisse PLATE</label> </td>
						</tr>
						<tr height="25px"></tr>
						<tr align="center">
							<td colspan=3>
								<canvas id="canvas4" width="800" height="50" >
							</td>
						</tr>
						<tr align="center">
							<td colspan=3>
								<p>Schéma Emplacement / Distance Raidisseur (si nécessaire)</p>
							</td>
						</tr>
						
					</table>
				
				</tbody>
				
					

		<table border="0" width="100%" style="border-collapse: collapse; margin-top:300px;">
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
	</footer>
	<div class="noImpr">
		<p align="center"><input type="button" value="Enregistrer" onClick="window.print()"></p>	
		<p align="center"><button><a href="file:///C:/Prise%20de%20cote/Home.html">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>

			<script>
			var c = document.getElementById("canvas1");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 0);
			ctx.lineTo(700, 0);
			ctx.stroke();

			var c = document.getElementById("canvas1");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 0);
			ctx.lineTo(0, 50);
			ctx.stroke();

			var c = document.getElementById("canvas1");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 50);
			ctx.lineTo(350, 50);
			ctx.stroke();

			var c = document.getElementById("canvas1");
			var ctx = c.getContext("2d");
			ctx.moveTo(350, 50);
			ctx.lineTo(400, 0);
			ctx.stroke();

			var c = document.getElementById("canvas2");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 0);
			ctx.lineTo(600, 0);
			ctx.stroke();

			var c = document.getElementById("canvas2");
			var ctx = c.getContext("2d");
			ctx.moveTo(50, 50);
			ctx.lineTo(550, 50);
			ctx.stroke();

			var c = document.getElementById("canvas2");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 0);
			ctx.lineTo(50, 50);
			ctx.stroke();

			var c = document.getElementById("canvas2");
			var ctx = c.getContext("2d");
			ctx.moveTo(550, 50);
			ctx.lineTo(600, 0);
			ctx.stroke();

			var c = document.getElementById("canvas3");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 0);
			ctx.lineTo(800, 0);
			ctx.stroke();

			var c = document.getElementById("canvas3");
			var ctx = c.getContext("2d");
			ctx.moveTo(50, 50);
			ctx.lineTo(800, 50);
			ctx.stroke();

			var c = document.getElementById("canvas3");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 0);
			ctx.lineTo(50, 50);
			ctx.stroke();

			var c = document.getElementById("canvas3");
			var ctx = c.getContext("2d");
			ctx.moveTo(500, 0);
			ctx.lineTo(500, 50);
			ctx.stroke();

			var c = document.getElementById("canvas4");
			var ctx = c.getContext("2d");
			ctx.moveTo(800, 0);
			ctx.lineTo(800, 50);
			ctx.stroke();

			var c = document.getElementById("canvas4");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 0);
			ctx.lineTo(0, 50);
			ctx.stroke();

			var c = document.getElementById("canvas4");
			var ctx = c.getContext("2d");
			ctx.moveTo(3, 23);
			ctx.lineTo(797, 23);
			ctx.stroke();

			var c = document.getElementById("canvas4");
			var ctx = c.getContext("2d");
			ctx.moveTo(3, 27);
			ctx.lineTo(797, 27);
			ctx.stroke();

			var c = document.getElementById("canvas4");
			var ctx = c.getContext("2d");
			ctx.moveTo(3, 23);
			ctx.lineTo(3, 27);
			ctx.stroke();

			var c = document.getElementById("canvas4");
			var ctx = c.getContext("2d");
			ctx.moveTo(797, 23);
			ctx.lineTo(797, 27);
			ctx.stroke();			
		</script>
		<script>
			var z = document.getElementById("canvas5");
			var ztx = z.getContext("2d");
			ztx.strokeStyle='grey';
			ztx.lineWidth=150;
			ztx.moveTo(0, 300);
			ztx.lineTo(700, 300);
			ztx.stroke();

			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.strokeStyle='black';
			xtx.lineWidth=10;
			xtx.moveTo(60, 150);
			xtx.lineTo(60, 227);
			xtx.stroke();
			
			var y = document.getElementById("canvas5");
			var ytx = y.getContext("2d");
			ytx.lineWidth=10;
			ytx.strokeStyle='black';
			ytx.moveTo(350, 150);
			ytx.lineTo(350, 227);
			ytx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=10;
			xtx.moveTo(640, 150);
			xtx.lineTo(640, 227);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(0, 135);
			xtx.lineTo(700, 135);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(0, 150);
			xtx.lineTo(700, 150);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(0, 135);
			xtx.lineTo(0, 150);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(700, 135);
			xtx.lineTo(700, 150);
			xtx.stroke();			
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(750, 135);
			xtx.lineTo(750, 227 );
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(800, 227);
			xtx.lineTo(800, 300);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(745, 140);
			xtx.lineTo(750, 135);
			xtx.stroke();
						
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(750, 135);
			xtx.lineTo(755, 140);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(745, 222);
			xtx.lineTo(750, 227);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(750, 227);
			xtx.lineTo(755, 222);
			xtx.stroke();
			
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(795, 232);
			xtx.lineTo(800, 227);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(800, 227);
			xtx.lineTo(805, 232);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(795, 295);
			xtx.lineTo(800, 300);
			xtx.stroke();
			
			var x = document.getElementById("canvas5");
			var xtx = x.getContext("2d");
			xtx.lineWidth=2;
			xtx.moveTo(800, 300);
			xtx.lineTo(805, 295);
			xtx.stroke();
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
	</body>
</html>
	