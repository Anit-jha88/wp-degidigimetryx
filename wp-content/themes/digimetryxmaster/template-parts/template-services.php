<?php
/**
 *  Template Name: Service Page
 */
get_header();
?>
<?php echo get_template_part( 'template-parts/header', 'banner' ); ?>

	<section class="blog-section bg-grey pt-100 pb-70">
		<div class="container">
			<div class="row">


<?php
	$args = array( 'post_type' => 'our_services','orderby' => 'ID','order' => 'ASC','posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	$content = get_the_content();
  	$title = get_the_title();

	$image_id = get_post_thumbnail_id();
  	$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  	$image_title = get_the_title($image_id);
?>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="#."><img src="<?php echo $imgurl;?>" alt="<?php echo $image_alt; ?>"></a>
						</div>
						<div class="single-blog-item">
							<div class="blog-content">
								<h3><a href="#."><?php echo $title; ?></a> </h3>
								<p><?php echo $content; ?></p>
								<div class="blog-btn"> <a href="#." class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<?php get_footer() ?>