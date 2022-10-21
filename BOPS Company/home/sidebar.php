
<?php
error_reporting(0);
session_start();
include ('conn.php');


if($_SESSION['user_type'] == 1){
    $userid = $_SESSION ['userid'];

    $check_user = "SELECT * FROM useraccount WHERE userid = '$userid'";

    $q = mysqli_query ($con, $check_user);

    while ($row = mysqli_fetch_array($q))
    {
        $db_user = $row ['username'];
        $db_pass = $row ['password'];
        $user_id = $row ['userid'];
        $db_type = $row ['user_type'];
        $db_status = $row ['user_status'];
        $fname = $row ['fname'];
        $lname = $row ['lname'];
        $mname = $row ['mname'];
    }
}
elseif($_SESSION['logged'] == 0){
    header("Location:index.php");
}
else {
}
?>
     <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a>
            <center>
                <img src="assets/bops1.png" width=140px height=70px>
            </center>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Overview</p>
            </a>
          <li>
            <a href="./icons.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Timesheet</p>
            </a>
          </li>
          <li>
            <a href="./user.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Payroll</p>
            </a>
          </li>
          <li>
            <a href="./contactus.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Contact Us</p>
            </a>
          </li>
          <li>
            <a href="./aboutus.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>About Us</p>
            </a>
          </li>
        </ul>
      </div>