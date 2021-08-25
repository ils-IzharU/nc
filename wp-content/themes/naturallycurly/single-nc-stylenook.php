<?php get_header(); ?>

<div class="breadcrumb_inner">
	<div class="container page-layout-main-content">
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
			<div class="col-md-7">
				<div class="style_nook_detail">
					<h1 class="stylenook_name"><?php the_title() ?></h1>
					<img src="<?php echo get_the_post_thumbnail_url() ?>">
					<p class="meta_info">
						<span class="author">By: Admin</span>
					</p>
				</div>
				<div class="related_styles">
					<h3 class="related_heading">Related Styles</h3>
					<div class="row">
						<?php
						$args = array(
							'post_type'=>'nc-stylenook', 
							'posts_per_page'=>2,
							'orderby' => 'rand'
						);
						query_posts($args);		
						if(have_posts()) {
						while(have_posts()) : the_post();?>
						<div class="col-md-6">
							<div class="article-item">
								<a href="<?php echo get_the_permalink() ?>">
									<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
									<div class="content"><span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span></div>
								</a>
							</div>
						</div>
						<?php endwhile; wp_reset_query();
						}?>
					</div>
				</div>
				<div class="popular_styles">
					<h3 class="related_heading">Popular Styles</h3>
					<div class="row">
						<?php
						$args = array(
							'post_type'=>'nc-stylenook', 
							'posts_per_page'=>2,
							'orderby' => 'rand'
						);
						query_posts($args);		
						if(have_posts()) {
						while(have_posts()) : the_post();?>
						<div class="col-md-6">
							<div class="article-item">
								<a href="<?php echo get_the_permalink() ?>">
									<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
									<div class="content"><span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span></div>
								</a>
							</div>
						</div>
						<?php endwhile; wp_reset_query();
						}?>
					</div>
				</div>
				<?php if(get_field('products_stylenook')){ ?>
				<div class="related_products">
					<h3 class="related_heading">Related Products</h3>
				</div>
				<?php } ?>
			</div>
			<div class="col-md-5">
				<?php if(get_field('steps')){ ?>
				<div class="steps">
					<h3 class="related_heading">Steps</h3>
					<?php echo get_field('steps') ?>
				</div>
				<?php } if(get_field('products_stylenook')){ ?>
				<div class="products">
					<h3 class="related_heading">Products</h3>
				</div>
				<?php } ?>
				<div class="recent_articles">
					<h3 class="related_heading">Recent Articles</h3>
					<?php
					$args = array(
						'post_type'=>'post', 
						'posts_per_page'=>3,
						'orderby' => 'rand'
					);
					query_posts($args);		
					if(have_posts()) {
					while(have_posts()) : the_post();?>
					<div class="article-item">
						<a href="<?php echo get_the_permalink() ?>">
							<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
							<p><?php the_title() ?></p>
						</a>
					</div>
					<?php endwhile; wp_reset_query();
					}?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>