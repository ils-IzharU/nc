<?php 
/*
Template Name: Search Results
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
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="col-md-9">
				<div class="row latest_articles_salons">
					<div class="col-md-12">
						<h1 class="section-title"><span>Search Results: Salons</span></h1>
					</div>
				</div>
				<div class="row">
				<?php
					$args = array(
						'post_type'=>'nc-salons', 
						'posts_per_page'=> 12,
					);
					
					if($_GET['salon_name'] && $_GET['salon_name'] != '' ){
						$args['s'] = sanitize_text_field($_GET["salon_name"]);
					}
					if($_GET['zip'] && $_GET['zip'] != '' ){
						$args['meta_query'][] = array(
							'key'     => 'zippostal_code',
							'value'   => sanitize_text_field($_GET["zip"]),
							'compare' => '='
						);
					}
					if($_GET['city'] != '' && $_GET['state'] != ''){
						$args['tax_query']['relation'] = 'OR';
					}
					if($_GET['city'] && $_GET['city'] != '' ){
						$args['tax_query'][] = array(
							'taxonomy' => 'city',
							'field'    => 'term_id',
							'terms'    => array(sanitize_text_field($_GET['city']))
						);
					}
					if($_GET['state'] && $_GET['state'] != '' ){
						$args['tax_query'][] = array(
							'taxonomy' => 'city',
							'field'    => 'term_id',
							'terms'    => array(sanitize_text_field($_GET['state']))
						);
					}
					//echo '<pre>';print_r($args);
					
					query_posts($args);		
					if(have_posts()) {
					while(have_posts()) : the_post(); ?>
						<div class="col-md-6 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
							<div class="vr_latest_post_salons">
								<div class="content p-4">
									<a href="<?php the_permalink() ?>" class="item-title d-block">
										<span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span>
									</a>
									<p class="reviews"><i class="fa fa-comment"></i> 120 Reviews</p>
									<div class="pt-2 item-description" itemprop="description">
										<?php the_content() ?>
										<a href="<?php the_permalink() ?>" class="read_more_link">Add Review <span>⟶</span></a>
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