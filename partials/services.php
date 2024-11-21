<?php
    $services = get_field('services');
?>
<?php if (isset($services ) && !empty($services )): ?>
    <section class="w-screen bg-gray-dark" id="services">
        <div class="mx-auto max-w-full">
            <div class="pt-10 md:pl-56 md:pt-20">
                <h2 class="text-3xl font-medium uppercase text-white md:pb-3 md:text-5xl">Services</h2>
                <p class="text-xl uppercase text-white md:text-3xl">All things digital, brought to you by a strong, experienced team.</p>
            </div>
            <div class="table-container pb-4 pl-20 pt-10 md:py-16 md:pl-56">
                <table class="w-full table-fixed border-separate border-spacing-1 text-white md:border-collapse md:border-spacing-8 ">
                    <tbody>
                        <?php foreach($services as $service): ?>
                        <tr class="block pb-6 md:table-row mb-4 border-b border-gray-light md:mb-auto">
                            <td class="table-row border-spacing-2 text-xl md:table-cell md:py-8 md:text-2xl"><?php echo esc_html($service['service_name']) ?></td>
                            <td class="table-row text-lg text-gray-light md:table-cell md:text-xl"><?php echo esc_html($service['service_description']) ?></td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
<?php endif; ?>