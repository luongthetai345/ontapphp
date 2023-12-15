<?php
    $mysqli = mysqli_connect('localhost', 'root', 'Tai@02102003', 'sinhvien');
    if(mysqli_connect_errno()){
        echo "Error connectiong to MySQL: ".mysqli_connect_error();
    }
?>