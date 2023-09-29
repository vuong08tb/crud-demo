<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách đã tạo</title>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Danh sách sinh viên đã được nhập bởi người lập trình </h1>
      
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Thêm 
</button>
<br>
        <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Mã sinh viên</th>
        <th>Họ tên</th>
        <th>Lớp</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php
   
    require_once 'ketnoi.php';
  
    $lietke_sql = "SELECT * FROM sinhvien order by lop, hoten";

    $result = mysqli_query($conn, $lietke_sql);
  
    while ($r = mysqli_fetch_assoc($result)){
    ?>
      <tr>
        <td><?php echo $r['masv'];?></td>
        <td><?php echo $r['hoten'];?></td>
        <td><?php echo $r['lop'];?></td>
        <td><a href="edit.php?sid=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a> 
        <a onclick="return confirm('Bạn có muốn xoá sinh viên này không');" href="xoa.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xoá</a></td>
      </tr>
    <?php
    }
    ?>
    </tbody>  
</table>

    </div>

  
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

   
      <div class="modal-header">
        <h4 class="modal-title">Form thêm sinh viên</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

    
      <div class="modal-body">
      <form action="them.php" method="post">
            <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id="hoten" class="form-control" name="hoten">
            </div>
            <div class="form-group">
                <label for="masv">Mã sinh viên</label>
                <input type="text" name="masv" id="masv" class="form-control">
            </div>
            <div class="form-group">
                <label for="lop">Lớp</label>
                <input type="text" id="lop" name="lop" class="form-control">
            </div>
            <button class="btn btn-success">Thêm sinh viên</button>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>
</html>
