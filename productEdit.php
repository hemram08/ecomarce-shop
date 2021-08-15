

<?php include 'inc/header.php';

?>
<?php include 'inc/sidebar.php';
?>
<?php include  "../classes/Products.php";?>	
	<?php //include  "../classes/Addcategory.php";
	//include  "../classes/Addbrand.php";
	
	?>	
	
	
	
<div class="grid_10">
<?php 
	$prodct= new Products();
	if(!isset($_GET['editprod']) || $_GET['editprod']==NULL){
			echo "<script>window.locatiion='productlist.php';</script>";
			
		}else{
			$prodId = $_GET['editprod'];
		}
		
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$upda = $prodct->productUpdate($_POST,$_FILES,$prodId);
	}  
   ?>
    <div class="box round first grid">
        <h2>Product Update</h2>
		<div class="block"> 
     <span style="margin-left:8.3rem">	<?php 
	  if(isset($upda)){
		  echo $upda;
	  }
	  ?>	</span>
	  
	  <?php
			   $result = $prodct->selectprod($prodId);
			   if($result){
					while($val = $result->fetch_assoc()){
						
			   ?>
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
             <tr>
		  <td>
				<label>Product Name</label>
			</td>
			<td>
				<input type="text" value="<?php echo $val['produtname'];?>" name="produtname" class="medium" />
			</td>
        </tr>
		
		<tr>
			<td>
				<label>Category</label>
			</td>
			<td>
			
			<select id="select" name="categorId">
				<option>Select Category</option>
				<?php 
				
				$datas = $prodct->selectcat();
				if($datas ){
					foreach($datas as $key=>$values){	?>
						
			
			   <option <?php if($values['id']==$val['id']){ ?>
				   selected == "selected"
			   <?php }?> value="<?php echo $values['id'];?>">
				 <?php echo $values['categoryname'];?>
		 
		</option>
					<?php }  }?>
				 
			 </select>
 
			</td>
			</tr>
			<tr>
				<td>
				<label>Brand</label>
				</td>
				<td>
					<select id="select" name="brandId">
					<option>Select Brand</option>
					<?php 
				
				$datas = $prodct->selectbrand();
				if($datas ){
					foreach($datas as $key=>$values){
						
				?>
			
			  <option <?php if($values['id']==$val['id']){ ?>
				   selected == "selected"
			   <?php }?> value="<?php echo $values['id'];?>">
				 <?php echo $values['brandname'];?>
		 
</option>
			<?php }  }?>
		   
		  </select>
		</td>
	</tr>

	 <tr>
		<td style="vertical-align: top; padding-top: 9px;">
				<label>Description</label>
			</td>
			<td>
				<textarea class="tinymce" name="discripts"><?php echo $val['discripts'];?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Price</label>
			</td>
			<td>
			  <input type="text" value="<?php echo $val['price'];?>" name="price" class="medium" />
			</td>
		</tr>
	
		<tr>
			<td>
				<label>Upload Image</label>
			</td>
			<td>
			<img src="<?php echo $val['image'];?>" width="50px" height="50px"></br>
				<input type="file" name="image"/>
			</td>
		</tr>
		
		<tr>
			<td>
				<label>Product Type</label>
			</td>
			<td>
			<!--select option a data select kora-->
				<select id="select" name="type">
					<option>Select Type</option>
					<?php if($val['type'] == 1){ ?>
					 <option selected=="selected" value="1">Featured</option>
					<option value="2">General</option>
					<?php }else{?>
					<option value="1">Featured</option>
					<option selected=="selected" value="2">General</option>
					<?php }?>
				</select>
			</td>
		</tr>

	   
		  <tr>
			<td></td>
			<td>
				<input type="submit" name="submit" Value="Update" />
			</td>
		</tr>
		
		
	</table>
	</form>
	 <?php }  }?>
	  
	
	
 
</div>

</div>



</div>



<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
               	

<?php include 'inc/footer.php';?>


