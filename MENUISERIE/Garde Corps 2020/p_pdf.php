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
        $this->Cell(40,10,'Portillon 1 Vt',0,1,'C');

        
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

        //
        $this->SetXY(50,55);
        $this->Cell(5,3.5,'',1,1,'C');

        //
        $this->SetXY(74,85);
        $this->Cell(30,3.5,'',1,1,'C');
        $this->SetXY(73,80);
        $this->Cell(20,3.5,'Hauteur Fini du Portillon :',0,1,'L');

        //
        $this->SetXY(128,75);
        $this->Cell(20,3.5,'Lisse Ronde :',0,1,'L');
        $this->SetXY(120,75);
        $this->Cell(5,3.5,'',1,1,'C');

        $this->SetXY(128,85);
        $this->Cell(20,3.5,'Lisse Plate :',0,1,'L');
        $this->SetXY(120,85);
        $this->Cell(5,3.5,'',1,1,'C');

        //Ligne horizontal
        $this->SetFillColor(0,0,0);
        $this->SetXY(10,110);
        $this->Cell(190,0.5,'',1,1,'L',true);
        //Ligne horizontal2
        $this->SetFillColor(0,0,0);
        $this->SetXY(10,120);
        $this->Cell(190,0.5,'',1,1,'L',true);
        //Ligne vertical
        $this->SetFillColor(0,0,0);
        $this->SetXY(100,120);
        $this->Cell(0.5,70,'',1,1,'L',true);


        //
        $this->SetXY(88,113);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(100,113);
        $this->Cell(45,3.5,'Serrue 1Pt',0,1,'L');

        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
        //
        $this->SetFont('Arial','B',11);
        $this->SetXY(20,130);
        $this->Cell(25,5,'Remplissage',0,1,'C',true);
        //
        $this->SetXY(20,170);
        $this->Cell(35,5,'Francaise (vue int)',0,1,'C',true);
        //
        $this->SetXY(135,130);
        $this->Cell(25,5,'Couvre Joint',0,1,'C',true);
        //
        $this->SetXY(135,170);
        $this->Cell(35,5,'Anglaise (vue int)',0,1,'C',true);

        $this->SetFont('Arial','',8);

        //
        $this->SetXY(35,138);
        $this->Cell(20,3.5,'Barreaude',0,1,'L');
        $this->SetXY(20,138);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(35,145);
        $this->Cell(20,3.5,'Vitre',0,1,'L');
        $this->SetXY(20,145);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(30,150);
        $this->Cell(20,3.5,'Vitrage :',0,1,'L');
        $this->SetXY(25,154);
        $this->Cell(25,3.5,'',1,1,'C');

        //cdroite

        $this->SetXY(140,138);
        $this->Cell(20,3.5,'27 mm',0,1,'L');
        $this->SetXY(135,138);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(140,145);
        $this->Cell(20,3.5,'50 mm',0,1,'L');
        $this->SetXY(135,145);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(140,154);
        $this->Cell(20,3.5,'sans Couvre Joint',0,1,'L');
        $this->SetXY(135,154);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(140,161);
        $this->Cell(20,3.5,'Droit',0,1,'L');
        $this->SetXY(135,161);
        $this->Cell(5,3.5,'',1,1,'C');
        
        //
        $this->SetXY(20,190);
        $this->Cell(20,3.5,'Poignee Gauche',0,1,'L');
        $this->SetXY(15,190);
        $this->Cell(5,3.5,'',1,1,'C');

        $this->SetXY(60,190);
        $this->Cell(20,3.5,'Poignee Droit',0,1,'L');
        $this->SetXY(55,190);
        $this->Cell(5,3.5,'',1,1,'C');

        //ct droite
        $this->SetXY(135,190);
        $this->Cell(20,3.5,'Poignee Gauche',0,1,'L');
        $this->SetXY(130,190);
        $this->Cell(5,3.5,'',1,1,'C');

        $this->SetXY(170,190);
        $this->Cell(20,3.5,'Poignee Droit',0,1,'L');
        $this->SetXY(165,190);
        $this->Cell(5,3.5,'',1,1,'C');

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
$pdf->Image('P1.png',15,180,45,0);
$pdf->Image('P2.png',127,180,50,0);
$pdf->Image('p.png',35,60,35,0);
$pdf->bas();
//telechargement du pdf

$pdf->output();