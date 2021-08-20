<?php 
/*
Template Name: Salons Finder
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
				<div class="row">
					<div class="salons_finder_banner">
						<div class="col-md-12">
							<div class="banner_image mb-4">
								<a href="<?php bloginfo('url') ?>/curlreading/ask-a-curl-expert"><img src="<?php bloginfo('template_url') ?>/images/slons_finder.jpg" alt="Banner Salons Finder" class="img img-responsive img-fluid"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="search_box_custom_salons">
					<div class="mb-3 mt-3">
						<div class="card text-center search-box-element">
							<div class="card-block">
								<div class="card-title">
									<h3>Find a salon near you...</h3>
								</div>
								<div class="card-text">
									<div class="container search-fields">
										<form name="salon_search" action="<?php bloginfo('url') ?>/salons-finder/search-results" method="get">
											<div class="form-group row search-inputs-row-one">
												<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 ml-auto">
													<div class="d-flex flex-column">
														<label for="name" class="control-label">Your Zip Code</label>
														<input type="text" name="zip" id="zip" placeholder="Zip Code" class="form-control inputs">
													</div>
												</div>
												<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 mr-auto">
													<div class="d-flex flex-column">
														<label for="name" class="control-label">Distance</label>
														<select name="distance" id="distance" class="form-control inputs">
															<option value="5mi">Distance</option>
															<option value="5mi">5 Miles</option>
															<option value="10mi">10 Miles</option>
															<option value="15mi">15 Miles</option>
															<option value="20mi">20 Miles</option>
														</select>
													</div>
												</div>
											</div>

											<div class="collapse" id="formCollapse" style="">
												<div class="form-group row search-inputs-row-two">
													<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ml-auto">
														<div class="d-flex flex-column">
															<label for="name" class="control-label">Salon Name</label>
															<input type="text" name="salon_name" id="salon_name" placeholder="Salon Name" class="form-control">
														</div>
													</div>
													<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mr-auto">
														<div class="d-flex flex-column">
															<label for="name" class="control-label">Salon City</label>
															<?php 
															$taxonomyName = "city";
					$parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'name', 'order'=>'ASC', 'hide_empty' => false ) );
					?>
															<select name="city" id="state" class="form-control">
																<option value=""> -- City -- </option>
						<?php foreach ( $parent_terms as $pterm ) {
						$terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
						foreach ( $terms as $term ) {?>
							<option value="<?php echo $term->term_id ?>"><?php echo $term->name ?></option>
						<?php } 
						}?>
															</select>
														</div>
													</div>
												</div>

												<div class="form-group row search-inputs-row-three">
													<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ml-auto mr-auto">
														<div class="d-flex flex-column">
															<label for="name" class="control-label">Salon State</label>
															<?php $states = get_terms( array( 'taxonomy' => 'city', 'parent' => 0, 'hide_empty' => false ) ); ?>
															<select name="state" id="state" class="form-control">
																<option value=""> -- State -- </option>
																<?php foreach($states as $state) { ?>
																<option value="<?php echo $state->term_id ?>"><?php  echo $state->name; ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
												</div>
											</div>

											<input class="submit-salon-search btn btn-lg" type="submit" name="yt0" value="Search">

											<div class="d-flex flex-column">
												<a data-toggle="collapse" href="#formCollapse" aria-expanded="false" aria-controls="formCollapse" id="searchBoxText" class="collapsed">
												Search by Name, City, or State?
												</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row latest_articles_salons">
					<div class="col-md-12">
						<h1 class="section-title"><span><a href="/curlreading">TRENDING SALONS ARTICLES</a></span></h1>
					</div>
				</div>
				<div class="row">
				<?php
					$args = array(
						'post_type'=>'post', 
						'posts_per_page'=>5,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'salons',
							),
						)
					);
					query_posts($args);		
					if(have_posts()) {
					while(have_posts()) : the_post();
						if( $wp_query->current_post == 3 ) { ?>
							<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-ads">
								<div class="ads_script">
									<p>Google Ads</p>
								</div>
							</div>
						<?php } ?>
						<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
							<div class="vr_latest_post">
								<div class="content p-4">
									<a href="<?php the_permalink() ?>" class="item-title d-block">
										<span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span>
									</a>
									<div class="pt-2 item-description" itemprop="description">
										<?php the_excerpt() ?>
									</div>
								</div>
								<figure class="mt-3 mb-0">
									<div class="socialicon">
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
									<a href="<?php the_permalink() ?>">
										<img class="img-fluid mx-auto" itemprop="image" alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url() ?>">
									</a>
								</figure>
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
				<div class="row latest_articles_salons">
					<div class="col-md-12">
						<h1 class="section-title"><span><a href="">SALONS BY CITY</a></span></h1>
					</div>
					<div class="col-md-12">
					<?php 
					$taxonomyName = "city";
					$parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'name', 'order'=>'ASC', 'hide_empty' => false ) );   
					echo '<ul class="cities">';
					foreach ( $parent_terms as $pterm ) {
						$terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
						foreach ( $terms as $term ) {
							echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';   
						}
					}
					echo '</ul>';
					?>
					</div>
				</div>
				<div class="row latest_articles_salons">
					<div class="col-md-12">
						<h1 class="section-title"><span><a href="">STATES AND REGIONS</a></span></h1>
					</div>
					<?php $states = get_terms( array( 'taxonomy' => 'city', 'parent' => 0, 'hide_empty' => false ) ); ?>
					<div class="col-md-12">
						<ul class="cities">
							<?php foreach($states as $state) { ?>
							<li><a href="<?php echo get_term_link($state->term_id) ?>"><?php echo $state->name ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="row latest_articles_salons">
					<div class="col-md-12">
						<h1 class="section-title"><span><a href="">SALONS BY COUNTRIES</a></span></h1>
					</div>
					<?php $states = get_terms( array( 'taxonomy' => 'country', 'parent' => 0, 'hide_empty' => false ) ); ?>
					<div class="col-md-12">
						<ul class="cities">
							<?php foreach($states as $state) { ?>
							<li><a href="<?php echo get_term_link($state->term_id) ?>"><?php echo $state->name ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<?php get_template_part('sidebar') ?>
		</div>
	</div>
</div>

<?php get_footer() ?>