<?php
include 'customer_header.php';
include 'config.php';
?>
<?php
$id=$_GET['A'];

$selectdata=mysqli_query($con,"select * from costumer_signup where Id=$id ");
foreach($selectdata as $fetch)
{
    $n=$fetch['Name'];
    $e=$fetch['Email'];
    $p=$fetch['Password'];
    $pn=$fetch['Phone_Number'];
    $c=$fetch['City'];
    
    
}
?>
<?php
if(isset($_POST['btnupdate']))

    $uid=$_POST['txtid'];
    $name=$_POST['txtn'];
    $email=$_POST['txte'];
    $password=$_POST['txtp'];
    $phone=$_POST['txtpn'];
    $city=$_POST['txtc'];
    
    
   $update=mysqli_query($con,"update costumer_signup set Name='$name',Email='$email',Password='$password',Phone_Number='$phone',City='$city' where Id='$uid' ");

    if($update)
    {
     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Data Updated!</strong> Successfully.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
   
    }
    else
    {
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Error!</strong> Need to refill form again.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
    }

?>



<form action='' method='post'>
<section class='vh-100' style='background-color: #f4f5f7;'>
  <div class='container py-5 h-100'>
    <div class='row d-flex justify-content-center align-items-center h-100'>
      <div class='col col-lg-6 mb-4 mb-lg-0'>
        <div class='card mb-3' style='border-radius: .5rem;'>
          <div class='row g-0'>
            <div class='col-md-4 gradient-custom text-center text-white'
              style='border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;'>

              <img src='./user2.png'
                alt='Avatar' class='img-fluid my-5' style='width: 80px;' />

              <input type='hidden' value='<?php echo $id ?>' name='txtid'>

              <div class='col-12 mb-3 m-3'>
              <h6 align='left'>Name</h6>
              <input class="form-control" name='txtn' type="text" value='<?php echo $n ?> '>
            </div>

            
              <i class='far fa-edit mb-5'></i>
            </div>
            <div class='col-md-8'>
              <div class='card-body p-4'>
                <h6>Personal Information</h6>
                <hr class='mt-0 mb-4'>

                <div class='row '>
                 <div class='col-6 mb-3'>
                    <h6>Email</h6>
                    <input class="form-control" name='txte' type="email" value='<?php echo $e ?>'> 
                  </div>

                  <div class='col-6 mb-3'>
                    <h6>Password</h6>
                    <input class="form-control" name='txtp' type="password" value='<?php echo $p ?>'> 
                  </div>

                <hr class='mt-0 mb-4'>

                <div class='row pt-1'>
                <div class='col-6 mb-3'>
                    <h6>Phone_No</h6>
                    <input class="form-control" name='txtpn' type="number" value='<?php echo $pn ?>'> 
                  </div>
                

                  <div class='col-6 mb-3'>
                    <h6>City</h6>
                    <input class="form-control" name='txtc' type="text" value='<?php echo $c ?>'> 
                  </div>
                  </div>
                </div>

                <div class='d-flex justify-content-start'>
                  <a href=''><i class='fab fa-facebook-f fa-lg me-3'></i></a>
                  <a href=''><i class='fab fa-twitter fa-lg me-3'></i></a>
                  <a href=''><i class='fab fa-instagram fa-lg'></i></a>
                  
                </div>
                <br>
                <input type="submit" class="btn btn-warning" name='btnupdate' value='Save Profile' >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

<?php
include 'customer_footer.php';
?>