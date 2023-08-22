<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header>
        <div class="nav-bar ">
            <div class="nav-bar_grid container">
                <h3>Studio</h3>
                <h3>Photography</h3>
                <h3>Recording</h3>
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/rift_header_logo.png" ?>" alt="Site logo" />
                </a>
                <h3>Videography</h3>
                <h3>Events</h3>
                <div>
                    <a href="<?php the_field('button_url'); ?>">
                        <button class="btn"><?php the_field('button_text'); ?></button>
                    </a>
                </div>
            </div>
            
        </div>
  
    </header>  