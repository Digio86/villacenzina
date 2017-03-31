<?php get_header(); ?>
<!-- LIGNANO --->
<?php if (is_page( 'lignano' )) {?>
    <div class="row contenuto">
        <div class="small-12 large-12 columns">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            	<?php the_content();  ?>
            <?php 
				endwhile; 
				endif; 
			?>			
        </div>
        <div class="clear"></div>
        <div class="row lignano">
<?php 
	  $lignano = array('post_type' => 'Lignano','showposts' => 4);
	  $list_lignano = new WP_Query($lignano);
	  while($list_lignano->have_posts()) : $list_lignano->the_post();
		$lignano_image = get_field('immagine');
			if( !empty($lignano_image) ):
?>        
        	<div class="small-12 medium-3 large-3 columns">
            	<article class="avventure">
                	<img src="<?php echo $lignano_image['url']; ?>" alt="<?php echo $lignano_image['alt']; ?>">
                    <h2><?php the_field('titolo'); ?></h2>
                    <h3><?php the_field('sottotitolo'); ?></h3>
                    <p><?php the_field('testo'); ?></p>
                    <span>Link: </span><a class="lingnao-link" href="<?php the_field('link'); ?>" target="_blank"><?php the_field('nome_link'); ?></a>
                </article>
            </div>
 		<?php endif; ?>
	<?php
        endwhile;
    ?>             
        </div>
    </div>  
<?php } if(is_page( 'contatti' )) { ?> 
<!-- CONTATTI --->
	<div class="row contenuto">
    	<div class="row mappa">
            <div class="small-12 medium-12 large-12 columns">
                <iframe width="99%" height="400" src="http://www.maps.ie/create-google-map/map.php?width=100%&amp;height=400&amp;hl=en&amp;q=Via%20Carso%2029%2C%20Lignano%20Sabbiadoro+(Villacenzina)&amp;ie=UTF8&amp;t=p&amp;z=17&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
             </div>   
        </div>     
        <div class="row contatti">
			<div class="small-12 medium-12 large-4 columns">
            	<div class="row contatti_info">
                	<div class="small-12 medium-2 large-6 columns"><b>Indirizzo:</b></div>
                    <div class="small-12 medium-10 large-6 columns">
                    	<p>Via Carso, 29</p>
                        <p>33054 Lignano Sabbiadoro</p>
                        <p>Udine (UD)</p>
                    </div>
                </div>
                <div class="row contatti_info">
                	<div class="small-12 medium-2 large-6 columns"><b>Telefono:</b></div>
                    <div class="small-12 medium-10 large-6 columns">
                    	<p>(+39)0431-71032</p>
                    </div>
                </div> 
                <div class="row contatti_info">
                	<div class="small-12 medium-2 large-6 columns"><b>E-mail:</b></div>
                    <div class="small-12 medium-10 large-6 columns">
                    	<p><a href="mailto:villacenzina@libero.it">villacenzina@libero.it</a></p>
                    </div>
                </div> 
                 <div class="row news" style="margin-top:30px;">
                 	<div class="small-12 large-12 columns">
                    	<h1>come arrivare</h1>
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>In macchina</b></h3>
                     	<p style="padding-left: 10px;">Imboccate l'autostrada A4 Venezia-Trieste oppure l'A23 Treviso - Venezia e uscite al casello di Latisana. Proseguite sulla strada statale 354 verso  Lignano per circa 18km.</p>
                    </div>
                    
                    
                 	<div class="small-12 large-12 columns">
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>In treno</b></h3>
                     	<p style="padding-left: 10px;"><b style="color:#56adb6;">Stazione di Latisana:</b> 23 km - Collegamento auotbus con Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Stazione di Udine:</b> 60 km - Collegamento auotbus con Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Stazione di Portogruaro:</b> 35 km - Collegamento auotbus con Lignano</p>
                    </div>  
                    
                 	<div class="small-12 large-12 columns">
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>In aereo</b></h3>
                     	<p style="padding-left: 10px;"><b style="color:#56adb6;">Aereoporto di Trieste:</b> - Ronchi dei Legionari 65 km - Collegamento autobus con Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Aereoporto di Venezia:</b> - Marco Polo 95 km - Collegamento auotbus con Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Aereoporto di Treviso:</b> - Antonio Canova 100 km - Collegamento auotbus con Lignano</p>
                    </div>                                         
                 </div>               
            </div>
            
            <!-- Form Email -->
            
            <div class="small-12 medium-12 large-8 columns">
            	<div class="row news tablet">
                	<div class="small-12 large-12 columns"><h1 style="margin-bottom:4%;">Scrivici un messaggio</h1>
					<?php if (have_posts()) : while (have_posts()) : the_post(); 
						 the_content(); 
					 endwhile; 
					 endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

<?php }elseif(is_page( 'photogallery' )) { ?>
<div class="row contenuto">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row name_gallery">
    	<div class="small-12 large-12 columns">
        	<h1><?php echo get_the_title (); ?></h1>
        </div>
     </div>   
     <div class="row gallery">
     	<div class="small-12 large-12 columns">
        		<?php the_content();  ?>
        </div>	
     </div>    
             <?php 
			 		endwhile; 
					endif; 
				?>   
</div> 


<!-- Tariffe -->
   
<?php } elseif(is_page( 'tariffe' )) { ?>
    <div class="row contenuto">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row name_gallery">
    	<div class="small-12 large-12 columns">
        	<h1><?php echo get_the_title (); ?></h1>
			<?php the_content();  ?>
        </div>
     </div> 
	 <?php 
            endwhile; 
            endif; 
        ?>   
        
        <!-- TIPOLIGIA A -->        
        <div class="container-tariffe">            
            <div class="row tariffe tipoligia">
                <div class="small-12 large-12 columns"><h2><?php echo get_cat_name(2);?></h2></div>
             </div>            
            <div class="row tariffe descrizione">
                <div class="small-12 large-12 columns"><?php echo category_description(2); ?></div>
             </div>       
            <!-- Ciclo prezzi --> 
            <div class="row tariffe prezzi">
                <div class="small-12 large-12 columns">
                <table role="grid">
                	  <thead>
                        <tr>
                          <th>Periodo</th>
                          <th>Costo</th>
                        </tr>
  					</thead>
                 <tbody>    
                <?php 
                   $loop_tipoligia = array('post_type' => 'tariffe', 'cat' => '2', 'order' => 'ASC',);
                   $list_tipoliga_A = new WP_Query($loop_tipoligia); 
                   while($list_tipoliga_A->have_posts()) : $list_tipoliga_A->the_post();
                ?>	   
                	<tr>
                    	<td><?php the_field('mese'); ?></td>
						<td><b><?php the_field('prezzo'); ?> €/Sett.</b></td>
                    </tr>    
               <?php 		   
                    endwhile;
               ?> 
               	 <tbody>
     			</table>
                </div>
             </div>                    
		</div>  
		 <!-- FINE -->   
         
        <!-- TIPOLIGIA B -->        
        <div class="container-tariffe">        
            <div class="row tariffe tipoligia">
                <div class="small-12 large-12 columns"><h2><?php echo get_cat_name(3);?></h2></div>
             </div>            
            <div class="row tariffe descrizione">
                <div class="small-12 large-12 columns"><?php echo category_description(3); ?></div>
             </div>       
            <!-- Ciclo prezzi --> 
            <div class="row tariffe prezzi">
                <div class="small-12 large-12 columns">
                <table role="grid">
                	  <thead>
                        <tr>
                          <th>Periodo</th>
                          <th>Costo</th>
                        </tr>
  					</thead>
                 <tbody>  
                <?php 
                   $loop_tipoligia = array('post_type' => 'tariffe', 'cat' => '3', 'order' => 'ASC',);
                   $list_tipoliga_A = new WP_Query($loop_tipoligia); 
                   while($list_tipoliga_A->have_posts()) : $list_tipoliga_A->the_post();
                ?>	   
                	<tr>
                    	<td><?php the_field('mese'); ?></td>
						<td><b><?php the_field('prezzo'); ?> €/Sett.</b></td>
                    </tr>    
               <?php 		   
                    endwhile;
               ?> 
               	 <tbody>
     			</table>      
                </div>
             </div>   
         </div>                     
         <!-- FINE -->         
 
         <!-- TIPOLIGIA C -->
        <div class="container-tariffe">   
            <div class="row tariffe tipoligia">
                <div class="small-12 large-12 columns"><h2><?php echo get_cat_name(4);?></h2></div>
             </div>            
            <div class="row tariffe descrizione">
                <div class="small-12 large-12 columns"><?php echo category_description(4); ?></div>
             </div>       
            <!-- Ciclo prezzi --> 
            <div class="row tariffe prezzi">
                <div class="small-12 large-12 columns">
                <table role="grid">
                	  <thead>
                        <tr>
                          <th>Periodo</th>
                          <th>Costo</th>
                        </tr>
  					</thead>
                 <tbody>  
                <?php 
                   $loop_tipoligia = array('post_type' => 'tariffe', 'cat' => '4', 'order' => 'ASC',);
                   $list_tipoliga_A = new WP_Query($loop_tipoligia); 
                   while($list_tipoliga_A->have_posts()) : $list_tipoliga_A->the_post();
                ?>	   
                	<tr>
                    	<td><?php the_field('mese'); ?></td>
						<td><b><?php the_field('prezzo'); ?> €/Sett.</b></td>
                    </tr>  
               <?php 		   
                    endwhile;
               ?> 
               	 <tbody>
     			</table>             
                </div>
             </div>  
           </div>                    
             <!-- FINE -->         
            
    </div>       
<?php  } ?> 
	<?php get_sidebar(); ?>
    <div class="clear"></div
><?php get_footer(); ?>
