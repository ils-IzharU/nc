<?php get_header() ?>

<div class="home_slider_area">
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="col-md-2 d-sx-none">
				<div class="feature_box">
					<span class="feature_btn_head">Features</span>
					<ul class="feature_menu">
						<li><a href=""><i class="fa fa-arrow-right"></i> Texture Tales</a></li>
						<li><a href=""><i class="fa fa-arrow-right"></i> Leaders In Curl</a></li>
						<li><a href=""><i class="fa fa-arrow-right"></i> Best of the Best</a></li>
						<li><a href=""><i class="fa fa-arrow-right"></i> Ask A Curl Expert</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 p-0">
				<?php echo do_shortcode('[sp_wpcarousel id="221"]'); ?>
			</div>
			<div class="col-md-2">
				<div class="box_1">
					<a class="header-button button-1" href="<?php the_field('join_the_community_link') ?>">
					   <div class="button-text">
						  <span class="title"><?php the_field('join_the_community_heading') ?></span>
					   </div>
					</a>
				</div>
				<div class="box_2">
					<a class="header-button button-1" href="<?php the_field('shop_products_link') ?>">
					   <div class="button-text">
						  <span class="title"><?php the_field('shop_products_heading') ?></span>
					   </div>
					</a>
				</div>
				<div class="box_3">
					<a class="header-button button-1" href="<?php the_field('learn_the_basics_link') ?>">
					   <div class="button-text">
						  <span class="title"><?php the_field('learn_the_basics_heading') ?></span>
					   </div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
  

<div class="container page-layout-main-content test">
	<div class="homepage">
		<div class="where-to-begin-container row d-none">
			<div class="col-sm-6 col-lg-3">
				<a class="header-button button-1" href="<?php the_field('learn_the_basics_link') ?>">
				   <div class="button-text">
					  <span class="title"><?php the_field('learn_the_basics_heading') ?></span>
					  <div class="description"><?php the_field('learn_the_basics_content') ?></div>
				   </div>
					<i class="far fa-long-arrow-right d-md-none d-lg-none d-xl-none"></i>
				</a>
			</div>
			<div class="col-sm-6 col-lg-3">
				<a class="header-button button-2" href="<?php the_field('take_the_quiz_link') ?>">
					<div class="button-text">
						<span class="title"><?php the_field('take_the_quiz_heading') ?></span>
						<div class="description"><?php the_field('take_the_quiz_content') ?></div>
					</div>
					<i class="far fa-long-arrow-right d-md-none d-lg-none d-xl-none"></i>
				</a>
			</div>
			<div class="col-sm-6 col-lg-3">
				<a class="header-button button-3" href="<?php the_field('join_the_community_link') ?>">
					<div class="button-text">
						<span class="title"><?php the_field('join_the_community_heading') ?></span>
						<div class="description"><?php the_field('join_the_community_content') ?></div>
					</div>
					<i class="far fa-long-arrow-right d-md-none d-lg-none d-xl-none"></i>
				</a>
			</div>
			<div class="col-sm-6 col-lg-3">
				<a class="header-button button-4" href="<?php the_field('shop_products_link') ?>">
					<div class="button-text">
						<span class="title"><?php the_field('shop_products_heading') ?></span>
						<div class="description"><?php the_field('shop_products_content') ?></div>
					</div>
					<i class="far fa-long-arrow-right d-md-none d-lg-none d-xl-none"></i>
				</a>
			</div>
		</div>
	  
<div class="latest-articles-container">
	<div class="article-grid article-grid-768642">
		<div class="d-xl-block">
			<div class="row">
				<div class="col-md-9">
					<h1 class="section-title"><span><a href="https://www.naturallycurly.com/curlreading">Latest Articles</a></span></h1>
		 
					<div class="row">
					<?php $args = array('post_type'=>'post', 'posts_per_page'=>6);
					query_posts($args);
					while(have_posts()) : the_post();?>
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
					<?php endwhile; wp_reset_query() ?>
					</div>
				</div>
	
	<div class="col-md-3 justify-content-center mb-4">
		<div class="forums-container mb-4">
            <div class="d-flex flex-column vanilla-threads">
               <div class="curltalk-forums-title-containter">
                  <div class="curltalk-forums-title d-flex justify-content-center align-items-center">CurlTalk Forums</div>
               </div>
               <div class="forums-scroll-up-button">
                  <i class="fa fa-angle-up"></i>
               </div>
               <div class="forums-items-containter">
                  <a href="https://curltalk.naturallycurly.com/discussion/186595/biosilk-rock-hard-gelee-this-is-a-hard-hold-gel">
                     <div class="d-flex flex-row forum-container">
                        <div class="flex-shrink-0">
                           <img class="img-fluid curltalk-logo" src="http://localhost/naturallycurly/wp-content/themes/naturallycurly/images/curltalk-logo-500x500.png">
                        </div>
                        <div class="thread background-content">
                           <div class="thread-title">
                              "Biosilk Rock Hard Gelee - this is a hard hold gel?"
                           </div>
                           <div class="thread-comments ml-5 comment d-block d-md-inline-block ml-md-2">
                              8 comments <i class="far fa-long-arrow-right"></i>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="https://curltalk.naturallycurly.com/discussion/186563/hairtype" onclick="
                     return true;
                     ">
                     <div class="d-flex flex-row forum-container">
                        <div class="flex-shrink-0">
                           <img class="img-fluid curltalk-logo" src="http://localhost/naturallycurly/wp-content/themes/naturallycurly/images/curltalk-logo-500x500.png">
                        </div>
                        <div class="thread background-content">
                           <div class="thread-title">
                              "Hairtype?"
                           </div>
                           <div class="thread-comments ml-5 comment d-block d-md-inline-block ml-md-2">
                              5 comments <i class="far fa-long-arrow-right"></i>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="https://curltalk.naturallycurly.com/discussion/186626/need-help-whats-going-on-with-my-hair-what-type-am-i-product-recommendations" onclick="
                     return true;
                     ">
                     <div class="d-flex flex-row forum-container">
                        <div class="flex-shrink-0">
                           <img class="img-fluid curltalk-logo" src="http://localhost/naturallycurly/wp-content/themes/naturallycurly/images/curltalk-logo-500x500.png">
                        </div>
                        <div class="thread background-content">
                           <div class="thread-title">
                              "Need help..what's going on with my hair/what type am I/product recommendations"
                           </div>
                           <div class="thread-comments ml-5 comment d-block d-md-inline-block ml-md-2">
                              14 comments <i class="far fa-long-arrow-right"></i>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="https://curltalk.naturallycurly.com/discussion/186652/what-s-my-hair-type" onclick="
                     return true;
                     ">
                     <div class="d-flex flex-row forum-container">
                        <div class="flex-shrink-0">
                           <img class="img-fluid curltalk-logo" src="http://localhost/naturallycurly/wp-content/themes/naturallycurly/images/curltalk-logo-500x500.png">
                        </div>
                        <div class="thread background-content">
                           <div class="thread-title">
                              "What’s my hair type?"
                           </div>
                           <div class="thread-comments ml-5 comment d-block d-md-inline-block ml-md-2">
                              1 comments <i class="far fa-long-arrow-right"></i>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="https://curltalk.naturallycurly.com/discussion/186601/transitioning-acceptance" onclick="
                     return true;
                     ">
                     <div class="d-flex flex-row forum-container">
                        <div class="flex-shrink-0">
                           <img class="img-fluid curltalk-logo" src="http://localhost/naturallycurly/wp-content/themes/naturallycurly/images/curltalk-logo-500x500.png">
                        </div>
                        <div class="thread background-content">
                           <div class="thread-title">
                              "Transitioning Acceptance"
                           </div>
                           <div class="thread-comments ml-5 comment d-block d-md-inline-block ml-md-2">
                              7 comments <i class="far fa-long-arrow-right"></i>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="https://curltalk.naturallycurly.com/discussion/186002/live-clean-weightless-volume" onclick="
                     return true;
                     ">
                     <div class="d-flex flex-row forum-container">
                        <div class="flex-shrink-0">
                           <img class="img-fluid curltalk-logo" src="http://localhost/naturallycurly/wp-content/themes/naturallycurly/images/curltalk-logo-500x500.png">
                        </div>
                        <div class="thread background-content">
                           <div class="thread-title">
                              "Live Clean Weightless Volume"
                           </div>
                           <div class="thread-comments ml-5 comment d-block d-md-inline-block ml-md-2">
                              9 comments <i class="far fa-long-arrow-right"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="forums-scroll-down-button">
                  <i class="fa fa-angle-down"></i>
               </div>
            </div>


         </div>
<div class="article-grid-item-ad justify-content-center mb-4 mt-4">
    <div id="NC_TR_0" class="NC_TR_0-cls header google-dfp-adspace message-after " data-ad-slot="googletag" data-ad-sizes="media-blocks-300x" data-ad-rendered-sizes="[[1, 1], [300, 250], [970, 250], [970, 90], [320, 50], [728, 90], [300, 600]]" data-ad-url="/21698916284/naturallycurly"></div>
</div>
    
                  </div>
				</div>
            </div>
         </div>
      </div>
	  
	  <div class="google_add_horizontal_main">
		<div class="row">
			<div class="col-md-12 justify-content-center mb-4 google_add_horizontal" style="">
                <div class="article-grid-item-ad">
					<div id="NC_TR_2" class="  NC_TR_0-cls header google-dfp-adspace message-after " data-ad-slot="googletag" data-ad-sizes="media-blocks-300x" data-ad-rendered-sizes="[[1, 1], [300, 250], [970, 250], [970, 90], [320, 50], [728, 90], [300, 600]]" data-ad-url="/21698916284/naturallycurly"></div>
				</div>
			</div>
		</div>
	  </div>
	  
      <div class="row trending-articles-and-forums-container">
         <div class="trending-articles-container col-md-9">
            <h1 class="section-title trending-articles-title">
               <span><a href="https://www.naturallycurly.com/curlreading">Trending Articles</a></span>
            </h1>
            <div class="article-grid article-grid-959270">
				<div class="row">
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page' => 4,
						'order' => 'ASC'
					);
					query_posts($args);
					while(have_posts()) : the_post();
					$trend = get_field('trending');?>
					<div class="article-grid-item horizontal-grid-item-container mb-4 post-<?php echo get_the_ID() ?> col-lg-6">
						<div class="hr_trend_post d-flex">
							<figure class="flex-shrink-0">
								<a href="<?php the_permalink() ?>">
									<img class="img-fluid mx-auto" alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url() ?>">
								</a>
							</figure>
							<div class="content flex-column">
								<a href="<?php the_permalink() ?>" class="item-title d-block">
									<span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span>
								</a>
								<div class="pt-2 item-description" itemprop="description">
								<?php the_excerpt() ?>
								</div>
								<div class="read_more_post"><a href="<?php the_permalink() ?>" class="read_more_link">Read more <span>⟶</span></a></div>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query() ?>
				</div>
			</div>
         </div>
         <div class=" col-md-3 justify-content-center mb-4 google_add_2_right" style="">
                <div class="article-grid-item-ad">
<div id="NC_TR_1" class="  NC_TR_0-cls header google-dfp-adspace message-after " data-ad-slot="googletag" data-ad-sizes="media-blocks-300x" data-ad-rendered-sizes="[[1, 1], [300, 250], [970, 250], [970, 90], [320, 50], [728, 90], [300, 600]]" data-ad-url="/21698916284/naturallycurly"></div>
            </div></div>
      </div>
      
	</div>
</div>

<div class="aska_curl_experts">
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="col-md-12">
				<h1 class="section-title-askexpert"><span><a href="/ask-a-curl-experts">Ask A Curl Experts</a></span></h1>
	 
				<div class="row">
				<?php $args = array(
					'post_type'=>'post', 
					'posts_per_page'=>4,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'ask-a-curl-expert',
						),
					)
				);
				query_posts($args);
				while(have_posts()) : the_post();?>
					<div class="col-md-3 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
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
				<?php endwhile; wp_reset_query() ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="trending_products_home">
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="col-md-12">
				<h1 class="section-title-products"><span><a href="/ask-a-curl-experts">Trending In Shop</a></span></h1>
	 
				<div class="row">
				<?php $args = array(
					'post_type'=>'product', 
					'posts_per_page'=>4,
				);
				query_posts($args);
				while(have_posts()) : the_post();?>
					<div class="col-md-3 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
						<div class="vr_latest_post">
							<figure class="mt-3 mb-0">
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
				<?php endwhile; wp_reset_query() ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="leaders_in_curl_sec">
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="trending-articles-container col-md-12">
				<h1 class="section-title-leaders trending-articles-title">
					<span><a href="/leaders-in-curl/">Leaders In Curl</a></span>
				</h1>
				<div class="article-grid article-grid-959270">
					<div class="row">
						<?php $args = array(
							'post_type' => 'post',
							'posts_per_page' => 4,
							'tax_query' => array(
								array(
									'taxonomy' => 'category',
									'field'    => 'slug',
									'terms'    => 'leaders-in-curl',
								),
							)
						);
						query_posts($args);
						while(have_posts()) : the_post();
						$trend = get_field('trending');?>
						<div class="article-grid-item horizontal-grid-item-container mb-4 post-<?php echo get_the_ID() ?> col-lg-6">
							<div class="hr_trend_post d-flex">
								<figure class="flex-shrink-0">
									<a href="<?php the_permalink() ?>">
										<img class="img-fluid mx-auto" alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url() ?>">
									</a>
								</figure>
								<div class="content flex-column">
									<a href="<?php the_permalink() ?>" class="item-title d-block">
										<span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span>
									</a>
									<div class="pt-2 item-description" itemprop="description">
									<?php the_excerpt() ?>
									</div>
									<div class="read_more_post"><a href="<?php the_permalink() ?>" class="read_more_link">Read more <span>⟶</span></a></div>
								</div>
							</div>
						</div>
						<?php endwhile; wp_reset_query() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
      

<div class="instagram-container">
	<div class="container page-layout-main-content test">
		<div class="row text-center mb-5">
			<div class="col-md-12">
				<div class="intagram_button">
					<a href="https://www.instagram.com/naturallycurly" class="insta_button_link">
						<img src="<?php bloginfo('template_url') ?>/images/insta_icon.png" class="insta_icon">@NaturallyCurly
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-1">
				<h1 class="section-title">
					<span><a href="https://www.instagram.com/naturallycurly"><span> See  </span><span>you</span><span>on</span><span>the</span><span>Gram</span></a></span>
				</h1>
			</div>
			<div class="col-md-11">
			 <div class="justify-content-center">
				<ul class="homepage-insta-feed">
				   <li class="homepage-insta-feed-li">
					  <div class="instagram-col-sm ig-1596">
						 <a href="" target="_blank">
						 <img src="<?php bloginfo('template_url') ?>/images/17917776136766980.jpg" alt="">
						 </a>
					  </div>
				   </li>
				   <li class="homepage-insta-feed-li">
					  <div class="instagram-col-sm ig-1595">
						 <a href="" target="_blank">
						 <img src="<?php bloginfo('template_url') ?>/images/17909842162887670.jpg" alt="">
						 </a>
						 <div class="overlay">
							<i class="fa fa-play-circle" style="font-size: 27px; color: #842FB1;"></i>
						 </div>
					  </div>
				   </li>
				   <li class="homepage-insta-feed-li">
					  <div class="instagram-col-sm ig-1594">
						 <a href="" target="_blank">
						 <img src="<?php bloginfo('template_url') ?>/images/18162765085082931.jpg" alt="">
						 </a>
					  </div>
				   </li>
				   <li class="homepage-insta-feed-li">
					  <div class="instagram-col-sm ig-1593">
						 <a href="" target="_blank">
						 <img src="<?php bloginfo('template_url') ?>/images/17884326632485056.jpg" alt="">
						 </a>
					  </div>
				   </li>
				   <li class="homepage-insta-feed-li">
					  <div class="instagram-col-sm ig-1592">
						 <a href="" target="_blank">
						 <img src="<?php bloginfo('template_url') ?>/images/17999374138345399.jpg" alt="">
						 </a>
					  </div>
				   </li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</div>

</div>


<?php get_footer() ?> 