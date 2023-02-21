<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            background-color: magenta;
            border: 2px solid;
            width: 100px;
            height: 100px;
            text-align: center;
        }

        h2 {
            margin-top: 35px;
        }

        .num {
            display: flex;
        }
    </style>
</head>
<body>

<?php 

for ($i = 10; $i > 0; $i--) {
    $p = 1;
    echo '<div class="num">';
    for ($o = 0; $o < $i; $o++) {
        echo '<div class="box"><h2>' . $p++ . '</h2></div>';
    }
    echo '</div>';
}

?>

</body>
</html>