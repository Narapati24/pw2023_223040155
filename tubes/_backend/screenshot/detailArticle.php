<?php
if (isset($_POST['screenshot'])) {
    $screenshotData = $_POST['screenshot'];
    $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $screenshotData));

    $filename = 'screenshot_' . time() . '.png';
    $filename1 = '../../_asset/img/reporting/' . $filename;
    $file = fopen($filename1, 'wb');
    fwrite($file, $imageData);
    fclose($file);

    // Simpan screenshot ke library atau folder yang diinginkan
    // Misalnya, jika Anda ingin menyimpan dalam folder "library" di direktori yang sama dengan upload.php:
    // $targetDirectory = '../../_asset/img/reporting/';
    // move_uploaded_file($filename, $targetDirectory . $filename);

    echo $filename;
} else {
    echo 'failed';
}
