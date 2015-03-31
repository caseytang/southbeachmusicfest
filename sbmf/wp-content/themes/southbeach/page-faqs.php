<?php get_header();
/*
Template Name: Faq Page
*/
?>



<div class="row">
	<div class="container">
		<div class="col-xs-12">
			<h1>General Questions and Rules</h1>
			<ul>
				<li>Festival starts at 11am</li>
				<li>Rain or shine!</li>
				<li>Festival pass must be worn at all times</li>
				<li>Everyone is subject to search upon entry</li>
				<li>Line up/set times are subjec to change</li>
			</ul>
		</div>
	</div>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


    <?php $faqs = new WP_Query(['post_type' => 'faq']); ?>
    <?php if($faqs->have_posts()): while ($faqs->have_posts()) : $faqs->the_post(); ?>


		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#c<?php the_id(); ?>">
		         	<?php the_title(); ?>
		        </a>
		      </h4>
		    </div>
		    <div id="c<?php the_id(); ?>" class="panel-collapse collapse">
		      <div class="panel-body">
				<?php the_content(); ?>
		      </div>
		    </div>
		  </div>
			

    <?php  endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>