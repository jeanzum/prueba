<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>

<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif;

get_footer(); ?>