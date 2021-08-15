
<?php
include "../classes/Adminlogin.php";

  $admin = new Adminlogin();
 
  if($_SERVER['REQUEST_METHOD']=='POST'){
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  
	  $data = $admin->adminlog($username,$password);
  }
  ?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
		
			<h1>Admin Login</h1>
			
					
	<span style="color:red;font-size:19px">
		<?php if(isset($data)){
			echo $data;
		}
	?> </span>
				<div>
				<input type="text" placeholder="Username"  name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>