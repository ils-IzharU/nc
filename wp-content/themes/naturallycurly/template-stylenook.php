<?php 
/*
Template Name: Stylenook
*/
get_header(); ?>

<div class="breadcrumb_inner" style="background: url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat;padding: 200px;background-size: cover; background-position: center center;">
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="col-md-12">
				<!--<p class="breadcrumb_articles"><?php the_title() ?> | Naturalcurly.com</p> -->
			</div>
		</div>
	</div>
</div>

<div class="filter_stylenook mt-5">
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="col-12 col-md-12 text-center text-md-right py-3 py-md-0">
				<button class="btn btn-secondary btn-filter active">Filter <i class="fa fa-filter ml-2" aria-hidden="true"></i></button>
			</div>
			<div class="col-md-12">
				<div class="filter">
					<form method="get" action="">
						<div class="filter-dropdown background-content p-3" style="display: block;">
						   <div class="row">
							  <div class="col-lg-2 col-md-4 mb-sm-3">
								 <h5 class="mb-3 font-weight-bold">Hairtypes</h5>
								 <div class="text-left hairtypes">
									<div class="type mb-2 ml-2">
									   <h6 class="font-weight-bold pb-1 mr-3">Wavy</h6>
									   <div class="row hairtype-list">
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="2a" id="hairstyle-2a" name="hairtype" class="hairtype">
											 <label for="hairstyle-2a"><i></i><span>2a</span></label>
										  </div>
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="2b" id="hairstyle-2b" name="hairtype" class="hairtype">
											 <label for="hairstyle-2b"><i></i><span>2b</span></label>
										  </div>
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="2c" id="hairstyle-2c" name="hairtype" class="hairtype">
											 <label for="hairstyle-2c"><i></i><span>2c</span></label>
										  </div>
									   </div>
									</div>
									<div class="type mb-2 ml-2">
									   <h6 class="font-weight-bold pb-1 mr-3">Curly</h6>
									   <div class="row hairtype-list">
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="3a" id="hairstyle-3a" name="hairtype" class="hairtype">
											 <label for="hairstyle-3a"><i></i><span>3a</span></label>
										  </div>
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="3b" id="hairstyle-3b" name="hairtype" class="hairtype">
											 <label for="hairstyle-3b"><i></i><span>3b</span></label>
										  </div>
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="3c" id="hairstyle-3c" name="hairtype" class="hairtype">
											 <label for="hairstyle-3c"><i></i><span>3c</span></label>
										  </div>
									   </div>
									</div>
									<div class="type mb-2 ml-2">
									   <h6 class="font-weight-bold pb-1 mr-3">Coily</h6>
									   <div class="row hairtype-list">
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="4a" id="hairstyle-4a" name="hairtype" class="hairtype">
											 <label for="hairstyle-4a"><i></i><span>4a</span></label>
										  </div>
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="4b" id="hairstyle-4b" name="hairtype" class="hairtype">
											 <label for="hairstyle-4b"><i></i><span>4b</span></label>
										  </div>
										  <div class="nc-checkbox ml-2 col-3 col-lg-12">
											 <input type="checkbox" value="4c" id="hairstyle-4c" name="hairtype" class="hairtype">
											 <label for="hairstyle-4c"><i></i><span>4c</span></label>
										  </div>
									   </div>
									</div>
								 </div>
							  </div>
							  <div class="col-lg-10 col-md-8">
								 <h5 class="mb-3 font-weight-bold text-left">Hairstyles</h5>
								 <div class="text-left hairstyles">
									<div class="hairstyle mb-2 ml-2">
									   <h6 class="font-weight-bold pb-1 mr-3">Extensions</h6>
									   <div class="row hairstyle-list">
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Box Braids" id="hairstyle-1-1" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-1-1"><i></i><span>Box Braids</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Crochet" id="hairstyle-1-2" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-1-2"><i></i><span>Crochet</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Havana Twist" id="hairstyle-1-3" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-1-3"><i></i><span>Havana Twist</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Marley Twist" id="hairstyle-1-4" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-1-4"><i></i><span>Marley Twist</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Micro Braids" id="hairstyle-1-5" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-1-5"><i></i><span>Micro Braids</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Senegalese" id="hairstyle-1-6" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-1-6"><i></i><span>Senegalese</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Yarn Braids" id="hairstyle-1-7" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-1-7"><i></i><span>Yarn Braids</span></label>
										  </div>
									   </div>
									</div>
									<div class="hairstyle mb-2 ml-2">
									   <h6 class="font-weight-bold pb-1 mr-3">Updo</h6>
									   <div class="row hairstyle-list">
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Bantu Knots" id="hairstyle-2-1" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-2-1"><i></i><span>Bantu Knots</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="French Braid" id="hairstyle-2-2" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-2-2"><i></i><span>French Braid</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Pincurls" id="hairstyle-2-3" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-2-3"><i></i><span>Pincurls</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Pompadour" id="hairstyle-2-4" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-2-4"><i></i><span>Pompadour</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Top Knot" id="hairstyle-2-5" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-2-5"><i></i><span>Top Knot</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Chignon" id="hairstyle-2-6" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-2-6"><i></i><span>Chignon</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Cornrows" id="hairstyle-2-7" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-2-7"><i></i><span>Cornrows</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Tuck and Pin" id="hairstyle-2-8" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-2-8"><i></i><span>Tuck and Pin</span></label>
										  </div>
									   </div>
									</div>
									<div class="hairstyle mb-2 ml-2">
									   <h6 class="font-weight-bold pb-1 mr-3">Out &amp; Loose</h6>
									   <div class="row hairstyle-list">
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Twist" id="hairstyle-3-1" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-1"><i></i><span>Twist</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Twist &amp; Curl" id="hairstyle-3-2" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-2"><i></i><span>Twist &amp; Curl</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Twist Out" id="hairstyle-3-3" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-3"><i></i><span>Twist Out</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Flat Twist Out" id="hairstyle-3-4" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-4"><i></i><span>Flat Twist Out</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Braid" id="hairstyle-3-5" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-5"><i></i><span>Braid</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Braid &amp; Curl" id="hairstyle-3-6" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-6"><i></i><span>Braid &amp; Curl</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Braid Out" id="hairstyle-3-7" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-7"><i></i><span>Braid Out</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Bantu Knot Out" id="hairstyle-3-8" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-8"><i></i><span>Bantu Knot Out</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Wash and Go" id="hairstyle-3-9" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-9"><i></i><span>Wash and Go</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Rollers &amp; Rods" id="hairstyle-3-10" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-10"><i></i><span>Rollers &amp; Rods</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Fingercoils" id="hairstyle-3-11" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-11"><i></i><span>Fingercoils</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Afro" id="hairstyle-3-12" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-12"><i></i><span>Afro</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Pixie Cut" id="hairstyle-3-13" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-13"><i></i><span>Pixie Cut</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Blowout" id="hairstyle-3-14" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-14"><i></i><span>Blowout</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Beachy Waves" id="hairstyle-3-15" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-15"><i></i><span>Beachy Waves</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Curling Wand" id="hairstyle-3-16" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-16"><i></i><span>Curling Wand</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Straightened" id="hairstyle-3-17" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-17"><i></i><span>Straightened</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Long Curly Hair" id="hairstyle-3-18" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-3-18"><i></i><span>Long Curly Hair</span></label>
										  </div>
									   </div>
									</div>
									<div class="hairstyle mb-2 ml-2">
									   <h6 class="font-weight-bold pb-1 mr-3">Locs</h6>
									   <div class="row hairstyle-list">
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Regular Locs" id="hairstyle-4-1" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-4-1"><i></i><span>Regular Locs</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Sister Locs" id="hairstyle-4-2" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-4-2"><i></i><span>Sister Locs</span></label>
										  </div>
										  <div class="nc-checkbox col-6 col-sm-4 col-lg-3 col-xl-2">
											 <input type="checkbox" value="Organic Locs" id="hairstyle-4-3" name="hairstyle" class="hairstyle">
											 <label for="hairstyle-4-3"><i></i><span>Organic Locs</span></label>
										  </div>
									   </div>
									</div>
								 </div>
							  </div>
						   </div>
						   <div class="row buttons">
							  <div class="col-6 p-0 text-right">
								 <button class="btn btn-danger">Reset</button>
							  </div>
							  <div class="col-6">
								 <button type="submit" class="btn btn-success">Apply Filter</button>
							  </div>
						   </div>
						</div>
					</form>
				</div>
			</div>
			</div>
	</div>
</div>

<div class="inner_page_layout pt-0">
	<div class="container page-layout-main-content test">
		<div class="row">
			<div class="col-md-12 p-0">
				<div class="container-fluid p-0">
					<div class="grid">
						<div class="grid-sizer"></div>
						<?php
						$args = array(
							'post_type'=>'nc-stylenook', 
							'posts_per_page'=>12,
						);
						query_posts($args);		
						if(have_posts()) {
						while(have_posts()) : the_post();?>
						<div class="grid-item p-3">
							<div class="vr_latest_post stylenook">
								<figure class="mt-0 mb-0">
									<a href="<?php the_permalink() ?>">
										<img class="img-fluid mx-auto" itemprop="image" alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url() ?>">
									</a>
								</figure>
								<div class="content pl-4 pr-4 pb-3 pt-4">
									<a href="<?php the_permalink() ?>" class="item-title d-block">
										<span class="item-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_title() ?>"><?php the_title() ?></span>
									</a>
									<div class="pt-2 item-description" itemprop="description">
										<?php the_excerpt() ?>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; wp_reset_query();
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>