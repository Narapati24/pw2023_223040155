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
            border: 3px solid;
            width: 100px;
            height: 100px;
            text-align: center;
        }

        h2 {
            margin-top: 35px;
        }

        .num2, .num3 {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>1</h2>
    </div>
    <div class="num2">
        <div class="box">
            <h2>2</h2>
        </div>
        <div class="box">
            <h2>2</h2>
        </div>
    </div>
    <div class="num3">
        <div class="box">
            <h2>3</h2>
        </div>
        <div class="box">
            <h2>3</h2>
        </div>
        <div class="box">
            <h2>3</h2>
        </div>
    </div>
</body>
</html>