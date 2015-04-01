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
	<div class="well well-signhere col-xs-12">

		<h1 class="sign">SIGN UP FOR THE<a href="<?php bloginfo('url');?>/waiting-list/" title="<?php bloginfo('waitinglist'); ?>"><?php bloginfo('waiting list'); ?><span> HERE</span></a></h1>
		

	</div>
		

</div>

<!-- end of buy your tickets-->
	

<!-- ticket option 1-->

<div class="col-xs-12">

<div class="col-xs-6">
	<div class="row">
		<a href="http://www.ticketmaster.com/section" target="_blank"> 
		
			<img src="<?php bloginfo('template_directory'); ?>/images/sold-out_ga.png" class="ticket-img" alt=""></a>
	</div>
</div>


<div class="col-xs-5">
	<div class="row ticket-text">
		
			<p>A WRISTBAND WILL TAKE THE PLACE OF A TICKET. WRISTBANDS WILL SHIP IN ADVANCE. NO TICKETS WILL BE PRINTED OR SHIPPED.

A HIGH-SECURITY WRISTBAND WITH A UNIQUE EMBEDDED BARCODE CHIP WILL BE MAILED TO YOU BEFORE THE FESTIVAL. THE WRISTBAND IS LIKE CASH-IT CANNOT BE REPLACED IF LOST OR STOLEN. THE WRISTBAND WILL BE SCANNED AS YOU ENTER THE FESTIVAL SITE. THE WRISTBAND SHOULD REMAIN ON YOUR WRIST THROUGHOUT THE FESTIVAL. 

ORDERS WILL SHIP ON 1/15/15. YOU WILL BE NOTIFIED WHEN YOUR ORDER IS SHIPPED. ORDER WILL BE SHIPPED REGULAR MAIL AND YOU SHOULD EXPECT YOUR WRISTBAND(S) TO ARRIVE IN 7-10 BUSINESS DAYS FROM RECEIPT OF SHIPPING CONFIRMATION EMAIL. 

IF PURCHASING FROM OUTSIDE THE US OR CANADA, WRISTBANDS WILL BE HELD AT WILL CALL AT THE FESTIVAL BOX OFFICE. 

VISIT WWW.SOUTHBEACHMUSICFEST.COM. FOR MORE INFORMATION. WRISTBANDS ARE NON-TRANSFERABLE. </p>
	</div>
</div>
</div>

<!-- end of ticket option 1-->



<!-- ticket option 2-->

<div class="col-xs-12">

<div class="col-xs-6">
	<div class="row">
		<a href="http://www.ticketmaster.com/section" target="_blank"> 
		
			<img src="<?php bloginfo('template_directory'); ?>/images/sold-out_vip.png" class="ticket-img" alt=""></a>
	</div>
</div>


<div class="col-xs-5">
	<div class="row ticket-text">
		
			<p>A VIP WRISTBAND WILL TAKE THE PLACE OF A TICKET. VIP WRISTBANDS WILL SHIP IN ADVANCE. NO TICKETS WILL BE PRINTED OR SHIPPED.

A HIGH-SECURITY VIP WRISTBAND WITH A UNIQUE EMBEDDED BARCODE CHIP WILL BE MAILED TO YOU BEFORE THE FESTIVAL. THE VIP WRISTBAND IS LIKE CASH-IT CANNOT BE REPLACED IF LOST OR STOLEN. THE VIP WRISTBAND WILL BE SCANNED AS YOU ENTER THE FESTIVAL SITE. THE VIP WRISTBAND SHOULD REMAIN ON YOUR WRIST THROUGHOUT THE FESTIVAL. 

ORDERS WILL SHIP ON 1/15/15. YOU WILL BE NOTIFIED WHEN YOUR ORDER IS SHIPPED. ORDER WILL BE SHIPPED REGULAR MAIL AND YOU SHOULD EXPECT YOUR VIP WRISTBAND(S) TO ARRIVE IN 7-10 BUSINESS DAYS FROM RECEIPT OF SHIPPING CONFIRMATION EMAIL. 

IF PURCHASING FROM OUTSIDE THE US OR CANADA, VIP WRISTBANDS WILL BE HELD AT WILL CALL AT THE FESTIVAL BOX OFFICE. 

VISIT WWW.SOUTHBEACHMUSICFEST.COM. FOR MORE INFORMATION. VIP WRISTBANDS ARE NON-TRANSFERABLE. 
</p>
	</div>
</div>
</div>

<!-- end of ticket option 2-->

<!-- ticket option 3-->

<div class="col-xs-12">

<div class="col-xs-6">
	<div class="row">
		<a href="http://www.ticketmaster.com/section" target="_blank"> 
		
			<img src="<?php bloginfo('template_directory'); ?>/images/sold-out_3day.png" class="ticket-img" alt=""></a>
	</div>
</div>


<div class="col-xs-5">
	<div class="row ticket-text">
		
			<p>A 3-DAY WRISTBAND WILL TAKE THE PLACE OF A TICKET. 3-DAY WRISTBANDS WILL SHIP IN ADVANCE. NO TICKETS WILL BE PRINTED OR SHIPPED.

A HIGH-SECURITY 3-DAY WRISTBAND WITH A UNIQUE EMBEDDED BARCODE CHIP WILL BE MAILED TO YOU BEFORE THE FESTIVAL. THE 3-DAY WRISTBAND IS LIKE CASH-IT CANNOT BE REPLACED IF LOST OR STOLEN. THE 3-DAY WRISTBAND WILL BE SCANNED AS YOU ENTER THE FESTIVAL SITE. THE 3-DAY WRISTBAND SHOULD REMAIN ON YOUR WRIST THROUGHOUT THE FESTIVAL. 

ORDERS WILL SHIP ON 1/15/15. YOU WILL BE NOTIFIED WHEN YOUR ORDER IS SHIPPED. ORDER WILL BE SHIPPED REGULAR MAIL AND YOU SHOULD EXPECT YOUR 3-DAY WRISTBAND(S) TO ARRIVE IN 7-10 BUSINESS DAYS FROM RECEIPT OF SHIPPING CONFIRMATION EMAIL. 

IF PURCHASING FROM OUTSIDE THE US OR CANADA, 3-DAY WRISTBANDS WILL BE HELD AT WILL CALL AT THE FESTIVAL BOX OFFICE. 

VISIT WWW.SOUTHBEACHMUSICFEST.COM. FOR MORE INFORMATION. 3-DAY WRISTBANDS ARE NON-TRANSFERABLE. 
</p>
	</div>
</div>
</div>
<!-- end of ticket option 3-->











<?php get_footer(); ?>





