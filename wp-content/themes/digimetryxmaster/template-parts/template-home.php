<?php
/**
 *  Template Name: Home Page
 */
get_header();
?>
<!-- Start Home Area -->
	<div class="home-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12">
							<div class="main-banner-content">
								<h1><?php echo get_field('banner_title'); ?></h1>
								<p><?php echo get_field('banner_content'); ?></p>
								<div class="banner-btn">
									<a href="<?php echo home_url('/about-us/'); ?>" class="default-btn-one">
                                        About Us
                                        <span></span>
                                    </a>
									<a class="default-btn" href="<?php echo home_url('/contact-us/'); ?>">
                                        Contact Us
                                        <span></span>
                                    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="banner-image">
								<img src="<?php echo get_field('banner_image')['url']; ?>" alt="<?php echo get_field('banner_image')['alt']; ?>">
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="creative-shape">
            <img src="<?php urlFunction(); ?>/img-home-bottom-shape.png" alt="svg shape">
        </div>
	</div>
	<!-- End Home Area -->

	<!-- Start Services Section -->
	<section class="services-section section-padding">
		<div class="container">
            <div class="row">
                <div class="col-sm-12">
					<div class="section-title">
						<h6><?php echo get_field('our_solutions_title'); ?></h6>
						<h2><?php echo get_field('our_solutions_sub_title'); ?></h2>
						<p><?php echo get_field('our_solutions_content'); ?></p>
					</div>
                </div>
            </div>
			<div class="row">
<?php
	$args = array( 'post_type' => 'our_solutions','orderby' => 'ID','order' => 'ASC','posts_per_page' => 3 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	$content = get_the_content();
  	$title = get_the_title();
?>

				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="<?php echo get_field('flaticon_class'); ?>"></i>
						</div>
						<h3><?php echo $title; ?></h3>
						<p><?php echo $content; ?></p>
						<div class="services-btn-link">
							<a href="<?php echo get_field('post_link'); ?>" class="services-link">Read More</a>
						</div>
					</div>
				</div>

<?php endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</section>
	<!-- End Services Section -->

	<!-- Start About Section -->
	<section class="about-area bg-grey section-padding">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content">
						<div class="about-content-text">
							<?php echo get_field('home_about_content'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
					<div class="about-image">
						<img src="<?php echo get_field('home_about_image')['url']; ?>" alt="<?php echo get_field('home_about_image')['alt']; ?>">
						<div class="years-design">
							<h2>10+</h2>
							<h5>Years Experience</h5>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->

	<!-- Start Overview Section -->
	<section class="overview-section section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="overview-image">
						<img src="<?php echo get_field('why_choose_us_image')['url']; ?>" alt="<?php echo get_field('why_choose_us_image')['alt']; ?>">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overview-content">
						<?php echo get_field('why_choose_us_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Overview Section -->

	<!-- Start Counter Section -->
	<section class="counter-area section-padding">
		<div class="container">
			<div class="row">


<?php if (get_field('counter_area')): ?>
					<?php foreach (get_field('counter_area') as $key => $value): ?>

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

	<!-- Start Overview Section -->
	<section class="overview-section bg-grey pt-70 pb-70">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="overview-content">
						<?php echo get_field('our_services_content'); ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overview-image-2">
						<img src="<?php echo get_field('our_services_image')['url']; ?>" alt="<?php echo get_field('our_services_image')['alt']; ?>">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Overview Section -->



	<!-- Start Testimonial Section -->
	<section class="testimonial-section pt-70 pb-70">
		<div class="container">
			<div class="section-title">
				<h6>Testimonial</h6>
				<h2>What Our Client Say</h2>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="testimonial-slider owl-carousel owl-theme">
						<!-- testimonials item -->


<?php
	$args = array( 'post_type' => 'testimonials','orderby' => 'ID','order' => 'ASC','posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	$content = get_the_content();
  	$title = get_the_title();

	$image_id = get_post_thumbnail_id();
  	$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  	$image_title = get_the_title($image_id);
?>



						<div class="single-testimonial">
							<div class="rating-box">
								<ul>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
							<div class="testimonial-content">
								<p><?php echo $content; ?></p>
							</div>
							<div class="avatar">
								<img src="<?php echo $imgurl;?>" alt="<?php echo $image_alt; ?>">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3><?php echo $title; ?></h3>
									<span><?php echo get_field('designation'); ?></span>
								</div>
							</div>
						</div>
						<!-- testimonials item -->

<?php endwhile; wp_reset_postdata(); ?>





					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->


	<!-- Start Hire Section -->
	<section class="hire-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-12">
					<div class="hire-content">
						<!--<h6>Want to work with us?</h6>
						<h2>Digitally transform and grow your business!</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud consectetur voluptatem accusantium doloremque adipiscing elit.</p>-->
						<?php echo get_field('want_to_work_with_us_content');?>
						<div class="hire-btn">
							<a class="default-btn" href="tel:0802235678">Call Now<span></span></a>
							<a class="default-btn-one" href="<?php echo get_page_link('11')?>">Contact Us<span></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hire Section -->

<?php echo get_template_part( 'template-parts/our', 'customer' ); ?>
<?php get_footer(); ?>