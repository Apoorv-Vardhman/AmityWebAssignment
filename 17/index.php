<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>Numeric Array</h1>
      <?php
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "$value <br />";
         }
         
      ?>
   <h1>Associative Arrays</h1>
   <?php 
      $salaries = array("apoorv" => 40000, "amit" => 20000);
      echo $salaries['apoorv'] . "<br />";
      echo $salaries['amit'] . "<br />";
   ?>
   <h1>Multidimensional Arrays</h1>
   <?php 
      $employees = array(
         "emp1"=>array(
            'name'=>'Apoorv',
            'salary'=>40000
         ),
         "emp2"=>array(
            'name'=>'Amit',
            'salary'=>20000
         )
         );

      echo $employees['emp1']['name']."<br>";
      echo $employees['emp1']['salary']."<br>";
   ?>
</body>
</html>