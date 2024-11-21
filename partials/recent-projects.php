<?php
    $recent_projects = get_field('recent_projects');
?>
<?php if (isset($recent_projects ) && !empty($recent_projects )): ?>
    <section id="recent-projects" class="mx-auto px-[20px] md:px-[60px] lg:px-[60px]">
        <div class="flex flex-col gap-2 pb-10 md:flex-row md:items-end md:justify-between md:pb-24">
            <div class="mt-3">
                <h3 class="section-title uppercase text-white">recent</h3><h3 class="section-title uppercase text-white">projects</h3>
            </div>
            <div class="text-end md:text-xl">
                <a class="cursor-pointer text-white underline underline-offset-2 hover:text-gray-light" href="/our-work">See More</a>
            </div>
        </div>
        <div class="grid justify-items-center gap-4 px-[20px] md:px-[20px] lg:px-[20px]">
            <div class="relative grid justify-items-center gap-6 md:grid-cols-2 md:gap-5">
                <?php foreach ($recent_projects as $project):  ?>
                    <div>
                        <img class="h-full" alt=""width="648" height="648" src="<?php echo $project['project_image'] ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>