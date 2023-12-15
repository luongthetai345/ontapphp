<?php
    $sql_sua = "SELECT * FROM sinhvien.sinh_vien WHERE id = '$_GET[id]' LIMIT 1";
    $query_sua= mysqli_query($mysqli, $sql_sua);
?>
<style>
    td{
        text-align: center;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
<h3>Sửa</h3>
    <table border="1px" width="50%" style="border-collapse: collapse;" class="table table-striped-columns">
    <form action="xuly.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
        <?php
            while($dong = mysqli_fetch_array($query_sua)){
        ?>
            <tr>
                <td>Id</td>
                <td><input type="text" name='id' value = "<?php echo $dong['id']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name='hoten' value = "<?php echo $dong['hoten']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td><input type="text" name='gioitinh' value = "<?php echo $dong['gioitinh']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td>
                    <input type="file" name='hinhanh' value = "<?php echo $dong['hinhanh']; ?>" class="form-control">
                    <img src="./imgs/<?php echo $dong['hinhanh']; ?>" alt="">
                </td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" name='quequan' value = "<?php echo $dong['quequan']; ?>" class="form-control"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Sửa" name='sua' class="btn btn-primary"></td>
            </tr>
        <?php
            }
        ?>
        </form>
    </table>