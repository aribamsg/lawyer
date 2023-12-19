<?php
include 'header.php';
include 'config.php';
// session_start();
?>
<!-- php coding start -->
<?php
if(isset($_POST['btnlogin']))
{
  $e=$_POST['txte'];
  $p=md5($_POST['txtp']);

  $select=mysqli_query($con,"select * from lawyer_signup where Email='$e' and Password='$p'");
  $fetch=mysqli_fetch_assoc($select);

  if(mysqli_num_rows($select))
  {

    $_SESSION['n']=$fetch['Name'];
    $_SESSION['e']=$fetch['Email'];
    // $_SESSION['i']=$fetch['Image'];
    

    echo "login successfully";
    echo "<script>window.location.assign('lawyer/pages/index.php')</script>";
    //   header('refresh:0.5; url=index.php');
      // echo "<meta http-equiv='Refresh' content='2; url='profile.php'' />
      // ";
  }
  else
  {
    echo "Error! No record found ";
  }

}
?>

 <!-- #banner start -->
 <section id="banner" class="py-70" >
               <div class="container ">
                 <div class="row py-70 ">
                     <!-- #banner-text start -->            
                     <div id="banner-text" class="col-md-12 text-c  ">
                        <div class="left-borders">
                  
                           <h5 class="wow fadeInUp main-about_h" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">LAWYER LOGIN</h5>
                           <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"><span class="c_yellow">LAWYER LOGIN
</span>  | ORR <br> SIGN UP </p>
                        </div>
                      
                     </div>
                     <!-- /#banner-text End -->
                  </div>
                 
               </div>
            </section>
         </div>
      </div>
      <!-- /#banner end -->
<!--FORM START  -->

<section>
<div class="container">
             <div class="row">
             <div class="col-lg-4"></div>
                 <div class="col-lg-4">
                     <div class="section-heading left">
                         <h4>LOGIN <span class="c_yellow">LAWYER.pk</span></h4>
<h5><span>Access to our dashboard</span></h5></div>
                     <div class="contact-form-box margin-30px-top">
                         <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                         <form  method="post" >
                            
                             <div class="row">
                                 <div class="col-xs-12 col-sm-6 col-md-12">
                                     <input type="email" class="form-control" placeholder="E-mail*" required="required"  name="txte">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-12">
                                     <input type="password" class="form-control"  placeholder="Password*" required="required"  name="txtp">
                                 </div>
                                 
                                 <div class="col-md-12 sm-margin-30px-bottom">
                                     <div class="top-contact wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                                <button type="submit" id="#services" href="#services" class="btn btn-primary wow fadeInUp radius-50" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;" name="btnlogin">Login</button>
                                     </div>
                                 </div>

                                 <div class="col-xs-12 col-sm-6 col-md-12">
                                  <label class="form-check-label" for="form2Example3">
                      Don't have an account?  <a href="lawyersignup.php" style="color: red !important;"> Signup </a>
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