<?php
/*
Theme Name: test
Author: Alejandro Restrepo
Description: Plantilla diseñada para prueba
Version: 1.0

*/
?>

<?php 
/**
 * Template Name: Inicio Template
 *
 *
 * Template general para el home
 */
 get_header(); ?>
<!--Body content-->
            
            <!-- Begin page content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-7 col-sm-3 col-md-3 sidebar sidebar-left sidebar-animate sidebar-md-show">
        <ul class="nav navbar-stacked">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="main col-md-9 col-md-offset-3">
        <div class="page-header">
          <h1>Sticky footer with fixed navbar</h1>
        </div>
        <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added within <code>#wrap</code> with <code>padding-top: 60px;</code> on the <code>.container</code>.</p>
        <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
      </div>
      <div class="col-xs-7 col-sm-3 col-md-3 sidebar sidebar-right sidebar-animate">
        <ul class="nav navbar-stacked">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>

	</div>
	
<?php get_footer(); ?>