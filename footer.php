
    <footer class="footer">
        <div class="container">
            <div class="footer_grid">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/rift_footer_logo.png" ?>" alt="footer logo" /> 
                </a>
                <div>
                    <h4>Studio</h4>
                    <h4>Photography</h4>
                    <h4>Videography</h4>
                </div>
                <div>
                    <h4>Recording</h4>
                    <h4>Events</h4>
                    <h4>Book Now</h4>
                </div>
                <div>
                    <h4><a href="tel:<?php the_field('telephone_number'); ?>"><?php the_field('telephone_number'); ?></a></h4>
                    <h4>1856 Belgrade Ave 83</h4>
                    <h4>Charleston, SC 29407</h4>
                </div>
                
<!--************************************* SOCIAL ICONS *******************************************--->

                <div class="footer_grid_social_icons">

                    <div>
                        <a href="<?php the_field('linked_in'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri() . "/img/linked_in_icon.png" ?>" alt="linked in logo" />
                        </a>
                    
                    
                        <a href="<?php the_field('instagram'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri() . "/img/instagram_icon.png" ?>" alt="instagram logo" />
                        </a>
                    
                    
                        <a href="<?php the_field('meta_facebook'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri() . "/img/meta_icon.png" ?>" alt="Meta logo" />
                        </a>
                    </div>
                    
                    <div class="footer_grid_btn">
                        <a href="<?php the_field('button_url'); ?>" target="_blank">
                            <button class="btn"><?php the_field('button_text'); ?></button>
                        </a>
                    </div>

                </div>    
            </div>  
        </div>
    </footer>

</body>
</html>