
          
            <!-- map -->
            
               <div id="map-canvas"></div>
         
         </div>
         <!-- /main-->
         <!-- Newsletter -->
         <section id="newsletter" class="small-section bg-color1">
            <div class="container text-center text-light">
               <div class="col-md-6">
                  <h4>Subscribe to our Newsletter</h4>
               </div>
               <div class="col-md-6">
                  <!-- Form -->           
                  <div id="mc_embed_signup">
                     <!-- your form adresss in the line bellow -->
            <form action="//ingridkuhn.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&amp;id=0dae358e08" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                           <div class="mc-field-group">
                              <div class="input-group">
                                 <input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                 <span class="input-group-btn">
                                 <button class="btn btn-color2" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                                 </span>
                              </div>
                              <!-- Subscription results -->
                              <div id="mce-responses" class="mailchimp">
                                 <div class="alert alert-danger response" id="mce-error-response"></div>
                                 <div class="alert alert-success response" id="mce-success-response"></div>
                              </div>
                           </div>
                           <!-- /mc-fiel-group -->                         
                        </div>
                        <!-- /mc_embed_signup_scroll -->
                     </form>
                     <!-- /form ends -->                       
                  </div>
                  <!-- /mc_embed_signup -->
               </div>
               <!-- /col-md-6 -->
            </div>
            <!-- /container -->
         </section>
         <!-- /Section ends -->
        

            <!-- Footer starts -->		
            <footer>
               <div class="container">
                  <div class="col-md-4 footer_ul">
                     <h6><?php echo school_name; ?></h6>
                     <ul class="list-unstyled footer-icons">
                        <li><i class="fa fa-phone"></i><?php echo school_phone_number; ?></li>
                        <li><i class="fa fa-phone"></i><?php echo school_phone_number2; ?></li>
                        <li><i class="fa fa-envelope"></i>Email: <a href="mailto:<?php echo school_contact_email; ?>"><?php echo school_contact_email; ?></a></li>
                        <li><i class="fa fa-map-marker"></i><?php echo school_address; ?></li>
                     </ul>
                  </div>
                  <!-- /.col-md-4 -->
                  <div class="col-md-4 res-margin footer_ul">
                     <h6>Opening/Closing Hours</h6>
                     <ul class="list-unstyled footer-icons">
                        <li><i class="fa fa-clock-o"></i>Nursery from 7:00am - 1:30pm</li>
                        <li><i class="fa fa-clock-o"></i>Primary 1-3 from 7:00am - 2:45pm</li>
                        <li><i class="fa fa-clock-o"></i>Primary 4-6 from 7:00am - 3:30pm</li>
                     </ul>
                  </div>
                  <!-- /.col-md-4 -->
                  <div class="col-md-4 text-center footer_logo">
                     <!-- Footer logo -->
                     <img src="<?php echo school_logo2; ?>" alt="" class="res-margin center-block img-responsive">
                     <!--Social icons -->
                     <div class="social-media smaller">
                        <a href="#" title=""><i class="fa fa-twitter"></i></a>
                        <a href="https://web.facebook.com/WATON-International-School-546610242168590/?__tn__=%2Cd%2CP-R&eid=ARBAzm_Trsgk6vv-cU5xBlat2d2tX4dFBGa3DkWAa4PAkRjwBxSLdsZH9tnfw5TysR1tQJkRcsyfSvW8" target="_blank" title=""><i class="fa fa-facebook"></i></a>
                        <a href="#" title=""><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
                  <!-- Credits-->
                  <div class="credits col-md-12 text-center">
                     <hr/>
                     Copyright © 2020 - Designed by <a href="http://www.ingridkuhn.com">Ingrid Kuhn</a> | Developed by <a href="<?php echo software_vendor_site; ?>"><?php echo software_vendor; ?></a>
                     <!-- Go To Top Link -->
                     <div class="page-scroll hidden-sm hidden-xs">
                        <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                     </div>
                  </div>
                  <!-- /credits -->
               </div>
               <!-- /.container -->
            </footer>
            <!-- /footer ends -->
         </div>
         <!-- /page-width -->
         <!-- Core JavaScript Files -->
         <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
         <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
         <!-- Main Js -->
         <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
         <!-- Open maps -->
         <script src="<?php echo base_url('assets/js/map.js'); ?>"></script>
         <!-- Contact -->
         <script src="<?php echo base_url('assets/js/contact.js'); ?>"></script>
         <!--Other Plugins -->
         <script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
         <!-- Prefix free CSS -->
         <script src="<?php echo base_url('assets/js/prefixfree.js'); ?>"></script>
         <!-- LayerSlider script files -->
         <script src="<?php echo base_url('assets/layerslider/js/layerslider.kreaturamedia.jquery.js'); ?>" type="text/javascript"></script>
         <!-- Bootstrap Select Tool (For Module #4) -->
         <script src="<?php echo base_url('assets/switcher/js/bootstrap-select.js'); ?>"></script>
         <!-- UI jQuery (For Module #5 and #6) -->
         <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js" type="text/javascript"></script>
         <!-- All Scripts & Plugins -->
         <script src="<?php echo base_url('assets/switcher/js/dmss.js'); ?>"></script>

         <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>


         <script type="text/javascript">
             //pass base_url to js
             var base_url = "<?php echo base_url(); ?>";
         </script>



   </body>
</html>