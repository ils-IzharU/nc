<?php 
/*
Template Name: Videos
*/
get_header(); ?>

<div class="breadcrumb_inner">
	<div class="container page-layout-main-content test">
		<div class="row">
			<div class="col-md-12">
				<p class="breadcrumb_articles"><?php the_title() ?> | Naturalcurly.com</p>
			</div>
		</div>
	</div>
</div>

<div class="inner_page_layout">
	<div class="container page-layout-main-content test">
		
		<div class="row">
			<div class="col-md-9">
				<div class="row mb-5">
					<div class="video_main col-md-12">
						<iframe src='//players.brightcove.net/5598282513001/SJpoHUFnb_default/index.html?videoId=5622682883001' width="100%" height="500px" allowfullscreen frameborder=0></iframe>
					</div>
				</div>
				<h2><span> NaturallyCurly Series </span></h2>
				
				<div class="row">
					<?php
					$args = array(
						'post_type'      => 'page',
						'posts_per_page' => -1,
						'post_parent'    => 827,
						'order'          => 'ASC',
						'orderby'        => 'menu_order'
					);
					query_posts($args);		
					if(have_posts()) {
					while(have_posts()) : the_post();
						if( $wp_query->current_post == 2 ) { ?>
							<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-ads">
								<div class="ads_script">
									<p>Google Ads</p>
								</div>
							</div>
						<?php } 
						if( $wp_query->current_post == 2 ) {?>
							<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-ads">
								<div class="ads_script">
									<p>Google Ads</p>
								</div>
							</div>						
						<?php } ?>
						<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
							<div class="vr_latest_post_videos">
								<figure class="mt-0 mb-0">
									<a href="<?php the_permalink() ?>">
										<img class="img-fluid mx-auto" itemprop="image" alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url() ?>">
									</a>
									<div class="socialicon mt-3">
										<div class="social-share d-flex justify-content-end align-items-center">
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
									
								</figure>
								<div class="content pl-4 pr-4 pb-2 pt-4">
									<a href="<?php the_permalink() ?>" class="item-title d-block">
										<span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span>
									</a>
									<div class="pt-2 item-description-videos" itemprop="description">
										<?php the_content() ?>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;
					wp_reset_query();
					} else {?>
						<div class="col-md-12">
							<p class="message">Articles are not available.</p>
						</div>
					<?php } ?>
				</div>
				
				
				<h2><span><a href="<?php bloginfo('url') ?>/videos/latest-videos">Trending Videos </a></span></h2>
				
				<div class="row">
					<?php
					$args = array(
						'post_type'=>'post', 
						'posts_per_page'=>3,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'leaders-in-curl',
							),
						)
					);
					query_posts($args);		
					if(have_posts()) {
					while(have_posts()) : the_post();?>
						<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
							<div class="vr_latest_post">
								<figure class="mt-0 mb-0">
									<a href="<?php the_permalink() ?>">
										<img class="img-fluid mx-auto" itemprop="image" alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url() ?>">
									</a>
									<div class="socialicon mt-3">
										<div class="social-share d-flex justify-content-end align-items-center">
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
									
								</figure>
								<div class="content pl-4 pr-4 pb-2 pt-0">
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
					wp_reset_query();
					} else {?>
						<div class="col-md-12">
							<p class="message">Articles are not available.</p>
						</div>
					<?php } ?>
				</div>
				
				<h2><span><a href="<?php bloginfo('url') ?>/videos/latest-videos"> Latest Videos </a></span></h2>
				
				<div class="row">
					<?php
					$args = array(
						'post_type'=>'post', 
						'posts_per_page'=>3,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'leaders-in-curl',
							),
						)
					);
					query_posts($args);		
					if(have_posts()) {
					while(have_posts()) : the_post();?>
						<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
							<div class="vr_latest_post">
								<figure class="mt-0 mb-0">
									<a href="<?php the_permalink() ?>">
										<img class="img-fluid mx-auto" itemprop="image" alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url() ?>">
									</a>
									<div class="socialicon mt-3">
										<div class="social-share d-flex justify-content-end align-items-center">
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
									
								</figure>
								<div class="content pl-4 pr-4 pb-2 pt-0">
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
					wp_reset_query();
					} else {?>
						<div class="col-md-12">
							<p class="message">Articles are not available.</p>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php get_template_part('sidebar') ?>
		</div>
	</div>
</div>

<?php get_footer() ?>