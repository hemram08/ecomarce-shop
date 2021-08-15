

<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include  "../classes/Addbrand.php";
?>
        
   <?php
		$addbrand = new Addbrand();
	?>
	<?php
	if(isset($_GET['branddelete'])){
		$delId = $_GET['branddelete'];
		$delbrand = $addbrand->deletebrand($delId);
	}
	
	
	?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>BRANDS List</h2>
				
				
				<?php 
				if(isset($delbrand)){ 
					echo $delbrand;
				
				} ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
					
						<tr>
							<th>Serial No.</th>
							<th>Brands Name</th>
							<th>Action</th>
						</tr>
					
					</thead>
					<tbody>
					<?php
					$data = $addbrand->selectbran();
					if($data){
						$i=0;
						while($val = $data->fetch_assoc()){
							$i++;
					
					?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $val['brandname'];?></td>
							<td><a href="editbrand.php?brand=<?php echo $val['id'];?>">Edit</a> || <a onclick="return confirm('are you sure delete')" href="?branddelete=<?php echo $val['id'];?>">Delete</a></td>
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

