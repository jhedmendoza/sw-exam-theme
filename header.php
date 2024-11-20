<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="We're on a mission. Brands that lead by change; that aims to disrupt; that exists to shape the future of our world. to build. World Class Digital Products." />
        <meta name="author" content="John Doe" />
        <title>Shakewell Agency</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <?php wp_head(); ?>
    </head>
    <body>
    <div class="flex flex-col">
    <header>
        <div class="mx-auto max-w-full px-[20px] md:px-[60px] lg:px-[60px]">
            <nav class="hidden h-desktop-nav-height md:justify-between md:flex md:flex-row md:items-center ">
                <a aria-label="go to Home page" href="/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo" width="80" />
                </a>

                <?php 
                    wp_nav_menu(   
                       ['theme_location'  => 'main-menu',
                        'menu'            => 'topnav',
                        'container'       => 'nav', 
                        'container_id'    => 'main-menu',
                        'menu_class'      => 'flex flex-row gap-4 uppercase', 
                        'echo'            => true,
                        ]
                    ); 
                ?>
            </nav>
        </div>
    </header>
</div>
