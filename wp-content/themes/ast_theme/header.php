<!DOCTYPE html>
 
<html <?php language_attributes(); ?>>
  <head>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  <title>
    <?php bloginfo('name') ?>
    <?php if (is_home() || is_front_page()) : ?>
      &mdash; <?php bloginfo('description'); ?>
    <?php else: ?>
    &mdash; <?php wp_title("",true); ?>
  <?php endif; ?>
     
  </title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" charset="utf-8">
  <link rel="icon" href="http://localhost/ast/wp-content/uploads/2015/06/favicon.png" type="images/x-icon" />
  <meta http-equiv="Content_Type" content="<?php bloginfo('html-type'); ?>; charset=<?php bloginfo('charset'); ?>">
  <meta name="Generator" content="<?php bloginfo('version'); ?>">
  <?php wp_enqueue_script("jquery"); ?> 
  <?php wp_head(); ?>
  
   <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
    <div class="container " >
      <div id="flag"><!--<img src="http://localhost/ast/wp-content/uploads/2015/06/drapeau-animé-senegal.gif">--></div>
        <header id="hop" class="row" >
        <!--  <div id="search"><input type ="text" onfocus="value=''" value="rechercher"><img id="logo-search" src="http://localhost/ast/wp-content/uploads/2015/06/search-512.png"></div> -->


          <div id="logo" > 
           <!-- <p id="logo-title">AST</p> --><img src="http://localhost/ast/wp-content/uploads/2015/06/logo-ast-e1434658778637.jpg">
            <p id="logo-cite">Association des Sénégalais de Tours</p>
          </div> 

          <div class="flag">
            <ul>
              <li><img src="http://localhost/ast/wp-content/uploads/2015/06/Flag-of-Senegal-150x150.png"></li>
              <li><img src="http://localhost/ast/wp-content/uploads/2015/06/Drapeau-francais.png"></li>
            </ul>
          </div>

          <nav> 
            <div id="nav">
            <div id="filigrane"></div>
              <ul  class="navbar ">
                <?php wp_nav_menu(array(
                  'sort_column=>menu_order,
                  theme_location=>principal')); ?>
              </ul>
            </div>
          </nav>       

        </header>

        <section id="slider" class="col-md-12">

            

        </section>
        <div id="ombre"></div>
