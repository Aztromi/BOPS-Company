<!DOCTYPE html>
<html lang="en">

<head>
<?php
include("conn.php");
  include 'head.php';
  ?>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
    <?php
  include 'sidebar.php';
  ?>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <?php
  include 'header.php';
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
                <h5 class="title">ATTENDANCE</h5>
                <form action="<?php $_SERVER['PHP_SELF'];?>"method="post">
		<table class='table table-striped'>
			<tr>
				<th>ID</th>
				<th>Employee_ID</th>
				<th>Date</th>
				<th>Time In</th>
				<th>Time Out</th>
			</tr>
		 
		 
		<?php
		
			$sql = "SELECT * FROM attendance";
			$query = mysqli_query($con, $sql);
			
			while ($getData = mysqli_fetch_array($query))
            {
			$id = $getData['id'];
			echo "<td>".$getData['id']."</td>";
      echo "<td>".$getData['employee_id']."</td>";
			echo "<td>".$getData['date']."</td>";
			echo "<td>".$getData['time_in']."</td>";
			echo "<td>".$getData['time_out']."</td>";
			echo "<td>".$getData['bday']."</td>";
			echo "<td>".$getData['username']."</td>";
			echo "<td>".$stat."</td>";
            }    
		?>
	  </table>
          </form>
                </div>
              </div>
            </div>
          </div>
        </div>
          </body>
          <footer class="footer">
      <?php
      include 'footer.php';
      ?>
      </footer>
      </footer>
    </div>
  </div>
</html>