<?php 
/*
Theme Name: test
Author: Alejandro Restrepo
Description: Plantilla diseñada para prueba
Version: 1.0
*/
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test">
    <meta name="author" content="Alejandro Restrepo">
    <!-- hoja de estilo -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Anexos del head-->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico"> 
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <script src="http://code.jquery.com/jquery.js"></script>
  </head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"></a>
                <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
            </div>
             <div class="dropdown">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-fa glyphicon glyphicon-th-large" ></i>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                               <?php wp_nav_menu( array(
                 'container' =>false,
                 'menu_class' => 'nav',
                 'echo' => true,
                 'before' => '',
                 'after' => '',
                 'link_before' => '',
                 'link_after' => '',
                 'depth' => 0,
                 'walker' => new description_walker())

                 );?>
              </ul>
            </div>
 

                </button>
                  </div>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container">