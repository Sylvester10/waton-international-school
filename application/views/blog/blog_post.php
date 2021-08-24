 <!-- Blog Page -->
         <!-- Blog Single Page  -->
         <div id="page-section">
            <section id="blog">
               <div class="container-fluid">
                  <div class="jumbotron"></div>
                  <!-- /jumbotron-->
                  <div class="jumbo-heading">
                     <!-- Heading -->
                     <h1><?php echo $y->title; ?></h1>
                     <!-- Breadcrumb -->
                     <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider"></span></li>
                        <li><a href="<?php echo base_url('home/blog'); ?>">Blog Home</a> <span class="divider"></span></li>
                        <li class="active">Blog Post</li>
                     </ul>
                  </div>
                  <!-- /jumbo-heading -->
                  <!-- Blog page -->
              <div class="container">
                  <div id="blog-container" class="col-md-9">
                     <div class="blog-post post-main">
                        <!-- Post Info -->
                        <div class="post-info">
                           <p><i class="fa fa-clock-o"></i>Posted on <?php echo x_month_short($y->date); ?> <?php echo x_year_short($y->date); ?>, <?php echo x_year_long($y->date); ?> at <?php echo x_time_12hour($y->date); ?></p>
                           <p><i class="fa fa-user"></i>by <a href="#">Admin</a></p>
                           <!-- Post Comments -->
                           <p><i class="fa fa-comment"></i><?php echo $total_comments; ?> Comments</p>
                        </div>
                        <!-- post-info -->
                        <!-- Image -->
                        <img class="img-responsive center-block" src="<?php echo base_url('uploads/blog/'.$y->featured_image); ?>" alt="">                   
                        <!-- Post Content -->
                        <p><?php echo $y->body; ?></p>
                     </div>
                     <!-- /blog-post -->  
                     <!-- Comments Form -->
                     <div class="col-md-12">
                        <div class="col-md-8 col-centered">
                           <div class="media comment-form">
                              <h5>Leave a Comment:</h5>

                               <?php 
                                 $form_attributes = array("id" => "create_comment_form");
                                 echo form_open('home/create_comment_ajax/'.$post_id, $form_attributes); ?>

                              <!-- Form Starts -->
                              <div class="form-group margin1">
                                 <label>Name:</label><input type="text" name="name" class="form-control input-field"  required />                    
                                 <label>Email:</label><input type="email" name="email" class="form-control input-field" required />           
                                 <label>Comment:</label>  <textarea name="comment"  class="textarea-field form-control" rows="5"  required ></textarea>
                              </div>

                               <?php echo form_close(); ?>

                              <button type="submit" id="send" value="Submit" class="btn">Post Comment</button>
                           </div>
                        </div>
                        <!-- /col-md-7 -->
                     </div>
                     <!-- /row -->
                     <!-- Posted Comments -->
                     <div class="comments-block">
                        <h4 class="text-center">Comments</h4>
                        <hr>

                        <?php
                           if ($total_comments > 0) { 

                              foreach ($comments as $c) { ?>

                        <!-- Comment -->
                        <div class="comment media">
                           <a href="#">
                           <img class="media-object img-responsive img-circle" src="<?php echo user_avatar; ?>" alt="">
                           </a>
                           <div class="media-body">
                              <a href="#">
                                 <h6 class="media-heading"><?php echo $c->name; ?>
                                    <small><?php echo x_date($c->date); ?> at <?php echo x_time_12hour($c->date); ?></small>
                                 </h6>
                              </a>
                              <p><?php echo $c->comment; ?></p>
                           </div>
                        </div>
                        <!-- /media -->

                        <?php }

                        } ?>

                     </div>
                     <!-- /comments block -->
                  </div>
                  <!-- /blog-container -->
                  <!-- Sidebar Starts -->
                  <div class="sidebar col-md-3">
                     <!-- About Us Widget -->
                     <div class="well">
                        <h4 class="sidebar-header">About Us</h4>
                        <p>Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                        <!-- Social Media icons -->
                        <div class="social-media">
                           <a href="#" title=""><i class="fa fa-twitter"></i></a>
                           <a href="#" title=""><i class="fa fa-facebook"></i></a>
                           <a href="#" title=""><i class="fa fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
                  <!-- /sidebar ends --> 
             </div>
               <!-- /container-->
               </div>
               <!-- /container-fluid-->
            </section>
            <!--Section Blog ends -->
         </div>
         <!--/page-section-->