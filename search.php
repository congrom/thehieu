<?php
include('inc/conn.php');
include('inc/header.php');

 $timkiem = "";

 if( !empty($_GET['s']) )
 {
 	$timkiem = $_GET['s'];
 }
?>

<div class="row">
	<div class="leftcolumn">
		<h3 class=""title> Search results for: <?= $timkiem ?></h3>
		<?php
		if( !empty( $timkiem ) ){
			$rs = mysqli_query($conn , "SELECT * FROM product WHERE ten LIKE '%{$timkiem}%' ");

		while ($row = mysqli_fetch_assoc($rs) ) {
			?>
			   <a href="single-product.php?id=<?php echo $row['Id']?>" class="product" >
			   	<h2 class="produc-title"><?php echo $row['ten'] ?></h2>
			   	<div class="product-image"><img src="images/<?php echo $row['anh'] ?>" /></div>
			   	<p class="product-price"><?php echo $row['giatien'] . " USD " ?></p>
			   </a>
			   <?php
			}	
		} 
		?>
	</div>
	<?php
	include('inc/footer.php');
	?>
</div>