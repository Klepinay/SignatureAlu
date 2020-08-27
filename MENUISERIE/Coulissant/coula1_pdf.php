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

        //mot
        #Divers
        $this->SetFont('Arial','B',18);
        $this->SetXY(82,29);
        $this->Cell(40,10,'Coulissant d\'Angle',0,1,'C');

        #1
        $this->SetFont('Arial','',8);
        $this->SetXY(15,37);
        $this->Cell(40,10,'Rep',0,1,'C');
        
        #2
        $this->SetXY(60,37);
        $this->Cell(40,10,'Qte',0,1,'C');

        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);
        //blanc1
        $this->SetXY(20,44);
        $this->Cell(30,3.5,'',1,1,'L',true);
        //blanc2
        $this->SetXY(65,44);
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
        $this->SetXY(45,60);
        $this->Cell(30,5,'Hauteur Allege',0,1,'C',true);
        //
        $this->SetXY(25,50);
        $this->Cell(40,10,'Fenetre',0,1,'C');
        $this->SetXY(30,52);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(110,50);
        $this->Cell(40,10,'Porte',0,1,'C');
        $this->SetXY(115,52);
        $this->Cell(5,3.5,'',1,1,'C');

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        
        //ans couvre Joint
        $this->SetXY(45,70);
        $this->Cell(30,3.5,'',1,1,'L');
        
        
        //Ligne vertical
        $this->SetFillColor(0,0,0);
        $this->SetXY(105,60);
        $this->Cell(0.5,30,'',1,1,'L',true);

        //position
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(45,85);
        $this->Cell(25,5,'Traverse',0,1,'C',true);

        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //1 qte
        $this->SetXY(30,95);
        $this->Cell(10,5,'Qte:1',0,1,'L');
        $this->SetXY(40,95);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(50,95);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(60,95);
        $this->Cell(30,3.5,'',1,1,'C');
        //2 qte
        $this->SetXY(30,101);
        $this->Cell(10,5,'Qte:2',0,1,'L');
        $this->SetXY(40,101);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(50,101);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(60,101);
        $this->Cell(30,3.5,'',1,1,'C');
        //3 qte
        $this->SetXY(30,106);
        $this->Cell(10,5,'Qte:3',0,1,'L');
        $this->SetXY(40,106);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(50,106);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(60,106);
        $this->Cell(30,3.5,'',1,1,'C');
        //4 qte
        $this->SetXY(30,111);
        $this->Cell(10,5,'Qte:4',0,1,'L');
        $this->SetXY(40,111);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(50,111);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(60,111);
        $this->Cell(30,3.5,'',1,1,'C');
        //
        $this->SetXY(55,116);
        $this->Cell(10,5,'Pas de Traverse',0,1,'L');
        $this->SetXY(45,116);
        $this->Cell(5,3.5,'',1,1,'C');
        //largeur int 1
        $this->SetXY(55,120);
        $this->Cell(10,5,'Largeur interieur',0,1,'L');
        $this->SetXY(52,126);
        $this->Cell(25,3.5,'',1,1,'C');
        //largeur int 2
        $this->SetXY(7,150);
        $this->Cell(10,5,'Largeur interieur',0,1,'L');
        $this->SetXY(4.5,156);
        $this->Cell(25,3.5,'',1,1,'C');


        //texte +gris
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(75,190);
        $this->Cell(50,5,'Position Serrure (avec cles)',0,1,'C',true);
        //
        $this->SetXY(135,155);
        $this->Cell(30,5,'Fermeture',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);


        //
        $this->SetXY(80,196);
        $this->Cell(10,5,'C1 (Vue Ext)',0,1,'L');
        $this->SetXY(75,196);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(80,200);
        $this->Cell(10,5,'C2 (Vue Ext)',0,1,'L');
        $this->SetXY(75,200);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(80,204);
        $this->Cell(10,5,'Pas de Serrure',0,1,'L');
        $this->SetXY(75,204);
        $this->Cell(5,3.5,'',1,1,'C');

        //
        $this->SetXY(145,163);
        $this->Cell(10,5,'Simple',0,1,'L');
        $this->SetXY(140,163);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(145,168);
        $this->Cell(10,5,'Trianglerie 2 Pts',0,1,'L');
        $this->SetXY(140,168);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(145,173);
        $this->Cell(10,5,'Trianglerie 3 Pts',0,1,'L');
        $this->SetXY(140,173);
        $this->Cell(5,3.5,'',1,1,'C');
         
        
    }
    function cdroite()
    {
        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
        //Barreaudage
        $this->SetFont('Arial','B',11);
        $this->SetXY(140,60);
        $this->Cell(25,5,'Rail Bas',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //
        $this->SetXY(120,67.5);
        $this->Cell(10,5,'Rail Encastre (Decoupe Croisement)',0,1,'L');
        $this->SetXY(115,68);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,67.5);
        
        //
        $this->SetXY(120,72.5);
        $this->Cell(10,5,'Rail P M R',0,1,'L');
        $this->SetXY(115,73);
        $this->Cell(5,3.5,'',1,1,'C');

        //
        $this->SetXY(175,67.5);
        $this->Cell(10,5,'Sur Carrelage',0,1,'L');
        $this->SetXY(170,68);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(150,72.5);
        $this->Cell(10,5,'Pas d\'Evacuation Chambre Basse',0,1,'L');
        $this->SetXY(145,73);
        $this->Cell(5,3.5,'',1,1,'C');

        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,85);
        $this->Cell(35,5,'Modele',0,1,'C',true);

        $this->SetFont('Arial','',8);

        //
        $this->SetXY(145,90);
        $this->Cell(10,5,'1 Vantail / 1 Rail',0,1,'L');
        $this->SetXY(140,90);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(145,96);
        $this->Cell(10,5,'2 Vantail / 2 Rail',0,1,'L');
        $this->SetXY(140,96);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(145,102);
        $this->Cell(10,5,'3 Vantail / 3 Rail',0,1,'L');
        $this->SetXY(140,102);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(145,108);
        $this->Cell(10,5,'4 Vantail / 4 Rail',0,1,'L');
        $this->SetXY(140,108);
        $this->Cell(5,3.5,'',1,1,'C');
        

        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,115);
        $this->Cell(35,5,'Coulissant Principal',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //
        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
    
        //C1
        $this->SetXY(135,122);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(142,122);
        $this->Cell(5,3.5,'C1',0,1,'C');
        //C1
        $this->SetXY(148,122);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(154,122);
        $this->Cell(5,3.5,'C2',0,1,'C');

        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,130);
        $this->Cell(35,5,'Epaisseur Mur',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //
        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
    
        $this->SetXY(133,138);
        $this->Cell(30,3.5,'',1,1,'C');
        //ht beton
        $this->SetXY(133,148);
        $this->Cell(30,3.5,'',1,1,'C');
        $this->SetXY(133,143);
        $this->Cell(30,3.5,'Hauteur Beton',0,1,'C');

        //-----------------------------

        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,185);
        $this->Cell(35,5,'Remplissage',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //
        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
    
        $this->SetXY(135,193);
        $this->Cell(30,3.5,'',1,1,'C');

        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,200);
        $this->Cell(60,5,'Remplissage Bas (si Traverse)',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //
        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
    
        $this->SetXY(135,208);
        $this->Cell(30,3.5,'',1,1,'C');
        
        

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
        $this->Cell(25,3.5,'',1,1,'C');

        //Sol
        $this->SetXY(105,235);
        $this->Cell(35,3.5,'Hauteur Point de Niveau/Sol Fini :',0,1,'L');
        $this->SetXY(154,235);
        $this->Cell(25,3.5,'',1,1,'C');


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
$pdf->Image('C6.png',23,125,80,0);
$pdf->recup(/*$client,$ral,$date,$tech*/);
$pdf->ec(/*$reep,$qtee,$lge,$hte*/);
$pdf->cgauche();

$pdf->cdroite();

$pdf->bas();
//telechargement du pdf

$pdf->output();