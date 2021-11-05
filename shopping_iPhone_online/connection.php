<?php
    $conn = pg_connect("postgres://cvmnnndmvkovai:9b12529fc5ffe44d0a80531a567d7d5363e193185598022eae5a6471dcbd8f95@ec2-54-147-207-184.compute-1.amazonaws.com:5432/d1l7r5ilamie7u");

    if(!$conn){
        die("Can not connect database");
    } 
    //$conn = mysqli_connect('localhost', 'root', '', 'shoping_online') or die("Can not connect database".mysqli_connect_error());
?>