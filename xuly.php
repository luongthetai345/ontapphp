<?php
    include('config.php');
    $id = $_POST['id'];
    $hoten = $_POST['hoten'];
    $gioitinh = $_POST['gioitinh'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $quequan = $_POST['quequan'];
    if(isset($_POST['them'])){
        move_uploaded_file($hinhanh_tmp, "imgs/".$hinhanh);
        $sql_them = "INSERT INTO sinhvien.sinh_vien(id, hoten, gioitinh, hinhanh, quequan) VALUE('".$id."', '".$hoten."', '".$gioitinh."', '".$hinhanh."', '".$quequan."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:index.php?action=quanlysinhvien&query=them');
    }else if(isset($_POST['sua'])){
        if($hinhanh == ''){
            $sql_update = "UPDATE sinhvien.sinh_vien SET id='".$id."', hoten='".$hoten."', gioitinh='".$gioitinh."'
            , hinhanh='".$hinhanh."', quequan='".$quequan."' WHERE id = '$_GET[id]'";
           
        }else{
            move_uploaded_file($hinhanh_tmp, "imgs/".$hinhanh);
            $sql = "SELECT * FROM sinhvien.sinh_vien WHERE id = '$_GET[id]' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('imgs/'.$row['hinhanh']);
            }
            $sql_update = "UPDATE sinhvien.sinh_vien SET id='".$id."', hoten='".$hoten."', gioitinh='".$gioitinh."'
            , hinhanh='".$hinhanh."', quequan='".$quequan."' WHERE id = '$_GET[id]'";
        }
        mysqli_query($mysqli, $sql_update);
        header('Location:index.php?action=quanlysinhvien&query=them');
    }else {
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM sinhvien.sinh_vien WHERE id = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:index.php?action=quanlysinhvien&query=them');
    }
?>