<?php
    $our_clients = get_field('our_clients');
?>
<?php if (isset($our_clients ) && !empty($our_clients )): ?>
    <section id="our-clients" class="mx-auto px-[20px] md:px-[60px] lg:px-[60px]">
        <div class="flex flex-col gap-2 pb-10 md:flex-row md:items-end md:justify-between md:pb-24">
            <div class="mt-3">
                <h3 class="section-title uppercase text-white">Our Clients</h3>
            </div>
        </div>
        <div class="w-full flex flex-row space-x-9">
            <?php foreach($our_clients as $client): ?>
                <div class="group flex w-[170px] flex-col gap-4">
                    <div class="items-center pb-10">
                        <img class="rounded-full" src="<?php echo $client['client_logo'] ?>" alt="<?php echo $client['client_name'] ?>"/>
                        <h2 class="text-lg font-medium md:text-xl text-white mt-6"><?php echo $client['client_name'] ?></h2>
                        <p class="text-xs md:text-sm text-white mt-6"><?php echo $client['client_description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?> 
        </div>
    </section>
<?php endif; ?>


