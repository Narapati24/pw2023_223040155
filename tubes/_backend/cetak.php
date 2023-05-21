<?php

require_once __DIR__ . '/plugin/vendor/autoload.php';

$html = '';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
