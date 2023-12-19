<?php
include 'header.php';
?>

<link rel="stylesheet" href="profile.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- #banner start -->
<section id="banner" class="py-70" >
               <div class="container ">
                 <div class="row py-70 ">
                     <!-- #banner-text start -->            
                     <div id="banner-text" class="col-md-12 text-c  ">
                        <div class="left-borders">
                  
                           <h5 class="wow fadeInUp main-about_h" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Attorney Profile</h5>
                           <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"><span class="c_yellow">Attorney Profile
</span>  | ORR <br>AND ITS ATTORNEYS </p>
                        </div>
                      
                     </div>
                     <!-- /#banner-text End -->
                  </div>
                 
               </div>
            </section>
         </div>
      </div>
      <!-- /#banner end -->

<?php
if(isset($_GET['D']))
{
    $pro_id=$_GET['D'];
    $data=mysqli_query($con,"select * from lawyer_signup where Id='$pro_id'");
    if(mysqli_num_rows($data))
    {
        foreach($data as $item){
?>
<!-- profile upper area -->
<div class="container bootstrap snippets bootdeys">
<div class="row" id="user-profile">

    <div class="col-md-2"></div>
   
    <div class=" col-md-8 col-sm-4" style=" text-align: center; border:2px solid grey ; margin-top: 20px;">
        <div class="main-box clearfix">

        <h2> <?php echo  $item['First_Name']?> <?php echo  $item['Last_Name']?>  </h2>
            <div class="profile-status">
                <i class="fa fa-check-circle" style=" color: greenyellow;"></i> Online  
            </div>
            <br>

            <img src="<?php echo "profilepicture/$item[Profile_Picture] "?>"  height="200" width="200" class="profile-img img-responsive center-block">
            <br>
            <div class="profile-since">
                Member since: Jan 2012
            </div>
           
        </div>
    </div>
    </div>


    <!-- profile lower info -->

    <div class="row">

<div class="col-md-2"></div>

<div class=" col-md-8 col-sm-8" style="">
    <div class="main-box clearfix">
        <div class="profile-header">
            <h3><span>Attorney Info: </span></h3>  
        </div>

        <div class="row profile-user-info">
            <div class="col-md-12">

                <div class="profile-user-details clearfix ">
                    <div class="profile-user-details-label">
                        First Name : <?php echo  $item['First_Name'] ?>
                    </div>
                </div>
                
                <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                        Last Name : <?php echo  $item['Last_Name'] ?>
                    </div>
                </div>

                <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                       Email Address : <span style="color:blue;"> <?php echo  $item['Email'] ?> </span>
                    </div>
                </div>
                
                <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                        Phone Number : <?php echo  $item['Phone_No'] ?>
                    </div>
                </div>

                <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                       Experience in Year : <?php echo  $item['Experience_in_Year'] ?>
                    </div>   
                </div>

                <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                       Qualification : <?php echo  $item['Qualification'] ?>
                    </div>   
                </div>

                <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                      City : <?php echo  $item['City'] ?>
                    </div>   
                </div>
                <br>

                <div class="profile-message-btn  center-block text-center">
            <a href="costumerlogin.php" class="btn btn-default" >
                <i class="fa fa-envelope" ></i> Book Appointment
            </a>
                </div>
        <br><br>

            </div>    
        </div>    
    </div>
</div>
</div>
</div>

<?php
        }
    }
}

?>


<?php
include 'footer.php';
?>