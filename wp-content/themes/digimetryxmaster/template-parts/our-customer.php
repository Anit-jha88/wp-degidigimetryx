<!-- Start Partner section -->
	<section class="partner-section pt-70 pb-50">
		<div class="container">
			<div class="partner-title">
				<h6>Trusted By Over 40,000</h6>
				<h2>Our Customers</h2>
			</div>
			<div class="partner-list">
<?php
	$args = array( 'post_type' => 'our_customers','orderby' => 'ID','order' => 'ASC','posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	$content = get_the_content();
  	$title = get_the_title();
	$image_id = get_post_thumbnail_id();
  	$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  	$image_title = get_the_title($image_id);
?>
<div class="partner-item">
	<a href="#0">
		<img src="<?php echo $imgurl;?>" alt="<?php echo $image_alt; ?>">
	</a>
</div>
<?php endwhile; wp_reset_postdata(); ?>



			</div>
		</div>
	</section>
	<!-- End Partner section -->