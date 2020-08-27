<?php
require('../../../fpdf/fpdf.php');

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
        $this->Cell(40,10,'Ensemble Compose',0,1,'C');
        
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
    function cgauche()
    {
        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
        //couvre joint
        $this->SetFont('Arial','B',11);
        $this->SetXY(50,60);
        $this->Cell(25,5,'Couvre Joint',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //27 mm Droit
        $this->SetXY(60,70);
        $this->Cell(10,5,'27 mm',0,1,'L');
        $this->SetXY(50,70);
        $this->Cell(5,3.5,'',1,1,'C');
        //50 mm Droit
        $this->SetXY(60,74);
        $this->Cell(10,5,'50 mm',0,1,'L');
        $this->SetXY(50,74.5);
        $this->Cell(5,3.5,'',1,1,'C');
        //ans couvre Joint
        $this->SetXY(60,79);
        $this->Cell(10,5,'Sans Couvre Joint',0,1,'L');
        $this->SetXY(50,79);
        $this->Cell(5,3.5,'',1,1,'C');
        //Droit
        $this->SetXY(60,84);
        $this->Cell(10,5,'Droit',0,1,'L');
        $this->SetXY(50,84);
        $this->Cell(5,3.5,'',1,1,'C');
        //Ligne vertical
        $this->SetFillColor(0,0,0);
        $this->SetXY(105,60);
        $this->Cell(0.5,100,'',1,1,'L',true);

        //position
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(50,100);
        $this->Cell(25,5,'Position C.J',0,1,'C',true);
        //carer
        $this->SetXY(55,115);
        $this->Cell(15,15,'',1,1,'C');

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);

        //int
        $this->SetXY(90,118);
        $this->Cell(10,3.5,'INT',0,1,'L');
        $this->SetXY(84,118);
        $this->Cell(5,3.5,'',1,1,'C');
        //ext
        $this->SetXY(90,124);
        $this->Cell(10,5,'EXT',0,1,'L');
        $this->SetXY(84,124);
        $this->Cell(5,3.5,'',1,1,'C');
        //position
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(55,140);
        $this->Cell(15,3.5,'Bavette',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //30 mm
        $this->SetXY(60,150);
        $this->Cell(10,5,'30 mm',0,1,'L');
        $this->SetXY(55,150);
        $this->Cell(5,3.5,'',1,1,'C');
        //70 mm
        $this->SetXY(60,155);
        $this->Cell(10,5,'70 mm',0,1,'L');
        $this->SetXY(55,155);
        $this->Cell(5,3.5,'',1,1,'C');
        //schema
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(50,165);
        $this->Cell(27,5,'Schema vu Int',0,1,'C',true);
    }
    function cdroite()
    {
        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
        //Traverse
        $this->SetFont('Arial','B',11);
        $this->SetXY(140,60);
        $this->Cell(17,5,'Traverse',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //1 qte
        $this->SetXY(120,67.5);
        $this->Cell(10,5,'Qte:1',0,1,'L');
        $this->SetXY(115,68);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,67.5);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,67.5);
        $this->Cell(30,3.5,'',1,1,'C');
        //2 qte
        $this->SetXY(120,72.5);
        $this->Cell(10,5,'Qte:2',0,1,'L');
        $this->SetXY(115,73);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,72.5);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,72.5);
        $this->Cell(30,3.5,'',1,1,'C');
        //3 qte
        $this->SetXY(120,77);
        $this->Cell(10,5,'Qte:3',0,1,'L');
        $this->SetXY(115,78);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,77);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,77);
        $this->Cell(30,3.5,'',1,1,'C');
        //4 qte
        $this->SetXY(120,82.5);
        $this->Cell(10,5,'Qte:4',0,1,'L');
        $this->SetXY(115,83);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,82.5);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,82.5);
        $this->Cell(30,3.5,'',1,1,'C');
        //Axe
        $this->SetXY(135,90);
        $this->Cell(10,5,'Sans Traverse',0,1,'L');
        $this->SetXY(130,90);
        $this->Cell(5,3.5,'',1,1,'C');

        
        //remplissage
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(138,100);
        $this->Cell(25,5,'Remplissage',0,1,'C',true);
        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);
        $this->SetXY(135,120);
        $this->Cell(30,3.5,'',1,1,'C',true);
        //typede fermeture
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,140);
        $this->Cell(35,5,'Type de Fermeture',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //taquet
        $this->SetXY(120,147);
        $this->Cell(10,5,'Taquet',0,1,'L');
        $this->SetXY(115,147);
        $this->Cell(5,3.5,'',1,1,'C');
        //cremone 3pt
        $this->SetXY(120,151);
        $this->Cell(10,5,'Cremone 3 Pts',0,1,'L');
        $this->SetXY(115,151);
        $this->Cell(5,3.5,'',1,1,'C');
        //moteur soufflet
        $this->SetXY(120,155);
        $this->Cell(10,5,'Moteur soufflet',0,1,'L');
        $this->SetXY(115,155);
        $this->Cell(5,3.5,'',1,1,'C');
        //kit mistral 5m
        $this->SetXY(155,147);
        $this->Cell(10,5,'Kit Mistral(manuel) 5 M',0,1,'L');
        $this->SetXY(150,147);
        $this->Cell(5,3.5,'',1,1,'C');
        //kit mios 10m
        $this->SetXY(155,151);
        $this->Cell(10,5,'Kit Mistral(manuel) 1 M',0,1,'L');
        $this->SetXY(150,151);
        $this->Cell(5,3.5,'',1,1,'C');
        //kit desenfum
        $this->SetXY(155,155);
        $this->Cell(10,5,'Kit Desenfumage',0,1,'L');
        $this->SetXY(150,155);
        $this->Cell(5,3.5,'',1,1,'C');
        //Hauteur Manoeuvre
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,165);
        $this->Cell(36,5,'hauteur Manoeuvre',0,1,'C',true);
        $this->SetFont('Arial','',8);
        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);
        $this->SetXY(135,173);
        $this->Cell(30,3.5,'',1,1,'C',true);
        $this->SetXY(120,172);
        $this->Cell(10,5,'Ht Allege :',0,1,'L');

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
$pdf->recup(/*$client,$ral,$date,$tech*/);
$pdf->ec(/*$reep,$qtee,$lge,$hte*/);
$pdf->cgauche();
$pdf->cdroite();
$pdf->bas();
//telechargement du pdf

$pdf->output();