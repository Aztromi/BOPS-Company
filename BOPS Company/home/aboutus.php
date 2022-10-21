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
                    <style>
                  .myimg{
                  width:200px;
                  height:200px;
                  object-fit:cover;
                  border-radius:50%;
                  }
                  </style>
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
                <h5 class="title">About Us</h5>
                <br>
                <br>
              </div>
                <div class="col-md-12">
                  <p>
                  BOPS Technologies is a company that helps businesses adapt to the technologies needed depending on 
                  the type of their business. Our products and services are developed through continuous research, 
                  innovation, invention, and standards of our clients. We have been helping companies and able to 
                  provide good quality products and services that are praised by many over the years. As a result, 
                  our efforts are recognized internationally. 
                  </p>
                  <center>
                    <table>
                      <tr>
              <th>
              <img src="assets/patrice.jpg" class="myimg" alt="User Image">&emsp;&emsp;
              </th>
              <th>
              <img src="assets/miyo.jpg" class="myimg" alt="User Image">&emsp;&emsp;
              </th>
              <th>
              <img src="assets/norvin.jpg" class="myimg" alt="User Image">&emsp;&emsp;
              </th>
              <th>
              <img src="assets/ashley.jpg" class="myimg" alt="User Image">
              </th>
                </tr>
                <tr>
              <td>
                    PRINCESS PATRICIA BULLOS
              <td>
              &emsp;AMEL MARTIN ORNEDO
              <td>
              &emsp;&emsp;NORVIN KYLE PEREZ
              <td>
                    ASHLEY NICOLE SORIANO
              <td>
                </tr>
                    </table>
            </center>
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