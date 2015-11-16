<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Naturolite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title>Cream City Creative</title>
<link rel="icon" type="image/png" href="http://162.243.27.11/wp-content/uploads/2015/11/favicon.ico">
<?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>
<div class="header">
   <div class="signin_wrap">
  <div class="container">  
     <div class="right">
     <?php if ( '' != get_theme_mod( 'contact_no' ) ) { ?>
     <p><strong><span style="color:#F76024"><?php echo esc_attr('Phone:', 'naturo_lite');?></span></strong>
     <span style="color:#F76024"><?php echo esc_attr( get_theme_mod('contact_no', '+123 456 7890', 'naturo_lite' )); ?>
     <?php } ?></span>&nbsp;&nbsp;&nbsp;
     <?php if ( '' != get_theme_mod( 'contact_mail' ) ) { ?>
	 <strong><span style="color:#F76024"><?php echo esc_attr('Email:', 'naturo_lite');?></span></strong>
     <a href="mailto:<?php echo sanitize_email(get_theme_mod('contact_mail','contact@company.com')); ?>"><span style="color:#F76024"><?php echo esc_attr(get_theme_mod('contact_mail','contact@company.com')); ?></a>
	 <?php } ?></span></p>    
       
           </div>
     <div class="clear"></div>
  </div>
 </div><!--end signin_wrap-->
        <div class="header-inner">
                <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php bloginfo('name'); ?><img alt="Cream City Creative logo." title="Cream City Creative logo." src="http://162.243.27.11/wp-content/uploads/2015/11/CCC_logo.png" id="ccclogo">
                                <span class="tagline"><?php bloginfo( 'description' ); ?></span>                          
                        </a>
                 </div><!-- logo -->                 
                <div class="toggle">
                <a class="toggleMenu" href="#"><?php esc_attr_e('Menu','naturo_lite'); ?></a>
                </div><!-- toggle -->
                <div class="nav">                  
                    <p><?php wp_nav_menu( array('theme_location' => 'primary')); ?></p>
                </div><!-- nav --><div class="clear"></div>
                    </div><!-- header-inner -->
</div><!-- header -->
<?php if ( is_front_page() && is_home() ) { ?>
<section id="home_slider">
        	<?php
			$sldimages = ''; 
			$sldimages = array(
						'1' => get_template_directory_uri().'/images/slides/slider1.jpg',
						'2' => get_template_directory_uri().'/images/slides/slider2.jpg',
						'3' => get_template_directory_uri().'/images/slides/slider1.jpg',
			); ?>
            
        	<?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<4; $i++) {
				if ( get_theme_mod('slide_image'.$i, $sldimages[$i]) != "" ) {
					$imgSrc 	= get_theme_mod('slide_image'.$i, $sldimages[$i]);
					$imgTitle	= get_theme_mod('slide_title'.$i);
					$imgDesc	= get_theme_mod('slide_desc'.$i);
					$imgLink	= get_theme_mod('slide_link'.$i);
					if ( strlen($imgSrc) > 2 ) {
						$slAr[$m]['image_src'] = get_theme_mod('slide_image'.$i, $sldimages[$i]);
						$slAr[$m]['image_title'] = get_theme_mod('slide_title'.$i);
						$slAr[$m]['image_desc'] = get_theme_mod('slide_desc'.$i);
						$slAr[$m]['image_link'] = get_theme_mod('slide_link'.$i);
						$m++;
					}
				}
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo esc_attr('#slidecaption'.$n) ; ?>" /><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo esc_attr($sln); ?>" class="nivo-html-caption">
                    <div class="slide_info">
                    <h2><a href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#link'.$sln)); ?>"><?php echo esc_attr(get_theme_mod('slide_title'.$sln, __('We Create Wordpress Theme','naturo_lite').$sln)); ?></a></h2>
                    <p><?php  echo esc_attr(get_theme_mod('slide_desc'.$sln, __('We are a group of experienced designers and developers. We set new standards in user experience & make future happen.','naturo_lite').$sln)); ?></p>
                    </div>
                    </div><?php 
                } ?>
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </section>
<div class="clear"></div>
<section id="wrapsecond">
            	<div class="container">
                <?php if( get_theme_mod( 'hide_boxes' ) == '') { ?>
                    <div class="services-wrap">
                       
<!--HOME BOXES - CUSTOM BY BECKY-->
      
 <div class="one_fourth">
		<i class="icon icon-pencil"></i>
            <h3>DESIGN.</h3>
            <p>From our first meeting, we put our client's needs first. We deliver an action plan within 2-5 business days that outlines our schedule and what you can expect with each step. You decide how often we send you status updates, and we follow your schedule - no more calling and begging for an ETA.</p>
        </div>

        <div class="one_fourth">
	<i class="icon icon-group"></i>
            <h3>FEEDBACK.</h3>
            <p>Our award-winning testing process is designed with you in mind. Just log on to our custom testing software, leave your feedback, and we'll make the adjustments as necessary. We'll work with you for as long as necessary to make sure that you are completely satisfied with your product.</p>
        </div>
        <div class="one_fourth">
	<i class="icon icon-rocket"></i>
            <h3>GO LIVE.</h3>
            <p>A seamless transition to a live product is our specialty. We do everything we can to make sure that there are no issues, because we understand your priorities and goals from the beginning. Our rigorous testing process guarantees that your product will be error-free from day one.</p>
        </div>
        <div class="one_fourth last_column">
	<i class="icon icon-cogs"></i>
            <h3>MAINTENANCE.</h3>
            <p>We don't disappear after your product is complete. Contact us anytime, and we are always happy to answer any questions you may have. Product maintenance is built into each package, so never worry about finding yourself reading a long invoice of fees after your product is complete.</p>
        </div>
        <!-- feature-box -->
        <div class="clear"></div>        
        <!--Home Four Boxes-->
                           
               </div><!-- services-wrap-->
               
               <?php } ?>
               
              <div class="clear"></div>
            </div><!-- container -->
       </section>
       <div class="clear"></div>        
<?php
}
elseif ( is_front_page() ) { 
?>
<section id="home_slider">
        	<?php
			$sldimages = ''; 
			$sldimages = array(
						'1' => get_template_directory_uri().'/images/slides/slider1.jpg',
						'2' => get_template_directory_uri().'/images/slides/slider2.jpg',
						'3' => get_template_directory_uri().'/images/slides/slider1.jpg',
			); ?>
            
        	<?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<4; $i++) {
				if ( get_theme_mod('slide_image'.$i, $sldimages[$i]) != "" ) {
					$imgSrc 	= get_theme_mod('slide_image'.$i, $sldimages[$i]);
					$imgTitle	= get_theme_mod('slide_title'.$i);
					$imgDesc	= get_theme_mod('slide_desc'.$i);
					$imgLink	= get_theme_mod('slide_link'.$i);
					if ( strlen($imgSrc) > 2 ) {
						$slAr[$m]['image_src'] = get_theme_mod('slide_image'.$i, $sldimages[$i]);
						$slAr[$m]['image_title'] = get_theme_mod('slide_title'.$i);
						$slAr[$m]['image_desc'] = get_theme_mod('slide_desc'.$i);
						$slAr[$m]['image_link'] = get_theme_mod('slide_link'.$i);
						$m++;
					}
				}
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo esc_attr('#slidecaption'.$n) ; ?>" /><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo esc_attr($sln); ?>" class="nivo-html-caption">
                    <div class="slide_info">
                    <h2><a href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#link'.$sln)); ?>"><?php echo esc_attr(get_theme_mod('slide_title'.$sln, __('We Create Wordpress Theme','naturo_lite').$sln)); ?></a></h2>
                    <p><?php  echo esc_attr(get_theme_mod('slide_desc'.$sln, __('We are a group of experienced designers and developers. We set new standards in user experience & make future happen.','naturo_lite').$sln)); ?></p>
                    </div>
                    </div><?php 
                } ?>
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </section>
<div class="clear"></div>
<section id="wrapsecond">
            	<div class="container">
                <?php if( get_theme_mod( 'hide_boxes' ) == '') { ?>
                    <div class="services-wrap">
                       
<?php
        /* Home Four Boxes */
        for($bx=1; $bx<5; $bx++) { ?>
        <?php if( get_theme_mod('page-setting'.$bx)) { ?>
        <?php $bxquery = new WP_query('page_id='.get_theme_mod('page-setting'.$bx,true)); ?>
        <?php while( $bxquery->have_posts() ) : $bxquery->the_post(); ?>
        <div class="one_fourth <?php if($bx%4==0){ ?>last_column<?php } ?>">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            <?php the_content(); ?>
            <a href="<?php the_permalink(); ?>"><p class="ReadMore"><?php esc_attr_e('Read More', 'naturo_lite');?></p></a>
        </div>
        <!-- feature-box -->
        <?php if($bx%4==0) { ?>
        <div class="clear"></div>
        <?php } ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php } else { ?>
        <a href="<?php echo esc_url('#');?>"><div class="one_fourth <?php if($bx%4==0){ ?>last_column<?php } ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon<?php echo esc_attr($bx); ?>.png" />
            <h3><?php esc_attr_e('Page Title','naturo_lite'); ?> <?php echo esc_attr($bx); ?></h3>
            <p><?php esc_attr_e('Cream City Creative rules.','naturo_lite');?></p>
            <p class="ReadMore"><?php esc_attr_e('Read More', 'naturo_lite');?></p>
        </div></a>
        <!-- feature-box -->
        <?php if($bx%4==0) { ?>
        <div class="clear"></div>
        <?php
            }  
            } 
            }
        /* Home Four Boxes */	
        ?>                       
               </div><!-- services-wrap-->
               
               <?php } ?>
               
              <div class="clear"></div>
            </div><!-- container -->
       </section>
       <div class="clear"></div>
<?php
}
elseif ( is_home() ) {
?>
<section id="home_slider" style="display:none;"></section>
<section id="wrapsecond" style="display:none;"></section>
<?php
}
?>