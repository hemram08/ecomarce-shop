

<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';
?>
<?php include  "../classes/Addbrand.php";
?>
        
<div class="grid_10">

		<?php
		$addbrand = new Addbrand();
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$brands = $_POST['brands'];
			$brands = $addbrand->brandInsert($brands);
		}
		
		?>
		
		
            <div class="box round first grid">
                <h2>Add New Brand</h2>
               <div class="block copyblock"> 
			   <?php
			   if(isset($brands)){
			echo $brands;
		
		}
			   ?>
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." class="medium" name="brands" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>