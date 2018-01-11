<?php

    session_start();
    require 'Prescription/fpdf.php';
    include_once 'php/config.php';
    if (isset($_SESSION['d_id'])) {
    $pPin = mysqli_real_escape_string($conn, $_SESSION['p_pin']);
    $dPin = mysqli_real_escape_string($conn, $_SESSION['d_pin']);

    $q = "SELECT * FROM prescription where (p_pin = '$pPin') AND (d_pin = '$dPin')";
    $result = mysqli_query($conn, $q);
    $resultCheck = mysqli_num_rows($result);
    }


class PDF extends FPDF{

    function Header()
    {
    // Logo
        $this->Image('images/imgs.png', 5, 10, 50);
    // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
    // Move to the right
        $this->Cell(40);
    // Title
        $this->Cell(0, 10, 'X-Madical Center', 1, 1, 'C');
        $this->SetFont('Arial', 'B', 10);
        if (isset($_SESSION['d_id'])) {
            $this->Cell(0, 8, $_SESSION['d_name'], 0, 1, 'R');
            $this->Cell(0, 2, $_SESSION['d_degree'], 0, 1, 'R');
            $this->Cell(0, 6, 'Gynecologist Laparoscopic Surgeon', 0, 1, 'R');
            $this->Cell(0, 3, $_SESSION['d_specialist'], 0, 1, 'R');
            $this->Cell(0, 5, 'Email: ' . $_SESSION['d_email'], 0, 1, 'R');
            $this->Cell(0, 5, 'Phone: ' . $_SESSION['d_phone'], 0, 1, 'R');
            $this->Ln(2);
            $this->Cell(0, 1, "", 1, 1);
            $this->Cell(40, 8, 'PID: ' . $_SESSION['p_pin'], 0, 0, 'L');
            $this->Cell(40, 8, 'Name: ' . $_SESSION['p_name'], 0, 0, 'L');
            $this->Cell(30, 8, 'Age: ' . $_SESSION['p_age'], 0, 0, 'L');
            $this->Cell(40, 8, 'Gender: ' . $_SESSION['p_gender'], 0, 0, 'L');
            $this->Cell(40, 8, 'Date: ' . date('Y-m-d'), 0, 1, 'L');
            $this->Cell(0, 1, "", 1, 1);
        }else {
            $this->Ln(30);
            $this->Cell(0, 1, "", 1, 1);
            $this->Ln(8);
            $this->Cell(0, 1, "", 1, 1);
            
        }
    // Line break
        $this->Ln(10);
    }

// Page footer
    function Footer()
    {
    // Position at 1.5 cm from bottom
        $this->SetY(-40);
    // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
    // Page number
        $this->Cell(0, 1, "", 1, 1);
        $this->Cell(0, 5, 'Fax: +12125553333', 0, 0, 'L');
        $this->Cell(0, 5, 'Email: xmadical@gmail.com', 0, 1, 'R');
        
        //$this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->Cell(0, 9, 'Rx,', 0, 1, 'L');

if (isset($_SESSION['d_id'])) {
    if ($resultCheck < 1) {

    } else {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $pdf->Ln(5);
            $pdf->Cell(10);
            $pdf->Cell(30, 1, $row['medicine'], 3, 0, 'L');
            $pdf->Cell(2);
            $pdf->Cell(12, 1, $row['time'], 3, 0, 'L');
            $pdf->Cell(20,0,"--------------");
            $pdf->Cell(0, 1, $row['day'] . " Days", 3, 1, 'L');
            $pdf->Ln(5);
        }
    }
}else {
    
}


$pdf->Output();

?>