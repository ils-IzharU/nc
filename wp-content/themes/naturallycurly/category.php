<?php get_header();
$object = get_queried_object();
$cat_name = $object->name ?>

<div class="breadcrumb_inner">
	<div class="container page-layout-main-content test">
		<div class="row">
			<div class="col-md-12">
				<p class="breadcrumb_articles"><?php echo $cat_name ?> Articles | Naturalcurly.com</p>
			</div>
		</div>
	</div>
</div>

<div class="inner_page_layout">
	<div class="container page-layout-main-content test">
		<div class="row">
		<?php
        $current_page = get_queried_object();
        $category     = $object->slug;
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'paged'         => $paged, 
			'category_name' => $category,
			'post_type'     => 'post',
			'post_status'   => 'publish',
			'posts_per_page'   => 11,
		);
        $wp_query = new WP_Query($args);
		if($wp_query->have_posts()) {
		while($wp_query->have_posts()) : $wp_query->the_post();
			if( $wp_query->current_post == 2 ) { ?>
				<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-ads">
					<div class="ads_script">
						<p>Google Ads</p>
					</div>
				</div>
			<?php } 
			if( $wp_query->current_post == 6 ) {?>
			<div class="col-md-12 article-grid-item mb-4 d-flex flex-column post-ads">
				<div class="ads_script_horizontal">
					<p>Google Ads</p>
				</div>
			</div>
			<?php } ?>
			<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
				<div class="vr_latest_post">
					<figure class="mt-0 mb-0">
						<div class="social">
							<div class="social-share justify-content-end align-items-center">
								<div class="d-block">
									<a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&title=<?php the_title() ?>" target="_blank">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</div>
								<div class="d-block">
									<a class="twitter" href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink() ?>&text=<?php the_title() ?>" target="_blank">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</div>
								<div class="d-block">
									<a class="pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink() ?>&description=<?php the_title() ?>" target="_blank">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fab fa-pinterest-p fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
						<a href="<?php the_permalink() ?>">
							<img class="img-fluid mx-auto" itemprop="image" alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url() ?>">
						</a>
					</figure>
					<div class="content p-4">
						<a href="<?php the_permalink() ?>" class="item-title d-block">
							<span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span>
						</a>
						<div class="pt-2 item-description" itemprop="description">
							<?php the_excerpt() ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; 
		wp_pagenavi();
		wp_reset_postdata();
		} else {?>
			<div class="col-md-12">
				<p class="message">Articles are not available.</p>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

<?php get_footer() ?>