<?php
require('../../fpdf/fpdf.php');

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
	$this->SetXY(15,15);
	$this->Cell(40,12,'Client',1,1,'C');
	/*$this->SetXY(20,60);
	$this->Cell(8,3.5,$client,1,1,'C');*/
	//ral
	$this->SetXY(60,15);
	$this->Cell(40,12,'Ral',1,1,'C');
	/*$this->SetXY(20,60);
	$this->Cell(8,3.5,$ral,1,1,'C');*/
	//date
	$this->SetXY(105,15);
	$this->Cell(40,12,'Date',1,1,'C');
	/*$this->SetXY(20,60);
	$this->Cell(8,3.5,$Date,1,1,'C');*/
	//tech
	$this->SetXY(150,15);
	$this->Cell(40,12,'Tech',1,1,'C');
	/*$this->SetXY(20,60);
	$this->Cell(8,3.5,$tec,1,1,'C');*/
}
function jalousie(/*$reep,$qtee,$lge,$hte*/)
{

	$this->SetDrawColor(0,0,0);
	$this->SetFillColor(206,206,206);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);

	//Rectangle gris
	#1
	$this->SetXY(15,40);
	$this->Cell(40,10,'',0,1,'C',true);
	#2
	$this->SetXY(60,40);
	$this->Cell(40,10,'',0,1,'C',true);
	#3
	$this->SetXY(105,40);
	$this->Cell(40,10,'',0,1,'C',true);
	#4
	$this->SetXY(150,40);
	$this->Cell(40,10,'',0,1,'C',true);

	//mot
	#Divers
	$this->SetFont('Arial','',18);
	$this->SetXY(82,29);
	$this->Cell(40,10,'Jalousie',0,1,'C');
	#1
	$this->SetFont('Arial','',8);
	$this->SetXY(15,37);
	$this->Cell(40,10,'Rep',0,1,'C');
	#2
	$this->SetXY(60,37);
	$this->Cell(40,10,'Qte',0,1,'C');
	#3
	$this->SetXY(105,37);
	$this->Cell(40,10,'Lg',0,1,'C');
	#4
	$this->SetXY(150,37);
	$this->Cell(40,10,'Ht',0,1,'C');
}

function cgauche(/*$PDIV*/)
{

	$this->SetDrawColor(0,0,0);
	$this->SetFillColor(206,206,206);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','B',10);

	//nb division
	$this->SetXY(40,60);
	$this->Cell(28,5,'Nbre de Division',0,1,'C',true);
	$this->SetFont('Arial','',8);
	//division
	$this->SetXY(45,70);
	$this->Cell(28,5,'1 Division',0,1,'L');
    /*$this->SetXY(35,70);
    $this->Cell(28,5,'$PDIV',0,1,'L');*/
	#2
	$this->SetXY(45,75);
	$this->Cell(28,5,'2 Division',0,1,'L');
	#3
	$this->SetXY(45,80);
	$this->Cell(28,5,'3 Division',0,1,'L');

	//couvre joint
	$this->SetFont('Arial','B',10);
	$this->SetXY(42,95);
	$this->Cell(25,5,'Couvre Joint',0,1,'C',true);
	//
	$this->SetFont('Arial','',8);
	//27 mm
	$this->SetXY(45,105);
	$this->Cell(28,5,'27 mm',0,1,'L');
	//50 mm
	$this->SetXY(45,110);
	$this->Cell(28,5,'50 mm',0,1,'L');
	//Sans couvre joint
	$this->SetXY(45,115);
	$this->Cell(28,5,'Sans Couvre Joint',0,1,'L');
	//Droit
	$this->SetXY(70,105);
	$this->Cell(28,5,'Droit',0,1,'L');

	//position cj
	$this->SetFont('Arial','B',10);
	$this->SetXY(43,128);
	$this->Cell(22,5,'Position C.J',0,1,'C',true);
	$this->SetFont('Arial','',8);
	//1
    $this->SetXY(45,138);
    $this->Cell(15,2.5,'',1,1,'C');
    //2
    $this->SetXY(45,140.5);
    $this->Cell(15,2.5,'',1,1,'C');
    //3
    $this->SetXY(45,143);
    $this->Cell(15,2.5,'',1,1,'C');
    //4
    $this->SetXY(45,145.5);
    $this->Cell(15,2.5,'',1,1,'C');
    //Case a cochez
    //1
    //2
    //3
    $this->SetXY(80,140);
    $this->Cell(15,2.5,'Int',0,1,'C');
    //4
    $this->SetXY(80,145);
    $this->Cell(15,2.5,'Ext',0,1,'C');

    //int
    //ext
	//bavette
	$this->SetFont('Arial','B',10);
	$this->SetXY(45,160);
	$this->Cell(15,5,'Bavette',0,1,'C',true);
	$this->SetFont('Arial','',8);
    //30 mm
    $this->SetXY(35,168);
    $this->Cell(28,5,'30 mm',0,1,'L');
    //70 mm
    $this->SetXY(60,168);
    $this->Cell(28,5,'70 mm',0,1,'L');


}
function cdroite()
{
	$this->SetDrawColor(0,0,0);
	$this->SetFillColor(206,206,206);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	

	//Titre+fond gris
	$this->SetFont('Arial','B',10);
	$this->SetXY(140,60);
	$this->Cell(28,5,'Cote Manoeuvre',0,1,'C',true);
	$this->SetXY(138,95);
	$this->Cell(30,5,'Mode d\'ouverture',0,1,'C',true);
	$this->SetXY(140,128);
	$this->Cell(22,5,'remplissage',0,1,'C',true);

	//cote manoeuvre
	$this->SetFont('Arial','',8);
	#1
	$this->SetXY(148,70);
	$this->Cell(28,5,'Droite',0,1,'L');
	#2
	$this->SetXY(148,75);
	$this->Cell(28,5,'Milieu',0,1,'L');
	#3
	$this->SetXY(148,80);
	$this->Cell(28,5,'Gauche',0,1,'L');

	//mode ouverture

	//Crémonie
	$this->SetXY(148,105);
	$this->Cell(28,5,'Cremonie',0,1,'L');
	//Treuil Manivelle
	$this->SetXY(148,110);
	$this->Cell(28,5,'Treuil Manivelle',0,1,'L');
	//Moteur
	$this->SetXY(148,115);
	$this->Cell(28,5,'Moteur',0,1,'L');

	//remplissage
	$this->SetDrawColor(115,115,115);
	$this->SetXY(135,145);
	$this->Cell(35,3.5,'',1,1,'L');
	
	$this->SetXY(135,160);
	$this->Cell(35,3.5,'',1,1,'L');

	$this->SetXY(135,170);
	$this->Cell(35,3.5,'',1,1,'L');

	//Ligne vertical
	$this->SetFillColor(0,0,0);
	$this->SetXY(110,55);
	$this->Cell(0.5,120,'',1,1,'L',true);

}
function centre()
{
	$this->SetDrawColor(0,0,0);
	$this->SetFillColor(206,206,206);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);

	//Titre+fond gris
	$this->SetFont('Arial','B',10);
	$this->SetXY(85,180);
	$this->Cell(32,5,'Hauteur Manoeuvre',0,1,'C',true);
	$this->SetXY(85,220);
	$this->Cell(33,5,'Quantitatif de Lame',0,1,'C',true);

    $this->SetFont('Arial','',8);

	//hauteur Manoeuvre
    //1
    $this->SetXY(35,190);
    $this->Cell(5,3.5,'1ere Lame',0,1,'L');
    //2
    $this->SetXY(35,194);
    $this->Cell(5,3.5,'2eme Lame',0,1,'L');
    //3
    $this->SetXY(35,198);
    $this->Cell(5,3.5,'3eme Lame',0,1,'L');
    //4
    $this->SetXY(35,202);
    $this->Cell(5,3.5,'4eme Lame',0,1,'L');
    //5
    $this->SetXY(35,206);
    $this->Cell(5,3.5,'5eme Lame',0,1,'L');
    //6
    $this->SetXY(90,190);
    $this->Cell(5,3.5,'6eme Lame',0,1,'L');
    //7
    $this->SetXY(90,194);
    $this->Cell(5,3.5,'7eme Lame',0,1,'L');
    //8
    $this->SetXY(90,198);
    $this->Cell(5,3.5,'8eme Lame',0,1,'L');
    //9
    $this->SetXY(90,202);
    $this->Cell(5,3.5,'9eme Lame',0,1,'L');
    //10
    $this->SetXY(90,206);
    $this->Cell(5,3.5,'10eme Lame',0,1,'L');
    //11
    $this->SetXY(135,190);
    $this->Cell(5,3.5,'11eme Lame',0,1,'L');
    //12
    $this->SetXY(135,194);
    $this->Cell(5,3.5,'12eme Lame',0,1,'L');
    //13
    $this->SetXY(135,198);
    $this->Cell(5,3.5,'13eme Lame',0,1,'L');
    //14
    $this->SetXY(135,202);
    $this->Cell(5,3.5,'14eme Lame',0,1,'L');
    //15
    $this->SetXY(135,206);
    $this->Cell(5,3.5,'15eme Lame',0,1,'L');


	//Quantitatif de lame

    //Ht&quantie
    //1
    $this->SetXY(30,228);
    $this->Cell(5,3.5,'Ht',1,1,'L');
    $this->SetXY(35,228);
    $this->Cell(7,3.5,'Qte',1,1,'L');
    //2
    $this->SetXY(60,228);
    $this->Cell(5,3.5,'Ht',1,1,'L');
    $this->SetXY(65,228);
    $this->Cell(7,3.5,'Qte',1,1,'L');
    //3
    $this->SetXY(90,228);
    $this->Cell(5,3.5,'Ht',1,1,'L');
    $this->SetXY(95,228);
    $this->Cell(7,3.5,'Qte',1,1,'L');
    //4
    $this->SetXY(120,228);
    $this->Cell(5,3.5,'Ht',1,1,'L');
    $this->SetXY(125,228);
    $this->Cell(7,3.5,'Qte',1,1,'L');
    //5
    $this->SetXY(150,228);
    $this->Cell(5,3.5,'Ht',1,1,'L');
    $this->SetXY(155,228);
    $this->Cell(7,3.5,'Qte',1,1,'L');

    //chiffre
    $this->SetFont('Arial','B',8);
    //1
    $this->SetXY(36,233);
    $this->Cell(7,3.5,'1',0,1,'L');
    //2
    $this->SetXY(36,238);
    $this->Cell(7,3.5,'2',0,1,'L');
    //3
    $this->SetXY(36,243);
    $this->Cell(7,3.5,'3',0,1,'L');
    //4
    $this->SetXY(66,233);
    $this->Cell(7,3.5,'4',0,1,'L');
    //5
    $this->SetXY(66,238);
    $this->Cell(7,3.5,'5',0,1,'L');
    //6
    $this->SetXY(66,243);
    $this->Cell(7,3.5,'6',0,1,'L');
    //7
    $this->SetXY(96,233);
    $this->Cell(7,3.5,'7',0,1,'L');
    //8
    $this->SetXY(96,238);
    $this->Cell(7,3.5,'8',0,1,'L');
    //9
    $this->SetXY(96,243);
    $this->Cell(7,3.5,'9',0,1,'L');
    //10
    $this->SetXY(126,233);
    $this->Cell(7,3.5,'10',0,1,'L');
    //11
    $this->SetXY(126,238);
    $this->Cell(7,3.5,'11',0,1,'L');
    //12
    $this->SetXY(126,243);
    $this->Cell(7,3.5,'12',0,1,'L');
    //13
    $this->SetXY(156,233);
    $this->Cell(7,3.5,'13',0,1,'L');
    //14
    $this->SetXY(156,238);
    $this->Cell(7,3.5,'14',0,1,'L');
    //15
    $this->SetXY(156,243);
    $this->Cell(7,3.5,'15',0,1,'L');

    //ht chiffre
    $this->SetFont('Arial','',8);
    //215
    $this->SetXY(28,233);
    $this->Cell(5,3.5,'215',0,1,'L');
    //365
    $this->SetXY(28,238);
    $this->Cell(5,3.5,'365',0,1,'L');
    //515
    $this->SetXY(28,243);
    $this->Cell(5,3.5,'515',0,1,'L');
    //665
    $this->SetXY(60,233);
    $this->Cell(5,3.5,'665',0,1,'L');
    //815
    $this->SetXY(60,238);
    $this->Cell(5,3.5,'815',0,1,'L');
    //965
    $this->SetXY(60,243);
    $this->Cell(5,3.5,'965',0,1,'L');
    //1115
    $this->SetXY(88,233);
    $this->Cell(5,3.5,'1155',0,1,'L');
    //1265
    $this->SetXY(88,238);
    $this->Cell(5,3.5,'1265',0,1,'L');
    //1415
    $this->SetXY(88,243);
    $this->Cell(5,3.5,'1415',0,1,'L');
    //1565
    $this->SetXY(118,233);
    $this->Cell(5,3.5,'1565',0,1,'L');
    //1715
    $this->SetXY(118,238);
    $this->Cell(5,3.5,'1715',0,1,'L');
    //1865
    $this->SetXY(118,243);
    $this->Cell(5,3.5,'1865',0,1,'L');
    //2015
    $this->SetXY(148,233);
    $this->Cell(5,3.5,'2015',0,1,'L');
    //2165
    $this->SetXY(148,238);
    $this->Cell(5,3.5,'2165',0,1,'L');
    //2315
    $this->SetXY(148,243);
    $this->Cell(5,3.5,'2315',0,1,'L');

}
function bas()
{
	$this->SetDrawColor(0,0,0);
	$this->SetFillColor(206,206,206);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(0.3);
	$this->SetFont('Arial','',8);


	//observation
	$this->SetDrawColor(115,115,115);
	$this->SetXY(110,261.5);
	$this->Cell(20,3.5,'Observation :',0,1,'L');
	$this->SetXY(130,255);
	$this->Cell(50,10,'',1,1,'L');

	//Cote beton
	$this->SetDrawColor(0,0,0);
	$this->SetXY(35,255);
	$this->Cell(35,10,'Cote Beton',1,1,'C');
	/*$this->SetXY(40,58);
	$this->Cell(126,126,'',1,1,'C');*/
	//cm hauteur
	$this->SetDrawColor(115,115,115);
	$this->SetXY(60,270);
	$this->Cell(5,3.5,'Cm',0,1,'C');
	$this->SetXY(50,270);
	$this->Cell(8,3.5,'',1,1,'C');
	//cm largeur
	$this->SetXY(29,260);
	$this->Cell(5,3.5,'Cm',0,1,'C');
	$this->SetXY(19,260);
	$this->Cell(8,3.5,'',1,1,'C');

	//Ligne horizontal
	$this->SetFillColor(0,0,0);
	$this->SetXY(10,252);
	$this->Cell(190,0.5,'',1,1,'L',true);
}
}
$pdf = new PDF();
$pdf->AddPage();
//$PDIV=$_POST['elec'];
$pdf->recup();
$pdf->jalousie();
$pdf->cgauche(/*$PDIV*/);
$pdf->cdroite();
$pdf->centre();
$pdf->bas();

$pdf->output();



?>