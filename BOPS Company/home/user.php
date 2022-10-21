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
        $email = $row ['address'];
        $bday = $row ['birthdate'];
        $cpnum = $row ['contact_info'];
        $prof_pic = $row ['photo'];
        $position = $row ['position_id'];
        $sched = $row ['schedule_id'];
        $db_status = $row ['user_status'];
    }

if($_SESSION['logged'] == 0){
    header("Location:../index.php");
}
else {
}
?>

</head>
<body class="user-profile">
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
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">User Profile</h5>

<?php
   if (isset($_POST['sub']))
   {			
           
     if (empty($fname) || empty($lname) || empty($email) || empty($bday) || empty($cpnum))
             
     {			
        echo "<div align=center class='alert alert-warning' role='alert'>
               Fields are required</div>";								
     }
     else
     { 			
       if (strlen($cpnum) < 11)
       {					
         echo "<div align=center class='alert alert-warning' role='alert'>
               Contact number must have 11 characters</div>";
       }				
                                   $update_user = "UPDATE employees SET                        
                                   firstname= '".$_POST['fname']."',
                                   lastname= '".$_POST['lname']."',
                                   address= '".$_POST['email']."',
                                   birthdate= '".$_POST['bday']."',
                                   contact_info= '".$_POST['cpnum']."'
                                   where id= $user_id";
                                   $q = mysqli_query($con, $update_user);
                                   
                                   if (!$q)
                                   {
                                      echo "<div class='alert alert-danger'> There is something wrong. Please try again. </div>";    
                                   }
                                   else 
                                   { 
                                      echo "<div class='alert alert-success'> Successfully Updated. </div>";
                                   }
                    }
       }
   ?>
   
              </div>
              <div class="card-body">
              <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Position</label>
                        <input type="text" class="form-control" disabled="" value="<?php 
                        
                        $pos = "SELECT * FROM position WHERE id = '$position'";

                        $q = mysqli_query ($con, $pos);

                       while ($row = mysqli_fetch_array($q))
                      {
                      $pos_id = $row ['id'];
                      $description = $row ['description'];
                       }
                                 echo "$description";?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="uname" disabled="" class="form-control" placeholder="Employee ID" value="<?php echo "$emp_id";?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" disabled="" class="form-control" placeholder="Username" value="<?php echo "$db_user";?>">
                      </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" value="<?php echo "$fname";?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" value="<?php echo "$lname";?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo "$email ";?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Birthday</label>
                        <input type="date" name="bday" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo "$bday";?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Phone No.</label>
                        <input type="number" name="cpnum" class="form-control" placeholder="Phone No." value="<?php echo "$cpnum";?>">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Edit Profile</label>
                        <div class="row">
                        &emsp; <input type="button" value="Edit" class="col-md-3 btn btn-warning btn-block" name="edit" id="edit" onclick="show1()"/>
                        <br></div>
                        <div class="row">
                        &emsp; <input type="button" value="Back" class="col-md-3 btn btn-info btn-block" name="back" id="back" style="visibility: hidden" onclick="back1()"/>
                        <input type="submit" value="Save Changes" class="col-md-3 btn btn-danger btn-block" name="sub" id="sub" style="visibility: hidden"/>
                        </div>
                        <!--apear/disappear buttons-->
                        <script type='text/javascript'>
                        function show1()
                        {
                        document.getElementById("back").style.visibility="visible";
                        document.getElementById("sub").style.visibility="visible";
                        document.getElementById("edit").style.visibility="hidden";
                        }
                        function back1()
                        {
                        document.getElementById("back").style.visibility="hidden";
                        document.getElementById("sub").style.visibility="hidden";
                        document.getElementById("edit").style.visibility="visible";
                        }
                        </script>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?php echo "../admin/images/$prof_pic"; ?>" height='100px'/>
                  </a>
                  <p class="description">
                  <h5 class="title"><?php echo "$fname $lname";?></h5>
                  Change Profile Picture
                  </p>
                  <center>
                  <?php
                  
if($_POST['upload']){
  if($_FILES['changedp']['error'] >0){
    echo "Error: " . $_FILES['changedp']['error'];
  } else{
    
    if(($_FILES['changedp']['type'] != 'image/png') && ($_FILES['changedp']['type'] != 'image/jpeg')){
      
      echo "<div align='center' class='alert alert-danger' 
          role='alert'>only image files can be uploaded											
        </div>";
      $_FILES['changedp']['type'];
    }
    else
    {
      
      $temp_name = $_FILES['changedp']['tmp_name'];
      $prof_picname = $userid.$_FILES['changedp']['name'];
      $upload_pic = "$prof_picname";
      
      move_uploaded_file($temp_name,"../admin/images/$prof_picname");
      
      unlink($prof_pic);
      
      
      $update_prof = "UPDATE employees SET photo = '$upload_pic'
              WHERE id = $id";
              
            $q = mysqli_query($con, $update_prof);
            if (!$q)
            {
               echo "<div class='alert alert-danger'> There is something wrong. Please try again. </div>";    
            }
            else 
            { 
            echo "<div align='center' class='alert alert-success' role='alert'>Profile Picture Updated</div>";
            }
       
    }
    
  }
  
 }
?>
                  <form enctype='multipart/form-data' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
					      		<input type='file' name='changedp' class='col-md-9 btn btn-info btn-block'/>
					      		<input type='submit' name='upload' value='Save Changes' class='btn btn-danger'/>
                      </form>
                      </center>
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