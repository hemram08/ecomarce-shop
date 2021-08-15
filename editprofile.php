



<?php 

include 'Inc/header.php';
//$filepath = realpath(dirname(__FILE__));
//include ($filepath.'/classes/Charts.php');
//include ($filepath.'/../helpers/Helpar.php');

//login abostai na thakle login page back korbe.
$log = Session::get('costlogin');
if($log == false){
	header("location:login.php");
}

?>

<style>
.profile {
    width: 50%;
    background: gray;
    text-align: center;
padding: 10px;}
.profile h2{color:white;}
.usprofile{
	width:50%;text-align:justify;width:650px;height:250px;
}
.profil{border:1px solid black;padding:10px;}
.edit{
	margin-top:5px;margin-left:540px;
}
.userinput{ width:100%;
	border:none;padding-bottom:7px;
}
.submi{margin-left:50px;font-size:16px;width:100px;font-size:20px;}

</style>
		 <?php 
			 $user= new User();
			$id = Session::get('costId');
			 
		if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
				$edit = $user->edituser($_POST, $id);
			}  
				
			?>
<div class="main">
<div class="content">
    	<div class="section group">
		
		<div class="profile"><h2>Edit profile</h2></div>
				
			<div class="cont-desc span_1_of_2">
			
				<?php 
				
			$sesionId = Session::get('costId');
				
				$user = $user->selectuser($sesionId);
			  if($user){
					while($result = $user->fetch_assoc()){
						?>
					<form action="" method="post">
				<table class="usprofile">
				<tr class="masg">
				<td></td>
				<td> </td>
				<td><?php
					if(isset($edit)){
						echo $edit;
					}
					?> </td>
				<tr class="profil">
				<td width="20%">Full Name </td>
				<td width="5%">: </td>
				<td><input class="userinput" type="text" name="fullname" value="<?php echo $result['fullname'];?>"/></td>
				</tr>
				
			<tr class="profil">
				<td>Email</td>
				<td>: </td>
				<td><input class="userinput" type="text" name="email" value="<?php echo $result['email'];?>"/></td>
				</tr>
				<tr class="profil">
				<td>Zipcode </td>
				<td>: </td>
				<td><input class="userinput" type="text" name="zipcode" value="<?php echo $result['zipcode'];?>"/></td>
				</tr>
				<tr class="profil">
				<td>City </td>
				<td>: </td>
				<td><input class="userinput" type="text" name="cyti" value="<?php echo $result['cyti'];?>"/></td>
				</tr>
				<tr class="profil">
				<td>Address </td>
				<td>: </td>
				<td><input class="userinput" type="text" name="address" value="<?php echo $result['address'];?>"/></td>
				</tr>
				<tr class="profil">
				<td>Country </td>
				<td>: </td>
				<td><input class="userinput" type="text" name="country" value="<?php echo $result['country'];?>"/></td>
				</tr>
				<tr class="profil">
				<td>Phone No</td>
				<td> : </td>
				<td><input class="userinput" type="text" name="phon" value="<?php echo $result['Phon'];?>"/></td>
				</tr>
				<tr class="profil">
				
				<td colspan="3"  class="submi"><input class="userinput" type="submit" name="submit" value="update"/></td>
				</tr>
				
				
				</table>
			  <?php } } ?>
			  </form>
			 
	</div>
			
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					
					<ul>
					<?php 
					$cat = new Category();
					$valus = $cat->cateselect();
					if($valus){
						while($result = $valus->fetch_assoc()){
                       ?>
				      <li><a href="products.php?detail=<?php echo $result['id'];?>"><?php echo $result['categoryname'];?></a></li>
					  <?php } } ?>
					  
				      
    				</ul>
    	
 				</div>
 		</div>
 	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<?php include 'Inc/footer.php';?>
    
    