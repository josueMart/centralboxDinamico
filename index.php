<?php 
//Template Name: Inicio
 ?>

<?php get_header(); ?>
<script async src="https://www.youtube.com/iframe_api"></script>

<!-- Insert this within your head tag and after foundation.css -->

<div class="row">        
        <!--- #ORBIT SLIDE -->
<div class="orbit" role="region" data-orbit>
    <ul class="orbit-container">
        <!-- INDUSTRONIC SLIDE -->
        <li class="is-active orbit-slide" id="industronic-slide">
        <img id="logo-industronic" src="http://centralbox.com.mx/wp-content/uploads/2017/05/industronics1-slide.png" alt="logo-industronic">
         
          <p id="slide-text-industronic" align="left" >Somos parte de la red de distribuidores</p>
            <h2 id="slide-title-industronic">Central Box</h2>

            <img id="reguladores" src="http://centralbox.com.mx/wp-content/uploads/2017/05/leasing_2.png" alt="reguladores">        
        </li>
        <!-- FLIR SLIDE -->
         <li class="is-active orbit-slide responsive-embed panorama" id="flir-slide">
         <p id="slide-text-flir" align="left" >Las mejores cámaras termográficas están en Central Box.</p>
         <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/store-products-ExSeriesGroup.png" alt="">
            <figcaption class="orbit-caption">Conoce nuestra gama de equipos</figcaption>
        </li>
         <!-- SLIDE FOTOVOLTAICO -->
         <li class="is-active orbit-slide responsive-embed panorama" id="foto-slide">
         <p id="slide-text-foto" align="left" >Sistema fotovoltáico de 1500 watts <br>
         <strong>a solo $45999</strong></p>
         <p>6 paneles inversores, estructura y protección eléctrica </p>
          <p id="foto-text">Ideal para <strong>casa</strong>, <br><strong>home office, <br></strong> <strong>locales comerciales, entre otros...</strong></p>
          <p>Precios sujetos a cambio sin previo aviso.</p>
        </li>
    </ul>
    <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"></button>
        <button data-slide="1"></button>
        <button data-slide="2"></button>
    </nav>
</div>
</div>

<!-- ORBIT SLIDE FIN -->
        <p id="excerpt-company">
            <?php bloginfo(description); ?>
        </p>
        <div class="row row-category small-up-2 medium-up-4 large-up-8">
          <div class="column column-category" id="generacion-category">
            <i class="fa fa-ravelry"></i>
            <a href="<?php echo esc_url(get_category_link(8)) ; ?>"><h2>Generación <br> Eléctrica</h2></a>
          </div>
           <div class="column column-category" id="medtemp-category">
            <i class="fa fa-snowflake-o"></i>
            <a href="<?php echo esc_url(get_category_link(7)) ; ?>"><h2>Medición de <br> Temperatura</h2></a>
          </div>
          <div class="column column-category" id="medelect-category">
            <i class="fa fa-dashboard"></i>
            <a href="<?php echo esc_url(get_category_link(6)) ; ?>"><h2>Medición <br> Eléctrica</h2></a>
          </div>
          <div class="column column-category" id="pararrayos-category">
            <i class="fa fa-bolt"></i>
            <a href="<?php echo esc_url(get_category_link(3)) ; ?>"><h2>Pararrayos <br></h2></a>
          </div>
           <div class="column column-category" id="reguladores-category">
            <i class="fa fa-sort-amount-asc"></i>
           <a href="<?php echo esc_url(get_category_link(4)) ; ?>"> <h2>Reguladores <br></h2></a>
          </div>
          <div class="column column-category" id="tierras-category">
            <i class="fa fa-plug"></i>
            <a href="<?php echo esc_url(get_category_link(2)) ; ?>"><h2>Tierras<br>Físicas</h2></a>
          </div>
          <div class="column column-category" id="ups-category">
            <i class="fa fa-hdd-o"></i>
            <a href="<?php echo esc_url(get_category_link(5)) ; ?>"><h2>UPS</h2></a>
          </div>
        </div>
    <div class="row small-up-1 medium-up-3s large-up-4">
        
      <?php 
        $args = array('cat' => 17, 'post_per_page' =>10);
        $category_posts = new WP_Query($args);

        if($category_posts->have_posts()) :
          while($category_posts->have_posts()) :
            ?>
          <?php 

            $category_posts->the_post();
       ?>
          <div class="column column-block detail-column" align="center">
               <div class="row img-row-detail">
                   <?php the_post_thumbnail(); ?>
               </div>
               <div class="row familia-row-detail">
                   <p><?php the_title(); ?></p>
               </div>
               <div class="row marca-row-detail">
                   <p><?php echo the_field("marca"); ?></p>
               </div>
               <div class="row model-row-detail">
                   <p><?php echo the_field("modelo"); ?></p>
               </div>
               <div class="row price-row-detail">
                   <p>$<?php echo the_field("precio"); ?></p>
               </div>
                <div class="row excerpt-row-detail">
                   <p><?php the_excerpt(); ?></p>
               </div>
               <div class="row tags-row-detail">
                   <p>*Precios sujetos a cambio sin previo aviso <br>
                   *Precio Neto. <?php the_field("moneda"); ?></p>
               </div>
               <div class="row btn-row-detail">
                   <a href="<?php the_permalink(); ?>" class="button">Más información</a>
               </div>
          </div>
       <?php 
        endwhile;
        else :
      ?>
       <div class="column large-12" align="center">
                            <h4 class="single-info-title"><span class="icon-info single-info-span"></span> Lo sentimos, de momento no contamos con productos en esta categoría.</h4>
        </div>
      <?php 
        endif;
        wp_reset_postdata();
      ?> 
      </div>
    <!-- #articulos-index -->
    
    <div class="row title-main-clients">
        <p id="excerpt-company">
           Somos distribuidores autorizados
        </p>
    </div>
     <div class="row row-providers" align="center">
     <div class="column large-4">
      <div id="hioki"></div>

    <script>
         function onYouTubeIframeAPIReady() {
          var player;
          player = new YT.Player('hioki', {
            videoId: 'wzOSCNZW7j8', // YouTube Video ID
            width: 400,               // Player width (in px)
            height: 225,              // Player height (in px)
            playerVars: {
              autoplay: 1,        // Auto-play the video on load
              controls: 0,        // Show pause/play buttons in player
              showinfo: 0,        // Hide the video title
              modestbranding: 1,  // Hide the Youtube Logo
              loop: 1,            // Run the video in a loop
              fs: 0,              // Hide the full screen button
              cc_load_policy: 0, // Hide closed captions
              iv_load_policy: 3,  // Hide the Video Annotations
              autohide: 0         // Hide video controls when playing
            },
            events: {
              onReady: function(e) {
                e.target.mute();
              }
            }
          });
         }

    </script>
    </div>
    <div class="column large-8 providers-logo">
        <img class="img-providers-logo" src="http://centralbox.com.mx/wp-content/uploads/2017/05/4096986Hioki_logo.jpg" alt="">
         <img class="img-providers-logo" src="http://centralbox.com.mx/wp-content/uploads/2017/05/logo-1.png" alt="">
          <img class="img-providers-logo" src="http://centralbox.com.mx/wp-content/uploads/2017/05/totalground1.png" alt="">
           <img class="img-providers-logo" src="http://centralbox.com.mx/wp-content/uploads/2017/05/Solartec.jpg" alt="">
           <img class="img-providers-logo" src="http://centralbox.com.mx/wp-content/uploads/2017/05/Flir_Logo_287.jpg" alt="">


    </div>

     </div>
        

    <!-- PRINCIPALES CLIENTES -->
    <div class="row title-main-clients">
        <p id="excerpt-company">
            Nuestros clientes
        </p>
    </div>
    <div class="row" id="main-clients">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/gruas.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/gobierno_zacatecas.jpg" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/gobags.jpg" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/elecon.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/bahiakino.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/acciona.jpg" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/upve.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/UAA.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/tamex.jpg" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/sinitech.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/sanoh.jpg" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/reyma.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/opticas.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/magnogas.png" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/hernandez.jpg" alt="" class="thumbnail">
        <img src="http://centralbox.com.mx/wp-content/uploads/2017/05/logo-hdi-184px.png" alt="" class="thumbnail">

    </div>
</div>
   
    <!--#main-clientes-->
<?php get_footer(); ?>