<?php get_header();
$object = get_queried_object();
$name = $object->name;
if($name){
	$name = $name;
} else {
	$name = get_the_title();
} ?>

<div class="breadcrumb_inner">
	<div class="container page-layout-main-content test">
		<div class="row">
			<div class="col-md-12">
				<p class="breadcrumb_articles"><?php echo $name ?> | Naturalcurly.com</p>
			</div>
		</div>
	</div>
</div>

<div class="inner_page_layout">
	<div class="container page-layout-main-content test">
		<div class="row">
			<?php 
			if(have_posts()) {
			while(have_posts()) : the_post();?>
				<div class="col-md-9 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
					<h1 itemprop="headline" class="js-article-title">
						<?php the_title() ?>
					</h1>
					<img src="<?php echo get_the_post_thumbnail_url() ?>" class="mb-3">
					<?php the_content() ?>
				</div>
			<?php endwhile; wp_reset_query();
			} else {?>
				<div class="col-md-9">
					<p class="message">Article not available.</p>
				</div>
			<?php } ?>
			<?php get_template_part('sidebar') ?>
		</div>
	</div>
</div>

<?php get_footer() ?>