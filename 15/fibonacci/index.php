<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $data = array();
    $num1 = 0;
    $num2 = 1;
    array_push($data,$num1);
    array_push($data,$num2);
    while (sizeof($data)<10)
    {
        $temp = $num1+$num2;
        array_push($data,$temp);
        $num1 = $num2;
        $num2 = $temp;
    }
?>
    <div class="heading">
        <h1 class="text-center">First 10 Fibonacci numbers </h1>
    </div>
    <div class="container">
        <?php
            foreach ($data as $d){ ?>
                <div class="item">
                    <h1><?php echo $d; ?></h1>
                </div>
        <?php    }
        ?>
    </div>
</body>
</html>
