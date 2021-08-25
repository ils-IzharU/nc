<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php wp_title() ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head() ?>
	</head>
	
<body <?php body_class('default-plain has-canvas') ?>>
	<div class="navbar-custom">
		<div class="nav-placeholder"><div class="fixed-menu">
			<div class="row mx-0 background-content">
				<nav class="navbar navbar-expand-lg collapse-sidebar">
		<div class="navbar-top-part row">
			<div class="col-2">
				<div class="navbar-left-container">
					<a class="navbar-logo-container" href="<?php bloginfo('url') ?>">
						<img class="nc-logo" src="<?php bloginfo('template_url') ?>/images/naturallycurly.png">
					</a>
					<button class="main-menu-button-mobile navbar-toggler">
						<i class="fa fa-bars">
							<mark class="number-notifications"></mark>
						</i>
					</button>
				</div>
			</div>
			<div class="col-7 col-sm-8 col-xl-7">
				<div class="navbar-center-container">
					<a class="navbar-logo-container" href="">
						<img class="nc-logo" src="<?php bloginfo('template_url') ?>/images/naturallycurly.png">
					</a>
					<div class="nav_container"><?php wp_nav_menu(array('theme_location'=>'primary_menu')) ?></div>
			   </div>
			</div>
			<div class="col-3 col-sm-1 col-xl-3 pr-0">
			   <div class="navbar-right-container">
					<div class="navbar-items-container">
						<?php wp_nav_menu(array('theme_location'=>'login_subscribe', 'container'=>'ul', 'menu_class'=>'login_logout_menu')) ?>
						<ul class="navbar-nav">
							<li class="nav-item dropdown search">
								<a href="" class="nav-link dropdown-toggle"><i class="fa fa-search"></i></a>
							</li>
							<li class="nav-item dropdown">
							   <a id="navbarDropdown8" class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
								  <div id="shopping-cart-button" class="child-right-container" style="display: block;"><i class="fas fa-shopping-cart"><mark class="number-cart-items" style="display: inline;">1</mark></i></div>
							   </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar-bottom-part d-none" style="">
			<?php 
			$loginli = '<li class="subnavbar-item subnavbar-item-login">
			<a id="navbarDropdown16" class="subnav-link" href="javascript:void(0)">
			<div id="menu-login-container">
			<div class="login-menu-btn" data-toggle="tooltip" title="" data-original-title="Login">
			<i class="fa fa-user-circle"></i><span class="login-text">Login</span>
			</div>
			</div>
			</a>
			</li>';
			
			$current_user = wp_get_current_user();
			//$logout_url = sprintf( __( '%s', 'nc' ), wp_logout_url(home_url()) );
			$accountli = '<li class="subnavbar-item subnavbar-item-login">
				 <a id="navbarDropdown16" class="subnav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">
					<div id="menu-login-container">
					   '.$current_user->user_email.'
					</div>
				 </a>
				 <div class="dropdown-menu nc-dropdown-menu">
					<div class="dropdown-menu-submenu nc-dropdown-submenu">
					   <a class="dropdown-item nc-dropdown-item" href="'.get_bloginfo("url").'/my-account/edit-account/"><span class="dropdown-title nc-dropdown-title">Edit My Account</span>
					   </a>
					   <a class="dropdown-item nc-dropdown-item profile-link" href="/user/id"><span class="dropdown-title nc-dropdown-title">View My Public Profile</span>
					   </a>
					   <a class="dropdown-item nc-dropdown-item" href="'.$logout_url.'">
					   <span class="dropdown-title nc-dropdown-title">Logout</span>
					   </a>
					</div>
				 </div>
			  </li>';
			  
			if(is_user_logged_in()){
				$userli = $accountli;
			} else {
				$userli = $loginli;
			}
			
			$search_login_lis = '<li class="subnavbar-item" style="border-right: 1px solid transparent; padding-left: 7.5px; padding-right: 7.5px;">
				 <div id="search-form-container">
					<div id="search-form">
					   <form class="search-bar" action="'.get_bloginfo("url").'/search-results">
						  <input type="hidden" name="_token" value="t5jGyb1G0AIuKze1wfGb0vukvwNsusvVzHrV9EGk">
						  <div class="input-group">
							 <input type="text" class="form-control" target="_blank" placeholder="Search..." aria-label="Search..." name="q" value="">
							 <span class="input-group-append">
							 <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
							 </span>
						  </div>
					   </form>
					</div>
				 </div>
			  </li>'.$userli.'
			</ul>';

			$items_wrap = '<ul id="%1$s" class="%2$s">%3$s';
			$items_wrap .= $search_login_lis;
			
			$args = array(
				'menu'                 => '',
				'container'            => 'ul',
				'container_class'      => '',
				'container_id'         => '',
				'container_aria_label' => '',
				'menu_class'           => 'subnavbar-nav',
				'menu_id'              => '',
				'echo'                 => true,
				'fallback_cb'          => 'wp_page_menu',
				'before'               => '',
				'after'                => '',
				'link_before'          => '',
				'link_after'           => '',
				'items_wrap'           => $items_wrap,
				'item_spacing'       => 'preserve',
				'depth'                => 0,
				'walker'               => '',
				'theme_location'       => 'feature_menu',
				'add_li_class'  	   => 'subnavbar-item'
			);
			wp_nav_menu($args) ?>
		</div>
	</nav>
			</div>
		</div>
	</div>
</div>
<?php if(is_front_page()){ ?>
<div class="header_message">
	<div class="c_container c-page-layout-main-content">
		<marquee width="100%" loop="infinite">
			<ul>
				<li>THE NATURAL HAIR SWIM CAPS BANNED FROM THE TOKYO OLYMPICS.</li>
				<li>IF PLOPPING DOESN'T WORK</li>
				<li>THE NATURAL HAIR SWIM CAPS BANNED FROM THE TOKYO OLYMPICS.</li>
			</ul>
		</marquee>
		<p class="text-center message d-none"><strong>Tip of the day:</strong> Try Natural Treatment For Healthy Curly Hair
	</div>
</div>
<?php } ?>