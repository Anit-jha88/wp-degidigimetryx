<?php
/**
 *  Template Name: SAP Technology
 */
get_header();
?>
<?php echo get_template_part( 'template-parts/header', 'banner' ); ?>
<!-- Start Services Details Area -->
	<section class="services-details-area ptb-70">
		<div class="container">
			<div class="services-details-overview">
				<div class="row align-items-center">

					<div class="col-lg-12 col-md-12">
						<div class="services-step-wrapper">
<?php
	$args = array( 'post_type' => 'technology','orderby' => 'ID','order' => 'ASC','posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	$p=1;
	while ( $loop->have_posts() ) : $loop->the_post();
	$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	$content = get_the_content();
  	$title = get_the_title();

  	$image_id = get_post_thumbnail_id();
  	$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  	$image_title = get_the_title($image_id);
  	if($p==1){
?>
	<div class="row">
		<div class="col-md-5 col-sm-5 col-xs-12">
		   <div class="overview-image wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
			   <img src="<?php echo $imgurl; ?>" alt="<?php echo $image_alt; ?>" >
		   </div>
	   </div>
	   <div class="col-md-7 col-sm-7 col-xs-12">
		   <div class="overview-wrapper">
			   <h3><?php echo $title; ?></h3>
			   <p><?php echo $content;?></p>
		   </div>
	   </div>
   </div>
<?php } else{?>

<div class="row">
		<div class="col-md-7 col-sm-7 col-xs-12">
			<div class="overview-wrapper">
				 <h3><?php echo $title; ?></h3>
			   <p><?php echo $content;?></p>
			</div>
		</div>
		<div class="col-md-5 col-sm-5 col-xs-12">
			<div class="overview-image wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
				<img src="<?php echo $imgurl; ?>" alt="<?php echo $image_alt; ?>" >
			</div>
		</div>
		</div>

<?php }  $p++; if($p==3){$p=1;} endwhile; wp_reset_postdata(); ?>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Services Details Area -->
<?php get_footer() ?>