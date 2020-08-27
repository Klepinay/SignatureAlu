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

        #2
        $this->SetXY(60,40);
        $this->Cell(40,10,'',0,1,'C',true);
        #3
        $this->SetXY(105,40);
        $this->Cell(40,10,'',0,1,'C',true);


        //mot
        #Divers
        $this->SetFont('Arial','',18);
        $this->SetXY(82,29);
        $this->Cell(40,10,'Volet Roulant',0,1,'C');
        #1
        $this->SetFont('Arial','',8);

        #2
        $this->SetXY(60,37);
        $this->Cell(40,10,'Rep',0,1,'C');
        #3
        $this->SetXY(105,37);
        $this->Cell(40,10,'Qte',0,1,'C');

    }
    function cgauche(/*$C1*/)
    {
        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
       $this->SetFont('Arial','',8);

        //Lg
        $this->SetXY(15,70);
        $this->Cell(35,9,'',0,1,'C',true);
        $this->SetXY(28,71);
        $this->Cell(8,2.5,'Lg',0,1,'C');

        //Ht
        $this->SetXY(55,70);
        $this->Cell(35,9,'',0,1,'C',true);
        $this->SetXY(68,71);
        $this->Cell(8,2.5,'Ht',0,1,'C');

        //Titre+fond gris
        $this->SetFont('Arial','B',10);

        //PoseEnTableau
        $this->SetXY(40,60);
        $this->Cell(28,5,'Pose en Tableau',0,1,'C',true);
        //Coffre
        $this->SetXY(48,85);
        $this->Cell(10,5,'Coffre',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //205/90
        $this->SetXY(60,90);
        $this->Cell(10,5,'205/90',0,1,'C',false);
        /*
        $this->SetXY(45,90);
        $this->Cell(10,5,'$C1',1,1,'C',false);*/
        //250/90
        $this->SetXY(60,95);
        $this->Cell(10,5,'250/90',0,1,'C',false);
        //250/45
        $this->SetXY(60,100);
        $this->Cell(10,5,'250/45',0,1,'C',false);
        //VRJ
        $this->SetXY(60,105);
        $this->Cell(10,5,'V R J',0,1,'C',false);

        //Titre+fond gris
        $this->SetFont('Arial','B',10);
        //Lame
        $this->SetXY(48,112);
        $this->Cell(10,5,'Lame',0,1,'C',true);
        $this->SetFont('Arial','',8);

        //Lame 60mm
        $this->SetXY(30,120);
        $this->Cell(10,5,'Lame 60 mm',0,1,'C',false);
        //Lame 77mm
        $this->SetXY(60,120);
        $this->Cell(10,5,'Lame 77 mm',0,1,'C',false);

        //Titre+fond gris
        $this->SetFont('Arial','B',10);
        //Commande&position
        $this->SetXY(35,130);
        $this->Cell(38,5,'Commande et position',0,1,'C',true);
        $this->SetFont('Arial','',8);

        //Moteur Gauche
        $this->SetXY(30,135);
        $this->Cell(10,5,'Moteur Gauche',0,1,'C',false);
        //Moteur Droite
        $this->SetXY(70,135);
        $this->Cell(10,5,'Moteur Droite',0,1,'C',false);
        //Manivelle Gauche
        $this->SetXY(30,140);
        $this->Cell(10,5,'Manivelle Gauche',0,1,'C',false);
        //Mannivelle Droite
        $this->SetXY(70,140);
        $this->Cell(10,5,'Manivelle Droite',0,1,'C',false);

        //Titre+fond gris
        $this->SetFont('Arial','B',10);
        //Divers
        $this->SetXY(48,150);
        $this->Cell(12,5,'Divers',0,1,'C',true);
        $this->SetFont('Arial','',8);

        //2 Coulisse L
        $this->SetXY(60,160);
        $this->Cell(10,5,'2 Coulisse en L',0,1,'C',false);
        //1 Coulisse L
        $this->SetXY(60,165);
        $this->Cell(10,5,'1 Coulisse en L',0,1,'C',false);
        //Raidisseur
        $this->SetXY(60,170);
        $this->Cell(10,5,'Raidisseur',0,1,'C',false);

        //Titre+fond gris
        $this->SetFont('Arial','B',10);
        //Option
        $this->SetXY(48,180);
        $this->Cell(12,5,'Option',0,1,'C',true);
        $this->SetFont('Arial','',8);

        //Boitier a clé
        $this->SetXY(60,190);
        $this->Cell(10,5,'Boitier a cle saillie',0,1,'C',false);
        //Boitier a clé encastrer
        $this->SetXY(60,195);
        $this->Cell(10,5,'Boitier a cle encastre',0,1,'C',false);
        //Telecommande
        $this->SetXY(60,200);
        $this->Cell(10,5,'Telecommande',0,1,'C',false);
        //Sans SCI
        $this->SetXY(60,205);
        $this->Cell(10,5,'Sans SCI',0,1,'C',false);
    }
    function cdroite()
    {
        $this->SetDrawColor(0,0,0);
        $this->SetFillColor(206,206,206);
        $this->SetTextColor(0,0,0);
        $this->SetLineWidth(0.3);
        $this->SetFont('Arial','',8);

        //Lg
        $this->SetXY(110,70);
        $this->Cell(35,9,'',0,1,'C',true);
        $this->SetXY(123,71);
        $this->Cell(8,2.5,'Lg',0,1,'C');

        //Ht
        $this->SetXY(150,70);
        $this->Cell(35,9,'',0,1,'C',true);
        $this->SetXY(163,71);
        $this->Cell(8,2.5,'Ht',0,1,'C');

        //Titre+fond gris
        $this->SetFont('Arial','B',10);

        //PoseEnTableau
        $this->SetXY(135,60);
        $this->Cell(30,5,'Pose en Applique',0,1,'C',true);

        //Coffre
        $this->SetXY(143,85);
        $this->Cell(10,5,'Coffre',0,1,'C',true);
        $this->SetFont('Arial','',8);
        //205/90
        $this->SetXY(155,90);
        $this->Cell(10,5,'205/90',0,1,'C',false);
        /*$this->SetXY(45,90);
        $this->Cell(10,5,'$C1',1,1,'C',false);*/
        //250/90
        $this->SetXY(155,95);
        $this->Cell(10,5,'250/90',0,1,'C',false);
        //250/45
        $this->SetXY(155,100);
        $this->Cell(10,5,'250/45',0,1,'C',false);
        //VRJ
        $this->SetXY(155,105);
        $this->Cell(10,5,'V R J',0,1,'C',false);

        //Titre+fond gris
        $this->SetFont('Arial','B',10);

        //Lame
        $this->SetXY(143,112);
        $this->Cell(10,5,'Lame',0,1,'C',true);
        $this->SetFont('Arial','',8);

        //Lame 60mm
        $this->SetXY(125,120);
        $this->Cell(10,5,'Lame 60 mm',0,1,'C',false);
        //Lame 77mm
        $this->SetXY(155,120);
        $this->Cell(10,5,'Lame 77 mm',0,1,'C',false);

        //Titre+fond gris
        $this->SetFont('Arial','B',10);

        //Commande&position
        $this->SetXY(130,130);
        $this->Cell(38,5,'Commande et position',0,1,'C',true);
        $this->SetFont('Arial','',8);

        //Moteur Gauche
        $this->SetXY(125,135);
        $this->Cell(10,5,'Moteur Gauche',0,1,'C',false);
        //Moteur Droite
        $this->SetXY(165,135);
        $this->Cell(10,5,'Moteur Droite',0,1,'C',false);
        //Manivelle Gauche
        $this->SetXY(125,140);
        $this->Cell(10,5,'Manivelle Gauche',0,1,'C',false);
        //Mannivelle Droite
        $this->SetXY(165,140);
        $this->Cell(10,5,'Manivelle Droite',0,1,'C',false);

        //Titre+fond gris
        $this->SetFont('Arial','B',10);

        //Divers
        $this->SetXY(143,150);
        $this->Cell(12,5,'Divers',0,1,'C',true);
        $this->SetFont('Arial','',8);

        //2 Coulisse L
        $this->SetXY(155,160);
        $this->Cell(10,5,'2 Coulisse en L',0,1,'C',false);
        //1 Coulisse L
        $this->SetXY(155,165);
        $this->Cell(10,5,'1 Coulisse en L',0,1,'C',false);
        //Raidisseur
        $this->SetXY(155,170);
        $this->Cell(10,5,'Raidisseur',0,1,'C',false);


        //Titre+fond gris
        $this->SetFont('Arial','B',10);

        //Option
        $this->SetXY(143,180);
        $this->Cell(12,5,'Option',0,1,'C',true);
        $this->SetFont('Arial','',8);

        //Boitier a clé
        $this->SetXY(155,190);
        $this->Cell(10,5,'Boitier a cle saillie',0,1,'C',false);
        //Boitier a clé encastrer
        $this->SetXY(155,195);
        $this->Cell(10,5,'Boitier a cle encastre',0,1,'C',false);
        //Telecommande
        $this->SetXY(155,200);
        $this->Cell(10,5,'Telecommande',0,1,'C',false);
        //Sans SCI
        $this->SetXY(155,205);
        $this->Cell(10,5,'Sans SCI',0,1,'C',false);
    }
    function bas()
    {
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
        $this->Cell(35,3.5,'Hauteur Point de Niveau/Linteau :',0,1,'L');
        $this->SetXY(74,222);
        $this->Cell(25,3.5,'',1,1,'C');

        //Sol
        $this->SetXY(120,222);
        $this->Cell(35,3.5,'Hauteur Point de Niveau/Sol Fini :',0,1,'L');
        $this->SetXY(154,222);
        $this->Cell(25,3.5,'',1,1,'C');

        //observation
        $this->SetDrawColor(115,115,115);
        $this->SetXY(115,238);
        $this->Cell(15,3.5,'Observation :',0,1,'L');
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
        $this->Cell(5,3.5,'Cm',0,1,'C');
        $this->SetXY(50,242);
        $this->Cell(8,3.5,'',1,1,'C');
        //cm largeur
        $this->SetXY(29,235);
        $this->Cell(5,3.5,'Cm',0,1,'C');
        $this->SetXY(19,235);
        $this->Cell(8,3.5,'',1,1,'C');

        //Ligne vertical
        $this->SetFillColor(0,0,0);
        $this->SetXY(105,55);
        $this->Cell(0.5,140,'',1,1,'L',true);

        //Ligne horzontal
        $this->SetFillColor(0,0,0);
        $this->SetXY(15,220);
        $this->Cell(180,0.5,'',1,1,'L',true);

    }
}
$pdf = new PDF();
$pdf->AddPage();
//$C1=$_POST['divun'];
//appel les function

$pdf->recup(/*$client,$ral,$date,$tech*/);
$pdf->voletR(/*$reep,$qtee,$lge,$hte*/);
$pdf->cgauche(/*$C1*/);
$pdf->cdroite();
$pdf->bas();

//telechargement du pdf

$pdf->output();



?>