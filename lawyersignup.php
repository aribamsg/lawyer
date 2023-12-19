<?php
include 'header.php';
include 'config.php';
// session_start();
?>

<!-- php coding start -->
<div class="container">
<?php
if(isset($_POST['btnsubmit']))
{

$fn=$_POST['txtfn'];
$ln=$_POST['txtln'];
$e=$_POST['txte'];
$p=md5($_POST['txtp']);
$rp=md5($_POST['txtrp']);
$cn=$_POST['txtcn'];
$c=$_POST['txtc'];
$pn=$_POST['txtpn'];
$al=$_POST['txtal'];
$ey=$_POST['txtey'];
$q=$_POST['txtq'];
$g=$_POST['txtg'];

$pp=$_FILES['txtpp']['name'];
$tmp=$_FILES['txtpp']['tmp_name'];
move_uploaded_file($tmp,"profilepicture/".$pp);



if($p==$rp)
{
    $insert=mysqli_query($con,"insert into lawyer_signup values('null','$fn','$ln','$e','$p','$cn','$c','$pn','$al','$ey','$q','$g','$pp')");

    echo 
    '</div>
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
      <i class="bi bi-check2-circle"></i> Registered Successfully!
      </div>';
      echo "<script>window.location.assign('lawyerlogin.php')</script>";
    //   header("refresh:2; url=lawyerlogin.php");
      // "<meta http-equiv='Refresh' content='2; url='login.php'/>";
          
}
else
{
    echo 
    '</div>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
       Password not match!!
      </div>';
}
}
?>
</div>

<!-- #banner start -->
<section id="banner" class="py-70" >
               <div class="container ">
                 <div class="row py-70 ">
                     <!-- #banner-text start -->            
                     <div id="banner-text" class="col-md-12 text-c  ">
                        <div class="left-borders">
                  
                           <h5 class="wow fadeInUp main-about_h" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">LAWYER SIGN UP</h5>
                           <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"><span class="c_yellow"> LAWYER SIGN UP
</span>  | ORR <br> LOGIN </p>
                        </div>
                      
                     </div>
                     <!-- /#banner-text End -->
                  </div>
                 
               </div>
            </section>
         </div>
      </div>
      <!-- /#banner end -->
<!-- form start -->
<section>
<div class="container">
             <div class="row">
             <div class="col-lg-3"></div>
                 <div class="col-lg-6">
                     <div class="section-heading left">
                         <h4>REGISTER <span class="c_yellow">LAWYER.pk</span></h4>
<h5><span>Access to our dashboard</span></h5></div>
                     <div class="contact-form-box margin-30px-top">
                         <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                         <form  method="post" enctype="multipart/form-data" >
                             <div class="row">
                                 <div class="col-xs-12 col-sm-6 col-md-6">
                                     <input type="text" class="form-control" placeholder="First_Name*" required="required"  name="txtfn">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-6">
                                     <input type="text" class="form-control" placeholder="Last_Name*" required="required"  name="txtln">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-6">
                                     <input type="email" class="form-control" placeholder="E-mail*" required="required"  name="txte">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-6">
                                     <input type="password" class="form-control"  placeholder="Password*" required="required"  name="txtp">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-6">
                                     <input type="password" class="form-control"  placeholder="Repeat_Password*" required="required"  name="txtrp">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-6">
                                     <input type="number" class="form-control"  placeholder="CNIC No*" required="required"  name="txtcn">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4">
                                     <input type="text" class="form-control"  placeholder="City*" required="required"  name="txtc">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-8">
                                     <input type="number" class="form-control"  placeholder="Phone Number*" required="required"  name="txtpn">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-12 ">
                                    <select name="txtal" class="form-control" placeholder="Area of Law" >
                            
                                    <?php
                                    $select=mysqli_query($con,"select * from services");
                                    foreach($select as $data)
                                    {
                                        echo " <option value=' $data[Id]'> $data[services]</option>";
                                    }
                                    ?>
                                    </select>
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-12"> 
                                     <input type="text" class="form-control"  placeholder="Experience in Year*" required="required"  name="txtey">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-12">
                                     <input type="text" class="form-control"  placeholder="Qualification*" required="required"  name="txtq">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-12">
                                     <input type="text" class="form-control"  placeholder="Your Gender*" required="required"  name="txtg">
                                 </div>
                                
                                 <div class="col-xs-12 col-sm-6 col-md-12">
                                     <input type="file" class="form-control"  placeholder="Profile Picture*"   name="txtpp">
                                 </div>
                                 
                                 

                                 
                                 <div class="col-md-12 sm-margin-30px-bottom">
                                     <div class="top-contact wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                                <button type="submit" id="#services" href="#services" class="btn btn-primary wow fadeInUp radius-50" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;" name="btnsubmit">Signup</button>
                             </div>
                                 </div>

                             
                                  <div class="col-xs-12 col-sm-6 col-md-12">
                                  <label class="form-check-label" for="form2Example3">
                      Have a Account<a href="lawyerlogin.php" style="color: red !important;"> Login here!</a>
                    </label>
                                 </div>
                    
                  </div>
                             </div>
                         </form>
                     </div>
                 </div>
</section>



<?php
include 'footer.php';
?>