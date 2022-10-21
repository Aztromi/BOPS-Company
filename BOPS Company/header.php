<?php
error_reporting(0);
session_start();
include("conn.php");
?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Salary Computation System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		
		
        <!-- Navigation-->
	<section>
		<div class="container">
		  <div class="row">
		    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		      <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">BOPS</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" 
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <?php
	                         error_reporting(0);
                          if($_SESSION['logged'] == 1)
                          {
                              echo "<li class='nav-item'><a class='nav-link' href='home.php'>Home</a></li>";
						      echo "<ul class='navbar-nav ml-auto mt-10'>
							        <li class='nav-item'>
								    <a class='nav-link login-button' href='Logout.php'>Logout</a></li></ul>";
						  }
                          else
                          {
							  echo "<li class='nav-item'><a class='nav-link' href='index.php'>Home</a></li>";
							  echo "<ul class='navbar-nav ml-auto mt-10'><li class='nav-item'><a class='nav-link login-button' href='login.php'>Login</a></li></ul>";

						  }
                        ?> 
                    </ul>
                </div>
            </div>
        </nav>
		</div>
	</div>
</section>	
      