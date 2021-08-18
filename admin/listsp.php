<?php include('inc/conn.php') ?>
<div id="main">
  		<table>
  			<thead>
  				<th>ID</th>
  				<th>Image</th>
  				<th>Name</th>
  				<th>Price</th>
  				<th></th>
  				<th></th>
  			</thead>

  			<tbody>

  				<?php 
  					$query = "SELECT * FROM product";
  					$rs = mysqli_query( $conn, $query);
  					if( mysqli_num_rows( $rs ) > 0  )
  						while( $row = mysqli_fetch_assoc( $rs ) ){
  				?>
  					<tr>
  						<td><?= $row['Id'] ?></td>
  						<td><img class="anh-sp" src="../images/<?= $row['anh']?>"/></td>
  						<td><?= $row['ten']?></td>
  						<td><?= $row['giatien'] . "USD"?> </td> 
              <!-- chu y ten phai match voi ten cot trong db -->
  						<td><a href="suasp.php?id=<?= $row['Id']?>">Edit</a></td>
  						<td><a href="?idxoa=<?= $row['Id']?>">Delete</a></td>
  					</tr>

  				<?php 

  					}

  				?>
  					
  			</tbody>
  		</table>
  	</div><!-- #main -->