<?php
    $tukhoa = $_GET['tukhoa'];
    $sql_timkiem = "SELECT * FROM sinhvien.sinh_vien WHERE id = '".$tukhoa."' LIMIT 1";
    $query_timkiem = mysqli_query($mysqli, $sql_timkiem);
?>
<style>
    td{
        text-align: center;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
<h3>Tìm kiếm</h3>
    <table border="1px" width="50%" style="border-collapse: collapse;" class="table table-striped-columns">
    <form method="post" enctype="multipart/form-data">
        <?php
            while($dongt = mysqli_fetch_array($query_timkiem)){
        ?>
            <tr>
                <td>Id</td>
                <td><input type="text" name='id' value = "<?php echo $dongt['id']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name='hoten' value = "<?php echo $dongt['hoten']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td><input type="text" name='gioitinh' value = "<?php echo $dongt['gioitinh']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><img src="./imgs/<?php echo $dongt['hinhanh']; ?>" alt=""></td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" name='quequan' value = "<?php echo $dongt['quequan']; ?>" class="form-control"></td>
            </tr>
        <?php
            }
        ?>
        </form>
    </table>