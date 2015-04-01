<?php get_header();
/*
Template Name: gallery Page
*/
?>

<div class="row">
      <div class="container">
             <?php $args = array('post_type' => 'photo'); ?>
            <?php $query = new WP_Query($args) ?>
            <?php $i = 1; ?>
            <?php if($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>

                  <div class="modal fade" id="myModal<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content center">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <div class="modal-body">
                          <img src="<?php echo the_field(''); ?> " class="img-responsive" alt="">
                        </div>
                        
                      </div>
                    </div>
                  </div>

            <div class="col-xs-4">
                  <div class="well">
                        <img src="<?php echo the_field(''); ?> " class="img-responsive" alt="">
                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal<?php echo $i;?>">View More</a>
                  </div>
            </div>
            <?php $i++; ?>
            <?php  endwhile; endif; ?>
       </div>
</div>


<?php get_footer(); ?>