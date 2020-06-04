<!DOCTYPE html>
	<html>

		<head>
			<title>Coulissant 2 Vtx</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="style.css">
			<style media="print" type="text/css">
            .noImpr {
                display:none;
            }
       		 </style>
		</head>

    <body style="font-family: Calibri;">
        <form method="POST">
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
						<h1>Coulissant 2Vtx</h1>
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

				<div>
					<table width="100%" border="0" style="border-collapse: collapse ">
						<tr>
							<td align="center" colspan=3>
								<input type="checkbox" id="fenetre" name="fenetre" style="width: 20px; height: 20px"> <label for="fenetre" style="font-size: 25px"><b>Fenêtre</b></label>
							</td>
							<td align="center" colspan=3>
								<label for="porte" style="font-size: 25px"><b>Porte</b></label> <input type="checkbox" id="porte" name="porte" style="width: 20px; height: 20px; margin-left: 10px">
							</td>
						</tr>
						<tr height="30px">
							<td width="5%"></td>
							<td width="16%" style="border: 1px #CCCCCC solid; background-color: #D9D9D9;">
								<center><b><i>Couvre Joint</i></b></center>
							</td>
							<td width="10%" style="border-right: 2px #000000 solid;">
								
							</td>
							
							<td width="10%"></td>
							<td width="23%" style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<center><b><i>Rail Bas</i></b></center>
							</td>
							<td width="5%"></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td>
								<div style="float: left;">
									<input type="checkbox" id="27mm" name="27mm" style="width: 17px; height: 17px;"><label for="27mm">27 mm</label>
								</div>
								<div style="float: right;">
									<input type="checkbox" id="droit" name="droit" style="width: 17px; height: 17px"><label for="droit">Droit</label>
								</div>
							</td>
							<td  style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td>
								<input type="checkbox" id="RE" name="RE" style="width: 17px; height: 17px"> <label>Rail Encastré (Découpe croisement)</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td>
								<input type="checkbox" id="50mm" name="50mm" style="width: 17px; height: 17px"> <label>50 mm</label>
							</td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td>
								<input type="checkbox" id="RPMR" name="RPMR" style="width: 17px; height: 17px"><label>Rail P M R</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td>
								<input type="checkbox" id="SsCJ" name="SsCJ" style="width: 17px; height: 17px"> <label>Sans Couvre Joint</label>
							</td>
							<td  style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td>
								<input type="checkbox" id="Carrelage" name="Carrelage" style="width: 17px; height: 17px"><label>Sur Carrelage</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<input type="checkbox" style="width: 17px; height: 17px"><label>PAS D'EVACUATION CHAMBRE BASSE</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9;">
								<center><b><i>Position C.J</i></b></center>
							</td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<center><b><i>Traverse</i></b></center>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td align="center" style="border-right: 2px #000000 solid;">
								
							</td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="100px">
							<td></td>
							<td>
								<div class="boutonhaut">
									<input type="checkbox" name="cotehaut" style="width: 17px; height: 17px">
								</div>
								<div class="boutongauche">
									<input type="checkbox" name="cotegauche" style="width: 17px; height: 17px;">
								</div>
								<div class="canvas">
									<canvas id="canvas1"></canvas>
								</div>
								<div class="boutondroit">
									<input type="checkbox" name="cotedroit" style="width: 17px; height: 17px;">
								</div> <br> <br> <br> <br> <br> <br>
								<div class="boutonbas">
									<input type="checkbox" name="cotebas" style="width: 17px; height: 17px">
								</div>
							</td>
							<td align="left" style="border-right: 2px #000000 solid;">
								<div align="center">
									<input type="checkbox" id="INT" name="INT" style="width: 17px; height: 17px; margin-bottom: 10px;"><label>INT</label> <br>
								</div>
								
								<div align="center">
									<input type="checkbox" id="EXT" name="EXT" style="width: 17px; height: 17px"><label>EXT</label>
								</div>
							</td>
							
							<td style="text-align: center;">
								
							</td>
							<td style="text-align: center;">
								<input type="checkbox" id="Qté1" name="Qté1" style="width: 17px; height: 17px"><label style="margin-right: 5px;">Qté: 1</label>
									Axe:<input type="axe1" name="axe1" style="margin-top: 5px; margin-bottom: 5px"> <br>
								<input type="checkbox" id="Qté2" name="Qté2" style="width: 17px; height: 17px"><label style="margin-right: 5px;">Qté: 2</label>
									Axe:<input type="axe2" name="axe2" style="margin-bottom: 5px"> <br>
								<input type="checkbox" id="Qté3" name="Qté3" style="width: 17px; height: 17px"><label style="margin-right: 5px;">Qté: 3</label>
									Axe:<input type="axe3" name="axe3" style="margin-bottom: 5px"> <br>
								<input type="checkbox" id="Qté4" name="Qté4" style="width: 17px; height: 17px"><label style="margin-right: 5px;">Qté: 4</label>
									Axe:<input type="axe4" name="axe4" style="margin-bottom: 5px">
							</td>
							<td></td>				
						</tr>
						<tr height="30px">
							<td></td>
							<td align="center">
								Observations: <textarea style="width: 170px; height: 40px; margin-bottom: 5px;"></textarea> 
							</td>
							<td  style="border-right: 2px #000000 solid;">
								
							</td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9;">
								<center><b><i>Bavette</i></b></center>
							</td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<center><b><i>Remplissage</i></b></center>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td style="text-align: center;">
								<input type="checkbox" id="30mm" name="30mm" style="width: 17px; height: 17px"><label>30 mm</label>
							</td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td align="center">
								<input type="number">
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td style="text-align: center;">
								<input type="checkbox" id="70mm" name="70mm" style="width: 17px; height: 17px"><label>70 mm</label>
							</td>
							<td style=" border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9;">
								<center><b><i>Sens Ouverture</i></b> Vue int</center>
							</td>
							<td style="border-right: 2px #000000 solid;">
								
							</td>
							
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<center><b><i>Remplissage Bas</i></b></center>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td align="right">
								<input type="checkbox" name="OuvrantDroit" style="width: 17px; height: 17px;">
							</td>
							<td></td>
							<td align="center" style="border-right: 2px #000000 solid;">
								Ouvrant Droit
							</td>
							
							<td></td>
							<td align="center">
								<input type="number">
							</td>
							<td></td>
							
						</tr>
						<tr height="5px">
							<td></td>
							<td style="border-top: 2px #000000 solid;"></td>
							<td style="border-bottom: 4px #000000 solid; border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td style="border-right: 2px #000000 solid;"></td>
						
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="5px">
							<td></td>
							<td style="border-bottom: 4px #000000 solid;"></td>
							<td style="border-top: 2px #000000 solid; border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td align="right">
								<input type="checkbox" name="OuvrantGauche" style="width: 17px; height: 17px;">
							</td>
							<td></td>
							<td align="center" style="border-right: 2px #000000 solid;">
								Ouvrant Gauche
							</td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<center><b><i>Hauteur Manoeuvre</i></b></center>
							</td>
							
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9;" colspan="2">
								<center><i><b><i>Serrure</b> (avec clés)</i></center>
							</td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<center><b><i>Fermeture</i></b></center>
							</td>
							<td></td>
							
						</tr>
						
						<tr height="30px">
							<td></td>
							<td align="center">
								<input type="checkbox" id="HtAllege" style="width: 17px; height: 17px"><label for="HtAllege">Ht Allège: </label><input type="number">
							</td>
							
							<td colspan="2" align="center">
								<input type="checkbox" id="Droite" style="width: 17px; height: 17px"><label for="Droite">Droite (Vue Ext)</label> 
							</td>
							<td align="left">
								<input type="checkbox" id="Simple" style="width: 17px; height: 17px"><label for="Simple">Simple</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td align="center">
								<input type="checkbox" id="HtStandard" style="width: 17px; height: 17px"><label for="HtStandard">Ht Standard (Fc 350 - Pc 1020)</label> 
							</td>
							
							<td colspan="2" align="center">
								<input type="checkbox" id="Gauche" style="width: 17px; height: 17px"><label for="Gauche">Gauche (Vue Ext)</label> 
							</td>
							<td align="left">
								<input type="checkbox" id="tringlerie2pts" style="width: 17px; height: 17px"><label for="tringlerie2pts">Tringlerie 2 Pts</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td align="center">
								<input type="checkbox" id="AutreHt" style="width: 17px; height: 17px"><label>Autre Ht: </label><input type="number">
							</t>
							<td></td>
							
							<td></td>
							<td align="left">
								<input type="checkbox" id="tringlerie3pts" style="width: 17px; height: 17px"><label>Tringlerie 3 Pts</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td></td>
							
							<td></td>
							<td align="left">
								<input type="checkbox" id="Fastlock" style="width: 17px; height: 17px"><label>Fast Lock (Crémone)</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td></td>
							
							<td></td>
							<td align="left">
								<input type="checkbox" id="FastBlock" style="width: 17px; height: 17px"><label>Fast BLock + Lock</label>
							</td>
							<td></td>
						</tr>
					</table>
					<footer>
		        		<table border="0" width="100%" style="border-collapse: collapse;">
		            		<tr align="center">
		               			<td style="border-top: 2px #000000 solid;"></td>
		                		<td style="border-top: 2px #000000 solid;" >
		                    		<p>
		                    			<label>Hauteur Point de Niveau / Linteau : </label><input type="number">&nbsp; 
		                    		</p>
		                		</td>
				                <td style="border-top: 2px #000000 solid;"></td>
				                <td style="border-top: 2px #000000 solid;"></td>
				                <td style="border-top: 2px #000000 solid;">
					                <p>
					                	<label>Hauteur Point de Niveau / Sol Fini : </label><input type="number">&nbsp;
					                </p>
				                </td>
		                		<td style="border-top: 2px #000000 solid;"></td>
		            		</tr>
				            <tr>
				                <td align="right">
				                    <span>&#8593;<br /><input type="number" style="width:30px;  margin-bottom:10px; margin-top: 10px"> Cm <br />&#8595;</span>
				                </td>
				                <td>
				                    <div class="rectangle" align="center">
				                        <p style="font-size:24px;"><b>Cote Béton</b></p>
				                    </div>
				                    <p style="margin-left:80px">
				                    	&#8592; <input type="number" style="width:30px; margin-bottom:5px; margin-left:15px; margin-right:15px"> Cm &#8594;
				                    </p>
				                </td>   
				                <td colspan=3>
				                    <label><b>Observations: <textarea name="observations" rows=4 cols=40></textarea></b></label>
				                </td>
				            </tr>
				        </table>
		    		</footer>
		    	<div class="noImpr">
			        <p align="center"><input type="submit" value="Enregistrer" nClick="window.print()"></p>   
			        <p align="center"><button><a href="file:///C:/Prise%20de%20cote/Home.html">Nouvelle Prise de Cote</a></button></p>
			    </div>
				</div>
			</form>
			<script>
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(85, 0);
				htx.lineTo(85, 100);
				htx.stroke();
			</script> 
			
		</body>

	</html>