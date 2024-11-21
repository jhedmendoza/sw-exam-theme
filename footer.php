        <footer class="flex flex-col items-center pb-6 pt-10 md:pt-20">
            <a aria-label="go to Home page" href="/">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo" width="80" />
            </a>
            <div class="f-details">
                <?php 
                    wp_nav_menu(   
                        ['theme_location' => 'footer-menu',
                        'menu'            => 'footernav',
                        'container'       => 'div', 
                        'container_id'    => 'footer-menu',
                        'menu_class'      => 'md:px-auto flex flex-row flex-wrap gap-[20px] px-5 pt-16 text-sm uppercase md:text-lg lg:gap-[70px]', 
                        'echo'            => true,
                        ]
                    ); 
                ?>
            <div class="pt-10 md:pt-24 footer-social-icons flex flex-col items-center">
                    <a href="https://www.linkedin.com/company/shakewellagency/about/">
                        <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.47 2H3.53a1.45 1.45 0 0 0-1.47 1.43v17.14A1.45 1.45 0 0 0 3.53 22h16.94a1.45 1.45 0 0 0 1.47-1.43V3.43A1.45 1.45 0 0 0 20.47 2ZM8.09 18.74h-3v-9h3v9ZM6.59 8.48a1.56 1.56 0 1 1 0-3.12 1.57 1.57 0 1 1 0 3.12Zm12.32 10.26h-3v-4.83c0-1.21-.43-2-1.52-2A1.65 1.65 0 0 0 12.85 13a1.998 1.998 0 0 0-.1.73v5h-3v-9h3V11a3 3 0 0 1 2.71-1.5c2 0 3.45 1.29 3.45 4.06v5.18Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <div class="pt-6 copyright"><p class="text-sm text-gray-medium">©ShakeWell Agency <?php echo date('Y') ?>. All Rights Reserved.</p></div> 
            </div>
        </footer>
        <?php wp_footer() ?>
    </body>
</html>