<body class="body-wrapper">
<header id="header">
<?php 
include ("conn.php");
include ("header.php");
session_start();
error_reporting(0);

if(isset($_SESSION['admin'])){
    header('location:./admin/home.php');
  }
?>
</header>    

        <!-- Masthead-->
	<div style="background-image: url('images/bg.png');">
      <section id="about">
        <div class="container py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="p-1 mb-1 card bg-info text-white" style="border-radius: 1rem;">
				<div class="col"><br>
				<center><img src="images/userpic.png" height=100px></center>
				<h2><center class="text-white mb-4">ADMIN LOGIN</center></h2>
				<body class="hold-transition login-page">
  

    	<form action="admin/login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control mb-5" name="username" placeholder="input Username" required autofocus>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="input Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
						
		  <center><br><br>	<a class="text-dark mb-4" href="../login.php">Click Here For User Login</a><br><br>
		  <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Login</button> &nbsp; 
					<input type='reset' value="Reset" class="btn btn-secondary" onclick="reset();"/> </center>	
	</div>
</div>
    	</form>
  	</div>
				</div>
				</center>	
        </div>
<?php  include("../footer.php");?>