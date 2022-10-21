<!DOCTYPE html>
<html lang="en">
<head>
<?php
error_reporting(0);
session_start();
include 'conn.php';
include 'head.php';

$id = $_SESSION ['id'];

    $check_user = "SELECT * FROM employees WHERE id = '$id'";

    $q = mysqli_query ($con, $check_user);

    while ($row = mysqli_fetch_array($q))
    {
        $user_id = $row ['id'];
        $emp_id = $row ['employee_id'];
        $fname = $row ['firstname'];
        $lname = $row ['lastname'];
        $db_user = $row ['username'];
        $db_pass = $row ['password'];
        $address = $row ['address'];
        $bday = $row ['birthdate'];
        $cpnum = $row ['contact_info'];
        $prof_pic = $row ['photo'];
        $position = $row ['position_id'];
        $sched = $row ['schedule_id'];
        $db_status = $row ['user_status'];
    }

if($_SESSION['logged'] == 0){
    header("Location:../login.php");
}
else {
}
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
      <div class="panel-header panel-header-lg">
      <div class="header text-center">
          <h2 class="title">Welcome! </h2>
            <h5 style="color:white">Have a good day ahead of you!</h5>
        </div>
        <canvas id="bigDashboardChart"></canvas>
        
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"><center><img src="<?php echo "../admin/images/$prof_pic"; ?>" height='200px'/></center></h5>
                <h4 class="card-title"><center><?php echo "$fname $lname";?></center></h4>
              </div>
              <div class="card-body">
              <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Profile</h5>
                <h4 class="card-title">Personal Details</h4>
              </div>
              <div class="card-body">
              <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          Full Name
                        </td>
                        <td><?php echo "$fname $lname";?></td>
                      </tr>
                      <tr>
                        <td>
                          Employee ID
                        </td>
                        <td><?php echo "$emp_id";?></td>
                      </tr>
                      <tr>
                        <td>
                          Username
                        </td>
                        <td><?php echo "$db_user";?></td>
                      </tr>
                      <tr>
                        <td>
                          Email
                        </td>
                        <td><?php echo "$address";?></td>
                      </tr>
                      <tr>
                        <td>
                          Position
                        </td>
                        <td><?php 
                        
                        $pos = "SELECT * FROM position WHERE id = '$position'";

                        $q = mysqli_query ($con, $pos);

                       while ($row = mysqli_fetch_array($q))
                      {
                      $pos_id = $row ['id'];
                      $description = $row ['description'];
                       }
                                 echo "$description";?></td>
                      </tr>
                      <tr>
                        <td>
                          Schedule
                        </td>
                        <td><?php 
                        
                        $schedule = "SELECT * FROM schedules WHERE id = '$sched'";

                        $q = mysqli_query ($con, $schedule);

                       while ($row = mysqli_fetch_array($q))
                      {
                      $sched_id = $row ['id'];
                      $time_in = $row ['time_in'];
                      $time_out = $row ['time_out'];
                       }
                                 echo "$time_in - $time_out";
                                 ?></td>
                      </tr>
                    </tbody>
              </table>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Attendance Overview</h5>
                <h4 class="card-title">Attendance</h4>
              </div>
              <div class="card-body">
              <table class="table">
                    <tbody>
                      <tr>
                          <input type="submit" name='in' class="btn btn-info btn-block" value="Time in / Time out" onclick="location.href='../admin/timeinout.php';"/>
                      </tr>
                      <tr>
                          <br>
                      </tr>
                      <tr>
                          File a leave
                          
                      </tr>
                      <tr><br></tr>  
                      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                      <tr><label>Type of Leave</label>
                      <select id="empl" name="empl" class="col-md-12 pr-1">
                      <option value=""><----------Type of leave----------></option>
                      <option value="Sick" >Vacation Leave</option>
                      <option value="Emergency">Emergency Leave</option>
                      <option value="Sick">Sick Leave</option>
                      </select>
                      </tr>
                      <tr>
                        <label>Starting Date</label>
                      <div class="col-md-12 pl-1">
                        <input type="date" name="startdate" class="form-control" placeholder="date" value="<?php echo "$startdate ";?>">
                      </div>
                      </tr>
                      <tr>
                    <label>End Date</label>
                    <div class="col-md-12 pl-1">
                        <input type="date" name="enddate" class="form-control" placeholder="date" value="<?php echo "$enddate ";?>">
                    </div>
                      </tr>
                      <tr>
                          <input type="submit" name='subm' class="btn btn-warning text btn-block" value="File a Leave"/>
                      </tr>
                      </tbody>
                  </table>
                  <?php
                  if(isset($_POST['subm']))
                  {
                    $empl = $_POST['empl'];
                    $startdate = $_POST['startdate'];
                    $enddate = $_POST['enddate'];
                    
                    if (empty($empl) || empty($startdate) || empty($enddate))
                    {
                      echo "<div class='alert alert-warning'>Fields are required.</div>";
                    }
                    else{

                  $insert_leave = "INSERT INTO empleave (employee_id, type_leave, start_leave, end_leave) 
		                                             VALUES ('$id', '$empl', '$startdate', '$enddate')";
                  $q = mysqli_query($con, $insert_leave);
                  
                  if (!$q)
                  {
                  echo "<div class='alert alert-danger'> There is something wrong. Please try again. </div>";    
                  }
                  else 
                  {
                    echo "<div class='alert alert-success'>Leave request has been sent</div>";
                  }
                }
		}
                  ?>
              </form>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Global Sales</h5>
                <h4 class="card-title">Shipped Products</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2018 Sales</h5>
                <h4 class="card-title">All products</h4>

              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Email Statistics</h5>
                <h4 class="card-title">24 Hours Performance</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <footer class="footer">
        <?php
        include 'footer.php';
        ?>
      </footer>
    </div>
  </div>
</body>
</html>