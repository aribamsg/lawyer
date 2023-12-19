<?php
include 'lawyer_header.php';
include 'config.php'
?>


<?php
$select=mysqli_query($con,"select * from lawyer_signup ");
foreach($select as $data)
{
echo 
"
<section class='vh-100' style='background-color: #f4f5f7;'>
  <div class='container py-5 h-100'>
    <div class='row d-flex justify-content-center align-items-center h-100'>
      <div class='col col-lg-6 mb-4 mb-lg-0'>
        <div class='card mb-3' style='border-radius: .5rem;'>
          <div class='row g-0'>
            <div class='col-md-4 gradient-custom text-center text-white'
              style='border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;'>

              <img src='profilepicture/$data[Profile_Picture]'
                alt='Avatar' class='img-fluid my-5' style='width: 80px;' />

              <h5> $data[First_Name] $data[Last_Name] </h5>
             
              <i class='far fa-edit mb-5'></i>
            </div>
            <div class='col-md-8'>
              <div class='card-body p-4'>
                <h6>Information</h6>
                <hr class='mt-0 mb-4'>

                <div class='row '>
                 <div class='col-6 mb-3'>
                    <h6>Email</h6>
                    <p class='small'>  $data[Email] </p>
                  </div>

                  <div class='col-6 mb-3'>
                    <h6>Phone</h6>
                    <p class='small'> $data[Phone_No]</p>
                  </div>
                </div>

                <hr class='mt-0 mb-4'>
                <div class='row pt-1'>
                  <div class='col-6 mb-3'>
                    <h6>City</h6>
                    <p class='small'> $data[City]</p>
                  </div>
                  <div class='col-6 mb-3'>
                    <h6>Experience In Year</h6>
                    <p class='small'> $data[Experience_in_Year]</p>
                  </div>
                </div>
                <hr class='mt-0 mb-4'>
                <div class='row pt-1'>
                  <div class='col-6 mb-3'>
                    <h6>Qualification</h6>
                    <p class='small'> $data[Qualification]</p>
                  </div>
                  <div class='col-6 mb-3'>
                    <h6>CNIC</h6>
                    <p class='small'>$data[CNIC_No]</p>
                  </div>
                </div>
                <div class='d-flex justify-content-start'>
                  <a href=''><i class='fab fa-facebook-f fa-lg me-3'></i></a>
                  <a href=''><i class='fab fa-twitter fa-lg me-3'></i></a>
                  <a href=''><i class='fab fa-instagram fa-lg'></i></a>
                  
                </div>
                <br>
                <a href='update.php?A=$data[Id]' class=' btn btn-danger'>Edit Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

";
        }
        ?>
    <?php
include 'lawyer_footer.php';
    ?>