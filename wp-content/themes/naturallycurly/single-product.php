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
				<p class="breadcrumb_articles"><?php echo $name ?></p>
			</div>
		</div>
	</div>
</div>

<div class="inner_page_layout">
	<div class="container page-layout-main-content">
		<?php 
		while(have_posts()) : the_post();
			the_content();
		endwhile; 
		?>
	</div>
</div>


<?php get_footer() ?>