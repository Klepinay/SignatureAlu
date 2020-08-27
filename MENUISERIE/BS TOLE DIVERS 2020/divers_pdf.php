<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
function recup(/*$client,$ral,$Date,$tec*/)
{
	$this->SetDrawColor(115,115,115);
	$this->SetFillColor(255,255,255);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);

	//client
	$this->SetXY(15,20);
	$this->Cell(40,12,'Client',1,1,'C');
	/*$this->SetXY(20,60);
	$this->Cell(8,3.5,$client,1,1,'C');*/
	//ral
	$this->SetXY(60,20);
	$this->Cell(40,12,'Ral',1,1,'C');
	/*$this->SetXY(20,60);
	$this->Cell(8,3.5,$ral,1,1,'C');*/
	//date
	$this->SetXY(105,20);
	$this->Cell(40,12,'Date',1,1,'C');
	/*$this->SetXY(20,60);
	$this->Cell(8,3.5,$Date,1,1,'C');*/
	//tech
	$this->SetXY(150,20);
	$this->Cell(40,12,'Tech',1,1,'C');
	/*$this->SetXY(20,60);
	$this->Cell(8,3.5,$tec,1,1,'C');*/
}
function div(/*$reep,$qtee,$lge,$hte*/)
{

	$this->SetDrawColor(0,0,0);
	$this->SetFillColor(206,206,206);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);

	//Rectangle gris
	#1
	$this->SetXY(15,45);
	$this->Cell(40,10,'',0,1,'C',true);
	#2
	$this->SetXY(60,45);
	$this->Cell(40,10,'',0,1,'C',true);
	#3
	$this->SetXY(105,45);
	$this->Cell(40,10,'',0,1,'C',true);
	#4
	$this->SetXY(150,45);
	$this->Cell(40,10,'',0,1,'C',true);

	//mot
	#Divers
	$this->SetFont('Arial','',18);
	$this->SetXY(82,34);
	$this->Cell(40,10,'Divers',0,1,'C');
	#1
	$this->SetFont('Arial','',8);
	$this->SetXY(15,42);
	$this->Cell(40,10,'Rep',0,1,'C');
	#2
	$this->SetXY(60,42);
	$this->Cell(40,10,'Qte',0,1,'C');
	#3
	$this->SetXY(105,42);
	$this->Cell(40,10,'Lg',0,1,'C');
	#4
	$this->SetXY(150,42);
	$this->Cell(40,10,'Ht',0,1,'C');
	
	/*$this->SetFillColor(255,255,255);
	//rep
	$this->SetXY(20,60);
	$this->Cell(8,3.5,$reep,1,1,'C');
	//qte
	$this->SetXY(65,60);
	$this->Cell(8,3.5,$qtee,1,1,'C');
	//lg
	$this->SetXY(115,60);
	$this->Cell(8,3.5,$lge,1,1,'C');
	//ht
	$this->SetXY(165,60);
	$this->Cell(8,3.5,$hte,1,1,'C');*/

	//Dessin
	$this->SetDrawColor(0,0,0);
	$this->SetXY(38,58);
	$this->Cell(130,140,'',1,1,'C');
}
function bas()
{
	//Ligne horizontal
	/*$this->SetDrawColor(115,115,115);
	$this->SetFillColor(206,206,206);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetXY(40,58);
	$this->Cell(126,126,'',1,1,'C')*/
	//
	$this->SetDrawColor(0,0,0);
	$this->SetFillColor(206,206,206);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',6);

	//Linteau
	$this->SetDrawColor(115,115,115);
	$this->SetXY(40,222);
	$this->Cell(35,3.5,'Hauteur Point de Niveau/Linteau',1,1,'L');
	$this->SetXY(80,222);
	$this->Cell(25,3.5,'',1,1,'C');

	//Sol
	$this->SetXY(120,222);
	$this->Cell(35,3.5,'Hauteur Point de Niveau/Sol Fini',1,1,'L');
	$this->SetXY(160,222);
	$this->Cell(25,3.5,'',1,1,'C');

	//observation
	$this->SetDrawColor(115,115,115);
	$this->SetXY(110,238);
	$this->Cell(15,3.5,'Observation',1,1,'L');
	$this->SetXY(130,232);
	$this->Cell(50,10,'',1,1,'L');

	//Cote beton
	$this->SetDrawColor(0,0,0);
	$this->SetXY(35,230);
	$this->Cell(35,10,'Cote Beton',1,1,'C');
	/*$this->SetXY(40,58);
	$this->Cell(126,126,'',1,1,'C');*/
	//cm hauteur
	$this->SetDrawColor(115,115,115);
	$this->SetXY(60,242);
	$this->Cell(5,3.5,'Cm',1,1,'C');
	$this->SetXY(50,242);
	$this->Cell(8,3.5,'',1,1,'C');
	//cm largeur
	$this->SetXY(29,235);
	$this->Cell(5,3.5,'Cm',1,1,'C');
	$this->SetXY(19,235);
	$this->Cell(8,3.5,'',1,1,'C');
}






	
}

$pdf = new PDF();
$pdf->AddPage();
/*$reep=$_POST['rep'];
$qtee=$_POST['rep1'];
$lge=$_POST['rep2'];
$hte=$_POST['rep3'];*/
//Recuperation des donné
/*$Date=$_GET['date'];
//$num=$_GET['numero'];
$client = $_GET['client'];
//$addc=$_POST['adresse'];
//$tel=$_POST['tel'];
//$com=$_GET['commercial'];
$tec=$_GET['technicien'];
//$ndm=$_POST['Nbrsmenuiserie'];
$ral=$_GET['ral'];*/
//Divers


//appel les function

$pdf->recup(/*$client,$ral,$date,$tech*/);
$pdf->div(/*$reep,$qtee,$lge,$hte*/);
$pdf->bas();

//telechargement du pdf

$pdf->output();



?>