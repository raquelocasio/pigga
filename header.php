<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Pigga landing page.">
    <meta name="author" content="Devcrud">
    <title>Pigga | Free WordPress theme</title>

    <!-- link to stylesheets -->
    <?php wp_head(); ?>

    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- First Navigation -->
    <nav class="navbar nav-first navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php bloginfo('template_directory'); ?>/assets/imgs/navbar-brand.svg" alt="alt text here...">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#home">CALL US : <span class="pl-2 text-muted"><?php the_field( 'phone' ); ?></span></a>
                </li>                   
            </ul>
        </div>
    </nav>
    <!-- End of First Navigation --> 
    <!-- Second Navigation -->
    <nav class="nav-second navbar custom-navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <!-- top nav menu -->
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top_menu',
                        'container' => "div",
                        'menu_class' => 'topmenu',
                    )
                    );
                ?>            
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="components.html" class="btn btn-primary btn-sm">Components</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation --> 
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <img src="<?php bloginfo('template_directory'); ?>/assets/imgs/logo.svg" alt="alt text here..." class="logo">
            <h1 class="subtitle"><?php the_field( 'site_tagline' ); ?></h1>
            <h1 class="title"><?php the_field( 'site_title' ); ?></h1> 
            <a class="btn btn-primary mt-3" href="#book-table">Book A Table</a> 
        </div>      
    </header>