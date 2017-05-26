<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title><?php bloginfo(title); ?></title>
    <?php wp_head(); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i" rel="stylesheet">
</head>

<body>
    <header class>
         <div class="row logo-mobile">
            <div class="column large-2 medium-2 small-4" align="right">
                <img id="logo-mobile" src="http://centralbox.com.mx/wp-content/uploads/2017/05/logo.png" alt="">
            </div>
            <div class="column large-8 medium-8 small-4 column-title-mobile">
                <h1 id="title-site-mobile"><strong>Soluciones Integrales</strong><br>en un mismo lugar</h1>
            </div>
            <div class="column large-2 medium-2 small-4">
                <div class="row" id="social-navbar">
                   <ul>
                       <li><a href="mailto:atencion@centralbox.com" class="fa fa-envelope"></a></li>
                       <li><a href="" class="fa fa-twitter"></a></li>
                       <li><a href="" class="fa fa-facebook"></a></li>
                   </ul>
    
                </div>
            </div>
        </div>        
        <div class="menu_bar">
                    <h3 class="bt-menu"><span class="fa fa-bars"></span>Menu</h3>
                </div>
        <div class="row main-bar">
           <div class="column large-2 column-logo" align="center">
               <picture>
                        <img id="logo" src="http://centralbox.com.mx/wp-content/uploads/2017/05/logo.png" alt="">
                </picture>  
           </div>
            <div class="column large-2 column-title">
                <h1 id="title-site"><strong>Soluciones Integrales</strong><br>en un mismo lugar
            </h1>
            </div>
               <div class="column large-8">
                   <nav class="main-navbar"> 

                    <?php wp_nav_menu(
                     array(

                      'theme_location' => 'top-menu',
                      'container' => false,
                      'container_id' => '',
                      'container_class' => '',
                      'menu_class' => '',
                      'echo' => true,
                      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'depth' => 10,
                      'walker' => new fluent_themes_custom_walker_nav_menu
                      // 'link_before'    => '<span><i class="icon icon-home icon-price-tags">',
                      // 'link_after'     =>  '</span></i>',
                      )
            ) 
            ?>                
                    <!-- <ul>
                        <li><a href="index.html"><span class="fa fa-home"></span>Inicio</a></li>
                        <li><a href="quienesSomos.html"><span class="fa fa-group"></span>Quienes somos</a></li>
                        <li><a href="productos.html" class="current-menu-item"><span class="fa fa-tags"></span>Productos</a></li>
                        <li><a href="servicions.html"><span class="fa fa-truck"></span>Servicios</a></li>
                        <li><a href="contacto.html"><span class="fa fa-phone"></span>Contacto</a></li>
                    </ul> -->
                </nav><!-- main-navbar -->           
               </div>        
        </div>
    </header>
