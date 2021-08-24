<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="keyword" content="<?php echo school_keywords; ?>">
      <meta name="author" content="">
      <!-- Page title -->
      <title><?php echo $title; ?> | <?php echo $school_name; ?></title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('assets/fonts/glyphicons/bootstrap-glyphicons.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('assets/fonts/flaticons/flaticon.css'); ?>" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Baloo|Lato:400,700,900" rel="stylesheet">
      <!-- Style CSS -->
      <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.css'); ?>">
      <!-- Color Style CSS -->
      <link href="<?php echo base_url('assets/styles/maincolors.css'); ?>" rel="stylesheet">
      <!-- LayerSlider stylesheet -->
      <link rel="stylesheet" href="<?php echo base_url('assets/layerslider/css/layerslider.css'); ?>">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/apple-icon-72x72.png'); ?>">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/apple-icon-114x114.png'); ?>">
      <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico'); ?>" type="image/x-icon">
     <!-- Switcher Only -->
      <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo base_url('assets/switcher/css/switcher.css'); ?>" media="all" />
      <!-- END Switcher Styles -->
      <!-- Demo Examples (For Module #3) -->
      <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/styles/maincolors.css'); ?>" title="maincolors" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/styles/cuteandbright.css'); ?>" title="cuteandbright" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/styles/sweetpastel.css'); ?>" title="sweetpastel" media="all" />
   </head>

   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
      <!-- Start Switcher -->
      <div class="demo_changer">
         <div class="demo-icon">
            <i class="fa fa-cog fa-2x"></i>
         </div>
         <!-- end opener icon -->
         <div class="form_holder text-center">
            <div class="row">
               <div class="col-lg-12">
                  <div class="predefined_styles">
                     <h5>Choose a Color Skin</h5>
                     <!-- MODULE #3 -->
                     <a href="maincolors" class="styleswitch"><img src="<?php echo base_url('assets/switcher/images/maincolors.png'); ?>" alt="maincolors"></a>      
                     <a href="cuteandbright" class="styleswitch"><img src="<?php echo base_url('assets/switcher/images/cuteandbright.png'); ?>" alt="cuteandbright"></a>  
                     <a href="sweetpastel" class="styleswitch"><img src="<?php echo base_url('assets/switcher/images/sweetpastel.png'); ?>" alt="sweetpastel"></a>	
                  </div>
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end form_holder -->
      </div>
      <!-- end demo_changer -->

      <!-- Preloader  --> 
      <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
         </div>
      </div>
      <!-- /Preloader ends --> 

      <div id="page-width">
         <!-- Navbar -->
         <nav class="navbar navbar-custom navbar-fixed-top"  id="navbar-custom">
            <div class="container">
               <!-- Logo and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                  <i class="fa fa-bars"></i>
                  </button>
                  <!-- Logo -->
                  <div class="navbar-brand page-scroll">
                     <a href="#page-top"><img src="<?php echo base_url('assets/img/logo4.png'); ?>"  class="img-responsive" alt=""></a>
                  </div>
               </div>
               <!-- /.navbar-header -->
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-brand">
                  <ul class="nav navbar-nav page-scroll navbar-right">
                     <li><a href="<?php echo base_url(); ?>">Home</a></li>
                     <li><a href="<?php echo base_url(); ?>#services">About Us</a></li>
                     <li><a href="<?php echo base_url(); ?>#team">Our Team</a></li>
                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="<?php echo base_url(); ?>#blog-preview">Latest</a></li>
                           <li><a href="<?php echo base_url('home/blog'); ?>">Blog Home</a></li>
                        </ul>
                     </li>
                     <li><a href="<?php echo base_url(); ?>#gallery">Gallery</a></li>
                     <li><a href="<?php echo base_url('admission'); ?>">Admissions</a></li>
                     <li><a href="<?php echo base_url('contact_us'); ?>">Contact</a></li>
                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Portal<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="https://qschoolmanager.com/login" target="_blank">Admin | Staff</a></li>
                           <li><a href="https://qschoolmanager.com/user_login" target="_blank">Students | Parent</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /container -->
         </nav>
         <!-- /nav -->