<?php
    //Require autoload ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    require 'vendor/autoload.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;
    
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('
        <!doctype html>
        <html lang="fr">
            <head>
                <title>Title</title>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            </head>
            <body>
                <header>
                    <figure style="text-align:center">
                        <img src="src/Public/images/logoTywebServices.jpg" " alt="Card image cap">
                    </figure>
                </header>   <h2 class="MgHtBs blanc">CARTE VIP</h2>
                <i class="fa fa-scissors"></i>
                <div style="border: 4px dashed #1c1918; text-align:center">
                        <span>
                        <h1>La Conciergerie du Web</h1>
                        <hr>
                        <h3>Nom Entreprise : '.htmlspecialchars($result['societyNameSeller']).'</h5>
                        </span>
                        <h3>Nom Prénom : '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']).' '.htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).'</h3>
                        <hr>
                        <h2>Nom de l\'enseigne</h2>
                        <h3>'.htmlspecialchars($result['nomArticle']).'</h3>
                        <p> Prix Client= '.htmlspecialchars($result['reductionPriceArticle']).'&euro; (prix original '.htmlspecialchars($result['originalPriceArticle']).'&euro;<i class="fa fa-tag vuebutton"></i>) </p>
                        <p>Validité jusqu\'au : '.htmlspecialchars($result['endDateArticle']).' </p>
                        <hr>
                        <p><h3>N° de Bon : '.htmlspecialchars($codeVoucher).'</h3></p>
                </div>
            </body>
        </html>
    ');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();


    use Dompdf\Options;

    $options = new Options();
    $options->set('defaultFont', 'Courier');
    $dompdf = new Dompdf($options);
?>