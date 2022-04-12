<!-- Prefooter Section  -->
<div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
        <div class="container">
            <div class="row justify-content-between align-items-center text-center">
                <div class="col-md-3 text-md-left mb-3 mb-md-0">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/imgs/navbar-brand.svg" width="100" alt="alt text here..." class="mb-0">
                </div>
                <div class="col-md-9 text-md-right">

                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'bottom_menu',
                        'container' => "div",
                        'menu_class' => 'bottommenu',
                    )
                    );
                ?>

                    <!-- <a href="#" class="px-3"><small class="font-weight-bold">Our Company</small></a>
                    <a href="#" class="px-3"><small class="font-weight-bold">Our Location</small></a>
                    <a href="#" class="px-3"><small class="font-weight-bold">Help Center</small></a>
                    <a href="components.html" class="pl-3"><small class="font-weight-bold">Components</small></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of PreFooter Section -->

    <!-- Page Footer -->
    <footer class="border border-dark border-left-0 border-right-0 border-bottom-0 p-4 bg-dark">
        <div class="container">
            <div class="row align-items-center text-center text-md-left">
                <div class="col">
                    <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, <a href="https://www.devcrud.com" target="_blank">DevCrud</a>  All rights reserved </p> 
                </div>
                <div class="d-none d-md-block">
                    <h6 class="small mb-0">
                        <a href="<?php the_field( 'facebook' ); ?>" class="px-2"><i class="ti-facebook"></i></a>
                        <a href="<?php the_field( 'twitter' ); ?>" class="px-2"><i class="ti-twitter"></i></a>
                        <a href="<?php the_field( 'instagram' ); ?>" class="px-2"><i class="ti-instagram"></i></a>
                    </h6>
                </div>
            </div>
        </div>
        
    </footer>
    <!-- End of Page Footer -->

    <?php wp_footer(); ?>

    <!-- core  -->
    <!-- <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script> -->

    <!-- bootstrap affix -->
    <!-- <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script> -->

    <!-- Pigga js -->
    <!-- <script src="assets/js/pigga.js"></script> -->

</body>
</html>