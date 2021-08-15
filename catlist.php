<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include  "../classes/Addcategory.php";
?>

   <?php
		$addcat = new Addcategory();
	?>
	<?php
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$data = $addcat->deletecat($id);
	}
	
	
	?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
				
				
				<?php 
				if(isset($data)){ 
					echo $data;
				
				} ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
					
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					
					</thead>
					<tbody>
					<?php
					$data = $addcat->selectdata();
					if($data){
						$i=0;
						while($val = $data->fetch_assoc()){
							$i++;
					
					?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $val['categoryname'];?></td>
							<td><a href="editcat.php?cat=<?php echo $val['id'];?>">Edit</a> || <a onclick="return confirm('are you sure delete')" href="?delete=<?php echo $val['id'];?>">Delete</a></td>
						</tr>
						<?php }  }?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

