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
        $this->Cell(40,10,'Coulissant 4 Vtx 2 Rails',0,1,'C');

        
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
        //27 mm Droit
        $this->SetXY(30,70);
        $this->Cell(10,5,'27 mm',0,1,'L');
        $this->SetXY(20,70);
        $this->Cell(5,3.5,'',1,1,'C');
        //50 mm Droit
        $this->SetXY(30,74);
        $this->Cell(10,5,'50 mm',0,1,'L');
        $this->SetXY(20,74.5);
        $this->Cell(5,3.5,'',1,1,'C');
        //ans couvre Joint
        $this->SetXY(60,70);
        $this->Cell(10,5,'Sans Couvre Joint',0,1,'L');
        $this->SetXY(50,70);
        $this->Cell(5,3.5,'',1,1,'C');
        //Droit
        $this->SetXY(60,74);
        $this->Cell(10,5,'Droit',0,1,'L');
        $this->SetXY(50,74.5);
        $this->Cell(5,3.5,'',1,1,'C');
        //Ligne vertical
        $this->SetFillColor(0,0,0);
        $this->SetXY(105,60);
        $this->Cell(0.5,125,'',1,1,'L',true);

        //position
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(50,85);
        $this->Cell(25,5,'Position C.J',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);

        //Gaucge
        $this->SetXY(40,105);
        $this->Cell(5,3.5,'',1,1,'C');

        //Droite
        $this->SetXY(73,105);
        $this->Cell(5,3.5,'',1,1,'C');
        //Haut
        $this->SetXY(57,93);
        $this->Cell(5,3.5,'',1,1,'C');
        //Bas
        $this->SetXY(57,116);
        $this->Cell(5,3.5,'',1,1,'C');

        //int
        $this->SetXY(90,100);
        $this->Cell(10,3.5,'INT',0,1,'L');
        $this->SetXY(84,100);
        $this->Cell(5,3.5,'',1,1,'C');
        //ext
        $this->SetXY(90,105);
        $this->Cell(10,5,'EXT',0,1,'L');
        $this->SetXY(84,105);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(50,120);
        $this->Cell(10,5,'Observation :',0,1,'L');
        $this->SetXY(47,125);
        $this->Cell(25,10,'',1,1,'C');

        //position
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(53,140);
        $this->Cell(20,3.5,'Bavette',0,1,'C',true);

        //1

        $this->SetFont('Arial','',6);
        $this->SetDrawColor(115,115,115);
        //
        $this->SetXY(50,145);
        $this->Cell(10,5,'30 mm',0,1,'L');
        $this->SetXY(45,145);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(50,150);
        $this->Cell(10,5,'70 mm',0,1,'L');
        $this->SetXY(45,150);
        $this->Cell(5,3.5,'',1,1,'C');
        
        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(45,158);
        $this->Cell(45,3.5,'Sens Ouverture (Vue int)',0,1,'C',true);

        $this->SetFont('Arial','',6);
        $this->SetDrawColor(115,115,115);
        //
        $this->SetXY(10,165);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(10,178);
        $this->Cell(5,3.5,'',1,1,'C');



        //texte +gris
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(10,190);
        $this->Cell(35,5,'Hauteur Manoeuvre',0,1,'C',true);
        //
        $this->SetXY(75,190);
        $this->Cell(35,5,'Serrure (avec cles)',0,1,'C',true);
        //
        $this->SetXY(140,190);
        $this->Cell(43,5,'Fermeture',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);

        //
        $this->SetXY(25,196);
        $this->Cell(25,3.5,'',1,1,'C',true);
        $this->SetXY(10,196);
        $this->Cell(10,5,'Ht Allege:',0,1,'L');
        $this->SetXY(5,196);
        $this->Cell(5,3.5,'',1,1,'C');
        //ht stand
        $this->SetXY(10,200);
        $this->Cell(10,5,'Ht Standard(Fc 350 - Pc 1020)',0,1,'L');
        $this->SetXY(5,200);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(25,204);
        $this->Cell(25,3.5,'',1,1,'C',true);
        $this->SetXY(10,204);
        $this->Cell(10,5,'Autre Ht :',0,1,'L');
        $this->SetXY(5,204);
        $this->Cell(5,3.5,'',1,1,'C');

        //ouvrant gauche
        $this->SetXY(80,196);
        $this->Cell(10,5,'Droite(Vue Ext)',0,1,'L');
        $this->SetXY(75,196);
        $this->Cell(5,3.5,'',1,1,'C');
        //ouvrant droit
        $this->SetXY(80,200);
        $this->Cell(10,5,'Gauche(Vue Ext)',0,1,'L');
        $this->SetXY(75,200);
        $this->Cell(5,3.5,'',1,1,'C');

        //
        $this->SetXY(145,196);
        $this->Cell(10,5,'Simple',0,1,'L');
        $this->SetXY(140,196);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(145,200);
        $this->Cell(10,5,'Trianglerie 2 Pts',0,1,'L');
        $this->SetXY(140,200);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(145,204);
        $this->Cell(10,5,'Trianglerie 3 Pts',0,1,'L');
        $this->SetXY(140,204);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(145,208);
        $this->Cell(10,5,'Fast Lock(Cremone)',0,1,'L');
        $this->SetXY(140,208);
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
        $this->SetXY(138,85);
        $this->Cell(25,5,'Traverse',0,1,'C',true);
        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //1 qte
        $this->SetXY(120,95);
        $this->Cell(10,5,'Qte:1',0,1,'L');
        $this->SetXY(115,95);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,95);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,95);
        $this->Cell(30,3.5,'',1,1,'C');
        //2 qte
        $this->SetXY(120,99);
        $this->Cell(10,5,'Qte:2',0,1,'L');
        $this->SetXY(115,99);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,99);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,99);
        $this->Cell(30,3.5,'',1,1,'C');
        //3 qte
        $this->SetXY(120,104);
        $this->Cell(10,5,'Qte:3',0,1,'L');
        $this->SetXY(115,104);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,104);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,104);
        $this->Cell(30,3.5,'',1,1,'C');
        //4 qte
        $this->SetXY(120,109);
        $this->Cell(10,5,'Qte:4',0,1,'L');
        $this->SetXY(115,109);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,109);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,109);
        $this->Cell(30,3.5,'',1,1,'C');

        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,140);
        $this->Cell(35,5,'Remplissage',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //
        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
    
        $this->SetXY(135,150);
        $this->Cell(30,3.5,'',1,1,'C');

        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,158);
        $this->Cell(35,5,'Remplissage Bas',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //
        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
    
        $this->SetXY(135,168);
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
$pdf->recup(/*$client,$ral,$date,$tech*/);
$pdf->ec(/*$reep,$qtee,$lge,$hte*/);
$pdf->cgauche();
$pdf->Image('C3-1.png',47,98,25,0);
$pdf->Image('C3.png',23,165,80,0);
$pdf->cdroite();

$pdf->bas();
//telechargement du pdf

$pdf->output();