<!DOCTYPE html>
<html>
	<head>
		<title>Hublot 2020</title>
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
						<h1>Hublot</h1>
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
							<td coslpan=3>
							</td>
							<td colspan=3></td>
						</tr>
						<tr>
							<td colspan=3>
								<canvas id="canvas1" width="400" height="400"></canvas>
							</td>							
							<td colspan=3 valign="top">
								<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Modèle </b></i></span></div>
								<p style="margin-left:300px; margin-top:50px"><input type="checkbox" style="width: 20px; height:20px;" id="Fixe"> <label for="Fixe">Fixe</label><br />  
								<p style="margin-left:300px; margin-top:50px"><input type="checkbox" style="width: 20px; height:20px;" id="Ouvrant"> <label for="Ouvrant">Ouvrant</label><br />  
								<p style="margin-left:300px; margin-top:50px"><input type="checkbox" style="width: 20px; height:20px;" id="Basculant"> <label for="Basculant">Basculant</label><br />  						
							</td>
						</tr>
						<tr> 
							 <td colspan=3> 
								<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:40px"><span style="background:#D9D9D9;"><b><i> Couvre Joint </i></b></span></div> 
							</td> 

							 <td colspan=3 style="border-left: 2px #000000 solid;"> 
								 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:40px"><span style="background:#D9D9D9;"><b><i> Position C.J </i></b></span></div> 
								 
							 </td> 
						</tr>
						<tr>
							<td width="50%" colspan=3>
								<p style="margin-left:200px"><input type="checkbox"  style="width: 20px; height:20px" id="27">&nbsp;<label for="27mm"> 27 mm Droit </label></p> 
								<p style="margin-left:200px"><input type="checkbox"  style="width: 20px; height:20px" id="50">&nbsp; <label for="50">50 mm Droit</label>						 
								<p style="margin-left:200px"><input type="checkbox"  style="width: 20px; height:20px" id="50">&nbsp; <label for="50">Sans Couvre Joint</label>						 
							 
							</td>
							<td align="right" width="8%" style="border-left: 2px #000000 solid;">
							</td>
							<td width="21%" align="center" >
								<canvas id="canvas2" width="100" height="100"></canvas>
							</td>
							<td  width="21%" align="left">
								<span><input type="checkbox" style="width: 20px; height:20px; id="int">&nbsp; <label for="int">INT</label><br/><input type="checkbox" style="width: 20px; height:20px;" id="ext">&nbsp; <label for="ext">EXT</label></span>
							</td>

						</tr>
						<tr> 
							 <td colspan=3 > 
							</td> 

							 <td colspan=3 style="border-left: 2px #000000 solid;"> 
								 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Remplisage </i></b></span></div> 
							 </td> 
						</tr>
						<tr>
							<td align="right" width="21%">
							</td>
							<td width="8%">
							</td>
							<td  width="21%" align="center">
							</td>
							<td width="50%" colspan=3 align="center" style="border-left: 2px #000000 solid;">
								<p><input type="text" ></p>
							</td>
						</tr>
				
		
			

		<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top:550px;">
			<tr>
				<td align="right" style="border-top: 2px #000000 solid;">
					<span>&#8593;<br /><input type="number" style="width:25px;  margin-bottom:10px; margin-top: 10px"> Cm <br />&#8595;</span>
				</td>
				<td style="border-top: 2px #000000 solid;">
					<div class="rectangle3" >
						<p style="font-size:24px"><b>Cote Béton</b></p>
					</div><br /><br /><br /><br />
					<p style="margin-left:80px">&#8592; <input type="number" style="width:25px; margin-bottom:5px; margin-left:15px; margin-right:15px"> Cm &#8594;</p>
				</td>	
				<td colspan=3 style="border-top: 2px #000000 solid;">
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
</html>
<script>
	var c = document.getElementById("canvas1");
	var ctx = c.getContext("2d");
	ctx.beginPath();
	ctx.arc(200, 200, 150, 0, 2 * Math.PI);
	ctx.stroke();

	var c = document.getElementById("canvas1");
	var ctx = c.getContext("2d");
	ctx.beginPath();
	ctx.arc(200, 200, 140, 0, 2 * Math.PI);
	ctx.stroke();
	</script>
	<script>
	var c = document.getElementById("canvas2");
	var ctx = c.getContext("2d");
	ctx.beginPath();
	ctx.arc(50, 50, 50, 0, 2 * Math.PI);
	ctx.stroke();
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