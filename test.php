<?php
$name = rand().'.pdf';
$command = "wkhtmltopdf http://localhost/pdf/cvtemplate/cv3.html ./pdf/".$name."";
$generate = shell_exec($command);
echo "pdf/".$name."";
exit;
?>