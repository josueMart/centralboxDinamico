<?php get_header(); ?>
<div class="row small-up-1 medium-up-3 large-up-4">
        
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
      <?php 
        $args = array('cat' => 3, 'post_per_page' =>10);
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
                   <p><?php the_tags(); ?></p>
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
  <?php get_footer(); ?>

