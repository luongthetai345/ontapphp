<?php
    $sql_lietke = "SELECT * FROM sinhvien.sinh_vien";
    $query_lietke = mysqli_query($mysqli, $sql_lietke);
?>
<style>
        td{
            text-align: center;
        }
        tr th{
            justify-content: center;
            text-align: center;
        }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<h3>Danh sách sinh viên</h3>
<form class="d-flex" role="search" method="POST">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="tukhoa">
    <button class="btn btn-outline-success" type="submit"><a href="index.php?action=quanlysinhvien&query=timkiem&tukhoa=<?php echo $_POST['tukhoa']; ?>" style="text-decoration: none; color: green;">Tìm kiếm</a></button>
</form>
<table border="1px" style="border-collapse: collapse;"  class="table table-striped-columns">
    <tr>
        <th>Id</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
        <th>Hình ảnh</th>
        <th>Quê quán</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($query_lietke)){
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['hoten']; ?></td>
        <td><?php echo $row['gioitinh']; ?></td>
        <td><img src="./imgs/<?php echo $row['hinhanh']; ?>" width="250px" height="200px"></td>
        <td><?php echo $row['quequan']; ?></td>
        <td>
            <button class="btn btn-danger"><a href="xuly.php?id=<?php echo $row['id']; ?> " style="text-decoration: none; color: white;">Xóa</a></button>
            <button class="btn btn-success"><a href="index.php?action=quanlysinhvien&query=sua&id=<?php echo $row['id']; ?>" style="text-decoration: none; color: white;">Sửa</a></button>
        </td>
    </tr>
    <?php
        }
    ?>
</table>