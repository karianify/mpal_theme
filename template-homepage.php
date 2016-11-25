<?php

/* Template Name: Home */

 get_header(); ?>
 
 
<div class="home-banner">
	<div class="home-banner-wrap">
		<h1>Fast, Friendly and Entirely Online</h1>
		<h3>Canada's smartest way to get a Mortgage</h3>

		<div class="gpr-wrap">
			<a class="mpal-btn mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect" href="#">Get Personalized Rates</a>
		</div>
		
		<div class="sub-text">30 Seconds • 4 Questions • 0 Personal Details</div>
	</div>
<div class="home-banner-inner"></div>
</div> 

<div class="full-wrapper bg-white">
<div class="comp-logo">
	<div class="cl-item cl-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-bbb.png" /></div>
	<div class="cl-item cl-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-fico.png" /></div>
	<div class="cl-item cl-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-fsco.png" /></div>
	<div class="cl-item cl-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-cmba.png" /></div>
	<div class="cl-item cl-5 cl-item-last"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-comodo.png" /></div>
	<div class="clear"></div>
</div>

<div class="hp-2col mpal-wrap">
	<div class="col2-item hp-omw">
		<iframe src="//player.vimeo.com/video/118456339?title=0&amp;byline=0&amp;portrait=0" width="535" height="305" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>
	<div class="col2-item item-right">
		<div class="hp-omw pad-side">
			<h2>How the Online Mortgage Works</h2>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			<span>Start saving time and money today. It's quick and easy!</span>
			</p>
			<a href="#" class="mpal-btn mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">APPLY NOW</a>
		</div>
	</div>
	<div class="clear"></div>
</div>

</div>

<div class="full-wrapper bg-lgray">
	<div class="mpal-wrap mpal-reasons mpal-hp">
		<h2>Six Reasons You'll Love Working With MortgagePal</h2>
		<span class="sub-head">Writing long email doesn't mean you are getting more work done.<br/>Instant, short and clear replies present quality mailtime to both mail composers and readers.</span>
		
		
		
	<div class="hp-3col">
		<div class="col3-item">
			<div class="col-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/LowRateGuarantee.png" />
				<h2>Low Rate Guarantee</h2>
				<p>
					Our guarantee is prety simple: we'll get you the absolute best mortgage rate in Canada. If we can't we'll give you $500 (but that's never happened yet).
				</p>
			</div>
		</div>
		<div class="col3-item">
			<div class="col-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FastFriendlyBrokers.png" />
				<h2>Fast, Friendly Brokers</h2>
				<p>
					We're just like you. MortgagePal is a tight-knit team of hard working Canadians, using our skills to save homeowners money on their mortgage.
				</p>
			</div>
		</div>
		<div class="col3-item last-item">
			<div class="col-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ZeroFeePolicy.png" />
				<h2>Zero Free Policy</h2>
				<p>
					Our services can easily save you thousands in interest. The great news is it won't cost you a dime.
				</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="hp-3col">
		<div class="col3-item">
			<div class="col-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FullyTransparentRates.png" />
				<h2>Fully Transparent Rates</h2>
				<p>
					A rate is useless without context. That's why on our rate sheet, you'll find the name of the lender and the terms of the mortgage. The way it should be.
				</p>
			</div>
		</div>
		<div class="col3-item">
			<div class="col-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/SolidSecurity.png" />
				<h2>Low Rate Guarantee</h2>
				<p>
					Look up at the address bar - it's green and says our company name. That's an EV-SSL certificate, and it's there to secure your conection to this site.
				</p>
			</div>
		</div>
		<div class="col3-item last-item">
			<div class="col-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/EntirelyOnline.png" />
				<h2>Entirley Online</h2>
				<p>
					We like to keep things simple. You found us online, and we can do everything else online too via a combination of phone, email and text messages.
				</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	
	</div>
	


	
	
</div>
 
<!--testi slider-->
<div class="full-wrapper bg-white"> 
	<div class="mpal-wrap mpal-testi-slider mpal-hp">
		<?php 
		if (have_posts()) : 
		while (have_posts()) : the_post();
		
			the_content(); 
		
			endwhile; 
		endif;
		?>
	</div>
</div>
<!--end testi slider--> 
<!--hide content section
<section class="content <?php echo esc_attr($converio_sidebar_class); ?>">
<?php 
$hide_title = get_post_meta(get_the_id(), 'hide_title', true);

$sidebar_position = get_post_meta($converio_thisPageId, 'sidebar_position', true);
if($sidebar_position == 3) $sidebar_position = $converio_sidebar_pos_global;

//if sidebar is set to "don't show"
if($sidebar_position == 2) {
	if (have_posts()) : 
		while (have_posts()) : the_post();
			if(!$hide_title) : ?>
				<?php $main_title = get_theme_mod('main_title');
				if($main_title == 1) : ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php else : ?>
					<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php endif; ?>
			<?php endif;?>
			<?php
			$thisPostId = get_the_id();
			$hide_featured_image = get_post_meta($thisPostId, "hide_featured_image", true);
			if (!$hide_featured_image) {
				$hide_featured_image = get_theme_mod("hide_featured_image");
			} else {
				if ($hide_featured_image == 1) {
					$hide_featured_image = false;
				}
			}
			?>
			<?php if(has_post_thumbnail() && !$hide_featured_image) { ?>
				<p><?php the_post_thumbnail('post-thumbnail'); ?></p>
			<?php } ?>
			<?php //the_content();
			wp_link_pages(array('before' => '<p class="pages"><strong>'.esc_attr__('Pages', 'converio').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
			comments_template();
		endwhile; 
	endif;
} else {
?>
<section class="main single">
	<?php if (have_posts()) : while (have_posts()) : 
		the_post();
	?>
		<article class="page">
			<?php if(!$hide_title) : ?>
				<?php $main_title = get_theme_mod('main_title');
				if($main_title == 1) : ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php else : ?>
					<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php endif; ?>
			<?php endif; ?>
			<?php
			$thisPostId = get_the_id();
			$hide_featured_image = get_post_meta($thisPostId, "hide_featured_image", true);
			if (!$hide_featured_image) {
				$hide_featured_image = get_theme_mod("hide_featured_image");
			} else {
				if ($hide_featured_image == 1) {
					$hide_featured_image = false;
				}
			}
			?>
			<?php if(has_post_thumbnail() && !$hide_featured_image) { ?>
				<p><?php the_post_thumbnail('post-thumbnail'); ?></p>
			<?php } ?>
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p class="pages"><strong>'.esc_attr__('Pages', 'converio').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</article>

		<?php comments_template(); ?>
	<?php endwhile; endif; ?>
</section>
<?php 
if($sidebar_position != 2) {
	$sidebar = get_post_meta(get_the_id(), 'custom_sidebar', true) ? get_post_meta(get_the_id(), 'custom_sidebar', true) : "default";
	if($sidebar != 'no') {
		if($sidebar && $sidebar != "default") get_sidebar("custom");
		else get_sidebar();	
	}
}
?>
<?php } ?>
 </section>-->
<?php get_footer(); ?>