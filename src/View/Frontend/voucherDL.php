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

                
            </head>
            <body>
                <header>
                    <img src="src/Public/images/defautLogo.jpg" alt="Card image cap">
                </header>
                <h5>Carte VIP</h5>
                <h6>La Conciergerie du Web</h6>
                <h6>'.htmlspecialchars($result['societyNameSeller']).'</h6>
                <hr>
                <h5>'.htmlspecialchars($_SESSION['conciergerieDUWebLastName']).' '.htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).'</h5>
                <h6>'.htmlspecialchars($result['nomArticle']).'</h6>
                <p>Prix Client= '.htmlspecialchars($result['reductionPriceArticle']).'&euro; (prix original '.htmlspecialchars($result['originalPriceArticle']).'&euro;)</p>
                <p>Validité jusqu\'au : '.htmlspecialchars($result['endDateArticle']).'</p>
                <hr>
                <p>N° de Bon : '.htmlspecialchars($codeVoucher).'</p>

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