<body class="body-wrapper">
<header id="header">
<?php 
include ("conn.php");
include ("header.php");
session_start();

if ($_SESSION['logged'] == 1)
{
		header("Location:home.php");
} else{

echo $_SESSION["username"];
}

?>
</header>    

        <!-- Masthead-->
	<div style="background-image: url('assets/bgreg.jpg');">
      <section id="about">
        <div class="container py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="p-1 mb-1 card bg-warning text-white" style="border-radius: 1rem;">
				<div class="col"><br>
				<center><img src="assets/bops1.png" width=170px height=100px></center>
				<br>
				<h2><center class="text-dark mb-5">LOGIN</center></h2>
			 				
            </div>
			<center>
				<div class='col'>
				</div>
				<!--LOGIN FORM-->
				<div class='col'>
				<?php
				if($_GET['success'] == 1) {
					
				 echo "<div class='alert alert-success' role='alert'>Congratulations, your account has been succesfully created.</div>";
				}
				
				?>

				
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" />
					<table class="text-white-75 mb-5">
					
						<tr>
							<th><input type="text" placeholder="Username" class="form-control form-control-sm mb-5" name='username' value="<?php echo $_COOKIE['username'] ?>"  /></td>
						</tr>
						<tr>
							<th><input type="password"  placeholder="Password" class="form-control form-control-sm" name='password' value="<?php echo $_COOKIE['password'] ?>"   /></td>
						</tr>
					</table>
			
				<?php 
			
				
				if(isset($_POST['login'])){								
					$username=$_POST['username'];
					$password=$_POST['password'];
					
					//Check User from DB
					$check_user = "SELECT * FROM employees WHERE username= '$username'";
					
					$q = mysqli_query($con,$check_user);
																											
								while($row = mysqli_fetch_array($q)){
									$def_user = $row['username'];
									$def_pass = $row['password'];
									$id = $row['id'];
									$user_status = $row['user_status'];
							}

					if (empty($username) and empty ($password)){
						echo "<div class='alert alert-danger' role='alert'>
						Username and Password is required!
						</div>";
					}
					else{
						
						if($user_status == 1){
						
						
								$enc_pass = md5 (md5($password));
							
							if(($def_user == $username) && ($def_pass == $enc_pass)){
									session_start();							
									$_SESSION['logged'] =1;
									$_SESSION['id'] =$id;
									$_SESSION["username"] = $username;
									header("Location:home/dashboard.php");  
							}else{
									echo "<div class='alert alert-danger' role='alert'>
								Username and Password is not matched!
								</div>";
							}
						}
						else{
								echo "<div class='alert alert-danger' role='alert'>
									Your Account is deactivated, please contact your administrator
								</div>";
						}
					}
					
				}
				
				?>
						
						<a class="text-dark mb-3" href="admin/adminlogin.php">Click Here For Admin Login</a>	
					<center><input type='submit' class="btn btn-primary" value="Login" name="login"/></center>	

				</form>
				</div>
				<div class='col'>
								
				</div>
			</div>
				</center>	
        </div>
<?php  include("footer.php");?>