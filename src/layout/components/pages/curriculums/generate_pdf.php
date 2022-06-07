<?php
require_once '../../../../frontend/assets/vendor/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$conn = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

$sql = 'SELECT * FROM cv';
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$html = '

 <!DOCTYPE html>
 <html lang="en">
    <?php
        include_once "../../../../frontend/assets/includes/header_resources/header_resources.php";
    ?>
 <body>
     
    <div class="container-fluid">
        <div class="row">
            <h1>HOLA</h1>
        </div>
    </div>


    <?php
        include_once "../../../../frontend/assets/includes/footer_resources/footer_resources.php";
    ?>
 </body>
 </html>

';
?>
