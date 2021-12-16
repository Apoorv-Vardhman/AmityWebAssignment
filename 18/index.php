<?php
    if($_POST['email'])
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "select * from students where email='$email' and password='$password' limit 1";
        $conn = new mysqli("localhost","root","","amity");
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            echo "Login Successful";
        }
    }else{ ?>
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
        <div class="container">
            <form class="form" method="post">
                <h1 style="text-align: center;">Login</h1>
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control" type="email" required name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" required name="password" placeholder="Enter password">
                </div>
                <div class="form-btn">
                    <button type="submit" class="btn" name="submit">Register</button>
                </div>
            </form>
        </div>
        </body>
        </html>
<?php    }
?>
