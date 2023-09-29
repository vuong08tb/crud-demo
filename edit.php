<?php

$id = $_GET['sid'];


require_once 'ketnoi.php';


$edit_sql = "SELECT * FROM sinhvien WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit sinh vien</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Form thêm sinh viên</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
            <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten']?>">
            </div>
            <div class="form-group">
                <label for="masv">Mã sinh viên</label>
                <input type="text" name="masv" id="masv" class="form-control"  value="<?php echo $row['masv']?>">
            </div>
            <div class="form-group">
                <label for="lop">Lớp</label>
                <input type="text" id="lop" name="lop" class="form-control"  value="<?php echo $row['lop']?>">
            </div>
            <button class="btn btn-success">Cập nhật thông tin</button>
        </form>
    </div>
</body>

</html>