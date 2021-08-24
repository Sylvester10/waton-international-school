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
      <h2>Registration</h2>
      <!-- divider -->
      <div class="hr"></div>
   </div>
    <!-- Contact -->
   <div class="container">
      <!-- Contact Form -->
         <!-- Form Starts -->
         <?php 
            $form_attributes = array("id" => "admission_form");
            echo form_open('home/form_ajax', $form_attributes); ?>

         <div class="form">
            <p>Click on the numbers to navigate the tabs.</p>           

            <input id="one" type="radio" name="stage" checked="checked" />
            <input id="two" type="radio" name="stage" />
            <input id="three" type="radio" name="stage" />
            <input id="four" type="radio" name="stage" />
            <input id="five" type="radio" name="stage" />
            <input id="six" type="radio" name="stage" />

            <div class="stages">
               <label for="one">1</label>
               <label for="two">2</label>
               <label for="three">3</label>
               <label for="four">4</label>
               <label for="five">5</label>
               <label for="six">6</label>
            </div>

            <span class="progress"><span></span></span>

            <div class="panels form-group">
               <div data-panel="one">
                  <h4>Child/Parent Information</h4>

                  <label class="form-control-label">Select Class:</label>
                  <select class="form-control" name="class" required="" >
                     <option value="">Select</option>
                     <option value="Creche/Pre-Nursery ">Creche/Pre-Nursery </option>
                     <option value="Nursery/Primary">Nursery/Primary</option>
                  </select>

                  <label>Child name:</label><input type="text" name="student_name" class="form-control input-field"  required="" />

                  <label>Date of Birth e.g 01/01/2020:</label><input type="text" name="date_of_birth" class="form-control input-field"  required="" />        

                  <label class="form-control-label">Gender*</label>
                  <select class="form-control" name="sex" required="">
                     <option value="">Select</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                  </select>

                  <label class="form-control-label">Religion:</label>
                  <select class="form-control" name="religion" required="" >
                     <option value="">Select</option>
                     <option value="Christian">Christianity</option>
                     <option value="Judaism">Judaism</option>
                     <option value="Hinduism">Hinduism</option>
                     <option value="Budduism">Budduism</option>
                     <option value="Other">Other</option>
                  </select>

                  <label class="form-control-label">State of Origin:</label>
                  <select class="form-control" name="state_of_origin" required="" >
                     <option value="">Select</option>
                     <?php 
                     $states = nigerian_states();
                        foreach ($states as $state ) { ?>
                        <option value="<?php echo $state; ?>" > <?php echo $state; ?> </option>
                     <?php }
                     ?>
                  </select>                
                     
                  <label>Name of Father:</label><input type="text" name="father_name" class="form-control input-field"  required="" />

                  <label>Address:</label><textarea type="text" name="father_address" class="form-control input-field"  required=""></textarea>
                  
                  <label>Occupation:</label><input type="text" name="occupation" class="form-control input-field"  required="" />

                  <label>Phone Number:</label><input type="text" name="father_number" class="form-control input-field"  required="" />

                  <label>Active Email Address:</label><input type="email" name="father_email" class="form-control input-field"  required="" />   

                  <label>Office Address:</label><textarea type="text" name="father_office_address" class="form-control input-field" required=""></textarea>           

                  <label>Name of Mother:</label><input type="text" name="mother_name" class="form-control input-field"  required="" />

                  <label>Address:</label><textarea type="text" name="mother_address" class="form-control input-field" rows="2"  required=""></textarea>

                  <label>Occupation:</label><input type="text" name="mother_occupation" class="form-control input-field"  required="" />

                  <label>Phone Number:</label><input type="text" name="mother_number" class="form-control input-field"  required="" />

                  <label>Active Email Address:</label><input type="email" name="mother_email" class="form-control input-field"  required="" />   

                  <label>Office Address:</label><textarea type="text" name="mother_office_address" class="form-control input-field" rows="2"  required=""></textarea>           
                 
                  <label>Who to call if parents cannot be reached:</label><textarea type="text" name="emergency_contact" class="form-control input-field" rows="2"  required=""></textarea>  

               </div>

               <div data-panel="two">
                  <h4>Medical History</h4>

                  <label>Please state if the child has any Deformity or Health Challenge:</label><textarea type="text" name="medical_history" class="form-control input-field" rows="2"  required=""></textarea>

                  <label>Name of Family Doctor (If any):</label><input type="text" name="family_doctor" class="form-control input-field"  required="" /> 

                  <label>Phone Number:</label><input type="text" name="doctor_number" class="form-control input-field"  required="" />

                  <label class="form-control-label">In case of any emergency, should the family doctor be consulted?:</label>
                  <select class="form-control" name="contact_doctor" required="" >
                     <option value="">Select</option>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                  </select>

                  <label>Please attach photocopy of all immunization taken:</label><input type="text" name="immunization_info" class="form-control input-field"  required="" />

               </div>
               <div data-panel="three">
                  <h4>Eating</h4>
                  
                  <label class="form-control-label">Is your child on any special diet?:</label>
                  <select class="form-control" name="special_diet" required="" >
                     <option value="">Select</option>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                  </select>

                  <label>If yes, please indicate:</label><input type="text" name="special_diet_info" class="form-control input-field"  required="" />

                  <label>Mode of food preparation eg. Warm, hot, thick, etc:</label><input type="text" name="food" class="form-control input-field" rows="2" required="" />

                  <label class="form-control-label">What does your child use to drink?: </label>
                  <select class="form-control" name="drink" required="" >
                     <option value="">Select</option>
                     <option value="Bottle ">Bottle </option>
                     <option value="Sippy cup">Sippy cup</option>
                     <option value="Regular cup">Regular cup</option>
                     <option value="Nursing">Nursing</option>
                  </select>

                  <label>others, Specify:</label><input type="text" name="drink_others" class="form-control input-field" rows="2"  required="" />

                  <label>How often does your child eat?:</label><input type="text" name="food_frequency" class="form-control input-field" rows="2"  required="" />
               </div>

               <div data-panel="four">
                  <h4>Sleeping</h4>

                  <label class="form-control-label">Does your child nap?:</label>
                  <select class="form-control" name="sleep" required="" >
                     <option value="">Select</option>
                     <option value="Yes ">Yes </option>
                     <option value="No">No</option>
                  </select>

                  <label>How many times per day?:</label><input type="text" name="sleep_frequency" class="form-control input-field"  required="" />

                  <label>How long?:</label><input type="text" name="sleep_interval" class="form-control input-field"  required="" />

                  <label class="form-control-label">Does your child sleep with a special blanket, toy or pacifier?:</label>
                  <select class="form-control" name="special_sleep" required="" >
                     <option value="">Select</option>
                     <option value="Yes ">Yes </option>
                     <option value="No">No</option>
                  </select>

                  <label>Are there specific bedtime routines at home?:</label><input type="text" name="sleep_routine" class="form-control input-field"  required="" />
               </div>
               <div data-panel="five">
                  <h4>Toileting</h4>
                  
                  <label class="form-control-label">Does your child use diapers?:</label>
                  <select class="form-control" name="diapers" required="" >
                     <option value="">Select</option>
                     <option value="Yes ">Yes </option>
                     <option value="No">No</option>
                  </select>

                  <label>Does your child use a potty or the toilet?:</label><input type="text" name="potty_toilet" class="form-control input-field" rows="2"  required="" />

                  <label>How does your child let you know that it’s time “to go”?:</label><input type="text" name="potty_alert" rows="2" class="form-control input-field"  required="" />

                  <label class="form-control-label">Does your child need regular reminders to use the bathroom?:</label>
                  <select class="form-control" name="potty_reminder" required="" >
                     <option value="">Select</option>
                     <option value="Yes ">Yes </option>
                     <option value="No">No</option>
                  </select>

                  <h4>Development</h4>
                  
                  <label class="form-control-label">Do you have any concerns about your child’s development?:</label>
                  <select class="form-control" name="child_development_concern" required="" >
                     <option value="">Select</option>
                     <option value="Yes ">Yes </option>
                     <option value="No">No</option>
                  </select>

                  <label class="form-control-label">If yes, please indicate:</label>
                  <select class="form-control" name="child_development" required="" >
                     <option value="">Select</option>
                     <option value="Hearing  ">Hearing  </option>
                     <option value="Vision">Vision</option>
                     <option value="Language">Language</option>
                     <option value="Gross Motor">Gross Motor</option>
                     <option value="Fine Motor">Fine Motor</option>
                     <option value="Social">Social</option>
                  </select>

                  <label>Other, specify:</label><input type="text" name="child_development_info" rows="2" class="form-control input-field" rows="2" required="" />

                  <label>What is your child’s primary spoken language?:</label><input type="text" name="child_primary_language" class="form-control input-field" required="" />

                  <label>Are there other languages being used with your child?:</label><input type="text" name="other_language" class="form-control input-field" required="" />

               </div>

               <div data-panel="six">
                  <h4>Social and Emotional Development</h4>
                  
                  <label class="form-control-label">Has your child been in child care before?:</label>
                  <select class="form-control" name="child_care" required="" >
                     <option value="">Select</option>
                     <option value="Yes ">Yes </option>
                     <option value="No">No</option>
                  </select>

                  <label>How would you describe your child’s temperament and personality?:</label><input type="text" name="child_temperament" rows="2" class="form-control input-field" rows="2" required="" />

                  <label>What soothes your child when crying?:</label><input type="text" name="cry_soother" class="form-control input-field" required="" />

                  <label>Does your child have any favorite songs or games that comfort them?:</label><input type="text" name="fav_song_game" class="form-control input-field" required="" />

                  <label>Does your child have any Pet name eg Chu chu?:</label><input type="text" name="pet_name" class="form-control input-field" required="" />

                  <label>What are your expectations or hopes for your child at Waton International School?:</label><input type="text" name="child_expectations" class="form-control input-field" required="" />

                  <h4>Pickup Information</h4>

                  <label>Name:</label><input type="text" name="pickup_name" rows="2" class="form-control input-field" rows="2" required="" />

                  <label>Relationship:</label><input type="text" name="pickup_relationship" class="form-control input-field" required="" />

                  <label>Address:</label><input type="text" name="pickup_address" class="form-control input-field" required="" />

                  <label>Mobile line:</label><input type="text" name="pickup_number" class="form-control input-field" required="" />

                   <label>Name 2:</label><input type="text" name="pickup_name2" rows="2" class="form-control input-field" rows="2" required="" />

                  <label>Relationship 2:</label><input type="text" name="pickup_relationship2" class="form-control input-field" required="" />

                  <label>Address 2:</label><input type="text" name="pickup_address2" class="form-control input-field" required="" />

                  <label>Mobile line 2:</label><input type="text" name="pickup_number2" class="form-control input-field" required="" />

               </div>

            </div>

            <div id="status_msg"></div>

            <?php echo flash_message_success('status_msg'); ?>
            <?php echo flash_message_danger('status_msg_error'); ?>

            <button>Next</button>
            
         </div>

         <?php echo form_close(); ?> 

   </div>
   <!-- /container -->
</section>
<!--/Section ends -->
            