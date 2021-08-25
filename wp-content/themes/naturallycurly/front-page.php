<?php get_header() ?>

<div class="home_slider_area">
	<div class="row">
		<div class="col-md-12 p-0">
			<?php echo do_shortcode('[sp_wpcarousel id="221"]'); ?>
		</div>
	</div>
</div>
<div class="quiz-bar">
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="texture_type">
					<p class="head_texture_type">DO YOU KNOW TEXTURE TYPE ?</p>
					<a href="" class="quiz_btn">TAKE A QUIZ</a>
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
				<div class="col-md-12">
					<h1 class="section-title"><span><a href="https://www.naturallycurly.com/curlreading">Latest Articles</a></span></h1>
		 
					<div class="row">
					<?php $args = array('post_type'=>'post', 'posts_per_page'=>5);
					query_posts($args);
					while(have_posts()) : the_post();
						if( $wp_query->current_post == 2 ) { ?>
							<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-ads">
								<div class="ads_script">
									<p>Google Ads</p>
								</div>
							</div>
						<?php } ?>
						<div class="col-md-4 article-grid-item mb-4 d-flex flex-column post-<?php echo get_the_ID() ?>">
							<div class="vr_latest_post">
								<figure class="mt-0 mb-1">
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
					<?php endwhile; wp_reset_query() ?>
					</div>
				</div>
				</div>
            </div>
         </div>
      </div>
	  
	  <div class="google_add_horizontal_main mt-4">
		<div class="row">
			<div class="col-md-12 justify-content-center mb-4 google_add_horizontal" style="">
                <div class="article-grid-item-ad">
					<div id="NC_TR_2" class="  NC_TR_0-cls header google-dfp-adspace message-after " data-ad-slot="googletag" data-ad-sizes="media-blocks-300x" data-ad-rendered-sizes="[[1, 1], [300, 250], [970, 250], [970, 90], [320, 50], [728, 90], [300, 600]]" data-ad-url="/21698916284/naturallycurly"></div>
				</div>
			</div>
		</div>
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
					'posts_per_page'=>3,
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
	 
				<div class="carausal_product">
					<?php //echo do_shortcode('[sp_wpcarousel id="885"]'); ?>
				</div>
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
		<h1 class="section-title">
			<span><a href="https://www.instagram.com/naturallycurly">See you on the Gram <img draggable="false" role="img" class="emoji" alt="✌🏾" src="https://s.w.org/images/core/emoji/13.1.0/svg/270c-1f3fe.svg"></a>
			</span>
		</h1>

		<div class="row">
			<div class="col-md-12">
				<div class="justify-content-center">
					<ul class="homepage-insta-feed">
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1598">
							 <a href="https://www.instagram.com/p/CS5lMP6HjJh/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17908616945063205.jpg" alt="Healthy hair is the ultimate goal ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1597">
							 <a href="https://www.instagram.com/p/CSfOFCvneUD/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17917810900884405.jpg" alt="Now more than ever, transparency of ingredients, sustainability policies and who are behind the brands of the products we’re using, matters to the NaturallyCurly community. 
								@alaffia recently launched their @alaffiabeautifulcurls line and part of the proceeds are funding their Beautiful Arrival maternal care initiative. Social impact has been woven into the Alaffia brand from its inception in 1996, and we got an inside look at how that approach continues to drive the brand today. Get familiar with this clean beauty brand on our website or swipe up in our stories to read more about how they invest in empowering women around the world. {AD} #naturallycurly #alaffia">
							 </a>
							 <div class="overlay">
								<i class="fa fa-clone" style="font-size: 27px; color: #842FB1;"></i>
							 </div>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1596">
							 <a href="https://www.instagram.com/p/CSIZGh_n9Iv/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17917776136766980.jpg" alt="Texture Tuesday ✨While we use the curl typing system as a starting point, we can agree that textured hair doesn’t fit in a box. Most of us have multiple curl patterns (and porosities) throughout our hair, which is why some people describe their hair as multi-textured. How do you feel about the curl typing system? Is it helpful? Does it really matter? What’s most important for you when it comes to understanding your unique hair texture? Share with us below ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1595">
							 <a href="https://www.instagram.com/p/CR7TQPgA6Wy/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17909842162887670.jpg" alt="Tomorrow Friday, July 30th ✨Join us for a very special IG LIVE featuring celebrity stylist and brand ambassador @allynantoinehair and Lanaia Edwards, VP of Global Marketing @alaffia ">
							 </a>
							 <div class="overlay">
								<i class="fa fa-play-circle" style="font-size: 27px; color: #842FB1;"></i>
							 </div>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1594">
							 <a href="https://www.instagram.com/p/CRwL0xVNCpo/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/18162765085082931.jpg" alt="Regardless of whether or not you’re well-versed in taking care of your own curls or coils, caring for a child’s curly hair can be a real challenge. The child may have a different hair texture, porosity, or density than what you’re used to. Finding the right products for your little one can make all the difference. We’ve narrowed it down to a few kid friendly lines such as @sheamoisturebaby &amp; KIDS, @curls KIDS, @auntjackiescurlsandcoils KIDS, @socozy , @frobabieshair , @curlyellie , @kinder.curls &amp; @cantubeauty KIDS ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1593">
							 <a href="https://www.instagram.com/p/CRhL51Ott99/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17884326632485056.jpg" alt="Perfect curls happen with the understanding of water ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1592">
							 <a href="https://www.instagram.com/p/CRU87rfNaiT/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17999374138345399.jpg" alt="Let your fro flourish &amp; rock your natural crown with confidence ✨">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1591">
							 <a href="https://www.instagram.com/p/CRMwjUeNRVu/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/18167853331182198.jpg" alt="It’s always a good day when you can extend wash day for another day. From dry shampoo to a mousse refresh, we’ve got a few tricks that you can try to prolong wash day. What’s your top tip(s) for extending wash day? Share with us below ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1590">
							 <a href="https://www.instagram.com/p/CRAgiBcN5_u/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17875328930399510.jpg" alt="Texture Tuesday featuring defined &amp; voluminous curls courtesy of @letts_curl ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1589">
							 <a href="https://www.instagram.com/p/CQxIwFHNB4U/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17940556312525758.jpg" alt="The twist out, the volume, the beads &amp; the eyeliner *chefs kiss* Would you try this hairstyle? ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1588">
							 <a href="https://www.instagram.com/p/CQwdAIttCMe/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/18173201398125635.jpg" alt="Waves for days ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1587">
							 <a href="https://www.instagram.com/p/CQhJvzEHCgU/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17879563430486042.jpg" alt="One of our favorite accessories is a scarf! It’s great for protecting your hair, keep your hair off your neck when it’s too hot to handle or simply making a statement with your outfit. Wouldn’t you agree? ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1586">
							 <a href="https://www.instagram.com/p/CQOQB60H-ot/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17936708485501486.jpg" alt="After more than 150 years, Juneteenth is officially a federal holiday to celebrate the ending of slavery which took place in Galveston, Texas on June 19, 1865. May we continue to share &amp; honor our history &amp; honor our ancestors who paved the way to create change for generations to come ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1585">
							 <a href="https://www.instagram.com/p/CQFQbgInKLy/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17879237114471339.jpg" alt="Sunday’s are made for wash day ">
							 </a>
						  </div>
						</li>
						<li class="homepage-insta-feed-li">
						  <div class="instagram-col-sm ig-1584">
							 <a href="https://www.instagram.com/p/CP_u5BPH051/" target="_blank">
							 <img src="https://tm-dev-assets.s3.amazonaws.com/instagram_images/17993095723335564.jpg" alt="It’s the bare skin &amp; natural curls for us @theestallion ">
							 </a>
							 <div class="overlay">
								<i class="fa fa-clone" style="font-size: 27px; color: #842FB1;"></i>
							 </div>
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