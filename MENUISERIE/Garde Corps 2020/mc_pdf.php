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
    function ec(/*$reep,$qtee,$lge,$hte*/)
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
        $this->Cell(40,10,'Main Courante Sur Muret',0,1,'C');

        
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
        $this->SetDrawColor(115,115,115);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);

        //mm
        $this->SetXY(128,72);
        $this->Cell(30,3.5,'',1,1,'C');
        $this->SetXY(108,72);
        $this->Cell(20,3.5,'Hauteur MC :',0,1,'L');
        //
        $this->SetXY(108,85);
        $this->Cell(20,3.5,'Hauteur Muet :',0,1,'L');
        $this->SetXY(128,85);
        $this->Cell(30,3.5,'',1,1,'C');

        //
        $this->SetXY(20,95);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(30,95);
        $this->Cell(45,3.5,'Sans Lisse',0,1,'L');

        $this->SetXY(54,95);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(60,95);
        $this->Cell(45,3.5,'Avec 1 Lisse Ronde',0,1,'L');

        $this->SetXY(100,95);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(105,95);
        $this->Cell(45,3.5,'Avec 2 Lisses Ronde',0,1,'L');
 
        $this->SetXY(35,105);
        $this->Cell(45,3.5,'Rappel : Muet Mini 450 pour sinon 1020mm/espacement maximum entre Lisse de 180mm',0,1,'L');

        

        //cache a cocher
        //1
        $this->SetXY(48,125);
        $this->Cell(5,3.5,'',1,1,'C');
        //2
        $this->SetXY(48,135);
        $this->Cell(5,3.5,'',1,1,'C');
        //3
        $this->SetXY(48,145);
        $this->Cell(5,3.5,'',1,1,'C');

        //fixation
        $this->SetFont('Arial','B',10);
        $this->SetXY(82,160);
        $this->Cell(40,10,'Style de Fixation / Lisse',0,1,'C');

        $this->SetFont('Arial','',8);
        //
        $this->SetXY(45,170);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(60,170);
        $this->Cell(5,3.5,'Sabot sur Dalle',0,1,'C');
        
        $this->SetXY(45,175);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(60,175);
        $this->Cell(5,3.5,'Sabot en Applique',0,1,'C');
        //
        $this->SetXY(95,175);
        $this->Cell(5,3.5,'Qte :',0,1,'C');
        $this->SetXY(102,175);
        $this->Cell(8,3.5,'',1,1,'C');

        $this->SetXY(95,170);
        $this->Cell(5,3.5,'Qte :',0,1,'C');
        $this->SetXY(102,170);
        $this->Cell(8,3.5,'',1,1,'C');
        //
        $this->SetXY(140,170);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(152,170);
        $this->Cell(8,3.5,'Lisse Ronde',0,1,'C');

        $this->SetXY(140,175);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(152,175);
        $this->Cell(8,3.5,'Lisse Plate',0,1,'C');

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
    $this->SetXY(110,239.5);
    $this->Cell(20,3.5,'Observation :',0,1,'L');
    $this->SetXY(130,240);
    $this->Cell(50,10,'',1,1,'L');

    //Cote beton
    $this->SetDrawColor(0,0,0);
    $this->SetXY(35,240);
    $this->Cell(35,10,'Cote Beton',1,1,'C');
    //cm hauteur
    $this->SetDrawColor(115,115,115);
    $this->SetXY(60,252);
    $this->Cell(5,3.5,'Cm',0,1,'C');
    $this->SetXY(50,252);
    $this->Cell(8,3.5,'',1,1,'C');
    //cm largeur
    $this->SetXY(29,245);
    $this->Cell(5,3.5,'Cm',0,1,'C');
    $this->SetXY(19,245);
    $this->Cell(8,3.5,'',1,1,'C');

    //Ligne horizontal
    $this->SetFillColor(0,0,0);
    $this->SetXY(10,230);
    $this->Cell(190,0.5,'',1,1,'L',true);
    }
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->recup(/*$client,$ral,$date,$tech*/);
$pdf->ec(/*$reep,$qtee,$lge,$hte*/);
$pdf->centre();

$pdf->Image('Gdc1.png',85,110,100,0);
$pdf->Image('Gdc1-1.png',40,180,130,0);
$pdf->Image('mc.png',20,65,80,0);
$pdf->bas();
//telechargement du pdf

$pdf->output();