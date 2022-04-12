 <?php get_header(); ?>
 
 <!-- About Section -->
 <section id="about">
        <div class="container">
            <div class="row align-items-center">                
                <div class="col-md-6">
                    <h6 class="section-subtitle">Opening Times</h6>
                    <h3 class="section-title">Working Times</h3>
                    <p class="mb-1 font-weight-bold">Monday - Thursday : <span class="font-weight-normal pl-2 text-muted"><?php the_field( 'monday_to_thursday_opening' ); ?> - <?php the_field( 'monday_to_thursday_closing' ); ?></span></p>
                    <p class="mb-1 font-weight-bold">Friday - Saturday : <span class="font-weight-normal pl-2 text-muted"><?php the_field( 'friday_to_saturday_opening' ); ?> - <?php the_field( 'friday_to_saturday_closing' ); ?></span></p>
                    <p class="mb-1 font-weight-bold">Sunday : <span class="font-weight-normal pl-2 text-muted"><?php the_field( 'sunday_opening' ); ?> - <?php the_field( 'sunday_closing' ); ?></span></p>

                    <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Book a table</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <img alt="alt text here..." src="<?php bloginfo('template_directory'); ?>/assets/imgs/about-1.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="alt text here..." src="<?php bloginfo('template_directory'); ?>/assets/imgs/about-2.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="section-devider my-6 transparent"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6 class="section-subtitle">The Great Story</h6>
                    <h3 class="section-title">Our Culinary Journey</h3>
                    <p><?php the_field( 'culinary_journey' ); ?></p>
                </div>
                <div class="col-md-6 order-1 order-sm-first">
                    <div class="row">
                        <div class="col">
                            <img alt="alt text here..." src="<?php bloginfo('template_directory'); ?>/assets/imgs/about-3.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="alt text here..." src="<?php bloginfo('template_directory'); ?>/assets/imgs/about-4.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Featrued Menu Items Section -->
    <section id="service" class="pattern-style-4 has-overlay">
        <div class="container raise-2">
            <h6 class="section-subtitle text-center">Featured Food</h6>
            <h3 class="section-title mb-6 pb-3 text-center">Special Dishes</h3>
            <div class="row">
                
            
                <!-- display menu items custom post type where featured=true -->
            <?php
            $featuredMenu = new WP_Query(
                array(
                    'posts_per_page' => 6,
		            'post_type' => 'menuitem',
                    'meta_query' => array(
                        array(
                            'key'   => 'featured',
                            'value' => '1',
                        )
                    )
                    )
                );

                while ($featuredMenu->have_posts()) {
                    $featuredMenu->the_post(); ?>

                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                        <img src="<?php the_field( 'photo' ); ?>" />
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left"><?php the_field( 'title' ); ?></h5>
                                <p class="float-right text-primary">$<?php the_field( 'price' ); ?></p>
                            </div>
                            <div class="body">
                                <p><?php the_field( 'description' ); ?></p>
                            </div>
                        </div>
                    </a>
                </div>

                    <?php }
                    ?>

            </div>                  
        </div>
    </section>
    <!-- End of Featured Food Section -->

    <!-- Menu Section -->
    <section class="has-img-bg">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Food</h6>
            <h3 class="section-title mb-6 text-center">Main Menu</h3>
            <div class="card bg-light">
                <div class="card-body px-4 pb-4 text-center">                   
                    <div class="row text-left">

                    <!-- display menu items custom post type where featured=false -->
                    <?php
                    $mainMenu = new WP_Query(
                        array(
                            'posts_per_page' => 8,
                            'post_type' => 'menuitem',
                            'meta_query' => array(
                                array(
                                    'key'   => 'featured',
                                    'value' => '0',
                                )
                            )
                            )
                        );

                        while ($mainMenu->have_posts()) {
                            $mainMenu->the_post(); ?>

                        <div class="col-md-6 my-4">
                            <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                    <?php the_field( 'title' ); ?>
                                        <p class="mt-1 mb-0"><?php the_field( 'description' ); ?></p>
                                    </div>
                                    <h6 class="float-right text-primary">$<?php the_field( 'price' ); ?></h6>
                                </div>
                            </a>
                        </div>

                            <?php }
                            ?>

                    </div>
                    <a href="#book-table" class="btn btn-primary mt-4">Book A Table</a>
                </div>
            </div>                  
        </div>
    </section>
    <!-- End of Menu Section -->

    <!-- Chef Section -->
    <section id="team">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Team</h6>
            <h3 class="section-title mb-5 text-center">Talented Chefs</h3>
            <div class="row">
                
            <!-- display chef custom post type -->
            <?php
                    $ourChefs = new WP_Query(
                        array(
                            'posts_per_page' => 8,
                            'post_type' => 'chef',
                            )
                        );

                        while ($ourChefs->have_posts()) {
                            $ourChefs->the_post(); ?>

                <div class="col-md-4 my-3">
                    <div class="team-wrapper text-center">
                    <img src="<?php the_field( 'photo' ); ?>" class="circle-120 rounded-circle mb-3 shadow"/>
                        <h5 class="my-3"><?php the_field( 'name' ); ?></h5>
                        <p><?php the_field( 'bio' ); ?></p>
                        <h6 class="socials mt-3">
                            <a href="<?php the_field( 'facebook' ); ?>" class="px-2"><i class="ti-facebook"></i></a>
                            <a href="<?php the_field( 'twitter' ); ?>" class="px-2"><i class="ti-twitter"></i></a>
                            <a href="<?php the_field( 'instagram' ); ?>" class="px-2"><i class="ti-instagram"></i></a>
                        </h6>
                    </div>
                </div>

                            <?php }
                            ?>    

            </div>
        </div>
    </section>
    <!-- End of Chef Section -->

    <!-- Testmonial Section -->
    <section id="testmonial" class="pattern-style-3">
        <div class="container">
            <h6 class="section-subtitle text-center">Best Clients</h6>
            <h3 class="section-title mb-5 text-center">Testmonials</h3>

            <div class="row">
                
                <!-- display testimonial custom post type -->
            <?php
                    $ourReviews = new WP_Query(
                        array(
                            'posts_per_page' => 4,
                            'post_type' => 'testimonial',
                            )
                        );

                        while ($ourReviews->have_posts()) {
                            $ourReviews->the_post(); ?>

                        <div class="col-md-4 my-3 my-md-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center mb-3">
                                    <img class="mr-3" src="<?php the_field( 'photo' ); ?>" />
                                        <div class="media-body">
                                            <h6 class="mt-1 mb-0"><?php the_field( 'client_name' ); ?></h6>
                                            <small class="text-muted mb-0"><?php the_field( 'job_title' ); ?></small>     
                                        </div>
                                    </div>
                                    <p class="mb-0"><?php the_field( 'quote' ); ?></p>
                                </div>
                            </div>
                        </div>

                            <?php }
                            ?>


            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->


    <!-- Book Table Section -->
    <section id="book-table" class="bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-none d-md-block">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/imgs/contact.jpg" alt="alt text here..." class="w-100 rounded shadow">
                </div>
                <div class="col-md-6">

                    <?php echo do_shortcode("[ninja_form id=2]"); ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End OF Book Table Section -->

    <?php get_footer(); ?>