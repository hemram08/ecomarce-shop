

<?php 
 //$filepath = realpath(dirname(__FILE__));
 include 'Inc/header.php';
//include ($filepath.'/../classes/Charts.php');
//include ($filepath.'/../helpers/Helpar.php');
  ?>
<?php 
		$cart = new Charts();
		$formate = new Helpar();

   ?><?php
   if(!isset($_GET['dele']) || $_GET['dele']==NULL){
			echo "<script>window.locatiion='productlist.php';</script>";
			
		}else{
			
			$dele = preg_replace('/[^-a-zA-Z0-9_]/','',$_GET['dele']);
			$id = $cart->deletprod($dele);	
			
			
		}
		
?>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
	         $chardid = $_POST['chardid'];
			$quantiti = $_POST['quantiti'];
		
		$buy = $cart->quantiupd($chardid,$quantiti,);
	}  

?>
<div class="main">
<div class="content">
<div class="cartoption">		
<div class="cartpage">
	<h2>Your Cart</h2>
	<?php if(isset($buy)){
		echo $buy;
	}?>
	<?php if(isset($id)){
		echo $id;
	}else{
		
	}
	
	
	?>
		<table class="tblone" style="border-bottom:1px solid #DDDDDD">
			<tr>
				<th width="10%">Sl no</th>
				<th width="20%">Product Name</th>
				<th width="20%">Image</th>
				<th width="15%">Quantity</th>
				<th width="10%">Price</th>
				<th width="15%">Total Price</th>
				<th width="5%">Action</th>
			</tr>
			 <?php
			 
			 $caht = $cart->selectprod();
			
			 if($caht){
				 $i = 0;
				 $sum = 0;
				  $qua = 0;
				  $to = 0;
				 while($val=$caht->fetch_assoc()){
			$i++;
	  ?>
	<tr>
	
		 <td><?php echo $i; ?></td>
		<td><?php echo $val['prodname']; ?></td>
		<td><img src="admin/<?php echo $val['image']; ?>" alt="" style="width:80px;height:80px; border-radius: 50%;" /></td>
		
		<td>
			<form action="" method="post">
			<input type="hidden" name="chardid" value="<?php 
				
				echo $val['id'];
				?>"/>
				<input type="number" name="quantiti" value="<?php 
				
				echo $val['quetiti'];
				?>"/>
				<?php  $qua = $qua+$val['quetiti'];
				 Session::set('cart',$qua);?>
				 
				<input type="submit" name="submit" value="Update"/>
				


			</form>
		</td>
		<td><?php echo $val['price']; ?></td>
		<td><?php $total = $val['price'] * $val['quetiti']; echo $total; ?></td>
		<td><a class="btn btn-danger" onclick="return confirm('are you sure to delete ?')" href="?dele=<?php echo $val['id']; ?>">delete</a></td>
		<?php 
		if($val['status'] == 1){ ?>
		<td><a class="" onclick="return confirm('are you sure to delete ?')" href="?dele=<?php echo $val['id']; ?>"> approped</a></td>
		<?php }else{ ?>
		<td><a class="" onclick="return confirm('are you sure to delete ?')" href="?dele=<?php echo $val['id']; ?>"> snding</a></td>
		<?php } ?>
	</tr>
	  
	<?php } ?>
	
</table>

<table style="float:right;text-align:left;" width="40%">
	<tr>
		<th>Sub Total : </th>
		<td>Rs.<?php 
		$som =$qua*$total;
		echo $som; ?></td>
	</tr>
	<tr>
	
		<th>VAT : </th>
		<td>10%</td>
	</tr>
	
	<tr>
		<th>Grand Total :</th>
		<td><?php 
		$vat = $som * 0.1;
		$grandtotal = $vat + $som;
		echo $grandtotal;

		?></td>
			</tr>
			<?php  }?>
	   </table>
	</div>
	<div class="shopping">
		<div class="shopleft">
			<a href="index.php"> <img src="images/shop.png" alt="" /></a>
		</div>
		<div class="shopright">
			<a href="order.php"> <img src="images/check.png" alt="" /></a>
		</div>
	</div>
</div>  	
<div class="clear"></div>
</div>
 </div>
<?php include 'Inc/footer.php';?>
