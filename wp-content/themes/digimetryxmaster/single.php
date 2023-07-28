<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="page-title-area">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Career</h2>
					<ul>
						<li><a href="https://digimetryx.com">Home</a>
						</li>
						<li>Career</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="contact-info-wrapper">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="section-title jobdetail">
						<h6><?php the_title();?></h6>
						<h4>Job Code : <?php echo get_field('Job Code')?></h4>
						<h4>Total Experience : <?php echo get_field('total_expreance')?></h4>
						<?php the_content();?>
					</div>
				</div>
			
			

			</div>
			
			<div class="row bg-grey ptb30">
					<div class="col-md-12">
					<div class="section-title">
					
						<h2>Fill the form</h2>
					</div>
				</div>
                 
				<div class="row align-items-center">
					<div class="col-lg-10 offset-lg-1">
						<div class="contact-form">
							<p class="form-message"></p><br>
<?php echo do_shortcode('[contact-form-7 id="29" title="Contact" html_class="contact-form form" html_id="contact-form"]') ?>
			</div>
					</div>
				</div>
			</div>
			
		</div>
    </section>

<?php get_footer(); ?>
