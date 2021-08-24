
<!-- Blog Page -->
<div id="page-section">
   <section id="blog">
      <div class="container-fluid">
         <div class="jumbotron"></div>
         <!-- /jumbotron-->
            <div class="jumbo-heading">
               <!-- Heading -->
               <h1>Blog Home</h1>
               <!-- Breadcrumb -->
               <ul class="breadcrumb">
                  <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider"></span></li>
                  <li class="active">Blog Home</li>
               </ul>
            </div>
            <!-- /jumbo-heading -->
            <!-- Blog Home -->
            <div class="container">
               <div id="blog-container" class="col-md-9">

                 <?php
                  if ($total_records > 0) { ?>
                      <?php

                  foreach ($blog as $y) { 

                     $total_comments = $this->blog_model->count_post_comments($y->id); ?>

                  <!-- Blog Post 1 -->
                  <div class="blog-post row">
                     <div class="img-date">
                        <!-- date and category -->
                        <div class="col-md-1 text-center date-category">
                           <i class="fa fa-camera fa-2x"></i>
                           <p><?php echo x_date_full($y->date); ?></p>
                        </div>
                        <!-- blog image -->
                        <div class="img-blog">
                           <a href="blog-single.html">
                           <img class="img-responsive" src="<?php echo base_url('uploads/blog/'.$y->featured_image); ?>" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <!-- Post header -->
                        <h3>
                           <a href="<?php echo base_url('home/single_blog/'.$y->id.'/'.$y->slug); ?>"><?php echo $y->title; ?></a>
                        </h3>
                        <div class="post-info">
                           <!-- Post Author -->
                           <p><i class="fa fa-user"></i>by <a href="#">Admin</a></p>
                           <!-- Post Comments -->
                           <p><i class="fa fa-comment"></i><a href="#"><?php echo $total_comments; ?> Comments</a></p>
                        </div>
                        <!-- Post Excerpt -->
                        <p><?php echo $y->snippet; ?>...</p>
                        <a class="btn" href="<?php echo base_url('home/single_blog/'.$y->id.'/'.$y->slug); ?>">Read More <i class="fa fa-angle-right"></i></a>
                     </div>
                  </div>
                  <!-- /.row -->

                  <?php } ?>

                  <?php } else { ?>

                     <h3 class="text-danger">No blog to show.</h3>

                  <?php } ?>

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
                        <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                        <a href="#" title=""><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
               <!-- /sidebar ends --> 
               <!-- Pagination -->
               <div class="text-center col-md-12">
                  <ul class="pagination">
                     <li><?php echo pagination_links($links, 'pagination active'); ?></li>
                  </ul>
               </div>
               <!-- /text-center -->
         </div>
         <!-- /container-->
      </div>
      <!-- /container-fluid-->
   </section>
   <!--Section Blog ends -->
</div>
<!--/page-section-->