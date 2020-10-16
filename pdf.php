<?php

if(!empty($_POST['submit'])){
	$rn= $_POST['rn'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	
	require("fpdf/fpdf.php");

	$pdf = new FPDF();
	$pdf->AddPage();

   $pdf->setFont ("Arial","B",12);
   $pdf->Cell(0,10,"Registartion Details",1,1,'C');
   
   $pdf->Cell(30,10,"Roll No.",1,0,'C');
   $pdf->Cell(45,10,"Name.",1,0,'C');
   $pdf->Cell(45,10,"Email-Address.",1,0,'C');
   $pdf->Cell(0,10,"Mobile Number.",1,1,'C');

   $pdf->Cell(30,10,$rn,1,0);
   $pdf->Cell(45,10,$name,1,0);
   $pdf->Cell(45,10,$email,1,0);
   $pdf->Cell(0,10,$mobile,1,1);
   $file = time().'.pdf';
    $pdf->output($file,'D');
}

?>