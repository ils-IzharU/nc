<footer class="master">
    <div id="suscribe-form" class="sign-up-container">
        <div class="container page-layout-main-content">
			<div class="row hubspot-newsletter-signup justify-content-sm-center justify-content-md-start horizontal">
				<div class="hubspot-label-container p-3 col-md-6">
					<label class="d-block text-center text-lg-left text-xl-left">Like what you see?</label>
					<p class="d-block text-center text-lg-left text-xl-left">Sign up for our newsletter to get more tips and tricks</p>
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode('[email-subscribers-form id="1"]') ?>
				</div>
			</div>
        </div>
    </div>

    <div class="container">
		<div class="row">
		<div class="col-md-12">
			<div class="row justify-content-center footer-links aks mt-5 mb-5 font-italic">
				<div class="col-auto">
					<a href="https://www.naturallycurly.com/about-us">About</a>
				</div>
				<div class="col-auto">
					<a href="https://www.naturallycurly.com/contact">Contact</a>
				</div>
				<div class="col-auto">
					<a href="https://www.naturallycurly.com/privacy-policy">Privacy</a>
				</div>
				<div class="col-auto">
					<a href="https://www.naturallycurly.com/terms-of-use/">Terms</a>
				</div>
				<div class="col-auto">
					<a href="https://www.naturallycurly.com/community-policy/">Policy</a>
				</div>
			</div>
            <div class="row justify-content-center text-center mx-auto">
                <div class="social-link d-flex flex-row justify-content-center align-items-center">
				<div>
					<a class="facebook" href="https://www.facebook.com/naturallycurly/" target="_blank" onclick="return true;">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
				<div>
					<a class="pinterest" href="https://www.pinterest.com/naturallycurly/" target="_blank" onclick="return true;">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fab fa-pinterest-p fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
				<div>
					<a class="twitter" href="https://twitter.com/naturallycurly" target="_blank" onclick="return true;">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
				<div>
					<a class="instagram" href="https://www.instagram.com/naturallycurly/" target="_blank" onclick="return true;">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
				<div>
					<a class="youtube" href="https://www.youtube.com/channel/UCfWMjgi41FBXXkPLTaDluyQ" target="_blank" onclick="return true;">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
				<div>
					<a class="email" href="mailto:Connect@naturallycurly.com" target="_blank" onclick="return true;">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
            </div>
            </div>
			
        </div>
    </div>
</div>
<div class="footer_bottom">
	<div class="container">
		<div class="row justify-content-center text-center  copyright">
			© 2021 NaturallyCurly
		</div>
	</div>
</div>
</footer>


<!-- Modal Adblocker-->
<div class="modal fade" id="disableAdBlockerContainer" tabindex="-1" role="dialog" aria-labelledby="disableAdBlockerTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <img class="nc-img col-6" src="./Where Curls Come to Life - NaturallyCurly.com _ NaturallyCurly.com_files/naturallycurly.svg">
                    <div class="col-6 d-flex">
                        <h5 class="modal-title align-self-center" id="disableAdBlockerTitle"> team message</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Our website is made possible by displaying online advertisements to our visitors.<br>
                Please consider supporting us by disabling your ad blocker on our website.
                <br><br>
                Thank you! :)
            </div>
        </div>
    </div>
</div>
 
<!--<div id="login-popup" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="d-none d-lg-block col-lg-6 login-image-container">
                        <img src="./Where Curls Come to Life - NaturallyCurly.com _ NaturallyCurly.com_files/683x902_login-default-image.png">
                    </div>
                    <div class="col-12 col-lg-6 login-form-container">
                        <div class="row close-btn-container">
                            <div class="close-btn" data-dismiss="modal" aria-label="Close">
                                <svg width="20" height="20">
                                    <line x1="0" y1="0" x2="20" y2="20" stroke="#000" stroke-width="2"></line>
                                    <line x1="0" y1="20" x2="20" y2="0" stroke="#000" stroke-width="2"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="row login-title">Log in</div>
                        <div class="row login-sub-title">Welcome to NaturallyCurly! <br> Log in to confirm your registration.</div>
                        <form>
                            <div class="row form-input">
                                <div class="error-message"></div>
                                <label for="login-username">Username</label>
                                <input id="login-username" name="login-username" type="text" required="">
                            </div>
                            <div class="row form-input">
                                <label for="login-password">Password</label>
                                <input id="login-password" name="login-password" type="password" required="">
                            </div>
                            <a class="row forgot-password" href="https://www.naturallycurly.com/password/reset">Forgot your password?</a>
                            <div class="row login-btn-container">
                                <div class="col-6 p-0 remember-me-container">
                                    <input id="checkbox-remember-me" name="checkbox-remember-me" type="checkbox">
                                    <label for="checkbox-remember-me">Remember Me</label>
                                </div>
                                <div class="col-6 p-0">
                                    <div class="btn-login">
                                        <span class="btn-text">Login</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a class="row new-here" href="https://www.naturallycurly.com/register">New here? Sign up for an account.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<?php wp_footer() ?>

<script>
$( document ).ready(function() {
	$('li.curls_texture').mouseover(function(){
		$('div#curls_texture').removeClass('mclose').addClass('mopen');
		$('div#waves_texture').removeClass('mopen').addClass('mclose');
		$('div#coils_texture').removeClass('mopen').addClass('mclose');
		$('div#locs_texture').removeClass('mopen').addClass('mclose');
		$('div#quiz_texture').removeClass('mopen').addClass('mclose');
	})
	$('li.waves_texture').mouseover(function(){
		$('div#waves_texture').removeClass('mclose').addClass('mopen');
		$('div#curls_texture').removeClass('mopen').addClass('mclose');
		$('div#coils_texture').removeClass('mopen').addClass('mclose');
		$('div#locs_texture').removeClass('mopen').addClass('mclose');
		$('div#quiz_texture').removeClass('mopen').addClass('mclose');
	})
	$('li.coils_texture').mouseover(function(){
		$('div#coils_texture').removeClass('mclose').addClass('mopen');
		$('div#curls_texture').removeClass('mopen').addClass('mclose');
		$('div#waves_texture').removeClass('mopen').addClass('mclose');
		$('div#locs_texture').removeClass('mopen').addClass('mclose');
		$('div#quiz_texture').removeClass('mopen').addClass('mclose');
	})
	$('li.locs_texture').mouseover(function(){
		$('div#locs_texture').removeClass('mclose').addClass('mopen');
		$('div#curls_texture').removeClass('mopen').addClass('mclose');
		$('div#waves_texture').removeClass('mopen').addClass('mclose');
		$('div#coils_texture').removeClass('mopen').addClass('mclose');
		$('div#quiz_texture').removeClass('mopen').addClass('mclose');
	})
	$('li.quiz_texture').mouseover(function(){
		$('div#quiz_texture').removeClass('mclose').addClass('mopen');
		$('div#curls_texture').removeClass('mopen').addClass('mclose');
		$('div#waves_texture').removeClass('mopen').addClass('mclose');
		$('div#coils_texture').removeClass('mopen').addClass('mclose');
		$('div#locs_texture').removeClass('mopen').addClass('mclose');
	})
	
})


$(".article-grid-768642 .article-grid-item")
.mouseenter(function(e) {
$(".social", $(this)).fadeIn("slow");
})
.mouseleave(function(e) {
$(".social", $(this)).toggle(false);
});

$(".article-grid-959270 .article-grid-item")
.mouseenter(function(e) {
	$(".social", $(this)).fadeIn("slow");
})
.mouseleave(function(e) {
	$(".social", $(this)).toggle(false);
});

$('[data-toggle="tooltip"]').tooltip();

var csrfToken = "t5jGyb1G0AIuKze1wfGb0vukvwNsusvVzHrV9EGk";
var navbarPosition = 0;
var fixedMenu = null;
var navbarPlaceholder = null;
var windowWidth = $(window).width();
var isDesktop = false;

if (windowWidth > 990) {
	isDesktop = true;
}

$(document).ready(function(){
	initialConfig();
	events();
});

function initialConfig(){
	//We save the menu without the top ad
	fixedMenu = $(".fixed-menu").first();
	
	//We create the placeholder for avoid jumpiness when navbar is sticky
	fixedMenu.wrap('<div class="nav-placeholder"></div>');
	navbarPlaceholder = $(".nav-placeholder");
	//We set to the placeholder the same height that the navbar
	navbarPlaceholder.height(fixedMenu.outerHeight());
	//We save the navbar position
	navbarPosition = navbarPlaceholder.offset().top;
}

//(Only desktop function) this function hides the navbar extra content (featured menu and top ad)
function slideUpNavbarExtraContent(){
	let featuredMenu = $(".navbar-bottom-part").first();
	featuredMenu.slideUp();
}

//(Only desktop function) this function shows the navbar extra content (featured menu and top ad)
function slideDownNavbarExtraContent(){
	let featuredMenu = $(".navbar-bottom-part").first();
	featuredMenu.slideDown();
}

//Listener called when the Top ad is renderer
function navbarAdSlotRenderEndedListener(){
	//We update the navbar position
	navbarPosition = navbarPlaceholder.offset().top;
}

function events(){
	$(window).on('scroll', function() {
		checkStickyNavbar();
	});
}

function checkStickyNavbar(){
	//Check the navbar stickiness
	//navbarPosition
	if ($(window).scrollTop() >= 100 ) {
		fixedMenu.addClass("sticky");
	} else {
		fixedMenu.removeClass("sticky");
	}

	if(isDesktop){
		//400px after the navbar position we hide the extra-content
		if (window.pageYOffset >= navbarPosition + 400) {
			slideUpNavbarExtraContent();
		}
		else{
			slideDownNavbarExtraContent();
		}
	}
}

$('.carousel').carousel({
  interval: 2000
})


// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});

$('button.btn-filter').click(() => {
	 $(".filter").toggle({speed: 'slow', easing: 'swing'});
})

</script>


	</body>
</html> 