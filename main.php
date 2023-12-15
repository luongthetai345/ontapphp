<?php
    if(isset($_GET['action']) && $_GET['query']){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $tam = '';
        $query='';
    }
    if($tam == 'quanlysinhvien' && $query == 'them'){
        include('them.php');
        include('lietke.php');
    }else if($tam == 'quanlysinhvien' && $query == 'sua'){
        include('sua.php');
    }else if($tam == 'quanlysinhvien' && $query == 'timkiem'){
        include('timkiem.php');
    }
    else{
        include('welcome.php');
    }
?>