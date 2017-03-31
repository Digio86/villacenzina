<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/foundation.css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/grid-5.css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/style.css" />
        <!-- Librerie Jquery -->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 		<!-- Google Font  Lato-->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100italic,100,300,400italic,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!--link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png"-->

<script>
	$(document).ready(function(){
	 $(".text_open").click(function(){
		$(this).next().toggle("slow","linear");
	 }); 	 
	});

</script>
     
		
		<?php wp_head(); ?>
<!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://www.villacenzina.it" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Villacenzina" />
  <meta property="og:description"   content="Villa Cenzina, è una delle prime abitazioni sorte nella località turistica di Lignano Sabbiadoro, situata a soli a 100 metri dalla lunghissima spiaggia e a 60 metri dal porto turistico Marina Punta Faro." />
  <meta property="og:image"         content="http://www.villacenzina.it/path/image.jpg" />
        
	</head>
	<body <?php body_class(); ?>> 
    	<!-- Facebook -->  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <!-- Fine --> 
   	<div id="container">
    	<header>
        <!-- SLIDER-->
        <div class="row slider">        
        	<div class="small-12 medium-12 large-12 columns" role="main" >
          		<ul data-orbit data-options="animation:slide; pause_on_hover:false; animation_speed:2000; navigation_arrows:true; bullets:true;">
                <?php 
					  $slider = array('post_type' => 'Slide','showposts' => 5);
		   			  $list_slider = new WP_Query($slider);
					  while($list_slider->have_posts()) : $list_slider->the_post();
					
					  $image = get_field('immagine');
					
                    	if( !empty($image) ):
				?>	
                    <li>
                    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</li>
				<?php endif; ?>
                    <?php
				  		endwhile;
					?>                        
          		</ul>     
        	</div>
        </div>                
            <div class="row menu">
			<div class="contain-to-grid sticky">
				<nav role="navigation"  data-topbar role="navigation" data-options="sticky_on: large" class="top-bar">
                
                    <ul class="title-area">
                        <li class="name"></li>
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>    
                         <section class="top-bar-section">
                                <ul class="right">
                                    <?php wp_nav_menu( array( 'container_class' => 'menu-header') ); ?>
                                    <a href="https://www.facebook.com/Villacenzinait-1423594471235147/?fref=ts" target="_blank"><img class="icon-fb right" src="<?php echo get_bloginfo('template_url');?>/img/fb.png"></a>
                                </ul>               
                         </section>
             	</nav> 
				</div>           
            </div>  
           <div class="row carillon show-for-large-up">
           		<div class="small-12 medium-6 large-2 columns">
                	<img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/1.png">
                    	<!--p class="text_open">Info +</p--> 
                		<!--img class="text_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->
                </div>
           		<div class="small-12 medium-6 large-2 columns">
                	<img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/2.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->
                </div>
           		<div class="small-12 medium-6 large-2 columns">
                	<img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/3.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->
                </div>
           		<div class="small-12 medium-6 large-2 columns">
                	<img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/4.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->
                </div>
           		<div class="small-12 medium-6 large-2 columns">
                	<img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/5.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->
                </div>
           		<div class="small-12 medium-6 large-2 columns">
                	<img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/6.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->
                </div>                                                                             
           </div> 
           
           <!-- SLider x tablet -->
           <div class="row carillon hide-for-large-up">
           		<div class="small-12 medium-4 columns">
 					    <img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/1.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->               
                </div>
                <div class="small-12 medium-4 columns">
 					    <img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/2.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->               
                </div>
                 <div class="small-12 medium-4 columns">
 					    <img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/3.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->               
                </div>
                <div class="small-12 medium-4 columns">
 					    <img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/4.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->               
                </div>  
                <div class="small-12 medium-4 columns">
 					    <img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/5.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->               
                </div> 
                <div class="small-12 medium-4 columns">
 					    <img class="photo_home" src="<?php echo get_bloginfo('template_url');?>/img/carillon/6.png">
                		<!--img class="arrow_open" src="<?php echo get_bloginfo('template_url');?>/img/arrow_open.png">
                		<div class="text_carrilon">
                        	<p>Casa lungo mare tipoligia a, stanza con vista mare</p>
                        </div-->               
                </div>                                                            
           </div>
            
		</header>
<section id="layout" role="document">
	<div id="wrapper">