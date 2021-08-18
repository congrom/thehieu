<?php
include( "../inc/conn.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$tensp = $_POST['tensp'];
	$mota = $_POST['noidung'];
	$giasp= $_POST['giasp'];
$sql = "INSERT INTO product(ten, noidung, giasp ) VALUES (?, ?, ?,)";
	$stmt = mysqli_prepare($conn , $sql);
	mysqli_stmt_bind_param( $stmt, "ssd" , $tensp, $mota, $giasp);

	if(mysqli_stmt__execute($stmt) ){
		echo "đã thêm sản phẩm thành công";
	} else{
		echo "lỗi : " . mysql_error($conn);
	}
}
include ("inc/header.php");
?>
  
   <form class="form" method="post">
   	<label>Nhap ten sp</label>
   	<input type="text" name="tensp" />
   	<label>Nhap gia sp</label>
   	<input type="number" name="giasp">
   	<label>Nhap mo ta sp</label>
   	<textarea name="noidung"></textarea>
   	<label>Chon anh sp</label>
   	<input type="file" name="anhsp">
   	<input type="submit" name="submit" value="Them">
   </form>
   <?php
   include ("inc/footer.php");