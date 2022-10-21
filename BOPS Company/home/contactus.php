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
      <div class="panel-header">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Contact Us</h4>
              </div>
              <div class="card-body">
                  <span>How can we help you?</span>
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo "$fname";?>">
                      </div>
                      <div class="form-group">
                        <script>document.getElementById('message').style.height="200px";</script>
                        <label>Message</label>
                        <input type="text" name="message" class="form-control" value="<?php echo "$fname";?>">
                      </div>
                    </div><div class="pr-1">
                    <div class="row pr-1">
                         <input type="button" value="Edit" class="col-md-3 btn btn-warning btn-block" name="edit" id="edit" onclick="show1()"/>
                        <br></div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
<?php
include 'footer.php'
?>
      </footer>
    </div>
  </div>
</body>

</html>