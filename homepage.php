<?php
/*
Template Name: Homepage
*/
?>
<?php get_header();  ?>
<main class="flex flex-1 flex-col overflow-hidden">
    <div class="mx-auto max-w-full px-[20px] md:px-[60px] lg:px-[60px]">
        <?php get_template_part('partials/company', 'vision');?>
        <?php get_template_part('partials', 'banner');?>
    </div>
    <?php get_template_part('partials/services');?>
    <?php get_template_part('partials/recent','projects');?>
</main>
<?php get_footer();  ?>