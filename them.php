<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<form action="xuly.php" method="post" enctype="multipart/form-data">
    <table class="table table-striped-columns">
        <tr>
            <td>Id: </td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Họ tên: </td>
            <td><input type="text" name="hoten"></td>
        </tr>
        <tr>
            <td>Giới tính: </td>
            <td><input type="text" name="gioitinh"></td>
        </tr>
        <tr>
            <td>Hình ảnh: </td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Quê quán: </td>
            <td><input type="text" name="quequan"></td>
        </tr>
        <tr>
            <td><input type="submit" name="them" value="Thêm" class="btn btn-primary"></td>
        </tr>
    </table>
</form>