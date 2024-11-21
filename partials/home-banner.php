<?php
    $banner = get_field('banner_section');
?>

<?php if ( isset($banner) && !empty($banner) ): ?>
    <section id="home-banner" class="mx-auto max-w-full px-[20px] md:px-[60px] lg:px-[60px]">
        <div class="pb-10 md:pb-20">
            <div class="flex w-full max-w-screen-2xl flex-col items-center justify-center text-center">
                <div class="relative h-[160px] w-full sm:h-[280px] md:h-[320px] lg:h-[480px] xl:h-[620px]">
                    <img alt="mobile" fetchpriority="high" decoding="async" data-nimg="fill" sizes="100vw" src="<?php echo $banner['banner_image'] ?>">
                </div>
                <div class="pt-10">
                    <p class="banner-texts text-white"><?php echo esc_html($banner['banner_description']) ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>