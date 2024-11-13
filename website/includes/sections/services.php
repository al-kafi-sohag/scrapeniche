<section class="section bg-transparent border-0 pb-0 m-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="d-block font-weight-bold text-color-primary text-4 mb-2">OUR SERVICES</span>
                <h2 class="font-weight-bold text-9 mb-4">
                    Professional Business Solutions For Your Success
                </h2>
            </div>
        </div>
        
        <div class="row">
            <?php
            $services = [
                [
                    'icon' => 'marketing.svg',
                    'title' => 'Sales & Marketing',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                ],
                [
                    'icon' => 'strategy.svg',
                    'title' => 'Strategic Planning',
                    'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna.'
                ],
                // Add more services
            ];
            
            foreach ($services as $service): ?>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card border-0 bg-color-light">
                        <div class="card-body">
                            <img width="60" src="assets/img/icons/<?= $service['icon'] ?>" alt="" class="mb-4" />
                            <h4 class="font-weight-bold text-5 mb-3"><?= $service['title'] ?></h4>
                            <p class="mb-0"><?= $service['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 