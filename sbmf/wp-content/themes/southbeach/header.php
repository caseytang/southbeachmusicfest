<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>
  <div class="container">

  	<div class="header">
          <div class="col-xs-12">
                <!-- logo image, the logo links to the home page--> 
                    <a href="<?php bloginfo('url'); ?>"> 
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" class="logo" alt="south beach music fest"></a>
          </div>
                <!--end of logo img--> 
          
<!-- nav starts-->
<div class="col-xs-12 bar">
    
    <?php wp_nav_menu( ['menu_class' => 'nav nav-pills']); ?>
    			
</div>
<!--nav ends-->
  	
  

  		
  	

