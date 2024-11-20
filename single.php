<?php
/*
Template Name: Post Template
*/
?>

<?php get_header(); ?>
    <!-- Post Content-->
    <div class="md:container md:mx-auto text-center text-white">
    <?php if ( have_posts() ) :
         while ( have_posts() ) : the_post();
            the_content();
         endwhile;
         else: ?>
            <p>Sorry, no posts.</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>

