 <?php 
session_start();

  require_once("inc/conn.php");
  include( 'inc/header.php' );


  if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
      $id = $_POST['id'];

      if( empty( $_SESSION['cart'][$id] ) ){
        $q = mysqli_query( $conn , "SELECT * FROM product WHERE id={$id}" );    
        $product = mysqli_fetch_assoc($q);

        //them product nay vao trong session 

        $_SESSION['cart'][$id] = $product;
        $_SESSION['cart'][$id]['sl'] = $_POST['sl']; 
      }else{
        //neu sp no ton tai trong seession roi 
        $slMoi = $_SESSION['cart'][$id]['sl'] + $_POST['sl']; //sl cu + sl moi 
        $_SESSION['cart'][$id]['sl'] = $slMoi;

      }


      

      // $arr = [
      //   25 => [
      //     //thong tin cua product 
      //     'id' => '25',
      //     'TieuDe' => 'asdasd', 
      //     'NoiDung' => 'asdasd',
      //     'sl' => 5,
      //   ],
      // ]
  } // post 
 ?>



<div class="row">
  <link rel="stylesheet" type="text/css" href="css/card.css">
  <div class="leftcolumn">
    <h3 style="text-align: center;" class="title">Cart</h3>
    <?php
      //loop tu section lay product ra 
if( !empty( $_SESSION['cart'] ) )
      foreach( $_SESSION['cart'] as $item ):
    
      ?>
          <a href="single-product.php?id=<?php echo $item['Id']?>" class="product">
            <h2 class="product-title"><?php echo $item['ten'] ?></h2>
            <div class="product-image"><img src="images/<?php echo $item['anh'] ?>" /></div>
            <p class="product-price"><?php echo $item['giatien'] . " USD "  ?></p>
            <p class="sl">Amount: <?php echo $item['sl']  ?></p>
          </a>
    <?php 
  endforeach;

  else 
    echo "ko có sp trong giỏ hàng! ";

?>
  <div id="total" class="clearfix">
        <?php
    $tong = 0 ; 
      foreach(  $_SESSION['cart'] as $item  ){
        $tong =$tong + ($item['sl'] * $item['giatien']);
      }

    ?>
    <h3>Into money: <?php echo number_format($tong) ?> USD</h3>
  </div>
 

  </div>
 <!-- END left column -->

<!--<?php 
  //include('inc/footer.php');
?>