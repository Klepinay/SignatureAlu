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
        $this->Cell(40,10,'Garde-Corps PROFIL SYSTEM',0,1,'C');

        
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
        $this->SetXY(35,52);
        $this->Cell(30,3.5,'',1,1,'C');
        $this->SetXY(66,52);
        $this->Cell(5,3.5,'mm',0,1,'C');
        //hauteur
        $this->SetXY(48,95);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(54,95);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(60,95);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(66,95);
        $this->Cell(5,3.5,'',1,1,'C');

        $this->SetXY(20,95);
        $this->Cell(45,3.5,'Hauteur Fini du G-C:',0,1,'L');
        $this->SetXY(35,99);
        $this->Cell(45,3.5,'(Pose sur muret)',0,1,'L');

        //
        $this->SetXY(130,82);
        $this->Cell(30,3.5,'',1,1,'C');

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
        $this->Cell(8,3.5,'Lisse PS',0,1,'C');


        //
        $this->SetXY(90,185);
        $this->Cell(25,3.5,'',1,1,'C');
        $this->SetXY(80,185);
        $this->Cell(8,3.5,'Vitrage :',0,1,'C');

        $this->SetXY(98,190);
        $this->Cell(25,3.5,'',1,1,'C');
        $this->SetXY(80,190);
        $this->Cell(8,3.5,'Qte de Panneaux :',0,1,'C');
        $this->SetXY(95,194);
        $this->Cell(8,3.5,'(Largeur Maxi: 1500mm/Panneau)',0,1,'C');

    }
    
    function bas()
    {
    $this->SetDrawColor(0,0,0);
    $this->SetFillColor(206,206,206);
    $this->SetTextColor(0,0,0);
    $this->SetLineWidth(0.3);
    $this->SetFont('Arial','',8);

    //Linteau
        $this->SetDrawColor(115,115,115);
        $this->SetXY(30,235);
        $this->Cell(35,3.5,'Hauteur Point de Niveau/Linteau :',0,1,'L');
        

        $this->SetXY(74,235);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(80,235);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(86,235);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(92,235);
        $this->Cell(5,3.5,'',1,1,'C');

        //Sol
        $this->SetXY(105,235);
        $this->Cell(35,3.5,'Hauteur Point de Niveau/Sol Fini :',0,1,'L');
    

        $this->SetXY(150,235);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(156,235);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(162,235);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(168,235);
        $this->Cell(5,3.5,'',1,1,'C');


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
    $this->SetXY(10,230);
    $this->Cell(190,0.5,'',1,1,'L',true);
    }
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->recup(/*$client,$ral,$date,$tech*/);
$pdf->ec(/*$reep,$qtee,$lge,$hte*/);
$pdf->centre();

$pdf->Image('2020-02-05 10_07_37-Microsoft Excel (Échec de l’activation du produit) - G C Rampant Vitré PS 2020.x.png',20,58,50,0);
$pdf->Image('Gdc1.png',85,110,100,0);
$pdf->Image('Gdc1-2.png',100,65,50,0);
$pdf->bas();
//telechargement du pdf

$pdf->output();