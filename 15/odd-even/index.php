<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="odd_even.css">
    <?php
        $message = "";
        $response = false;
        if(isset($_POST['submit']))
        {
            $number =  $_POST['number'];
            if($number%2==0) {
                $response = true;
                $message = $number." is an even number";
            }else{
                $message = $number." is an odd number";
            }
        }
    ?>
</head>
<body>
    <div class="container">
        <form class="form" method="post">
            <h3 style="text-align: center;">Check Even Odd Number</h3>
            <?php
                if(isset($message) && $message!="")
                {
                    if($response)
                    {
                        ?>
                        <div class="alert alert-success">
                            <h3><?php echo $message ?></h3>
                        </div>
                    <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">
                            <h3><?php echo $message ?></h3>
                        </div>
            <?php
            }
                }
            ?>
            <div class="form-group">
                <label>Number</label>
                <input class="form-control" type="number" required name="number" placeholder="Enter Number">
            </div>

            <div class="form-btn">
                <button type="submit" name="submit" class="btn">Check Number</button>
            </div>
        </form>
    </div>
</body>
</html>