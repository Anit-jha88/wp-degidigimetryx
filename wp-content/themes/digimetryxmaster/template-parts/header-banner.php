<?php $id = get_the_ID(); ?>
<?php $bannerImage = get_field('banner_image', $id); ?>
<?php $title = get_the_title($id); ?>
<style type="text/css">
	.page-title-area {
    background-image: url(<?php echo $bannerImage['url']; ?>);
}
</style>
<!-- Start Page Title Area -->
<div class="page-title-area">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2><?php echo $title; ?></h2>
					<ul>
						<li><a href="<?php echo home_url(); ?>">Home</a>
						</li>
						<li><?php echo $title; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page Title Area -->