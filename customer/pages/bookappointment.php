<?php
include 'customer_header.php';
include 'config.php'

?>
<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>
</head>

<body class="">
 
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
           
            <div class="col-xl-12 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="">
                <div class="card-header">
                  <h1 class="font-weight-bolder" style="text-align:center;">BOOK APPOINTMENT</h1>
                  <p  class="font-weight-bolder" style="text-align:center; color:deeppink">Online lawyers</p>
                </div>
                <hr size="5" class="bg-dark"><br>
              
                <form method="POST" action="">

              <div class="row">
                <div class="col-md-6 mb-4">
<h6>User Name</h6>
                  <div class="form-outline">
              
                    <input type="text"  class="form-control form-control-lg " name="txtn" />
                    <label class="form-label" ></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                  <h6>Contact Number</h6>

                  <div class="form-outline">
                    <input type="number"  class="form-control form-control-lg"  name="txtc" />
                    <label class="form-label" ></label>
                  </div>

                </div>
              </div>
                            <div class="row">
                <div class="col-md-6 mb-4">
<h6>Appointment Date</h6>
                  <div class="form-outline">
              
                    <input type="date"  class="form-control form-control-lg"  name="txta"/>
                    <label class="form-label" ></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                <h6>Appointment Services</h6>
            <select name="txts" class="form-control" placeholder="Lawyer Name">

            
                  <?php
                  $select=mysqli_query($con,"select * from services");
                  foreach($select as $data)
                  {
                    echo 
                    "
                    <option value='$data[Id]'>$data[services]</option>
                    ";
                  }
                  
                  ?>
                </select>

                </div>
              </div>

 

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <h6>Lawyer Name</h6>
            <select name="txtl" class="form-control" placeholder="Lawyer Name">

            
                  <?php
                  $select=mysqli_query($con,"select * from lawyer_signup");
                  foreach($select as $data)
                  {
                    echo 
                    "
                    <option value='$data[Id]'>$data[First_Name]</option>
                    ";
                  }
                  
                  ?>
                </select>

                

</div>
              </div>
             
          
              <div class="mt-4 pt-2">
<button type="submit" class="btn btn-danger btn-lg btn-block"  name="btns">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <?php
if(isset($_POST['btns']))
{
    $n=$_POST['txtn'];
    $c=$_POST['txtc'];
    $a=$_POST['txta'];
    $s=$_POST['txts'];
    $l=$_POST['txtl'];



    $insert=mysqli_query($con,"insert into tblappointment values('null','$n','$c','$a','$s','$l','Pending')");
    if($insert)
    {
        echo '<div class="alert alert-success" role="alert">
 Appointment request send to Admin Successfully!
</div>';
    }
    else
    {
      echo '<div class="alert alert-danger" role="alert">
      Error!!
     </div>';
    }
}

?>
      </div>
    </div>
  </div>
</section>
            
              
        
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>
</body>

</html>



<?php
include 'customer_footer.php'

?>