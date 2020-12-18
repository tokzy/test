<?php 
require __DIR__ . '/vendor/autoload.php';

use Knp\Snappy\Pdf;

$snappy = new Pdf('./vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
//$snappy->setOption('allow', array('./pdf', './pdf2'));
// or you can do it in two steps
//$snappy = new Pdf();
//$snappy->setBinary('/usr/local/bin/wkhtmltopdf');

//$snappy = new Pdf('/usr/local/bin/wkhtmltopdf');
//header('Content-Type: application/pdf');
//echo $snappy->getOutput('localhost/pdf/cvtemplate/cv3.html');
$get = file_get_contents('./cvtemplate/cv3.html');
$test = $snappy->generateFromHtml($get, './pdf/'.rand().'.pdf');
//return json_encode(['url' => 'ok']);










//$execute = system('C:\\usr/localbin/wkhtmltopdf localhost/pdf/cvtemplate/cv3.html cv3.pdf');
//if($execute): echo "true";endif;

?>