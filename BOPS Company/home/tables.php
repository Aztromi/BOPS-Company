<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
<?php
  include 'head.php';
  ?>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
    <?php
  include 'sidebar.php';
  include 'con.php';
  ?>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <?php
  include 'header.php';
  include '../timezone.php';
  $range_to = date('m/d/Y');
  $range_from = date('m/d/Y', strtotime('-30 day', strtotime($range_to)));
?>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
				<div class="container">
					<div class="text-center mt-5">
						<div class="logo">
							<a>
								<center><img src="assets/bops1.png" width=140px height=70px></center>
							</a>
						</div>
						<h3> EMPLOYEE PAYROLL </h3>
					</div>
				<table align ='center'>
					<tr>
						<th><h5> Employee ID: <?php
								$sql="SELECT * FROM employees where id = 6";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>".$getData['employee_id']."</h5></td>";
								}
							?></h5></th>
						</tr>
					<tr>
						<th><h5> Employee Name: <?php
								$sql="SELECT * FROM employees where id = 6";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>".$getData['firstname']."</h5></td>";
								echo "<td><h5>".$getData['lastname']."</h5></td>";
								}
							?></h5></th>
						</tr>
					<tr>
					</div>
						<th><h5> Deductions <?php
								$sql="SELECT * FROM deductions where id = 1";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>"."</h5></td>";
								echo "<td><h5>"."</h5></td>";
								}
							?></h5></th>
					</tr>
						<tr>
						<th><h5> <?php
								$sql="SELECT * FROM deductions where id = 1";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>".$getData['description']."</h5></td>";
								echo "<td><h5>".$getData['amount']."</h5></td>";
								}
							?></h5></th>
					</tr>
						<tr>
						<th><h5> <?php
								$sql="SELECT * FROM deductions where id = 2";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>".$getData['description']."</h5></td>";
								echo "<td><h5>".$getData['amount']."</h5></td>";
								}
							?></h5></th>
					</tr>
					</tr>
						<tr>
						<th><h5> <?php
								$sql="SELECT * FROM deductions where id = 3";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>".$getData['description']."</h5></td>";
								echo "<td><h5>".$getData['amount']."</h5></td>";
								}
							?></h5></th>
					</tr>
					</tr>
						<tr>
						<th><h5>Absent/Tardiness(per minute) <?php
								$sql="SELECT * FROM attendance where employee_id = 7";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>"."</h5></td>";
								echo "<td><h5>"."</h5></td>";
								}
							?></h5></th>
					</tr>
					</tr>
						<tr>
						<th><h5> <?php
								$sql="SELECT * FROM attendance where employee_id = 7";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>".$getData['num_hr']." mins </h5></td>";
								echo "<td><h5>".$getData['amount']."</h5></td>";
								}
							?></h5></th>
					</tr>
					</tr>
						<tr>
						<th><h5> Other Deduction<?php
								$sql="SELECT * FROM deductions where id = 1";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>"."</h5></td>";
								echo "<td><h5>"."</h5></td>";
								}
							?></h5></th>
					</tr>
					</tr>
						<tr>
						<th><h5> <?php
								$sql="SELECT * FROM deductions where id = 4";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>".$getData['description']."</h5></td>";
								echo "<td><h5>".$getData['amount']."</h5></td>";
								}
							?></h5></th>
					</tr>
					<tr>
						<th><h5> <?php
								$sql="SELECT * FROM deductions where id = 5";
								$query=mysqli_query($con,$sql);
								while($getData=mysqli_fetch_array($query)){
								$id=$getData['id'];
								echo "<td><h5>".$getData['description']." </h5></td>";
								echo "<td><h5>".$getData['amount']."</h5></td>";
								}
							?></h5></th>
					</tr>
					<tr>
						<th><h5>Net Salary (REGULAR WORKER) <?php
								
								echo "<td><h5>"."</h5></td>";
								echo "<td><h5>"."30000"."</h5></td>";
								
							?></h5></th>
					</tr>
					<tr>
						<th><h5>Total Deductions<?php
								
								echo "<td><h5>"."</h5></td>";
								echo "<td><h5>"."4700"."</h5></td>";
								
							?></h5></th>
					</tr>
					<tr>
						<th><h5><?php
								
								echo "<td><h5>"."</h5></td>";
								echo "<td><h5>"."-----------"."</h5></td>";
								
							?></h5></th>
					</tr>
					<tr>
						<th><h5>Remaining Salary<?php
								
								echo "<td><h5>"."</h5></td>";
								echo "<td><h5>"."25300"."</h5></td>";
								
							?></h5></th>
					</tr>
				</table>
</script>
</body>
</html>

      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>