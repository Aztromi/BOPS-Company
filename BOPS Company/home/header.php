<?php
error_reporting(0);
session_start();
include ('conn.php');


if($_SESSION['user_type'] == 1){
    $userid = $_SESSION ['userid'];

    $check_user = "SELECT * FROM employees WHERE id = '$id'";

    $q = mysqli_query ($con, $check_user);

    while ($row = mysqli_fetch_array($q))
    {
        $user_id = $row ['id'];
        $emp_id = $row ['employee_id'];
        $firstname = $row ['firstname'];
        $lastname = $row ['lastname'];
        $db_user = $row ['username'];
        $db_pass = $row ['password'];
        $address = $row ['address'];
        $bday = $row ['birthdate'];
        $cpnum = $row ['contact_info'];
        $prof_pic = $row ['photo'];
        $db_status = $row ['user_status'];
    }
}
elseif($_SESSION['logged'] == 0){
    header("Location:index.php");
}
else {
}
?>
<div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <center>
                <img class="avatar border-gray" src="<?php echo "../admin/images/$prof_pic"; ?>" height='100px'/><br>
                    <?php echo $_SESSION['username'];?>
                </center>
                  <a class="dropdown-item" href="../logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>