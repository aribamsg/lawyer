<?php
include  'header.php';
?>

            <!-- #banner start -->
            <section id="banner" class="py-70" >
               <div class="container ">
                 <div class="row py-70 ">
                     <!-- #banner-text start -->            
                     <div id="banner-text" class="col-md-12 text-c  ">
                        <div class="left-borders">
                  
                           <h5 class="wow fadeInUp main-about_h" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">CONTACT AREAS</h5>
                           <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"><span class="c_yellow"> CONTACT AREAS
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
      <!-- #contact  Area start -->
      <section>
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="section-heading left">
                         <h4>Let's Talk about Your Business</h4></div>
                     <div class="contact-form-box margin-30px-top">
                         <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                         <form id="contactForm" method="post" class="contact-form" action="sendemail.php">
                             <div class="row">
                                 <div class="col-md-12">
                                     <input type="text" class="medium-input" maxlength="50" placeholder="Name *" required="required" id="name" name="name">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-6">
                                     <input type="email" class="medium-input" maxlength="70" placeholder="E-mail *" required="required" id="email" name="email">
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-6">
                                     <input type="text" class="medium-input" maxlength="70" placeholder="Subject *" required="required" id="subject" name="subject">
                                 </div>
                                 <div class="col-md-12">
                                     <textarea class="medium-textarea" rows="12" maxlength="1000" placeholder="Message *" required="required" id="message" name="message"></textarea>
                                 </div>
                                 <div class="col-md-12 sm-margin-30px-bottom">
                                     <div class="top-contact wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                                <a type="submit" id="#services" href="#services" class="btn btn-primary wow fadeInUp radius-50" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Send Message</a>
                             </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="contact-info-box padding-30px-left sm-no-padding">
                         <div class="row">
                             <div class="col-12">
                                 <div class="contact-info-section no-padding-top margin-10px-top">
                                     <h4>Get in Touch</h4>
                                     <p> Generally the common people of Pakistan are unaware and ignorant of various laws enforced. There are common misconceptions about laws and law enforcing agencies. Sometimes innocent people do what is termed as grave wrong just because of lack of knowledge. </p>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="contact-info-section">
                                     <h4>The Office</h4>
                                     <ul class="list-style-1 no-margin-bottom">
                                         <li>
                                             <p><i class="fa fa-phone text-center"></i> <strong>Address:</strong> APTECH Metro Star Gate Campus</p>
                                         </li>
                                         <li>
                                             <p><i class="fa fa-globe text-center"></i> <strong>Phone:</strong> (+44) 123 456 789</p>
                                         </li>
                                         <li>
                                             <p><i class="fa fa-envelope text-center"></i> <strong>Email:</strong> <a href="javascript:void(0)" class="email_color_site">aptechmetro@gmail.com</a></p>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="contact-info-section border-none no-padding-bottom no-margin-bottom">
                                     <h4>Business Hours</h4>
                                     <ul class="list-style-2">
                                         <li>Monday - Friday - 9am to 5pm</li>
                                         <li>Saturday - 9am to 2pm</li>
                                         <li>Sunday - Closed</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
        <!-- #contact  Area End -->
     
     
     
      <!--#Our maps  start -->
     <section class="py_map_40">
        <div class="container-fluid p0">
           <div id="contatti" class=" maps">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.313992521717!2d67.14924997450944!3d24.887269144185858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb339999415e0c3%3A0x36742eee0fd9c291!2sAptech%20Metro%20Star%20Gate!5e0!3m2!1sen!2s!4v1692030702563!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div>
        </div>
     </section>
     
       <!--#End maps   -->
     <br><br>
     
<?php
include 'footer.php';
?>