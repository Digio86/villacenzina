</section>
<!-- SIDEBAR x Table -->
<div class="row sidebar-tabler hide-for-large-up">
	<div class="small-12 medium-4 columns"><a href="">
    	<img style="margin-bottom:3%;" src="<?php echo get_bloginfo('template_url');?>/img/sidebar/telefono_tablet.png"></a>
     </div>
    <div class="small-12 medium-4 columns"><a href="">
    	<img style="margin-bottom:3%;" src="<?php echo get_bloginfo('template_url');?>/img/sidebar/lignano.png"></a>
    </div>
    <div class="small-12 medium-4 columns"><a href="">
    	<img style="margin-bottom:3%;" src="<?php echo get_bloginfo('template_url');?>/img/sidebar/comune.png"></a>
    </div>

</div>

<footer>
<div class="row imgfooter">
	<div class="small-12 medium-12 large-12 columns">
    <?php if(is_page( 'lignano' )){ ?>
		<img src="<?php echo get_bloginfo('template_url');?>/img/footer/footer_lignano.jpg">
    <?php }elseif (is_page( 'tariffe' )){ ?>  
		<img src="<?php echo get_bloginfo('template_url');?>/img/footer/footer_tariffe.jpg">
    <?php } elseif (is_page( 'photogallery' )) { ?> 
		<img src="<?php echo get_bloginfo('template_url');?>/img/footer/footer_gallery.jpg">
    <?php }else{ ?>  
   		<img src="<?php echo get_bloginfo('template_url');?>/img/footer/home.jpg"> 
    <?php } ?> 
     </div>  
	<div class="small-12 medium-12 large-12 columns info">    
    	<p>Via Carso, 29  -  33054 - Lignano Sabbiadoro(UD) - Tel.+39-0431-71032  -  P.iva:12394111004  |  © Copyright 2016 </p>
        <p><a href="<?php echo home_url();?>">www.villacenzina.it</a>  |  <a href="mailto:villacenzina@libero.it">villacenzina@libero.it</a></p>
    </div> 
 </div>     
</footer>


	<?php do_action('foundationPress_layout_end'); ?>
    </div>
</div>
<?php wp_footer(); ?>
</div>
</body>
</html>
