<?php
include 'header.php';

?>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- Animate CSS -->
      <link href="assets/vendors/animate/animate.css" rel="stylesheet">
      <!-- Icon CSS-->
      <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
      <!-- Owlcarousel CSS-->
      <link rel="stylesheet" type="text/css" href="assets/vendors/owl_carousel/owl.carousel.css" media="all">
      <!--Template Styles CSS-->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

            <!-- #banner start -->
            <section id="banner" class="py-70" >
               <div class="container ">
                 <div class="row py-70 ">
                     <!-- #banner-text start -->            
                     <div id="banner-text" class="col-md-12 text-c  ">
                        <div class="left-borders">
                  
                           <h5 class="wow fadeInUp main-about_h" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> Attorneys </h5>
                           <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"><span class="c_yellow">Lawyers List
                           </span>  | ORR <br>AND ITS ATTORNEYS </p>
                        </div>
                      
                     </div>
                     <!-- /#banner-text End -->
                     </div> 
               </div>
            </section> 
            </div> </div>   
            <!-- /#banner end -->
      
<!--start team Area -->
<section>
         <div class="container">
            <div class="row text-center  ">
               <div class="title wow fadeInUp">
                  <h1>Our Attorneys</h1>
                  <div class="hed_img"> 
                     <img src="assets/images/headding-img.png">
                  </div>
                  <p style="text-align: justify;"> We offers free e-association for lawyers because finding the right lawyer can be a time consuming and stressful task for a new generation clients, we aims to facilitate these clients looking for legal assistance by directly connecting them to the verified lawyers in there area who are appropriately fit for their needs. Similarly, licensed lawyers may also register with us and get more cases of their respective fields through us. </p>
               </div>
            </div>
           
      

<!-- search bar start -->
  <!-- <form class=" d-flex navbar-right"  role="search" method="post">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="txts" type="search ">
  </div>
  <button type="submit" class="btn-sm btn-default" name="btns" >Submit</button>
  </form> -->

  <div class="search-sidebar" style="margin-bottom: 80px;">
      <form action="#" method="post" class=" navbar-form navbar-right" >
            <input type="search" name="txts" placeholder="Search Here">
            <button type="submit" class="btn-default" name="btns" ><i class="fa fa-search"></i></button>
      </form>
   </div>

<!-- search bar end -->

         
<!--End team Area -->

<!-- main coding for searchbar and signup card making -->
     
            <?php
            if(isset($_POST['btns']))
            {
               $s=$_POST['txts'];
               $select=mysqli_query($con,"select * from lawyer_signup where First_Name like '%$s%' ");
               $fetch=mysqli_fetch_assoc($select);
               $_SESSION['pic']=$fetch['Profile_Picture'];
               $_SESSION['n']=$fetch['First_Name'];
               echo "<div class='row  mb-100'>";
               foreach($select as $data)
               {
                
                  
                  echo 
                  "<div class='col-md-4 col-sm-6 col-xs-12 wow fadeInUp' style='margin-bottom: 100px;  margin-top: 70px; visibility: visible; animation-name: fadeInUp;'>
                  <div class='blog box
                  -radius'>
                     <div class='blog-img'>
                       <img src='profilepicture/$data[Profile_Picture]' alt=''>
                     </div>
                     <div class='team-content'>
                     <a href='single.php?D=$data[Id]'><h3> $data[First_Name] $data[Last_Name] </h3></a>
                     <p>City: $data[City]</p>
                        <div class='team-footer-social'>
                           <a href='' target='_blank'><i id='social-fb' class='fa fa-facebook fa-2x social'></i></a>
                           <a href='' target='_blank'><i id='social-tw' class='fa fa-twitter fa-2x social'></i></a>
                           <a href='' target='_blank'><i id='social-em' class='fa fa-instagram fa-2x social'></i></a>
                        </div>
                     </div>
                  </div>
               </div>
                  ";
               }
               echo "</div>";
            }


            else
            {
                $select=mysqli_query($con,"select * from lawyer_signup");
               echo "<div class='row'>";
               foreach($select as $data)
               {
                  echo 
                  "<div class='col-md-4 col-sm-6 col-xs-12 wow fadeInUp' style='margin-bottom: 100px; margin-top: 70px; visibility: visible; animation-name: fadeInUp;'>
                  <div class='blog box-radius '>
                     <div class='blog-img'>
                       <img src='profilepicture/$data[Profile_Picture]' height='200' alt=''>
                     </div>
                     <div class='team-content'>
                     <a href='single.php?D=$data[Id]'><h3>$data[First_Name] $data[Last_Name]  </h3></a>
                        <p>City: $data[City]</p>  
                        <div class='team-footer-social'>
                           <a href='' target='_blank'><i id='social-fb' class='fa fa-facebook fa-2x social'></i></a>
                           <a href='' target='_blank'><i id='social-tw' class='fa fa-twitter fa-2x social'></i></a>
                           <a href='' target='_blank'><i id='social-em' class='fa fa-instagram fa-2x social'></i></a>
                        </div>
                     </div>
                  </div>
               </div>
                  ";
               }
               echo "</div>" ;
            }
                
            ?>
       </div>
      </section>
      <br><br><br><br>
            
      <?php
      include 'footer.php';
      ?>