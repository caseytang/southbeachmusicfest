<?php get_header();
/*
Template Name: festival Page
*/
?>

<?php 


$args = array (
	'post_type' => 'festival'
				);

 $festival = new WP_Query($args);


if ($festival->have_posts()) : while ($festival->have_posts()) : $festival->the_post(); ?>
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




<!-- dates image-->
<div class="col-xs-12 date-img">

 <img src="<?php bloginfo('template_directory'); ?>/images/ticket-img.png" alt="">
</div>


<!-- end of dates image-->
<?php get_footer(); ?>