<?php 
/*
Template Name: Giveaways
*/
get_header() ?>


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
			<?php $args = array(
				'post_type' => 'give-aways',
				'posts_per_page' => -1,
			);
			query_posts($args);
			while(have_posts()) : the_post();?>
			<div class="col-md-4 mb-4">
				<div class="promotion">
				   <div class="pre-entry">
					  <div class="feature_img">
						<a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>"></a>
					  </div>
					  <div class="content">
						 <h1 class="title">
							<p><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></p>
						 </h1>
						 <div class="description">
							<?php the_content() ?>            
						 </div>
					  </div>
					</div>
				   <!-- /Pre-Entry -->
				   <div class="footer">
					  <ul class="promotion-details">
						 <li id="winners">
							<h3><?php echo get_field('winners') ?></h3>
							Winner
						 </li>
						 <li id="end-date">
							<h3><?php echo get_field('end_date') ?></h3>
							Ends
						 </li>
						 <li id="time-left">
							<h3>No Time</h3>
							Left
						 </li>
						 <li class="toggle-popup toggle-rules" id="rules">
							<h3>Rules</h3>
							<a class="" data-toggle="modal" data-target="#ruleModel">View Rules</a>
						 </li>
					  </ul>
					  <div class="powered-by">
						 <h5><a href="<?php echo get_field('external_linki_give_Aways') ?>" target="_blank" rel="nofollow">Powered by <img src="<?php bloginfo('template_url') ?>/images/viralsweep-icon.png"> ViralSweep</a></h5>
					  </div>
				   </div>
				</div>
			</div>	
			

			<!-- Modal -->
			<div class="modal fade bd-rule-modal-lg" id="ruleModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle"><?php the_title() ?></h5>
							<a class="close" data-dismiss="modal"><i class="fa fa-times"></i></a>
						</div>
						<div class="modal-body">
							<h3>Rules</h3>
							<?php echo get_field('rules') ?>
						</div>
					</div>
				</div>
			</div>
			
			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer() ?>