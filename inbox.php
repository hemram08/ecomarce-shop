<?php include 'inc/header.php';?>
<?php 
include 'inc/sidebar.php';

include '../classes/Adminuser.php';
 
$aduser = new Adminuser();
$formate = new Helpar();

?>
<?php 

if(isset($_GET['sift'])){
	$id = $_GET['sift'];
	$price = $_GET['price'];
	$time = $_GET['time'];
	$aduser = $aduser->pendingupdate($id,$price,$time);
	

}

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
				<?php
           			$aduser = new Adminuser();
						if(isset($_GET['sift'])){
						$id = $_GET['sift'];
						$price = $_GET['price'];
						$time = $_GET['time'];
						$del= $aduser->deletepending($id,$price,$time);
						}
				if(isset($$del)){
					echo $$del;
				}
				?>
                <div class="block"> 
						
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>sl no</th>
							<th>product name</th>
							<th>product</th>
							<th>quantit</th>
							<th>price</th>
							<th>date & time</th>
							<th>Action</th>
						</tr>
					</thead>
						<tbody>
							<?php 
					$aduser = new Adminuser();
					$formate = new Helpar();
					$sesionId = session_id();
					$data = $aduser->userproduct($sesionId);
					if($data){
						$i = 0;
						while($da = $data->fetch_assoc()){
							$i++;
				          ?>		
						<tr class="even gradeC">
							<td><?php echo $i;?></td>
							<td><?php echo $da['prodname'];?></td>
							<td>
							<img src="<?php echo $da['image']; ?>" alt="" style="width:80px;height:80px; border-radius: 50%;" /></td>
							
							<td><?php echo $da['quetiti'];?></td>
							<td><?php echo $da['price'];?></td>
							<td><?php echo $formate->formatedata($da['time']);?></td>
								
							<td>
							<?php 
							if($da['status'] == 0){ ?>
								<a href="?sift=<?php echo $da['costomerId'];?>& price=<?php echo $da['price'];?>
								& time=<?php echo $da['time'];?>">pending</a> ||
							<?php }else{ ?>
								<a href="?sift=<?php echo $da['costomerId'];?>& price=<?php echo $da['price'];?>
								& time=<?php echo $da['time'];?>">remove</a> </td>
							<?php } ?>
							
							

							
								
						</tr>
					<?php } }?>
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
