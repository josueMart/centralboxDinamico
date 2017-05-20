<?php get_header("single"); ?>
<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>  --> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

<div class="row small-up-2 medium-up-3 large-up-4">
  <div class="category_bar" align="right">
             <h3 class="bt-category">Categorías<span class="fa fa-bars"></span></h3>
         </div>
        <nav class="category-navbar" >
            
                    <?php wp_nav_menu(
                     array(

                      'theme_location' => 'category',
                      'container' => false,
                      'container_id' => '',
                      'container_class' => '',
                      'menu_class' => '',
                      'echo' => true,
                      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'depth' => 10,
                      'walker' => new fluent_themes_custom_walker_nav_menu
                      )
            ) 
            ?>                
        </nav>
</div>


<div class="row row-single-content">
	<?php       
      if(have_posts()) :
      while(have_posts()) :
    ?>         
          <?php 
            the_post();
          ?>
        <div class="column large-3 medium-3 small-12 column-img-single">
            <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="group"  data-caption="<?php the_title(); ?>" >
                <img src="<?php the_post_thumbnail_url(); ?>" alt=""/>
            </a>        
        </div>
        <div class="column large-9 medium-9 small-12 single-content" align="center">
            <h1><?php the_title(); ?></h1>
            <p>
                <?php the_content(); ?>
            </p>

            <a href="/contacto.php?p=43" class="button" id="button-contact">Contáctanos</a>
        </div>
</div>
    <?php 
           endwhile;
            else :
          ?>
            <h4>No hay entradas</h4>
        <?php 
         endif;
        wp_reset_postdata();
        ?>
<?php get_footer(); ?>