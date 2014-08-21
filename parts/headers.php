<?php global $sdc_sub_section;?>
<header id="primary-header">
	<div class="site-banner <?php if($sdc_sub_section){ echo 'site-sub-section section-'.$sdc_sub_section;};?>">
    	<?php if( $sdc_sub_section ):?>
        	<a id="sdc-site-logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
            	<?php echo $sdc_sub_section;?>
           </a>
           <h1><?php echo get_the_title();?></h1>
        <?php else:?>
    	<a id="sdc-site-logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">School of Design <span>+</span> Construction</a>
        <?php endif;?>
    </div>
    <?php if( !$sdc_sub_section ):?>
    <nav class="header-nav">
    	<?php wp_nav_menu( array('theme_location' => 'site', 'container' => false ) ); ?>
    </nav>
    <?php endif;?>
</header>