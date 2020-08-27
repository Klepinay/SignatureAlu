<?php 
	$numero = $_GET['numero'];
	$technicien = $_GET['technicien'];
	$date = $_GET['date'];
	$Nchantier = $_GET['Nchantier'];
	$client = $_GET['client'];
	$adresse = $_GET['adresse'];
	$tel = $_GET['tel'];
	$commercial = $_GET['commercial'];
	$Nbrsmenuiserie = $_GET['Nbrsmenuiserie'];
	$ral = $_GET['ral'];
	$rep = $_POST['rep'];
	$qte = $_POST['qte'];
	$lg = $_POST['lg'];
	$ht = $_POST['ht'];
	$modele = $_POST['modele'];
	$couvre_joint = $_POST['couvre_joint'];
	$droit = (isset($_POST['droit']));
?>
<?php 
require('html.php');

$pdf = new PDF();
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
	// Premiére ligne de Header
    $pdf->Cell(40,10,'Client : '.$client,1,0,'C');
	
    $pdf->Cell(10);
    $pdf->Cell(40,10,'R A L : '.$ral,1,0,'C');
	
    $pdf->Cell(10);
    $pdf->Cell(40,10,'Date : '.$date,1,0,'C');
	
    $pdf->Cell(10);
    $pdf->Cell(40,10,'Tech : '.$technicien,1,0,'C');

    $pdf->Ln(20);
	
	$pdf->SetFont('Arial','b',24);
	// Titre
	$pdf->Cell(75);
	$pdf->Cell(40,10,'Coulissant 2Vtx',0,0,'C');
	$pdf->Ln(20);
	
	$pdf->SetFont('Arial','',12);
	// Deuxiéme ligne de Header
    $pdf->Cell(40,10,'Rep : '.$rep,1,0,'C');
	
    $pdf->Cell(10);
    $pdf->Cell(40,10,'Qte : '.$qte,1,0,'C');
	
    $pdf->Cell(10);
    $pdf->Cell(40,10,'Lg : '.$lg,1,0,'C');
	
    $pdf->Cell(10);
    $pdf->Cell(40,10,'Ht : '.$ht,1,0,'C');

    $pdf->Ln(20);
	
// Modele
if ($modele == "fenetre")
{
	$pdf->SetFont('Arial','b',17);
	$pdf->Cell(40);
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(22,6,'Fenetre',0,0,'C');
	$pdf->Cell(70);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(40,6,'Porte',0,0,'C');
	$pdf->Ln(10);
	
} else {
	
	$pdf->SetFont('Arial','b',17);
	$pdf->Cell(40);
	$pdf->Cell(40,6,'Fenetre',0,0,'C');
	$pdf->Cell(60);
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(20,6,'Porte',0,0,'C');
	$pdf->Ln(10);
}

// Couvre Joint / Rails Bas
$pdf->SetFont('Arial','b', 12);
// Courve Joint
$pdf->Cell(10);
$pdf->SetFillColor(204,204,204);
$pdf->Cell(70,10,'Couvre Joint',0,0,'C',1);
// Rails Bas
$pdf->Cell(30);
$pdf->SetFillColor(204,204,204);
$pdf->Cell(70,10,'Rails Bas',0,0,'C',1);
$pdf->Ln(20);

// Valeur Couvre Joint
$pdf->SetFont('Arial','', 12);

if ($couvre_joint == "27" && $droit == "Droit")
{
	$pdf->Cell(10);
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(20,6,'27 mm',0,0,'C');
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(20,6,'Droit',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'50 mm',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(40,6,'Sans Couvre Joint',0,0,'C');
} else if ($couvre_joint == "50" && $droit == "Droit") {
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'27 mm',0,0,'C');
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(20,6,'Droit',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(20,6,'50 mm',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(40,6,'Sans Couvre Joint',0,0,'C');
} else if ($couvre_joint == "Sans Couvre Joint" && $droit == "Droit"){
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'27 mm',0,0,'C');
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(20,6,'Droit',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'50 mm',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(40,6,'Sans Couvre Joint',0,0,'C');
} else if ($couvre_joint == "Sans Couvre Joint"){
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'27 mm',0,0,'C');
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'Droit',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'50 mm',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(40,6,'Sans Couvre Joint',0,0,'C');
}else if ($couvre_joint == "50"){
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'27 mm',0,0,'C');
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'Droit',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(20,6,'50 mm',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(40,6,'Sans Couvre Joint',0,0,'C');
}else if ($couvre_joint == "27"){
	$pdf->Cell(10);
	$pdf->Cell(5,5,'X',1,0,'C');
	$pdf->Cell(20,6,'27 mm',0,0,'C');
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'Droit',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(20,6,'50 mm',0,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(5,5,'',1,0,'C');
	$pdf->Cell(40,6,'Sans Couvre Joint',0,0,'C');
}


$pdf->Output();
?> 