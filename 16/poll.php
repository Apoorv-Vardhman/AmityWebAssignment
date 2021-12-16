<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "amity";

    $conn = new mysqli($servername, $username, $password,$database);
    $value = $_POST['answer'];
    $query = "insert into poll(value) values('$value')";
    mysqli_query($conn,$query);
    
    echo json_encode($value,true);