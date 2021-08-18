<?php
include('inc/conn.php');
include('inc/header.php');
?>
<div class="row">
<div class="leftcolumn">
<?php
if (!empty($_GET['page'])) { //hàm kiểm tra biến 
	$page=$_GET['page']-1;

}
else {
	$page=0;
}
$product_per_page =6;
$offset =$product_per_page * $page; //
$sql ="SELECT * FROM product LIMIT $offset,$product_per_page"; //gioi han
$rs=mysqli_query($conn, $sql);
if(mysqli_num_rows($rs) > 0){
	while ($row = mysqli_fetch_assoc($rs)) {
		?>
		<a href="single-product.php?id=<?php echo $row['id'] ?>" class='product'>
		<h2 class="product-title"><?php echo $row['ten'] ?></h2>
		<div class="product-image"><img src="images/<?php echo $row['anh'] ?>">
			
		</div>
		<p class="product-price"><?php echo $row['giatien']. "USD"?></p>
	    </a>
    <?php

	}
}		
?>
<?php include('inc/pagination.php'); ?>
	</div>
	<?php
	include('inc/footer.php');
?>