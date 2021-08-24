

<!-- Section Tuition -->
<section id="tuition" class="container-fluid">
   <!-- Section heading -->
   <div class="section-heading">
      <h2>Admin Login</h2>
      <!-- divider -->
      <div class="hr"></div>
   </div>
   <div class="container">

      <div class="col-md-12" style="max-width: 90% !important; padding-left: 10% !important;">    
          <?php 
               //process form asynchronously using AJAX
              $form_attributes = array("id" => "admin_login_form");
              echo form_open('login/login_ajax', $form_attributes);
                  
                  if ($this->session->is_requested) { ?>
                           
                     <input type="hidden" id="requested_page" value="<?php echo $this->session->requested_page;?>" />
                     <?php }

                  else { ?>
                        
                      <input type="hidden" id="requested_page" value="<?php echo base_url('admin'); ?>" />
                  <?php } ?>

                     <div class="well">
                        <h4 class="widget-title"><i class="fa fa-lock" style="color: #08A2DE;"></i><b><span style="color: #08A2DE;"> Enter your login details....</span></b></h4>

                        
                           <div>
                              <label class="align-left">Email*</label>
                              <br/>
                              <input type="email" name="email" class="form-control input-field" placeholder="Email ID" required/>      
                              <br/>
                              <label class="form-control-label">Password*</label>
                              <br/>
                              <input type="password" name="password" class="form-control input-field" placeholder="Password" required/>                     
                           </div>
                           <br>
                           <div id="status_msg" class="m-t-20"></div>
                           <div> 
                              <button type="submit" value="Submit" class="btn center-block">LOGIN</button>
                           </div><br/>
                           <div class="row m-t-30">
                              <?php echo flash_message_success('status_msg'); ?>
                              <?php echo flash_message_danger('status_msg_error'); ?>
                              <div class="col-md-12">
                                    <h5 class="text-bold"><a href="<?php echo base_url('login/password_recovery'); ?>">Forgot Password?</a>
                                    </h5>
                              </div>
                           </div>

                     </div>

               <?php echo form_close(); ?>

            </div>

   </div>
   <!--/container -->
</section>
<!-- /section ends-->