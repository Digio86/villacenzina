<?php get_header(); ?>
    <div class="row contenuto">
        <div class="small-12 large-12 columns">
            <article>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            	<?php the_content();  ?>
            <?php 
				endwhile; 
				endif; 
			?>
            </article>
    <div class="row news">
    	<div class="small-12 large-12 columns"><h1>news</h1></div>
    </div>  
         
<!-- NEWS -->


<?php 
	  $news = array('post_type' => 'News','showposts' => 5);
	  $list_news = new WP_Query($news);
	  while($list_news->have_posts()) : $list_news->the_post();
		$news_image = get_field('immagine');
			if( !empty($news_image) ):
?>	
	<div class="row news_info">
    	<div class="small-12 medium-9 large-9 columns">
			<?php echo get_the_content();  ?>            
        	<p class="link"><a href="<?php the_field('link_news'); ?>">Per saperne di piu ></a></p>
        </div>
        <div class="small-12 medium-3 large-3 columns"><img src="<?php echo $news_image['url']; ?>" alt="<?php echo $news_image['alt']; ?>"></div>
    </div>             
		<?php endif; ?>
	<?php
        endwhile;
    ?>     
        </div>
    </div>

	<?php get_sidebar(); ?>   
    
<div class="clear"></div>
<?php get_footer(); ?>
