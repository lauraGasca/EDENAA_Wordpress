<!DOCTYPE Html>
<!--[if lt IE 7 ]><Html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><Html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><Html class="ie ie8" lang="es"> <![endif]-->
<!--[if IE 9 ]><Html class="ie ie9" lang="es"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<Html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <title><?php wp_title('|', true, 'right');?> <?php bloginfo('name'); ?></title>

        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- Cargando la Hoja de Estilos  -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">

        <!-- CSS ================================================== -->
        <!-- web font  -->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js-plugins/rs-plugin/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/custom-icons/css/custom-icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/neko-framework/external-plugins/external-plugins.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/neko-framework/css/layout/neko-framework-layout.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/neko-framework/css/color/neko-framework-color.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custom.css">

        <!-- Pingbacks -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

        <?php wp_head(); ?>


    </head>
    <body class="activate-appear-animation pre-header-on-sm header-6 parallaxed-footer">
        <!-- global-wrapper -->
        <div id="global-wrapper">
            <!-- header -->
            <header class="menu-header navbar-fixed-top">
                <section id="pre-header">
                    <div class="container">
                        <div class="row">
                            <h2 class="hidden">Cabecera</h2>
                            <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'menu-principal',
                                'container'       => 'div',
                                'container_class' => 'col-sm-6 hidden-xs',
                                'menu_class'      => 'quick-menu',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                            ));
                            ?>
                            <div class="col-sm-6 col-xs-12 quick-contact">
                                <div class="contact-phone"> <i class="icon-mobile"></i>(461) 613 9952 </div>
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/elnahualweb/" target="_blank" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a></li>
                                    <li><a href="https://twitter.com/elnahualweb" target="_blank" class="twitter" title="twitter"><i class="icon-glyph-339"></i></a></li>
                                    <li><a href="https://plus.google.com/+ElnahualMxCelaya" target="_blank" class="gplus" title="gplus"><i class="icon-glyph-317"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <!-- hamburger button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- / hamburger button -->
                            <!-- Logo -->
                            <a class="navbar-brand" href="http://elnahual.com.mx">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/nahual-logo-colores.png" height="50" alt="El Nahual Logo Colores" class="main-logo hidden-xs"/>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/nahual-logo-blanco.png" height="50" alt="El Nahual Logo Blanco" class="main-logo-light"/>
                            </a>
                            <!-- /Logo -->
                        </div>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'menu-principal',
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_class'      => 'nav navbar-nav navbar-right',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                        ));
                        ?>
                    </nav>
                </div>
            </header>
            <!-- header -->
            <!-- content -->
            <main id="content">
                <!-- slider -->
                <section id="slider" class="pb-medium" data-nekoanim="fadeIn" data-nekodelay="200">
                    <div class="owl-carousel neko-data-owl neko-owl-theme-1" data-neko_items="1" data-neko_singleitem="true"  data-neko_navigation="true" data-neko_paginationnumbers="false" data-neko_transitionstyle="fadeUp">
                        <!-- owl carousel item 1 -->
                        <div class="item dark-color">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slides/contacto.jpeg" alt="El Nahual Contacto" class="full-width"/>
                            <div class="caption-wrapper hidden-xs ">
                                <div class="caption">
                                    <div class="caption-content-position text-center v-middle">
                                        <div class="caption-content text-light" data-neko_animation="fadeInLeftBig">
                                            <div class="container v-align-center">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h1 class="x-large"><?php if ( is_category() ): single_cat_title(); elseif ( is_tag() ) : single_tag_title(); elseif ( is_day() ) : _e('Archivo', 'amk');?>: <?php the_date(); elseif ( is_month() ) : _e('Archivo', 'amk');?>: <?php the_date('F Y'); elseif ( is_year() ) : _e('Archivo', 'amk');?>: <?php the_date('Y');  elseif ( is_search() ) : _e('Resultados para', 'amk');?>: <?php echo the_search_query();  elseif ( is_author() ) : _e('Artículos por', 'amk');?>: <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name;  elseif ( is_404() ) : _e('Error 404', 'amk');?>: <?php _e('Página no encontrada', 'amk'); else: bloginfo('name'); endif; ?></h1>
                                                        <div>
                                                            <i class="icon-glyph-10 medium"></i><i class="icon-glyph-10 medium"></i><i class="icon-glyph-10 medium"></i><i class="icon-glyph-10 medium"></i><i class="icon-glyph-10 medium"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / owl carousel item 1 -->
                    </div>
                </section>
                <!-- / slider -->