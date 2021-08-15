<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
 
<?php 
//include  "../helpers/Helpar.php";
include '../classes/Products.php';


?>
<?php 
 $pd = new Products();
 $formate = new Helpar();

?>
	<?php
	if(isset($_GET['prodelete'])){
		$delId = preg_replace('/[^-a-zA-Z0-9_]/','',$_GET['prodelete']);
		$delpro = $pd->deleteprod($delId);
	}
   ?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Post List</h2>
        <div class="block"> 

	   <?php 
			if(isset($delpro)){ 
			echo $delpro;
				
				} ?>
	<table class="data display datatable" id="example" >
	<thead style="text-align:center">
	
		<tr>
		   <th width="5%">srl</th>
			<th width="10%">Post Title</th>
			<th width="10%">Category</th>
			<th width="10%">Brands</th>
			<th width="20%">Description</th>
			<th width="10%">Price</th>
			<th width="15%">Image</th>
			<th width="5%">Type</th>
			<th width="15%">Action</th>
		</tr>
	   </thead>
			<?php
			
			 $allproduct = $pd->selectpruct();
			 $i = 0;
			 if($allproduct){
              while($all = $allproduct->fetch_assoc()){
				  $i++;
		    ?>
		<tbody style="border:1px solid #CCCCCC">
			<tr class="odd gradeX" style="text-align:center">
				<td><?php echo $i;?></td>
				<td><?php echo $all['produtname'];?></td>
				<td><?php echo $all['categoryname'];?></td>
				<td class="center"><?php echo $all['brandname'];?></td>
				<td style="text-align: justify;font-size:13px"><?php echo $formate->textshort($all['discripts'], 80);?></td>
				<td><?php echo $all['price'];?></td>
				
				<td><img width="80px" height="60px" src="<?php echo $all['image'];?>"/></td>
				
				
				<td class="center"> <?php 
				
				if($all['type']==1){
				echo "Feature" ;
				}else{
					echo "General";
				}
				?></td>
			<td><a href="productEdit.php?editprod=<?php echo $all['id'];?>">Edit</a> 
				||
		   <a onclick="return confirm('are you sure delete product ?')" href="?prodelete=<?php echo $all['id'];?>">Delete</a></td>
			</tr>
			
		</tbody>
			 <?php } }?>
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
