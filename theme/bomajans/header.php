<!DOCTYPE html>
<html lang="tr-TR">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
      <meta name="description" content="Bom Ajans - Aday Template">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favico.jpg">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
   </head>
   <body>
      <!-- preloader -->
      <div id="preloader">
         <!-- <div class="book"> -->
         <div class="inner">
            <p class="loader_text"><?php wp_title(); ?></p>
         </div>
      </div>
      <!-- site wrapper -->
      <div class="site-wrapper">
         <div class="main-overlay"></div>
         <!-- header -->
         <header class="header-personal">
            <nav class="navbar navbar-expand-lg">
               <div class="container-xl">



                  <div class="collapse navbar-collapse justify-content-center centered-nav">
                     <!-- menus -->



<?php 

   wp_nav_menu (

      array(

         'theme_location'  => 'up-menu',
         'depth'           => 1,
         'container'       => 'ul',
         'menu_class'      => 'navbar-nav mr-auto'
         

 

         
      )

   );


?>

                  </div>
               </div>
            </nav>
         </header>