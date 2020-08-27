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
        $this->Cell(40,10,'Porte Ouvrante 2 Vtx',0,1,'C');

        
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
        $this->Cell(40,10,'Francaise',0,1,'C');
        //
        $this->SetXY(110,50);
        $this->Cell(40,10,'Anglaise',0,1,'C');

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
        $this->SetXY(50,92);
        $this->Cell(25,5,'Position C.J',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);

        //carrer
        $this->SetXY(45,115);
        $this->Cell(5,3.5,'',1,1,'C');

        //1
        $this->SetXY(70,115);
        $this->Cell(5,3.5,'',1,1,'C');
        //2
        $this->SetXY(57,100);
        $this->Cell(5,3.5,'',1,1,'C');
        //3
        $this->SetXY(57,130);
        $this->Cell(5,3.5,'',1,1,'C');

        //int
        $this->SetXY(90,105);
        $this->Cell(10,3.5,'INT',0,1,'L');
        $this->SetXY(84,105);
        $this->Cell(5,3.5,'',1,1,'C');
        //ext
        $this->SetXY(90,115);
        $this->Cell(10,5,'EXT',0,1,'L');
        $this->SetXY(84,115);
        $this->Cell(5,3.5,'',1,1,'C');
        //position
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(53,140);
        $this->Cell(20,3.5,'Fermeture',0,1,'C',true);

        //1

        $this->SetFont('Arial','',6);
        $this->SetDrawColor(115,115,115);
        //
        $this->SetXY(10,145);
        $this->Cell(10,5,'Cremone',0,1,'L');
        $this->SetXY(5,145);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(10,150);
        $this->Cell(10,5,'Serrure 1Pt',0,1,'L');
        $this->SetXY(5,150);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(10,155);
        $this->Cell(10,5,'Serrure 3Pt',0,1,'L');
        $this->SetXY(5,155);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(10,160);
        $this->Cell(10,5,'Serrure 1Pt a Rouleau',0,1,'L');
        $this->SetXY(5,160);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(10,165);
        $this->Cell(10,5,'Serrure 3Pts a Rouleau',0,1,'L');
        $this->SetXY(5,165);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(10,170);
        $this->Cell(10,5,'Ferme Porte',0,1,'L');
        $this->SetXY(5,170);
        $this->Cell(5,3.5,'',1,1,'C');

        //2


        //
        $this->SetXY(40,145);
        $this->Cell(10,5,'Poignee Poussoir',0,1,'L');
        $this->SetXY(35,145);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(40,150);
        $this->Cell(10,5,'Baton Alu Int+Ext',0,1,'L');
        $this->SetXY(35,150);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(40,155);
        $this->Cell(10,5,'Anti Panique 1Pt',0,1,'L');
        $this->SetXY(35,155);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(40,160);
        $this->Cell(10,5,'Anti Panique 3Pts',0,1,'L');
        $this->SetXY(35,160);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(40,165);
        $this->Cell(10,5,'Anti Panique 1Pt+Ser Ext',0,1,'L');
        $this->SetXY(35,165);
        $this->Cell(5,3.5,'',1,1,'C');

        //3

        //
        $this->SetXY(70,145);
        $this->Cell(10,5,'Anti Panique 3Pt+SerExt',0,1,'L');
        $this->SetXY(65,145);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(70,150);
        $this->Cell(10,5,'Gache electrique',0,1,'L');
        $this->SetXY(65,150);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(70,155);
        $this->Cell(10,5,'Ventouse Magnetique',0,1,'L');
        $this->SetXY(65,155);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(70,160);
        $this->Cell(10,5,'Bde 3 Ventouse Magnetique',0,1,'L');
        $this->SetXY(65,160);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(70,165);
        $this->Cell(10,5,'Baton INOX Int+Ext',0,1,'L');
        $this->SetXY(66,165);
        $this->Cell(5,3.5,'',1,1,'C');




        //texte +gris
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(10,180);
        $this->Cell(25,5,'Remplissage',0,1,'C',true);
        //
        $this->SetXY(55,180);
        $this->Cell(35,5,'Panneau de Deco',0,1,'C',true);
        //
        $this->SetXY(115,180);
        $this->Cell(35,5,'Remplissage Bas',0,1,'C',true);
        //
        $this->SetXY(10,200);
        $this->Cell(35,5,'Francaise (vue int)',0,1,'C',true);
        
        //
        $this->SetXY(55,200);
        $this->Cell(35,5,'Hauteur Manoeuvre',0,1,'C',true);
        //
        $this->SetXY(115,200);
        $this->Cell(35,5,'Anglaise (vue int)',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);

        //ouvrant gauche
        $this->SetXY(10,208);
        $this->Cell(10,5,'Ouvrant gauche',0,1,'L');
        $this->SetXY(5,208);
        $this->Cell(5,3.5,'',1,1,'C');
        //ouvrant droit
        $this->SetXY(10,212);
        $this->Cell(10,5,'Ouvrant Droit',0,1,'L');
        $this->SetXY(5,212);
        $this->Cell(5,3.5,'',1,1,'C');

        //
        $this->SetXY(7.5,188);
        $this->Cell(30,3.5,'',1,1,'L',true);
        //
        $this->SetXY(58,188);
        $this->Cell(30,3.5,'',1,1,'L',true);
        //
        $this->SetXY(118,188);
        $this->Cell(30,3.5,'',1,1,'L',true);
        //
        $this->SetXY(55,218);
        $this->Cell(30,3.5,'',1,1,'C',true);
        $this->SetXY(60,214);
        $this->Cell(10,5,'Autre Ht :',0,1,'L');
        $this->SetXY(55,214);
        $this->Cell(5,3.5,'',1,1,'C');
        //ht stand
        $this->SetXY(60,208);
        $this->Cell(10,5,'Ht Standard',0,1,'L');
        $this->SetXY(55,208);
        $this->Cell(5,3.5,'',1,1,'C');
        //ouvrant gauche
        $this->SetXY(118,208);
        $this->Cell(10,5,'Ouvrant gauche',0,1,'L');
        $this->SetXY(113,208);
        $this->Cell(5,3.5,'',1,1,'C');
        //ouvrant droit
        $this->SetXY(118,212);
        $this->Cell(10,5,'Ouvrant Droit',0,1,'L');
        $this->SetXY(113,212);
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
        $this->Cell(25,5,'Dormant',0,1,'C',true);

        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //
        $this->SetXY(120,67.5);
        $this->Cell(10,5,'4 cotes',0,1,'L');
        $this->SetXY(115,68);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,67.5);
        
        //
        $this->SetXY(120,72.5);
        $this->Cell(10,5,'3 cotes + seuil en Battue',0,1,'L');
        $this->SetXY(115,73);
        $this->Cell(5,3.5,'',1,1,'C');

        //
        $this->SetXY(120,77);
        $this->Cell(10,5,'3 Cotes + seuil Plat 70mm',0,1,'L');
        $this->SetXY(115,78);
        $this->Cell(5,3.5,'',1,1,'C');
        //
        $this->SetXY(120,83);
        $this->Cell(10,5,'3 Cotes sans seuil',0,1,'L');
        $this->SetXY(115,83);
        $this->Cell(5,3.5,'',1,1,'C');
        
        
        
        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(138,100);
        $this->Cell(25,5,'Barreaudage',0,1,'C',true);
        $this->SetDrawColor(206,206,206);
        $this->SetFillColor(255,255,255);

        $this->SetFont('Arial','',8);
        //sans barro
        $this->SetXY(120,105);
        $this->Cell(10,5,'Sans Barreaux',0,1,'L');
        $this->SetXY(115,105);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,67.5);
        
        //barro horizontal
        $this->SetXY(120,110);
        $this->Cell(10,5,'Haut Barreaude',0,1,'L');
        $this->SetXY(115,110);
        $this->Cell(5,3.5,'',1,1,'C');

        //barro verti
        $this->SetXY(120,115);
        $this->Cell(10,5,'Barreaude sur toute la hauteur',0,1,'L');
        $this->SetXY(115,115);
        $this->Cell(5,3.5,'',1,1,'C');


        //
        $this->SetFillColor(206,206,206);
        $this->SetFont('Arial','B',11);
        $this->SetXY(133,140);
        $this->Cell(35,5,'Traverse',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //
        $this->SetFont('Arial','',8);
        $this->SetDrawColor(115,115,115);
        //1 qte
        $this->SetXY(120,153);
        $this->Cell(10,5,'Qte:1',0,1,'L');
        $this->SetXY(115,153);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,153);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,153);
        $this->Cell(30,3.5,'',1,1,'C');
        //2 qte
        $this->SetXY(120,158);
        $this->Cell(10,5,'Qte:2',0,1,'L');
        $this->SetXY(115,158);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,158);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,158);
        $this->Cell(30,3.5,'',1,1,'C');
        //3 qte
        $this->SetXY(120,163);
        $this->Cell(10,5,'Qte:3',0,1,'L');
        $this->SetXY(115,163);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,163);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,163);
        $this->Cell(30,3.5,'',1,1,'C');
        //4 qte
        $this->SetXY(120,168);
        $this->Cell(10,5,'Qte:4',0,1,'L');
        $this->SetXY(115,168);
        $this->Cell(5,3.5,'',1,1,'C');
        $this->SetXY(135,168);
        $this->Cell(10,5,'Axe :',0,1,'L');
        $this->SetXY(145,168);
        $this->Cell(30,3.5,'',1,1,'C');
        //Axe
        $this->SetXY(135,147.5);
        $this->Cell(10,5,'Sans Traverse',0,1,'L');
        $this->SetXY(130,147);
        $this->Cell(5,3.5,'',1,1,'C');
        //image
        
        

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
$pdf->Image('P2.png',52,112,15,0);
$pdf->cdroite();

$pdf->bas();
//telechargement du pdf

$pdf->output();