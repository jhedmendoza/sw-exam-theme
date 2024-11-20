<?php
/*
Template Name: Homepage
*/
?>
<?php get_header();  ?>
<main class="flex flex-1 flex-col overflow-hidden">

    <div class="mx-auto max-w-full px-[20px] md:px-[60px] lg:px-[60px]">
        <?php get_template_part('partials/homepage/company', 'vision');?>
        <?php get_template_part('partials/home', 'banner');?>
    </div>

    <?php get_template_part('partials/homepage/services');?>
    <?php get_template_part('partials/homepage/recent','projects');?>


</main>
<?php get_footer();  ?>