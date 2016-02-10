
jQuery(document).ready(function($) {

	$('.textomas1').hide();
	$('.masdown1').hide();
	$('.textomas2').hide();
	$('.masdown2').hide();
	$('.textomas3').hide();
	$('.masdown3').hide();
	$('.textomas4').hide();
	$('.masdown4').hide();
	$('#texto2').hide();
	$('#texto3').hide();
	$('#texto4').hide();
	$('.down2').hide();

	$('.down').click(function(){
		$('html, body').animate({
        scrollTop: $("#services").offset().top
    }, 1500);
	});

	$('.icono1').click(function(){
		$('#texto2').hide(500);
		$('#texto3').hide(500);
		$('#texto4').hide(500);
		$('#texto1').show(500);
	});

	$('.icono2').click(function(){
		$('#texto1').hide(500);
		$('#texto3').hide(500);
		$('#texto4').hide(500);
		$('#texto2').show(500);
		
	});

	$('.icono3').click(function(){
		$('#texto1').hide(500);
		$('#texto2').hide(500);
		$('#texto4').hide(500);
		$('#texto3').show(500);
	});

		$('.icono4').click(function(){
		$('#texto1').hide(500);
		$('#texto2').hide(500);
		$('#texto3').hide(500);
		$('#texto4').show(500);
	});

// Al presionar boton abajo de icono 1. 
		$('.mas1').click(function(){
		$('.textomas1').show(500);
		$('.mas1').hide();
		$('.masdown1').show();

	});
// Al presionar boton arriba de icono 2.
		$('.masdown1').click(function(){
		$('.textomas1').hide(500);
		$('.masdown1').hide();
		$('.mas1').show();
		
	});

// Al presionar boton abajo de icono 2. 
		$('.mas2').click(function(){
		$('.textomas2').show(500);
		$('.mas2').hide();
		$('.masdown2').show();

	});
// Al presionar boton arriba de icono 2.
		$('.masdown2').click(function(){
		$('.textomas2').hide(500);
		$('.masdown2').hide();
		$('.mas2').show();
		
	});
// Al presionar boton abajo de icono 3. 
		$('.mas3').click(function(){
		$('.textomas3').show(500);
		$('.mas3').hide();
		$('.masdown3').show();

	});
// Al presionar boton arriba de icono 3.
		$('.masdown3').click(function(){
		$('.textomas3').hide(500);
		$('.masdown3').hide();
		$('.mas3').show();
		
	});
// Al presionar boton abajo de icono 4. 

		$('.mas4').click(function(){
		$('.textomas4').show(500);
		$('.mas4').hide();
		$('.masdown4').show();

	});
// Al presionar boton arriba de icono 4.

		$('.masdown4').click(function(){
		$('.textomas4').hide(500);
		$('.masdown4').hide();
		$('.mas4').show();
		
	});

		$(".menu-opener").click(function(){
  		$(".menu-opener, .menu-opener-inner, .menu").toggleClass("active");
		});

// Desplazamiento en menu a cada sección del sitio web. 

	$(".inicio").click(function() {
    $('html, body').animate({
        scrollTop: $("#inicio").offset().top
    }, 1500);
	});

	$(".servicios").click(function() {
    $('html, body').animate({
        scrollTop: $("#services").offset().top
    }, 1500);
	});

	$(".acerca_de").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 1500);
	});

	$(".portafolio").click(function() {
    $('html, body').animate({
        scrollTop: $("#portfolio").offset().top
    }, 1500);
	});

	// Highlight the top nav as scrolling occurs
	$('body').scrollspy({
	    target: '.navbar-fixed-top'
	})

	// Closes the Responsive Menu on Menu Item Click
	$('.navbar-collapse ul li a').click(function() {
	    $('.navbar-toggle:visible').click();
	});


});

