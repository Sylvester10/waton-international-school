<!-- Section Contact -->
            <section id="contact" class="bg-lightcolor1 container-fluid nobg-small">
               <!-- Parallax object -->
               <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;"
                  data-100="transform:translatex(-310%);"
                  data-center-center="transform:translatex(30%);">
                  <!-- Image -->
                  <img src="<?php echo base_url('assets/img/birdornament.png'); ?>" alt="">
               </div>
               <!-- Section heading -->
               <div class="section-heading margin1">
                  <h2>Contact Us</h2>
                  <!-- divider -->
                  <div class="hr"></div>
               </div>
               <!-- Contact -->
               <div class="container">
                  <!-- Contact Form -->
                  <div class="col-md-5">
                     <!-- Form Starts -->
                     <div id="contact_form" >
                        <h4>Send Us a Message</h4>

                        <?php 
                           $form_attributes = array("id" => "contact_us_form");
                           echo form_open('home/contact_ajax', $form_attributes); ?>


                        <div class="form-group">
                           <label>Name:</label><input type="text" name="name" class="form-control input-field"  required="">                    
                           <label>Email:</label><input type="email" name="email" class="form-control input-field" required="">           
                           <label>Subject:</label><input type="text" name="subject" class="form-control input-field" required="">                     
                        </div>
                        <label>Message:</label>
                        <textarea name="message" class="textarea-field form-control" rows="4"  required=""></textarea>

                        <div id="status_msg"></div>

                        <?php echo flash_message_success('status_msg'); ?>
                        <?php echo flash_message_danger('status_msg_error'); ?>

                        <button class="btn center-block">Send message</button>

                        <?php echo form_close(); ?>      

                     </div>
                     <!-- Contact results -->
                     <div id="contact_results"></div>
                  </div>
                  <div class="res-margin">
                     <div class="col-md-6 col-md-offset-1 well text-center">
                        <h4>Information</h4>
                        <!-- contact info -->			   
                        <div class="contact-info ">
                           <p><i class="fa fa-envelope margin-icon"></i><a href="mailto:<?php echo school_contact_email; ?>"><?php echo school_contact_email; ?></a></p> 
                           <p><i class="fa fa-phone margin-icon"></i>Call us <?php echo school_phone_number; ?></p>
                           <p><i class="fa fa-phone margin-icon"></i>Call us <?php echo school_phone_number2; ?></p>
                           <p><i class="fa fa-map-marker margin-icon"></i>We are located at <?php echo school_address; ?>.</p>
                        </div>
                     </div>
                  </div>
                  <!-- /res-margin -->
               </div>
               <!-- /container -->
            </section>
            <!--/Section ends -->
            