



<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include  "../classes/Addbrand.php";
?>
        
<div class="grid_10">

		<?php
		$addbrand = new Addbrand();
	
		if(!isset($_GET['brand']) || $_GET['brand']==NULL){
			echo "<script>window.locatiion='catlist.php';</script>";
			
		}else{
			$brandId = $_GET['brand'];
		}
		
	
		
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$brands = $_POST['brands'];
			$branddata = $addbrand->brandupdate($brands,$brandId );
		}
		
		?>
		
            <div class="box round first grid">
                <h2>Update Category</h2>
               <div class="block copyblock"> 
			   <?php
			   if(isset($branddata)){
				  
			  echo $branddata;
		
	     	}
			   ?>
			   <?php
			   $result = $addbrand->editbrand($brandId);
			   if($result){
					while($val = $result->fetch_assoc()){
						
			   ?>
                 <form action="" method="POST">
				 
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $val['brandname'];?>"class="medium" name="brands" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
					<?php }  }?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>