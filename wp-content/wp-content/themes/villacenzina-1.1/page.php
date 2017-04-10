<?php get_header(); ?>
<?php include("language.php"); ?>
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
                    <h2 style="margin:10px 0;"><?php echo get_the_title(); ?></h2>
                    <!--h3><?php the_field('sottotitolo'); ?></h3-->
                    <p><?php the_content(); ?></p>
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

<?php if(qtranxf_getLanguage()==it) {?>
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
                  <ul style="list-style:none;">
                    <li style="margin-bottom:10px;"><b>indirizzo:</b> <span>Via Carso, 29 33054 Lignano Sabbiadoro - Udine (UD)</span></li>
                    <li><b>Tel:</b> <span>+39 0431-71032</span></li>
                    <li><b>Cell:</b> <span>+(+39) 349-0761586</span></li>
                    <li><b>E-mail:</b> <span><a href="mailto:villacenzina@libero.it">villacenzina@libero.it</a></span></li>
                  </ul>
              </div>
                 <div class="row news" style="margin-top:30px;">
                 	<div class="small-12 large-12 columns">
                    	<h1 style="font-size:1.3em;">come arrivare</h1>
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
                	<div class="small-12 large-12 columns"><h1 style="margin-bottom:4%;">Scrivici...</h1>
					<?php if (have_posts()) : while (have_posts()) : the_post();
						 the_content();
					 endwhile;
					 endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php }?>
<?php  if(qtranxf_getLanguage()==en){ ?>

 <!-- Contacts -->

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
                    <ul style="list-style:none;">
                      <li style="margin-bottom:10px;"><b>Address:</b> <span>Via Carso, 29 33054 Lignano Sabbiadoro - Udine (UD)</span></li>
                      <li><b>Phone:</b> <span>+39 0431-71032</span></li>
                      <li><b>Mobile phone:</b> <span>+(+39) 349-0761586</span></li>
                      <li><b>E-mail:</b> <span><a href="mailto:villacenzina@libero.it">villacenzina@libero.it</a></span></li>
                    </ul>
                </div>
                 <div class="row news" style="margin-top:30px;">
                 	<div class="small-12 large-12 columns">
                    	<h1 style="font-size:1.3em;">How you can come to visit?</h1>
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>By car</b></h3>
                     	<p style="padding-left: 10px;">Please take the highway A4 Venice-Trieste or A23 Treviso - Venice and exit at Latisana. Continue on the highway 354 towards Lignano for about 18 kilometres.</p>
                    </div>


                 	<div class="small-12 large-12 columns">
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>By train</b></h3>
                     	<p style="padding-left: 10px;"><b style="color:#56adb6;">Bahnhof Latisana:</b> 23 km - bus connection with Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Udine Bahnhof:</b> 60 km - bus connection with Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Portogruaro Bahnhof:</b> 35 km - bus connection with Lignano</p>
                    </div>

                 	<div class="small-12 large-12 columns">
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>By plane</b></h3>
                     	<p style="padding-left: 10px;"><b style="color:#56adb6;">Trieste airport:</b> - Ronchi dei Legionari 65 km - Bus transfer with Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Venice airport:</b> - Marco Polo 95 km - Bus connection with Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Treviso Airport:</b> - Antonio Canova 100 km - bus connection with Lignano</p>
                    </div>
                 </div>
            </div>

            <!-- Form Email -->

            <div class="small-12 medium-12 large-8 columns">
            	<div class="row news tablet">
                	<div class="small-12 large-12 columns"><h1 style="margin-bottom:4%;">Send a message</h1>
					<?php if (have_posts()) : while (have_posts()) : the_post();
						 the_content();
					 endwhile;
					 endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php } ?>


<?php  if(qtranxf_getLanguage()==de){ ?>

 <!-- Contakts -->

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
                    <ul style="list-style:none;">
                      <li style="margin-bottom:10px;"><b>Adresse:</b> <span>Über Carso, 29 33054 Lignano Sabbiadoro - Udine (UD)</span></li>
                      <li><b>Telefon:</b> <span>+39 0431-71032</span></li>
                      <li><b>Mobiltelefon:</b> <span>+(+39) 349-0761586</span></li>
                      <li><b>E-mail:</b> <span><a href="mailto:villacenzina@libero.it">villacenzina@libero.it</a></span></li>
                    </ul>
                </div>
                 <div class="row news" style="margin-top:30px;">
                 	<div class="small-12 large-12 columns">
                    	<h1 style="font-size:1.3em;">WIE KÖNNEN SIE UNS BESUCHEN?</h1>
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>Mit dem Auto</b></h3>
                     	<p style="padding-left: 10px;">Bitte nehmen Sie die Autobahn A4 Venedig-Trieste oder A23 Treviso - Venedig und Ausfahrt Latisana. Fahren Sie auf der Autobahn 354 Richtung Lignano für ca. 18 Kilometer.</p>
                    </div>


                 	<div class="small-12 large-12 columns">
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>Mit dem Zug</b></h3>
                     	<p style="padding-left: 10px;"><b style="color:#56adb6;">Bahnhof Latisana:</b> 23 km - Busverbindung mit Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Udine train station:</b>  60 km - Busverbindung mit Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Portogruaro Bahnhof:</b> 35 km - Busverbindung mit Lignano</p>
                    </div>

                 	<div class="small-12 large-12 columns">
                     	<h3 style="font-size:1.5em; padding-left: 10px;  margin-top:30px;"><b>Mit dem Flugzeug</b></h3>
                     	<p style="padding-left: 10px;"><b style="color:#56adb6;">Flughafen Trieste:</b>- Ronchi dei Legionari 65 km - Bustransfer mit Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Flughafen Venedig:</b> - Marco Polo 95 km - Busverbindung mit Lignano</p>
                        <p style="padding-left: 10px;"><b style="color:#56adb6;">Treviso Flughafen</b>- Antonio Canova 100 km - Busverbindung mit Lignano</p>
                    </div>
                 </div>
            </div>

            <!-- Form Email -->

            <div class="small-12 medium-12 large-8 columns">
            	<div class="row news tablet">
                	<div class="small-12 large-12 columns"><h1 style="margin-bottom:4%;">BITTE SCHREIBEN SIE UNS EINE BOTSCHAFT</h1>
					<?php if (have_posts()) : while (have_posts()) : the_post();
						 the_content();
					 endwhile;
					 endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php } ?>

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
                          <th><?php _e(utf8_encode($periodo)); ?></th>
                          <th><?php _e(utf8_encode($costo)); ?></th>
                        </tr>
  					</thead>
                 <tbody>
                <?php
                   $loop_tipoligia = array('post_type' => 'tariffe', 'cat' => '2', 'order' => 'ASC',);
                   $list_tipoliga_A = new WP_Query($loop_tipoligia);
                   while($list_tipoliga_A->have_posts()) : $list_tipoliga_A->the_post();
                   $mese = get_field('mese');
                ?>
                	<tr>
                    	<td><?php  if(qtranxf_getLanguage()==it) {
                          echo $mese;
                        }elseif(qtranxf_getLanguage()==en){
                          switch ($mese) {
                            case "Aprile":
                                echo "april";
                                break;
                            case "Maggio":
                                echo "may";
                                break;
                            case "Giugno":
                                echo "june";
                                break;
                            case "Luglio":
                                echo "july";
                                break;
                            case "Agosto":
                                echo "augost";
                                break;
                            case "Settembre":
                                echo "september";
                                break;
                            default:
                                echo "none";
                          }

                        }elseif(qtranxf_getLanguage()==de){
                            switch ($mese) {
                              case "Aprile":
                                  echo "april";
                                  break;
                              case "Maggio":
                                  echo "mai";
                                  break;
                              case "Giugno":
                                  echo "juni";
                                  break;
                              case "Luglio":
                                  echo "juli";
                                  break;
                              case "Agosto":
                                  echo "august";
                                  break;
                              case "Settembre":
                                  echo "september";
                                  break;
                              default:
                                  echo "none";
                            }

                          }
                      ?></td>
						<td><b><?php the_field('prezzo'); ?> €/<?php _e(utf8_encode($settimana)); ?>.</b></td>
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
                          <th><?php _e(utf8_encode($periodo)); ?></th>
                          <th><?php _e(utf8_encode($costo)); ?></th>
                        </tr>
  					</thead>
                 <tbody>
                <?php
                   $loop_tipoligia = array('post_type' => 'tariffe', 'cat' => '3', 'order' => 'ASC',);
                   $list_tipoliga_A = new WP_Query($loop_tipoligia);
                   while($list_tipoliga_A->have_posts()) : $list_tipoliga_A->the_post();
                   $mese = get_field('mese');
                ?>
                	<tr>
                    	<td><?php  if(qtranxf_getLanguage()==it) {
                          echo $mese;
                        }elseif(qtranxf_getLanguage()==en){
                          switch ($mese) {
                            case "Aprile":
                                echo "april";
                                break;
                            case "Maggio":
                                echo "may";
                                break;
                            case "Giugno":
                                echo "june";
                                break;
                            case "Luglio":
                                echo "july";
                                break;
                            case "Agosto":
                                echo "augost";
                                break;
                            case "Settembre":
                                echo "september";
                                break;
                            default:
                                echo "none";
                          }

                        }elseif(qtranxf_getLanguage()==de){
                            switch ($mese) {
                              case "Aprile":
                                  echo "april";
                                  break;
                              case "Maggio":
                                  echo "mai";
                                  break;
                              case "Giugno":
                                  echo "juni";
                                  break;
                              case "Luglio":
                                  echo "juli";
                                  break;
                              case "Agosto":
                                  echo "august";
                                  break;
                              case "Settembre":
                                  echo "september";
                                  break;
                              default:
                                  echo "none";
                            }

                          }
                      ?></td>
						<td><b><?php the_field('prezzo'); ?> €/<?php _e(utf8_encode($settimana)); ?>.</b></td>
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
                          <th><?php _e(utf8_encode($periodo)); ?></th>
                          <th><?php _e(utf8_encode($costo)); ?></th>
                        </tr>
  					</thead>
                 <tbody>
                <?php
                   $loop_tipoligia = array('post_type' => 'tariffe', 'cat' => '4', 'order' => 'ASC',);
                   $list_tipoliga_A = new WP_Query($loop_tipoligia);


                   while($list_tipoliga_A->have_posts()) : $list_tipoliga_A->the_post();
                   $mese = get_field('mese');
                ?>
                	<tr>
                    	<td>
                        <?php  if(qtranxf_getLanguage()==it) {
                            echo $mese;
                          }elseif(qtranxf_getLanguage()==en){
                            switch ($mese) {
                              case "Aprile":
                                  echo "april";
                                  break;
                              case "Maggio":
                                  echo "may";
                                  break;
                              case "Giugno":
                                  echo "june";
                                  break;
                              case "Luglio":
                                  echo "july";
                                  break;
                              case "Agosto":
                                  echo "augost";
                                  break;
                              case "Settembre":
                                  echo "september";
                                  break;
                              default:
                                  echo "none";
                            }

                          }elseif(qtranxf_getLanguage()==de){
                            switch ($mese) {
                              case "Aprile":
                                  echo "april";
                                  break;
                              case "Maggio":
                                  echo "mai";
                                  break;
                              case "Giugno":
                                  echo "juni";
                                  break;
                              case "Luglio":
                                  echo "juli";
                                  break;
                              case "Agosto":
                                  echo "august";
                                  break;
                              case "Settembre":
                                  echo "september";
                                  break;
                              default:
                                  echo "none";
                            }

                          }
                        ?>

                      </td>




						<td><b><?php the_field('prezzo'); ?> €/<?php _e(utf8_encode($settimana)); ?>.</b></td>
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
