<?php get_header();
/*
Template Name: partners Page
*/
?>
<?php 
$args = array (
	'post_type' => 'partners'
				);
 $partners = new WP_Query($args);
if ($partners->have_posts()) : while ($partners->have_posts()) : $partners->the_post(); ?>
	<div class="col-xs-4">
			<div class="row">
				<div class="well">

					<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
		 	 		<?php the_content(); ?>

					
				</div>
			</div>

	</div>

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; 


?>
<?php get_footer(); ?>