<?php get_header(); 
/*
Template Name: Home Page
*/
?>

<div class="row">
		<div class="col-xs-12">
			<div id="carousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel" data-slide-to="1"></li>
				    <li data-target="#carousel" data-slide-to="2"></li>
				    <li data-target="#carousel" data-slide-to="3"></li>
				    <li data-target="#carousel" data-slide-to="4"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="<?php bloginfo('template_directory'); ?>/images/slide1.jpg" alt="miami">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				      <img src="<?php bloginfo('template_directory'); ?>/images/slide2.jpg" alt="miami">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				      <img src="<?php bloginfo('template_directory'); ?>/images/slide3.jpg" alt="miami">
				      <div class="carousel-caption">
				        ...
				      </div>
				  	</div>
				    <div class="item">
				      	<img src="<?php bloginfo('template_directory'); ?>/images/slide4.jpg" alt="miami">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				      	<img src="<?php bloginfo('template_directory'); ?>/images/slide5.jpg" alt="miami">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
 

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
		</div>
</div>


<div class="row">
		<div class="col-xs-12 pad">
			<img src="<?php bloginfo('template_directory'); ?>/images/home1.png">
		</div>
	</div>


<div class="row push">
	<div class="col-xs-6">
		<img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg">
	</div>

	<div class="col-xs-6">
		<img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg">
	</div>
</div>

<div class="row push">
    <div class="col-xs-4">
        <img src="<?php bloginfo('template_directory'); ?>/images/img3.jpg">
    </div>
    

    <div class="col-xs-4 right">
        <img src="<?php bloginfo('template_directory'); ?>/images/img4.jpg">
    </div>
    

    <div class="col-xs-4 right">
        <img src="<?php bloginfo('template_directory'); ?>/images/img5.jpg">
    </div>
</div>




<?php get_footer(); ?>