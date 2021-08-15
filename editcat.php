



<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include  "../classes/Addcategory.php";
?>
        
<div class="grid_10">

		<?php
		$addcat = new Addcategory();
	
		if(!isset($_GET['cat']) || $_GET['cat']==NULL){
			echo "<script>window.locatiion='catlist.php';</script>";
			
		}else{
			$id = $_GET['cat'];
		}
		
	
		
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$category = $_POST['category'];
			$data = $addcat->cateupdate($category,$id );
		}
		
		?>
		
            <div class="box round first grid">
                <h2>Update Category</h2>
               <div class="block copyblock"> 
			   <?php
			   if(isset($data)){
				  
			  echo $data;
		
	     	}
			   ?>
			   <?php
			   $result = $addcat->editcat($id);
			   if($result){
					while($val = $result->fetch_assoc()){
						
			   ?>
                 <form action="" method="POST">
				 
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $val['categoryname'];?>"class="medium" name="category" />
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