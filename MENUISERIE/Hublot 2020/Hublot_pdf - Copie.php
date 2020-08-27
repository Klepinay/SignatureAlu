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
    function voletR(/*$reep,$qtee,$lge,$hte*/)
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
        $this->SetFont('Arial','B',18);
        $this->SetXY(82,29);
        $this->Cell(40,10,'Hublot',0,1,'C');
        
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

        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);
        //blanc1
        $this->SetXY(20,44);
        $this->Cell(30,3.5,'',1,1,'L',true);
        //blanc2
        $this->SetXY(65,44);
        $this->Cell(30,3.5,'',1,1,'C',true);
        //blanc3
        $this->SetXY(110,44);
        $this->Cell(30,3.5,'',1,1,'C',true);
        //blanc4
        $this->SetXY(155,44);
        $this->Cell(30,3.5,'',1,1,'C',true);

    }
    function centre()
    {
        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
        //Modele
        $this->SetFont('Arial','B',11);
        $this->SetXY(140,66);
        $this->Cell(15,5,'Modele',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //Fixe
        $this->SetXY(150,80);
        $this->Cell(10,5,'Fixe',0,1,'L');
        $this->SetXY(140,78);
        $this->Cell(5,5,'',1,1,'C');
        //Ouvrant
        $this->SetXY(150,90);
        $this->Cell(10,5,'Ouvrant',0,1,'L');
        $this->SetXY(140,88);
        $this->Cell(5,5,'',1,1,'C');
        //Basculant
        $this->SetXY(150,100);
        $this->Cell(10,5,'Basculant',0,1,'L');
        $this->SetXY(140,98);
        $this->Cell(5,5,'',1,1,'C');

        //rond
    }
    function bgauche()
    {
        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
        //Modele
        $this->SetFont('Arial','B',11);
        $this->SetXY(50,180);
        $this->Cell(25,5,'Couvre Joint',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //27 mm Droit
        $this->SetXY(60,190);
        $this->Cell(10,5,'27 mm Droit',0,1,'L');
        $this->SetXY(50,188);
        $this->Cell(5,5,'',1,1,'C');
        //50 mm Droit
        $this->SetXY(60,200);
        $this->Cell(10,5,'50 mm Droit',0,1,'L');
        $this->SetXY(50,198);
        $this->Cell(5,5,'',1,1,'C');
        //ans couvre Joint
        $this->SetXY(60,210);
        $this->Cell(10,5,'Sans Couvre Joint',0,1,'L');
        $this->SetXY(50,208);
        $this->Cell(5,5,'',1,1,'C');

        //Ligne vertical
        $this->SetFillColor(0,0,0);
        $this->SetXY(105,180);
        $this->Cell(0.5,35,'',1,1,'L',true);

    }
    function bdroite()
    {
        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
        //Modele
        $this->SetFont('Arial','B',11);
        $this->SetXY(140,180);
        $this->Cell(25,5,'Position C.J',0,1,'C',true);
        $this->SetXY(140,210);
        $this->Cell(25,5,'Remplissage',0,1,'L',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //INT
        $this->SetXY(160,190);
        $this->Cell(10,3.5,'INT',0,1,'L');
        $this->SetXY(155,188);
        $this->Cell(5,5,'',1,1,'C');
        //ext
        $this->SetXY(155,200);
        $this->Cell(10,3.55,'EXT',0,1,'L');
        $this->SetXY(150,198);
        $this->Cell(5,5,'',1,1,'C');
        //remplissage
        
        $this->SetXY(138,218);
        $this->Cell(30,3.5,'',1,1,'C');

        //image rond
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
$pdf->Image('h.png',35,80,60,0);
$pdf->Image('h2.png',130,188,15,0);

$pdf->recup(/*$client,$ral,$date,$tech*/);
$pdf->voletR(/*$reep,$qtee,$lge,$hte*/);
$pdf->centre();
$pdf->bgauche();
$pdf->bdroite();
$pdf->bas();

//telechargement du pdf

$pdf->output();