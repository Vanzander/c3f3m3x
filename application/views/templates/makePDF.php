<?php

require(base_url("/assets/pdf/fpdf.php"));
//var_dump(base_url('/assets/pdf/fpdf.php'));

$pdf = new FPDF();

//if(isset($_POST)){

    $cliente = $print["cliente"];

    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);

    $pdf->Cell(40,10,'Hello ');

/*     $pdf->Cell(50,10,"Cliente ",1,0);
    $pdf->Cell(140,10,$cliente,1,1); */
    
    
    $pdf->Output('My_file.pdf','I');

//}

?>