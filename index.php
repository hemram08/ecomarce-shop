<style>
.listview_1_of_2.images_1_of_2 {
    margin-left: 0;
</style>
<?php
include 'Inc/header.php';


//log

?>

<?php $filepath = realpath(dirname(__FILE__));
//include ($filepath.'/classes/Charts.php');
//include ($filepath.'/../helpers/Helpar.php');
  ?>
	 <?php 
		$cart = new Charts();
		$formate = new Helpar();

   ?>
	<div class="header_bottom">
		<div class="header_bottom_left">
		
			<div class="section group">
			<?php
			$row = $cart->letestpro();
			if($row){
				while($pro = $row->fetch_assoc()){
		
			?>
				<div class="listview_1_of_2 images_1_of_2">
				
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="admin/<?php echo $pro['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2><?php echo $pro['produtname'];?></h2>
						<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
						 <del>$<?php echo $pro['deletprice'];?></del>
						 <p><span>$<?php echo $pro['price'];?></span></p>
						<div class="button"><span><a href="preview.php?detail=<?php echo $pro['id'];?>">Add to cart</a></span></div>
				   </div>
				   							 
			   </div>
			<?php } }?>
			
			<?php
			$six = $cart->letestsix();
			if($six){
				while($pro = $six->fetch_assoc()){
		
			?>
			   <div class="listview_1_of_2 images_1_of_2">
				
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="admin/<?php echo $pro['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2><?php echo $pro['produtname'];?></h2>
						<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
						 <del>$<?php echo $pro['deletprice'];?></del>
						 <p><span>$<?php echo $pro['price'];?></span></p>
						<div class="button"><span><a href="preview.php?detail=<?php echo $pro['id'];?>">Add to cart</a></span></div>
				   </div>
				   							 
			   </div>
			   	<?php } }?>
				<?php
			$seven = $cart->letestseven();
			if($seven){
				while($pro = $seven->fetch_assoc()){
		
			?>
			   <div class="listview_1_of_2 images_1_of_2">
				
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="admin/<?php echo $pro['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2><?php echo $pro['produtname'];?></h2>
						<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
						 <del>$<?php echo $pro['deletprice'];?></del>
						 <p><span>$<?php echo $pro['price'];?></span></p>
						<div class="button"><span><a href="preview.php?detail=<?php echo $pro['id'];?>">Add to cart</a></span></div>
				   </div>
				   							 
			   </div>
			   	<?php } }?>
			   <?php
			$eght = $cart->letesteght();
			if($eght){
				while($pro = $eght->fetch_assoc()){
		
			?>
             <div class="listview_1_of_2 images_1_of_2">
				
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="admin/<?php echo $pro['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2><?php echo $pro['produtname'];?></h2>
						<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
						 <del>$<?php echo $pro['deletprice'];?></del>
						 <p><span>$<?php echo $pro['price'];?></span></p>
						<div class="button"><span><a href="preview.php?detail=<?php echo $pro['id'];?>">Add to cart</a></span></div>
				   </div>
				   							 
			   </div>
			    	<?php } }?>
			</div>

		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
					     <li><img src="images/shos.jpg" alt="" height="450px"/></li>
						<li><img src="images/sari3.jpg" alt="" height="450px"/></li>
						<li><img src="images/sirt1.jpg" alt="" height="450px"/></li>
						<li><img src="images/sirt2.jpg" alt="" height="450px"/></li>
						<li><img src="images/sirt4.jpg" alt="" height="450px"/></li>
						<li><img src="images/download.png" alt="" height="450px"/></li>
						<li><img src="images/store.png" alt="" height="450px"/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>

    		</div>
    		<div class="clear"></div>
    	</div>
		
	      <div class="section group">
		  <?php
				 $caht = $cart->getproduct();
				 if($caht){
					 while($val=$caht->fetch_assoc()){
				
				  ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="admin/<?php echo $val['image'];?>" alt="" /></a>
					 <h2><?php echo $val['produtname'];?></h2>
					 <p><?php echo $formate->textshort($val['discripts'],100);?></p>
					 <p><span class="price">$<?php echo $val['price'];?></span><span class="price">Rs.<del><?php echo $val['deletprice'];?></del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php echo $val['id'];?>" class="details">Details</a></span></div>
				</div>
				  <?php } }?>
				
				
			</div>
			
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			<?php
				 $caht = $cart->getgeneralpro();
				 if($caht){
					 while($val=$caht->fetch_assoc()){
				
				  ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="admin/<?php echo $val['image'];?>" alt="" /></a>
					 <h2><?php echo $val['produtname'];?> </h2>
					 <p><span class="price">$<?php echo $val['price'];?></span><span class="price">$<del><?php echo $val['deletprice'];?></del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php echo $val['id'];?>" class="details">Details</a></span></div>
				</div>
				  <?php } }?>
				
			</div>

<div class="content_bottom">
    		<div class="heading">
    		<h3>New Shoes</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/shoes-img1.png" alt="" /></a>
					 <h2>new model</h2>
					 <p><span class="price">$50</span><span class="price">$<del>60</del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php 
				     //echo $val['id'];?>" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/shoes-img2.png" alt="" /></a>
					 <h2>new model</h2>
					 <p><span class="price">$50</span><span class="price">$<del>55</del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php 
				     //echo $val['id'];?>" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/shoes-img3.png" alt="" /></a>
					 <h2>new model</h2>
					 <p><span class="price">$50</span><span class="price">$<del>64</del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php 
				     //echo $val['id'];?>" class="details">Details</a></span></div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/shoes-img5.png" alt="" /></a>
					 <h2>new model</h2>
					 <p><span class="price">$50</span><span class="price">$<del>70</del></span></p>
				     <div class="button"><span><a href="preview.php?detail=<?php 
				     //echo $val['id'];?>" class="details">Details</a></span></div>
				</div>
				  
				
			</div>




    </div>
 </div>
<?php include 'Inc/footer.php';?>