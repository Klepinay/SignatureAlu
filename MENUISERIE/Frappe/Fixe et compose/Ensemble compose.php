<!Doctype html>
<html>
	<head>
		<title>Ensemble Composé</title>
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
						<h1>Ensemble Composé</h1>
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
				
				<table width="100%" border="0" style="border-collapse: collapse">
					 <tr> 
						 <td colspan=3> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:40px"><span style="background:#D9D9D9;"><b><i> Couvre Joint </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:40px"><span style="background:#D9D9D9;"><b><i> Traverse </i></b></span></div> 
						 </td> 
					 </tr> 
					 <tr > 
						 <td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="27">&nbsp;<label for="27mm"> 27 mm </label>  <input type="checkbox" style="margin-left: 50px; width: 20px; height: 20px" id="droit">&nbsp;<label for="droit"> Droit </label></p> 
						 </td> 
						 <td colspan=3 style="border-left: 2px #000000 solid;" align="center"> 
							 <p><input type="checkbox"  style="width: 20px; height:20px" id="sans traverse">&nbsp; <label for="sans traverse">Sans Traverse</label></p> 
						 </td> 
					 </tr> 
					 <tr> 
						 <td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="50">&nbsp; <label for="50">50 mm</label>
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;" align="center"> 
							 <p><input type="checkbox"  style="width: 20px; height:20px" id="qte1">&nbsp;<label for="qte1"> Qté:1  </label><label style="margin-left: 25px"> Axe : <input type="number"></p> 
						 </td> 
					 </tr> 
					 <tr > 
						 <td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="scj">&nbsp; <label for="scj">Sans Couvre Joint</p> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;" align="center"> 
						<p><input type="checkbox"  style="width: 20px; height:20px" id="qte2">&nbsp;<label for="qte2"> Qté:2  </label><label style="margin-left: 25px"> Axe : <input type="number"></p>  </td> 
					 </tr> 
					 <tr align="center"> 
						 <td colspan=3 > 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
						<p><input type="checkbox"  style="width: 20px; height:20px" id="qte3">&nbsp;<label for="qte3"> Qté:3  </label><label style="margin-left: 25px"> Axe : <input type="number"></p>  </td> 
					 </tr> 
					 <tr align="center"> 
						 <td colspan=3 >  
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
						<p><input type="checkbox"  style="width: 20px; height:20px" id="qte4">&nbsp;<label for="qte4"> Qté:4  </label><label style="margin-left: 25px"> Axe : <input type="number"></p>  </td> 
					 </tr> 
					 <tr> 
						 <td colspan=3 > 
							 <div style="text-align:center; font-size: 24px;margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Position C.J </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Remplisage </i></b></span></div> 
						 </td> 
					 </tr> 
				<tr>
					<td align="right" width="21%">
						<input type="checkbox" style="width: 17px; height: 17px;">
					</td>
					<td width="8%">
						<p align="center"><input type="Checkbox" style="width:17px;height:17px;"></p>
						<canvas id="canvas1" width="100" height="100" style="border: 1px #000000 solid"></canvas>
						<p align="center"><input type="checkbox" style="width: 17px; height: 17px;"></p>
					</td>
					<td  width="21%" align="center">
						<span><input type="checkbox" style="width: 20px; height:20px; margin-left:15px" id="int">&nbsp; <label for="int">INT</label><br/><input type="checkbox" style="width: 20px; height:20px;" id="ext">&nbsp; <label for="ext">EXT</label></span>
						<span style="float:left"><input type="Checkbox" style="width:17px;height:17px; align:left" ></span>
					</td>
					<td width="50%" colspan=3 align="center" style="border-left: 2px #000000 solid;">
						<p><input type="text" ></p>
					</td>
				</tr>
					 <tr> 
						 <td colspan=3 > 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Bavette </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Type de Fermeture </i></b></span></div> 
						 </td> 
					 </tr> 
					 <tr> 
						 <td colspan=3 align="center"> 
							 <p><input type="checkbox" style="width: 20px; height:20px;" id="30"> <label for="30">30 mm</label><br /><br /> 
							 <p><input type="checkbox" style="width: 20px; height:20px;" id="70"> <label for="70">70 mm</label><br /><br />  
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <p style="margin-left:200px"><input type="checkbox" style="width: 20px; height:20px;" id="taquet"> <label for="taquet">Taquet</label><br />  
							 <p style="margin-left:200px"><input type="checkbox" style="width: 20px; height:20px;" id="cremone"> <label for="cremone">Crémone 3 Pts</label><br />  
							 <p style="margin-left:200px"><input type="checkbox" style="width: 20px; height:20px;" id="moteur"> <label for="moteur">Moteur Soufflet</label><br />  
							 <p style="margin-left:200px"><input type="checkbox" style="width: 20px; height:20px;" id="mistral5"> <label for="mistral5">Kit Mistral (manuel) 5 M</label><br />  
							 <p style="margin-left:200px"><input type="checkbox" style="width: 20px; height:20px;" id="mistral10"> <label for="mistral10">Kit Mistral (manuel) 10 M</label><br />  
							 <p style="margin-left:200px"><input type="checkbox" style="width: 20px; height:20px;" id="desenfumage"> <label for="desenfumage">Kit Désenfumage</label><br />  
						 </td> 
					 </tr> 
					 <tr> 
						 <td colspan=3 > 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Schema vu Int </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Hauteur Manoeuvre </i></b></span></div> 
						 </td> 
					 </tr> 
					 <tr align="center"> 
						 <td colspan=4></td> 
						 <td colspan=3><label>Ht Allège : </label><input type="number" ></td>
					 </tr> 
					 <tr align="center" > 
						 <td colspan=4 style="border-bottom: 2px #000000 solid;"> 
							 <canvas id="canvas1" width="350" height="400" style="margin-bottom: 20px;"></canvas> 
						 </td> 
						 <td colspan=3 style="border-bottom: 2px #000000 solid;"></td> 
					 </tr> 
					
				</table>
				
	<footer>
		<table border="0" width="100%" style="border-collapse: collapse;">
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
		<p align="center"><a href="Ec_pdf.php">save</a></button></p>	
		<p align="center"><button><a href="/Signature/nouvelle_prise_de_cote.php?technicien=<?php echo $_GET['technicien'] ?>&numero=<?php echo $_GET['numero'] ?>&date=<?php echo $_GET['date'] ?>&Nchantier=<?php echo $_GET['Nchantier'] ?>&client=<?php echo $_GET['client'] ?>&adresse=<?php echo $_GET['adresse'] ?>&tel=<?php echo $_GET['tel'] ?>&commercial=<?php echo $_GET['commercial'] ?>&Nbrsmenuiserie=<?php echo $_GET['Nbrsmenuiserie'] ?>&ral=<?php echo $_GET['ral'] ?>">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>
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