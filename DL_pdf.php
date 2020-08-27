<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
function Depose()
{
	
	$this->SetTextColor(0,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetFont('Arial','',6);
	$this->SetXY(22,60);
	$this->Cell(80,20,'',1,1,'C');
	$this->SetLineWidth(1);
}
function Depose_l($TEXT)
{
	
	$this->SetTextColor(0,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetFont('Arial','',6);
	$this->SetXY(22,60);
	$this->Cell(80,10,$TEXT,0,1,'C');
	$this->SetLineWidth(1);
}
function Depose2($TEXT2)
{
	
	$this->SetTextColor(0,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetFont('Arial','',6);
	$this->SetXY(22,60);
	$this->Cell(80,15,$TEXT2,0,0,'C');
	$this->SetLineWidth(1);
}

function Depose3($TEXT3)
{
	
	$this->SetTextColor(0,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetFont('Arial','',6);
	$this->SetXY(22,60);
	$this->Cell(80,20,$TEXT3,0,0,'C');
	$this->SetLineWidth(1);
}
function Depose4($TEXT4)
{
	
	$this->SetTextColor(0,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetFont('Arial','',6);
	$this->SetXY(22,60);
	$this->Cell(80,25,$TEXT4,0,0,'C');
	$this->SetLineWidth(1);
}
function Depose5($TEXT5)
{
	
	$this->SetTextColor(0,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetFont('Arial','',6);
	$this->SetXY(22,60);
	$this->Cell(80,30,$TEXT5,0,0,'C');
	$this->SetLineWidth(1);
}
function FC()
{
	
	$this->SetTextColor(255,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',6);
	$this->SetXY(105,25);
	$this->Cell(93,60,'',1,0,'C');
	
}
function RD()
{
	
	$this->SetTextColor(255,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',13);
	$this->SetXY(26,95);
	$this->Cell(172.1,90,'',1,0,'C');
	$this->SetXY(35,125);
	$this->Cell(35,20,'',1,0,'C');
	$this->SetXY(75,125);
	$this->Cell(60,23,'',1,0,'C');
	$this->SetXY(137,125);
	$this->Cell(60,23,'',1,0,'C');
	$this->SetXY(47,155);
	$this->Cell(35,25,'',1,0,'T');
	$this->SetXY(110,155);
	$this->Cell(60,23,'',1,0,'C');
	
}
function ARPLC()
{
	
	$this->SetTextColor(255,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',6);
	$this->SetXY(26,187);
	$this->Cell(172.1,55,'',1,0,'C');
	
}
function SIGN()
{
	
	$this->SetTextColor(255,0,0);
	$this->SetFillColor(255,220,255);
	$this->SetDrawColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',6);
	$this->SetXY(26,245);
	$this->Cell(50,25,'',1,0,'C');
	$this->SetXY(148.3,245);
	$this->Cell(50,25,'',1,0,'C');

	
}
function FC1($TITRE)
{
	
	$this->SetDrawColor(220,50,50);
	$this->SetFillColor(255,50,50);
	$this->SetTextColor(255,255,255);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',13);
	$this->SetXY(115,30);
	$this->Cell(70,5,$TITRE,1,1,'C',true);
	
}
function RD1($TITRE1,$E,$EI,$EE,$D,$ET)
{
	
	$this->SetDrawColor(220,50,50);
	$this->SetFillColor(255,50,50);
	$this->SetTextColor(255,255,255);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',10);
	$this->SetXY(90,98);
	$this->Cell(47,4,$TITRE1,1,1,'C',true);
	$this->SetXY(41,127);
	$this->Cell(22,3,$E,1,1,'C',true);
	$this->SetXY(85,127);
	$this->Cell(40,3,$EI,1,1,'C',true);
	$this->SetXY(147,127);
	$this->Cell(40,3,$EE,1,1,'C',true);
	$this->SetXY(49,157);
	$this->Cell(30,3,$D,1,1,'C',true);
	$this->SetXY(115,157);
	$this->Cell(50,4,$ET,1,1,'C',true);
	
}
function ARPLC1($TITRE2)
{
	
	$this->SetDrawColor(220,50,50);
	$this->SetFillColor(255,50,50);
	$this->SetTextColor(255,255,255);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',10);
	$this->SetXY(90,189);
	$this->Cell(45,4,$TITRE2,1,1,'C',true);
}
function SIGN1($SC,$ST)
{
	
	$this->SetDrawColor(220,50,50);
	$this->SetFillColor(220,50,50);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);
	$this->SetXY(28,247);
	$this->Cell(45,4,$SC,0,1,'C');
	$this->SetXY(151,247);
	$this->Cell(45,4,$ST,0,1,'C');
}
//Pied de Page
function Footer()
{
	// Positionnement à 1,5 cm du bas
	$this->SetY(-15);
	// Arial italique 8
	$this->SetFont('Arial','I',8);
	// Couleur du texte en gris
	$this->SetTextColor(128);
	// Numéro de page
	$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function FC2($Date,$num,$client,$addc,$tel,$com,$tec,$ndm,$ral)
{
	
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);
	//Date
	$this->SetXY(115,40);
	$this->Cell(20,3,$Date,0,1,'C');
	$this->SetXY(104,40);
	$this->Cell(20,3,'Date : ',0,1,'C');
	//N°
	$this->SetXY(160,38);
	$this->Cell(35,3.5,$num,1,1,'L',true);
	$this->SetXY(154,38);
	$this->Cell(35,3.5,'N°:',0,1,'L');
	//Client
	$this->SetXY(120,50);
	$this->Cell(30,3.5,$client,1,1,'L',true);
	$this->SetXY(109,50);
	$this->Cell(35,3.5,'Client : ',0,1,'L');
	//chantier
	$this->SetXY(160,45);
	$this->Cell(35,3.5,$num,1,1,'L',true);
	$this->SetXY(139,45);
	$this->Cell(35,3.5,'N° de chantier:',0,1,'L');
	//addresse
	$this->SetXY(132,57);
	$this->Cell(50,5,$addc,1,1,'L',true);
	$this->SetXY(105,57);
	$this->Cell(35,3.5,'Adresse du chantier:',0,1,'L');
	//telephone
	$this->SetXY(115,65);
	$this->Cell(30,3.5,$tel,1,1,'L',true);
	$this->SetXY(105,65);
	$this->Cell(35,3.5,'Tel : ',0,1,'L');
	//commercial
	$this->SetXY(123,70);
	$this->Cell(28,3.5,$com,1,1,'L',true);
	$this->SetXY(105,70);
	$this->Cell(35,3.5,'Commercial : ',0,1,'L');
	//technicien
	$this->SetXY(170,70);
	$this->Cell(27,3.5,$tec,1,1,'L',true);
	$this->SetXY(152.5,70);
	$this->Cell(35,3.5,'Technicien : ',0,1,'L');
	//nb menuiserie
	$this->SetXY(135,75);
	$this->Cell(15,3.5,$ndm,1,1,'C',true);
	$this->SetXY(105,75);
	$this->Cell(15,3.5,'Nbrs de Menuiserie : ',0,1,'L');
	//ral
	$this->SetXY(175,75);
	$this->Cell(20,3.5,$ral,1,1,'L',true);
	$this->SetXY(165,75);
	$this->Cell(35,3.5,'R.A.L : ',0,1,'L');
}
function RD2_0($TNL_1,$TNL_2,$TNL_3,$TNSF_1,$TNSF_2,$TNSF_3)
{
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);
	//Linteau
	$this->SetXY(35,105);
	$this->Cell(35,3.5,'Trait de niveau-Linteau : ',0,1,'L');
	$this->SetXY(70,105);
	$this->Cell(30,3.5,$TNL_1,1,1,'L');
	$this->SetXY(105,105);
	$this->Cell(30,3.5,$TNL_2,1,1,'L');
	$this->SetXY(140,105);
	$this->Cell(30,3.5,$TNL_3,1,1,'L');
	//Sol.
	$this->SetXY(35,110);
	$this->Cell(35,3.5,'Trait de niveau-Sol Fini : ',0,1,'L');
	$this->SetXY(70,110);
	$this->Cell(30,3.5,$TNSF_1,1,1,'L');
	$this->SetXY(105,110);
	$this->Cell(30,3.5,$TNSF_2,1,1,'L');
	$this->SetXY(140,110);
	$this->Cell(30,3.5,$TNSF_3,1,1,'L');

}
function RD2($ELEC)
{
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);
	$this->SetXY(41,135);
	$this->Cell(20,3.5,$ELEC,1,1,'C');
}
function RD2_1($ENI_1,$ENI_2)
{
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);
		//Trad/Platre
	$this->SetXY(95,135);
	$this->Cell(35,3.5,$ENI_1,1,1,'C');
	$this->SetXY(75,135);
	$this->Cell(35,3.5,'Trad/¨Platre',0,1,'L');
		//Placo
	$this->SetXY(95,140);
	$this->Cell(35,3.5,$ENI_2,1,1,'C');
	$this->SetXY(75,140);
	$this->Cell(35,3.5,'Placo',0,1,'L');
}
function RD2_2($ENE_1,$ENE_2)
{
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);
		//Trad/Proj
	$this->SetXY(140,135);
	$this->Cell(35,3.5,'Trad/¨Proj',0,1,'L');
	$this->SetXY(160,135);
	$this->Cell(35,3.5,$ENE_1,1,1,'C');
		//Bradage
	$this->SetXY(140,140);
	$this->Cell(35,3.5,'Bradage',0,1,'L');
	$this->SetXY(160,140);
	$this->Cell(35,3.5,$ENE_2,1,1,'C');
}
function RD2_3($D_1,$D_2)
{
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);
		//Client
	$this->SetXY(52,163);
	$this->Cell(25,3.5,$D_1,1,1,'C');
	$this->SetXY(52,170);
	$this->Cell(25,3.5,$D_2,1,1,'C');
	
	
}
function RD2_4($EET_1)
{
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);
	$this->SetXY(122,166);
	$this->Cell(35,3.5,$EET_1,1,1,'C');
}
function ARPLC1_1($ARP_1,$ARP_2,$ARP_3,$ARP_4,$ARP_5,$ARP_6,$PE,$ARP_7,$ARP_8,$ARP_9,$ARP_10,$ARP_11)
{
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',7);
	//#1
	$this->SetXY(185,199);
	$this->Cell(8,3.5,$ARP_1,1,1,'C');
	#2
	$this->SetXY(185,204);
	$this->Cell(8,3.5,$ARP_2,1,1,'C');
	//#3
	$this->SetXY(185,209);
	$this->Cell(8,3.5,$ARP_1,1,1,'C');
	//#4
	$this->SetXY(185,214);
	$this->Cell(8,3.5,$ARP_4,1,1,'C');
	//#5
	$this->SetXY(185,219);
	$this->Cell(8,3.5,$ARP_5,1,1,'C');
	$this->Ln(2);
	#6
	$this->SetXY(30,224);
	$this->Cell(10,3.5,$ARP_6,0,1,'L');
	$this->Ln(2);
	#7
	$this->SetXY(30,219);
	$this->Cell(10,3.5,$ARP_11,0,1,'L');
	$this->Ln(2);
	#8
	$this->SetXY(30,214);
	$this->Cell(10,3.5,$ARP_10,0,1,'L');
	#9
	$this->SetXY(30,209);
	$this->Cell(10,3.5,$ARP_9,0,1,'L');
	#10
	$this->SetXY(30,204);
	$this->Cell(10,3.5,$ARP_8,0,1,'L');
	#11
	$this->SetXY(30,199);
	$this->Cell(10,3.5,$ARP_7,0,1,'L');
	//Virement bancaire
	$this->SetXY(92,235);
	$this->Cell(42,3.5,$PE,1,1,'C');
}


}

$pdf = new PDF();
$pdf->AddPage();

//Recuperation des info pour fiche chantier
$Date=$_GET['date'];
$num=$_GET['numero'];
$client = $_GET['client'];
$addc=$_POST['adresse'];
$tel=$_POST['tel'];
$com=$_GET['commercial'];
$tec=$_GET['technicien'];
$ndm=$_POST['Nbrsmenuiserie'];
$ral=$_GET['ral'];

//Renseignement divers
$TNL_1=$_POST['linteau'];
$TNL_2=$_POST['linteau2'];
$TNL_3=$_POST['linteau3'];
$TNSF_1=$_POST['sol'];
$TNSF_2=$_POST['sol2'];
$TNSF_3=$_POST['sol3'];

//Electricité
$ELEC=$_POST['elec'];

//ENDUIT INT
$ENI_1=$_POST['platre'];
$ENI_2=$_POST['placo'];

//ENDUIT EXTE
$ENE_1=$_POST['proj'];
$ENE_2=$_POST['bardage'];

//Etancheité
$EET_1=$_POST['etancheite'];

//DEPOSE
$D_1=$_POST['depose'];
$D_2=$_POST['check'];

//A RENSEIGNER PAR LE CLIENT

$ARP_1=$_POST['info1'];
$ARP_2=$_POST['info2'];
$ARP_3=$_POST['info3'];
$ARP_4=$_POST['info4'];
$ARP_5=$_POST['info5'];
$ARP_6 ='Le solde du chantier vous seras demandé à la réception avec le poseur. Merci de préciser le moyent de paiement';
$ARP_7='Presence imperative du trait de niveau fourni par le Gros Oeuvre, ainsi que le renseignement pour la hauteur sol fini.......................................';
$ARP_8='Etancheite des tableaux effectuer imperativement avant la pose des menuiseries...............................................................................................';
$ARP_9='Suite à la prise de mesure aucune modification (changement sens d\'ouvertures, trait de niveau, dimensions...) ne pourra être effectue...........';
$ARP_10='Au-delà d\'un delai de un mois apres la date previsionnelle de pose, le client s\'engage à regler le solde de la fourniture (Hors Pose)................';
$ARP_11='Le client doit être présent lors de la recepetion de pose des menuiseries.............................................................................................................';
$PE=$_POST['paye'];

//ADD_ENTREPRISE
$TEXT = '115 Allée de Montaignac';
$TEXT2 ='97427 L\'Etang-Salé' . "\n";
$TEXT3 = 'Tél : 0262 423924';
$TEXT4='Email : contact@signature-alu.com';
$TEXT5='siret: 828 716 027 00010-APE 2512 B';
//
$TITRE='Fiche de chantier';
$TITRE1='Renseignement Divers';
$E='Electricité';
$EI='Enduit Intérieur';
$EE='Enduit exterieur';
$D='Dépose';
$ET='Etanchéité(Entoilage) Tableau';
$TITRE2='A Renseigner par le client';
$SC='Signature client';
$ST='Signature Technicien';

//Mise en forme PDF avec appel des function
$pdf->Image('images/LOGO-SIGNATURE-ALU-OK-8X4.png',20,15,80,0);
$pdf->Depose();
$pdf->Depose_l($TEXT);
$pdf->Depose2($TEXT2);
$pdf->Depose3($TEXT3);
$pdf->Depose4($TEXT4);
$pdf->Depose5($TEXT5);
$pdf->FC();
$pdf->RD();
$pdf->ARPLC();
$pdf->SIGN();
$pdf->FC1($TITRE);
$pdf->RD1($TITRE1,$E,$EI,$EE,$D,$ET);
$pdf->ARPLC1($TITRE2);
$pdf->SIGN1($SC,$ST);
$pdf->FC2($Date,$num,$client,$addc,$tel,$com,$tec,$ndm,$ral);
$pdf->RD2($ELEC);
$pdf->RD2_1($ENI_1,$ENI_2);
$pdf->RD2_2($ENE_1,$ENE_2);
$pdf->RD2_3($D_1,$D_2);
$pdf->RD2_4($EET_1);
$pdf->ARPLC1_1($ARP_1,$ARP_2,$ARP_3,$ARP_4,$ARP_5,$ARP_6,$PE,$ARP_7,$ARP_8,$ARP_9,$ARP_10,$ARP_11);
$pdf->RD2_0($TNL_1,$TNL_2,$TNL_3,$TNSF_1,$TNSF_2,$TNSF_3);

//Referencement page suivante
	$numero = $_GET['numero'];
	$technicien = $_GET['technicien'];
	$date = $_GET['date'];
	$nchantier = $_POST['Nchantier'];
	$client = $_GET['client'];
	$adresse = $_POST['adresse'];
	$tel = $_POST['tel'];
	$commercial = $_GET['commercial'];
	$nbrsmenuiserie = $_POST['Nbrsmenuiserie'];
	$ral = $_GET['ral'];
	$url =  "nouvelle_prise_de_cote.php?technicien=$technicien&numero=$numero&date=$date&Nchantier=$nchantier&client=$client&adresse=$adresse&tel=$tel&commercial=$commercial&Nbrsmenuiserie=$nbrsmenuiserie&ral=$ral";
header("Location: $url");

//Telechargement en pdf
$dir="prise de cote/$numero   $client/";
$pdf->Output('F',$dir.' Fiche_de_chantier.pdf');

?>


