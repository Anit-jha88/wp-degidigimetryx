<?php
/**
 *  Template Name: Carrer Page
 */
get_header();
?>
<?php echo get_template_part( 'template-parts/header', 'banner' ); ?>
	<!-- Start Contact Box Area -->
	<section class="contact-info-wrapper">
		<div class="container">
			<div class="row">
				
				<?php
					
					$args = array(
					  'post_type'=> 'post',	
					  'posts_per_page' => 12,
					   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
					);
					query_posts($args);
				   while (have_posts()) : the_post();
					?>
				
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item applyjob">
					
						<h3><?php the_title();?></h3>
						<h4>Job Code : <?php echo get_field('Job Code')?></h4>
						<h4>Total Experience : <?php echo get_field('total_expreance')?></h4>
						<div class="services-btn-link">
							<a href="<?php the_permalink();?>" class="services-link">Read More</a>
						</div>
					</div>
				</div>
				
				<?php endwhile; ?>
							
				<!--<div class="col-md-12">
					<div class="section-title">
						<h6>Current Opening</h6>
						<h2><?php the_content();?></h2>
					</div>
				</div>-->
			
			</div>
			<div class="row">
					
			
				<div class="col-lg-12 col-md-12" >
   <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'prev_text'          => __(' Previous'),
    'next_text'          => __('Next '),
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
) );
?>
</div>
	</div>	
		</div>
    </section>
	<!-- End Contact Box Area -->
	<?php get_footer() ?>

