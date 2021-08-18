<?php 
session_start(); //bat session 
  require_once("inc/conn.php");
  include('inc/header.php');
?>

<div class="row">
  <div class="leftcolumn">

<?php 
 $id = $_GET['id'];
 
  $sql = "SELECT * FROM product WHERE id = {$id}";
  $rs = mysqli_query($conn, $sql);

  while( $row = mysqli_fetch_assoc($rs) ){
?>       
    <div class="single-product">
      <h2 class="product-title"><?php echo  $row['ten']?></h2>
      <div class="product-image"><img src="images/<?php echo $row['anh'] ?>" /></div>
      <p class="product-price"> <?php echo $row['giatien'] . " USD " ?> </p>


      <form method="POST" action="cart.php">
        Enter the quantity: 
        <input type="number" name="sl" value="1" > <br>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" class="button-buy">Buy now!</button>        
      </form>      

      <div class="product-content">
      
      </div><!-- end product content -->

<?php 
  }// dont the while

 ?>
    </div>

  </div>

 <!-- END left column -->
<?php 
  include('inc/footer.php');
?>