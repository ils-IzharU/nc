<?php get_header(); ?>

<div class="breadcrumb_inner">
	<div class="container page-layout-main-content test">
		<div class="row">
			<div class="col-md-12">
				<p class="breadcrumb_articles"> CurlTalk | Naturalcurly.com</p>
			</div>
		</div>
	</div>
</div>

<div class="inner_page_layout">
	<div class="container page-layout-main-content">
		<div class="row">
			<div class="col-md-9">
				<table class="table table-striped table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>Categories</th>
							<th>Discussion</th>
							<th>Comments</th>
							<th width="200px">Latest Posts</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$args = array('post_type'=>'forum', 'post_parent' => 0, 'posts_per_page'=>-1);
						query_posts($args);
						while(have_posts()) : the_post(); ?>
						
						
						
						<?php $childrens = get_children( [
							'post_parent' => get_the_ID(),
							'post_type'   => 'forum',
							'numberposts' => -1,
						] );
						?>
						<tr><th class="heading_post" colspan="4"><?php the_title() ?></th></tr>
						<?php if( $childrens ){
							foreach( $childrens as $children ){
								?>
								<tr>
									<td><a class="post_title" href="<?php echo get_the_permalink($children->ID) ?>"><?php echo $children->post_title ?></a>
									<span class="post_content"><?php echo $children->post_content ?></span></td>
									<td><?php echo get_post_meta($children->ID, '_bbp_topic_count', true);?></td>
									<td><?php echo get_post_meta($children->ID, '_bbp_reply_count', true);?></td>
									<td><h3 class="latest_topic"><?php $latest_topic_id = get_post_meta($children->ID, '_bbp_last_topic_id', true);
									if($latest_topic_id){ ?>
										<a href="<?php echo get_the_permalink($latest_topic_id) ?>"><?php echo get_the_title($latest_topic_id); ?></a>
									<?php } ?></h3></td>
								</tr>
							<?php }
						} ?>

						<?php endwhile; wp_reset_query() ?>
					</tbody>
				</table>
				
				<?php //echo do_shortcode('[bbp-forum-index]')?>
			</div>
			<div class="col-md-3">
			
				<div class="cate_box mb-4">
					<h3 class="categories_head">Quick Links</h3>
					<ul class="child_post">
						<li><a href="">Categories</a></li>
						<li><a href="">Recent Discussion</a></li>
						<li><a href="">Activity</a></li>
						<li><a href="">Best of CurlTalk</a></li>
						<li><a href="">Unanswered</a></li>
					</ul>
				</div>
				<div class="cate_box">
					<h3 class="categories_head">Categories</h3>
					<?php
					$args = array('post_type'=>'forum', 'post_parent' => 0, 'posts_per_page'=>-1);
					query_posts($args);
					while(have_posts()) : the_post(); ?>
					
						<h3 class="heading_post"><?php the_title() ?></h3>
						
						<?php $childrens = get_children( [
							'post_parent' => get_the_ID(),
							'post_type'   => 'forum',
							'numberposts' => -1,
						] );
						echo '<ul class="child_post">';
						if( $childrens ){
							foreach( $childrens as $children ){
								?>
								<li><a href="<?php echo get_the_permalink($children->ID) ?>"><?php echo $children->post_title ?></a></li>
							<?php }
						}
						echo '</ul>';?>
					<?php endwhile; wp_reset_query();?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer() ?>