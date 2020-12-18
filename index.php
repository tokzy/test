<?php
// include autoloader
//require_once 'vendor/autoload.php';
//require_once __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/autoload.php';
$doing = "you are doing well";
//$html = file_get_contents("./cvtemplate/cv1.html");

//$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
//$mpdf->WriteHTML($html);
//$mpdf->Output();


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = file_get_contents("./cvtemplate/cv1.php");
$filename = "newpdffile";

$dompdf->setPaper('A4', 'portrait');
$dompdf->set_option( 'isHtml5ParserEnabled', true);
$dompdf->set_option( 'isRemoteEnabled', true);
$dompdf->set_option( 'isPhpEnabled', true );
$dompdf->loadHtml( $html, 'UTF-8' );
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream($filename,array("Attachment"=>0));


/*$path = 'img/test.jpg';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
echo $base64;*/









?>
