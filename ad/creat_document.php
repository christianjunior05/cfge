<?php
include_once '../config.php';
require ('assets/vendor/fpdf.php');

// detail preinscription
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$delete_preins_error = filter_input(INPUT_GET, "deleted", FILTER_SANITIZE_NUMBER_INT);
$select_preinscription = $conn->prepare("SELECT * FROM preinscriptions WHERE id = ? AND deleted='false' ");

$select_preinscription->execute(array($id));
$result2 = $select_preinscription->fetch(PDO::FETCH_ASSOC);



class PDF extends FPDF
{
    function Header()
    {
        // Titre
        $this->SetFont('Arial', '', 18);
        $this->Cell(0, 6, 'CFCGE CI', 0, 1, 'C');
        $this->Ln(5);

        // Titre
        $this->SetFont('Arial', '', 20);
        $this->Cell(0, 6, 'PRE-INSCRIPTION', 0, 1, 'C');
        $this->Ln(10);



        parent::Header();
    }
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-25);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Text color in gray
        $this->SetTextColor(128);
        $this->Cell(0, 10, 'Center de Formation de la Gestion des Entreprise de CI', 0, 1, 'C');
        $this->Cell(0, 5, 'Préinscription', 0, 0, 'C');

    }
}

$pdf = new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Date de candidature: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, $result2['jour'], 0, 1);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Nom et prenom: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, '  ' . $result2['nom'] . " " . $result2['prenom'] . '', 0, 1);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Telephone: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, ' ' . $result2['tel'] . '', 0, 1);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Email: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, ' ' . $result2['mail'] . '', 0, 1);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Nationalite: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, ' ' . $result2['nationalite'] . '', 0, 1);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Niveau: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, ' ' . $result2['niveau'] . '', 0, 1);
$pdf->Ln(5);


$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Dernier etablissement: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, ' ' . $result2['etab'] . '', 0, 1);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Dernier diplome obtenu: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, ' ' . $result2['dip'] . '', 0, 1);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Formation souhaitee: ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, ' ' . $result2['formation'] . '', 0, 1);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 6, 'Comment avez-vous entendu parle du CIFEC BENIN? : ', 0, 1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(1);
$pdf->Cell(0, 6, ' ' . $result2['moyen'] . '', 0, 1);
$pdf->Ln(5);

$pdf->Ln(10);

$pdf->Output("OfficeForm.pdf", "F");


header(("Location:imprimer.php?filename=".$result2['nom']));

