<?php
//Require autoload ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<!doctype html>
<html lang="fr">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
    </head>
    <body>
        <h1 style="border:solid;">Ceci est un test</h1>
    </body>
</html>');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();


use Dompdf\Options;

$options = new Options();
$options->set('defaultFont', 'Courier');
$dompdf = new Dompdf($options);
?>