<?php
/**
 *  Template Name: Contact Page
 */
get_header();
?>

<?php echo get_template_part( 'template-parts/header', 'banner' ); ?>
	<!-- Start Contact Box Area -->
	<section class="contact-info-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6><?php echo get_field('contact_information_text'); ?></h6>
						<h2><?php echo get_field('find_us_text'); ?></h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="contact-info-content">
						<h5><?php echo get_field('address_text'); ?></h5>
						<p><?php echo get_field('address'); ?></p><br />
						<p><a href="tel:<?php echo get_field('phone_number'); ?>"><i class="flaticon-phone-call"></i><?php echo get_field('phone_number'); ?></a></p>
						<p><a href="mailto:<?php echo get_field('email_address'); ?>"><i class="flaticon-envelope" aria-hidden="true"></i> <?php echo get_field('email_address'); ?></a></p>
					</div>
				</div>
				<div class="col-lg-8 col-md-6">
					<div class="contact-info-content ptb-0">
						<iframe src="<?php echo get_field('maps'); ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="contact-info-content">
						<h5><?php echo get_field('address_text'); ?></h5>
						<p>4521 Legacy Drive Suite 100 Plano TX 75024</p><br />
						<p><a href="tel:<?php echo '+1 469 359 7984'; ?>"><i class="flaticon-phone-call"></i>+1 469 359 7984</a></p>
						<p><a href="mailto:<?php echo 'sales@digimetryx.com'; ?>"><i class="flaticon-envelope" aria-hidden="true"></i> sales@digimetryx.com</a></p>
					</div>
				</div>
				<div class="col-lg-8 col-md-6">
					<div class="contact-info-content ptb-0">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3343.4658303617207!2d-96.7807357!3d33.0705273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c22cd8bb80f9b%3A0x2c3b4098848a7a19!2s4521%20Legacy%20Dr%20%23100%2C%20Plano%2C%20TX%2075024%2C%20USA!5e0!3m2!1sen!2sin!4v1678989059116!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>

			</div>
		</div>
    </section>
	<!-- End Contact Box Area -->

	<!-- Start Contact Section -->
	<div class="contact-section bg-grey section-padding">
		<div class="container">
			<div class="section-title">
				<h6>Contact Us</h6>
				<h2>Let's Talk</h2>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact-form">
						<p class="form-message"></p><br>

<?php echo do_shortcode('[contact-form-7 id="28" title="Contact" html_class="contact-form form" html_id="contact-form"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Section -->

    <!-- Map Section Start -->
    <div class="map-area">

    </div>
    <!-- Map Section End -->
<?php get_footer() ?>