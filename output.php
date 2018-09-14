<?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            require '../vendor/autoload.php';

            use Spipu\Html2Pdf\Html2Pdf;

           
            //Recogemos el contenido de la vista
            ob_start(); 
            require_once '../certificado.php';
            $html=ob_get_clean(); 
         
            //Pasamos esa vista a PDF
             
            //Le indicamos el tipo de hoja y la codificación de caracteres
            $html2pdf=new HTML2PDF('P','A4','es','true','UTF-8');
         
            //Escribimos el contenido en el PDF
            $html2pdf->writeHTML($html);
            //Generamos el PDF
            $html2pdf->Output('PdfGeneradoPHP.pdf');
        ?>