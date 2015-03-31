<?php get_header();
/*
Template Name: tickets Page
*/
?>

<!--========================-->

<?php 


$args = array (
	'post_type' => 'tickets'
				);

 $tickets = new WP_Query($args);


if ($tickets->have_posts()) : while ($tickets->have_posts()) : $tickets->the_post(); ?>
<div class="col-xs-4">
	<div class="well well-options">

			<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
 	 		<?php the_content(); ?>

	</div>
</div>
 	

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; 


?>


<!--========================-->



<!--video-->
<div class="col-xs-12">
<div class="video-container responsive">
<iframe width="900" height="600" src="https://www.youtube.com/embed/7nGjmPIh0w4" frameborder="0" allowfullscreen></iframe>
</div>
</div>


<!--end of video-->



<!-- dates image-->
<div class="col-xs-12 date-img">

 <img src="<?php bloginfo('template_directory'); ?>/images/ticket-img.png" alt="">
</div>


<!-- end of dates image-->



<!-- buy your tickets-->
<div class="row">
	<div class="well well-buyhere col-xs-12">

		<h1 class="buy">BUY YOUR TICKETS <a href="http://www.ticketmaster.com/section" target="_blank"><span> HERE</span></a></h1>
		


	</div>
		

</div>

<!-- end of buy your tickets-->
	

<!-- ticket option 1-->

<div class="col-xs-12">

<div class="col-xs-6">
	<div class="row">
		<a href="http://www.ticketmaster.com/section" target="_blank"> 
		
			<img src="<?php bloginfo('template_directory'); ?>/images/ticket.png" class="ticket-img" alt=""></a>
	</div>
</div>


<div class="col-xs-5">
	<div class="row ticket-text">
		
			<p>t is a long established fact that a reader 
				will be distracted by the readable content 
				of a page when looking at its layout. The 
				point of using Lorem Ipsum is that it has a 
				more-or-less normal distribution of letters, 
				as opposed to using 'Content here, content here', 
				making it look like readable English. Many desktop p
				ublishing packages and web page editors now use Lorem 
				Ipsum as their default model text, and a search for '
				lorem ipsum' will uncover many web sites still in the
				ir infancy. Various versions have evolved over the years, 
				sometimes by accident, sometimes on purpose (injected humour and the like).</p>
	</div>
</div>
</div>

<!-- end of ticket option 1-->



<!-- ticket option 2-->

<div class="col-xs-12">

<div class="col-xs-6">
	<div class="row">
		<a href="http://www.ticketmaster.com/section" target="_blank"> 
		
			<img src="<?php bloginfo('template_directory'); ?>/images/ticket-2.png" class="ticket-img" alt=""></a>
	</div>
</div>


<div class="col-xs-5">
	<div class="row ticket-text">
		
			<p>t is a long established fact that a reader 
				will be distracted by the readable content 
				of a page when looking at its layout. The 
				point of using Lorem Ipsum is that it has a 
				more-or-less normal distribution of letters, 
				as opposed to using 'Content here, content here', 
				making it look like readable English. Many desktop p
				ublishing packages and web page editors now use Lorem 
				Ipsum as their default model text, and a search for '
				lorem ipsum' will uncover many web sites still in the
				ir infancy. Various versions have evolved over the years, 
				sometimes by accident, sometimes on purpose (injected humour and the like).</p>
	</div>
</div>
</div>

<!-- end of ticket option 2-->

<!-- ticket option 3-->

<div class="col-xs-12">

<div class="col-xs-6">
	<div class="row">
		<a href="http://www.ticketmaster.com/section" target="_blank"> 
		
			<img src="<?php bloginfo('template_directory'); ?>/images/ticket-3.png" class="ticket-img" alt=""></a>
	</div>
</div>


<div class="col-xs-5">
	<div class="row ticket-text">
		
			<p>t is a long established fact that a reader 
				will be distracted by the readable content 
				of a page when looking at its layout. The 
				point of using Lorem Ipsum is that it has a 
				more-or-less normal distribution of letters, 
				as opposed to using 'Content here, content here', 
				making it look like readable English. Many desktop p
				ublishing packages and web page editors now use Lorem 
				Ipsum as their default model text, and a search for '
				lorem ipsum' will uncover many web sites still in the
				ir infancy. Various versions have evolved over the years, 
				sometimes by accident, sometimes on purpose (injected humour and the like).</p>
	</div>
</div>
</div>
<!-- end of ticket option 3-->











<?php get_footer(); ?>





