<?php
error_reporting(0);
include("header.php"); 
If($_SESSION['logged'] == 1)
{
	header('Location:home.php');
}
else
{
?>
 <!-- Masthead-->
 <section>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Welcome to Salary Computation System</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                    </div>
                </div>
            </div>
		</header>
		</section>
<?php }include("footer.php"); ?>      