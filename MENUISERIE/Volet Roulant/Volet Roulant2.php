<!DOCTYPE html>
<html>

	<head>
		<title>Volet Roulant</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" href="style.css">
		<style media="print" type="text/css"> 
			.noImpr {
				display:none;
			} 
		</style>
	</head>
	
	<body>
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
                        <h1>Volet Roulant</h1>
                    </td>
                </tr>
                <tr >
                    <td>
                    </td>
                    <td>
                        <div class="rectangle2" >
                            <label><i><b>Rep<br /></b></i><input type="text" name="qte"></label>
                        </div>
                    </td>
                    <td>
                        <div class="rectangle2" >
                            <label><i><b>Qté<br /></b></i><input type="text" name="lg"></label>
                        </div>
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
		
			<table width="100%" border="0" style="border-collapse: collapse">
					<tr align="center" style="height:50px">
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Pose en Tableau </i></b></span></div>
						</td>

						<td colspan=3 style="border-left: 2px #000000 solid;">
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Pose en Applique </i></b></span></div>
						</td>
					</tr>
					<tr height="25px">
						<td>
							<div class="rectangle2" >
								<label><i><b>Lg<br /></b></i><input type="text" name="lg"></label>
							</div>                    
						</td>
						<td></td>
						<td>
							<div class="rectangle2" >
								<label><i><b>Ht<br /></b></i><input type="text" name="lg"></label>
							</div>                   
						</td>
						<td style="border-left: 2px #000000 solid;">
							<div class="rectangle2" >
								<label><i><b>Lg<br /></b></i><input type="text" name="lg"></label>
							</div>
						</td>
						<td></td>
						<td> 
							<div class="rectangle2" >
								<label><i><b>Ht<br /></b></i><input type="text" name="lg"></label>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan=3></td>
						<td align="center" style="border-left: 2px #000000 solid;">
							<input type="checkbox" style="width:17px; height:17px" id="int"><label for="int"> Applique Int</label>
						</td>
						<td></td>
						<td align="center">
							<input type="checkbox" style="width:17px; height:17px" id="ext"><label for="ext"> Applique Ext</label>						
						</td>
					</tr>
					<tr>
						<td colspan=3></td>
						<td colspan=3 style="border-left: 2px #000000 solid;" align="center">
								<input type="checkbox" style="width:17px; height:17px" id="coulisse"><label for="coulisse"> Coulisse Basse</label>
						</td>
					</tr>
					<tr>
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Coffre </i></b></span></div>
							<p><input type="checkbox" name="divun"style="width: 17px; height:17px; margin-left:200px" id="205/90"><label for="205/90"> 205/90</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="250/90"><label for="250/90"> 250/90</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="250/45"><label for="250/45"> 250/45</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="300/45"><label for="300/45"> 300/45</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="V R J"><label for="V R J"> V R J</label></p>
						</td>

						<td colspan=3 style="border-left: 2px #000000 solid;">
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Coffre </i></b></span></div>
							<p><input type="checkbox" name="c1" value="ok" style="width: 17px; height:17px; margin-left:200px" id="205/90"><label for="205/90"> 205/90</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="250/90"><label for="250/90"> 250/90</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="250/45"><label for="250/45"> 250/45</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="300/45"><label for="300/45"> 300/45</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="V R J"><label for="V R J"> V R J</label></p>						
						</td>
					</tr>
					<tr >
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Lame </i></b></span></div>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="60mm"><label for="60mm"> Lame 60 mm</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="77mm"><label for="77mm"> Lame 77 mm</label></p>
						</td>

						<td colspan=3 style="border-left: 2px #000000 solid;">
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Lame </i></b></span></div>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="60mm"><label for="60mm"> Lame 60 mm</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="77mm"><label for="77mm"> Lame 77 mm</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Commande et Position </i></b></span></div>
						</td>
						<td colspan=3 style="border-left: 2px #000000 solid;">
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Commande et Position </i></b></span></div>
						</td>
					</tr>
					<tr>
						<td>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:100px" id="moteur gauche"><label for="moteur gauche"> Moteur Gauche</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left: 100px" id="manivelle gauche"><label for="manivelle gauche"> Manivelle Gauche</label></p>
						</td>
						<td></td>
						<td>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:100px" id="moteur droite"><label for="moteur droite"> Moteur Droite</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left: 100px" id="manivelle droite"><label for="manivelle droite"> Manivelle Droite</label></p>						
						</td>
						<td style="border-left: 2px #000000 solid;">
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:100px" id="moteur gauche"><label for="moteur gauche"> Moteur Gauche</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left: 100px" id="manivelle gauche"><label for="manivelle gauche"> Manivelle Gauche</label></p>
						</td>
						<td></td>
						<td>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:100px" id="moteur droite"><label for="moteur droite"> Moteur Droite</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left: 100px" id="manivelle droite"><label for="manivelle droite"> Manivelle Droite</label></p>						
						</td>
					</tr>
					<tr>
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Divers </i></b></span></div>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="2coulisses"><label for="2coulisses"> 2 Coulisses en L</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="1coulisse"><label for="1coulisse"> 1 Coulisse en L</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="raidisseur"><label for="raidisseur"> Raidisseur</label></p>
						</td>

						<td colspan=3 style="border-left: 2px #000000 solid;">
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Divers </i></b></span></div>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="2coulisses"><label for="2coulisses"> 2 Coulisses en L</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="1coulisse"><label for="1coulisse"> 1 Coulisse en L</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="raidisseur"><label for="raidisseur"> Raidisseur</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Options </i></b></span></div>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="saillie"><label for="saillie"> Boitier à clé saillie</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="encastré"><label for="encastré"> Boitier à clé Encastré</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="telecommande"><label for="telecommande"> Télécommande</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="sans sci"><label for="sans sci"> Sans SCI</label></p>
						</td>

						<td colspan=3 style="border-left: 2px #000000 solid;">
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Options </i></b></span></div>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="saillie"><label for="saillie"> Boitier à clé saillie</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="encastré"><label for="encastré"> Boitier à clé Encastré</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="telecommande"><label for="telecommande"> Télécommande</label></p>
							<p><input type="checkbox" style="width: 17px; height:17px; margin-left:200px" id="sans sci"><label for="sans sci"> Sans SCI</label></p>
						</td>
					</tr>
					
	<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top:350px;">
			<tr align="center" style="border-top: 2px #000000 solid;">
				<td style="border-top: 2px #000000 solid;">
					<p><label>Hauteur Point de Niveau / Linteau :</label><input type="number">&nbsp; </p>
				</td style="border-top: 2px #000000 solid;">
				<td></td>
				<td colspan=3 style="border-top: 2px #000000 solid;">						
					<p><label>Hauteur Point de Niveau / Sol Fini :</label><input type="number">&nbsp; </p>
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
		<p align="center"><a href="VR_pdf.php">save</a></button></p>
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
				
				