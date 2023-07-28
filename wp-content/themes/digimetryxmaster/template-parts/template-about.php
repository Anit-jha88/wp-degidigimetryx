<?php
/**
 *  Template Name: About Page
 */
get_header();
?>
<?php echo get_template_part( 'template-parts/header', 'banner' ); ?>
<?php $imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>

	<!-- Start About Section -->
	<section class="about-area section-padding">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content">
						<div class="about-content-text">
							<?php echo the_content(); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
					<div class="about-image">
						<img src="<?php echo $imgurl;?>" alt="About image">
						<div class="years-design">
							<h2>10+</h2>
							<h5>Years Experience</h5>
                        </div>
					</div>
				</div>
			</div>

			<div class="row mt-50">
				<div class="col-lg-12 col-md-12">
					<div class="projects-details-desc">
						<?php echo get_field('body_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->


	<!-- Start Counter Section -->
	<section class="counter-area section-padding">
		<div class="container">
			<div class="row">


				<?php if (get_field('counter-area')): ?>
					<?php foreach (get_field('counter-area') as $key => $value): ?>
						<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number"><?php echo $value['number']; ?></span>
								<span><?php echo $value['icon']; ?></span>
							</h2>
							<h3 class="counter-heading"><?php echo $value['ctext']; ?></h3>
						</div>
					</div>
				</div>
					<?php endforeach ?>
				<?php endif ?>

			</div>
		</div>
	</section>
	<!-- End Counter Section -->

	<!-- Start Team Section -->
	<!--<section class="team-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6>Team Member</h6>
						<h2>Expert Team</h2>
					</div>
				</div>


<?php
	$args = array( 'post_type' => 'team','orderby' => 'ID','order' => 'ASC','posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	$content = get_the_content();
  	$title = get_the_title();

	$image_id = get_post_thumbnail_id();
  	$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  	$image_title = get_the_title($image_id);
?>


				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="<?php echo $imgurl;?>" alt="<?php echo $image_alt; ?>">
							<div class="team-social-icon">
								<a href="<?php echo get_field('facebook_link'); ?>" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="<?php echo get_field('twitter_link'); ?>" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="<?php echo get_field('linkedin_link'); ?>" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3><?php echo $title; ?></h3>
							<span><?php echo get_field('designation'); ?></span>
						</div>
					</div>
				</div>


<?php endwhile; wp_reset_postdata(); ?>






			</div>
		</div>
	</section>-->
	<!-- End Team Section -->



	<!-- Start Hire Section -->
	<!--<section class="hire-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-12">
					<div class="hire-content">
						<?php echo get_field('body_content_2'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!-- End Hire Section -->
<?php echo get_template_part( 'template-parts/our', 'customer' ); ?>

	<?php get_footer() ?>