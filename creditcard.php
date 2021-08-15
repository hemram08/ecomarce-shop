



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
			$delet = $cart->deletprod($dele);	
			
			
		}
		if($_SERVER['REQUEST_METHOD']=='POST'){
				$sesionId = session_id();
		
		$buy = $cart->deliverinsert($_POST,$sesionId );
	}  
		
	?>

	<style>
	.tabl{
		background:#60FCFF;
	}
.cardtable{
	height:300px;background:#60FCFF;
	
}
input[type="number_format"] {
    width: 350px;padding:8px;border:none;margin-left:5px;
}input:focus{outline:0;}

.expired{
	font-size:20px;
}
</style>
 <div class="main">
    <div class="content">
	<div class="cartpage col-md-6 tabl">
	<form action="" method="post">
    	<table class="cardtable">
		<tr class="cards">
		<td>Credit Card number</td>
		<td><input type="number_format" name="cardnomber" placeholder="16 digit number"/></td>
		</tr>
		<tr class="">
		<td>Expire date</td>
		<td><input class="expired" type="number_format" name="expiredate" placeholder="expire date"/>
		
		</td>
		</tr>
		<tr class="">
		<td>Credit Card number</td>
		<td><input type="number_format" name="threedigit" placeholder="three number"/></td>
		</tr>
		<tr class="">
		<td></td>
		<td><input class="btn btn-primary expired" type="submit" name="creditsubmit" value="enter"/></td>
		</tr>
		
		
		</table>
		</form>
		  </div>
    </div>
 </div>
<?php include 'Inc/footer.php';?>
