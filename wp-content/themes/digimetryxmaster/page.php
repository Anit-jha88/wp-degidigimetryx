<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php echo get_template_part( 'template-parts/header', 'banner' ); ?>


	<section class="services-details-area ptb-70">
		<div class="container">
			
			<div class="services-details-overview">
				<div class="row align-items-center">

					<div class="col-lg-12 col-md-12">
						<div class="services-step-wrapper">
<?php
	$p=1;
	while( have_rows('content_section') ) : the_row();
							
	$imgurl=get_sub_field('image');
	$content=get_sub_field('content');						
	
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
			  
			<?php echo $content;?>
		   </div>
	   </div>
   </div>
<?php } else{?>

<div class="row">
		<div class="col-md-7 col-sm-7 col-xs-12">
			<div class="overview-wrapper">
				<?php echo $content;?>
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
<?php get_footer(); ?>
