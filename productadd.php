

<?php include 'inc/header.php';

?>
<?php include 'inc/sidebar.php';
?>
<?php include  "../classes/Products.php";?>	
	
	
	
	
<div class="grid_10">
<?php 
	$prodct= new Products();
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$datas = $prodct->productInsert($_POST,$_FILES);
	}  
   ?>
    <div class="box round first grid">
        <h2>Add New Product</h2>
		<div class="block"> 
     <span style="margin-left:8.3rem">	<?php 
	  if(isset($datas)){
		  echo $datas;
	  }
	  ?>	</span>
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
             <tr>
		  <td>
				<label>Product Name</label>
			</td>
			<td>
				<input type="text" placeholder="Enter Product Name..." name="produtname" class="medium" />
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
					foreach($datas as $key=>$values){
						
				?>
			   <option value="1"><?php echo $values['categoryname'];?></option>
			  <?php } }?>
				 
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
			
			   <option value="1"><?php echo $values['brandname'];?></option>
			  <?php } }?>
				   
				  </select>
				</td>
			</tr>
		
			 <tr>
				<td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="discripts"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                      <input type="text" placeholder="Enter Price..." name="price" class="medium" />
                    </td>
                </tr>
             <tr>
                    <td>
                        <label>delete Price</label>
                    </td>
                    <td>
                      <input type="text" placeholder="Enter delete Price..." name="deletprice" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image"/>
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Product Type</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <option>Select Type</option>
                            <option value="1">Featured</option>
                            <option value="2">Non-Featured</option>
                        </select>
                    </td>
                </tr>

               
                  <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
				
				
            </table>
            </form>
			 
              
			
			
		 
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


