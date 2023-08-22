<?php get_header(); ?>

<!--************************************* HERO IMAGE *******************************************--->


<section class="hero">
    <img class="hero_img" src="<?php echo get_template_directory_uri() . "/img/hero_img_test.png" ?>" alt="Hero image of photographer" />
</section>

<!--************************************* CAPABILITIES SECTION *******************************************--->

<section class="capabilities">
    <div class="container">
        <h1>Capabilities</h1>
        <div class="capabilities_grid">
            <div>
                <img src="<?php echo get_template_directory_uri() . "/img/icon_1.png" ?>" alt="Photography Icon">
                <h3>Photography</h3>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . "/img/icon_2.png" ?>" alt="Recording Icon">
                <h3>recording</h3>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . "/img/icon_3.png" ?>" alt="Videography Icon">
                <h3>Videography</h3>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . "/img/icon_4.png" ?>" alt="Events Icon">
                <h3>Events</h3>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . "/img/icon_5.png" ?>" alt="Workshops Icon">
                <h3>Workshops</h3>
            </div>
        </div>
    </div>   
</section>

<!--************************************* ABOUT SECTION *******************************************--->


<section class="about">
    <div class="container">
        <div class="about_grid">
            <div>
                <h1>ABOUT</h1>
                <p>Rift Studios is a premier videography and photgraphy studio located in Charleston, SC. The completely soundproofed studio is equipped with a large cyc wall that provides a seamless backdrop for video and photoshoots.</p>
                <br>
                <p>Available to rent for half days or extended periods, the studio adapts to be the ideal venue for videography, photography, sound recording, and special events.</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . "/img/about_img.png" ?>" alt="" />
        </div>
    </div>
</section>

<!--************************************* RESERVE SECTION *******************************************--->

<section class="reserve">
    <div class="container">
        <div class="reserve_grid">
            <img src="<?php echo get_template_directory_uri() . "/img/rift_blue_logo.png" ?>" alt="Rift Blue Logo" />
            <div class="reserve_grid_content">
                <h1 class="text-white">Reserve</h1>
                <p>Contact us to make a reservation for a full or half day at RIFT studios.</p>
                <div>
                    <a href="<?php the_field('button_url'); ?>" target="_blank">
                        <button class="btn btn_large"><?php the_field('button_text'); ?></button>
                    </a>
                </div> 
            </div>
        </div>
    </div>
</section>

<!--************************************* VIDEOGRAPHY SECTION *******************************************--->

<section class="videography">
    <div class="container">
        <div class="videography_grid">
            <div>
                <h1>Videography</h1>
                <p>Rift Studios is outfitted to be a first-class production space for videography. The studio's expansive cyc wall has a white and green screen backdrop options. Complete soundproofing provides studio-quality sound recording and a ceiling grid allows for limitless lighting possibilities. Twin barn doors allow commercial sized vehicles in for equipment.</p>
                <br>
                <p>In addition to the main studio, a large soundproof MUA space is equipped with mirrors and lights so that clients and talent can get ready on site. THere's also ample room for editing and workflow spaces within the main studio and the building has plenty of office space to keep producers on site.</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . "/img/video_img.png" ?>" alt="" />
        </div>
        
    </div>
</section>

<!--************************************* PHOTGRAPHY SECTION *******************************************--->

<section class="photography">
    <div class="container">
        <div class="photography_grid">
            <div>
                <h1>Photography</h1>
                <p>The studio's cyc wall provides a seamless white or greenscreen backdrop for photography of all types - from product to portrait. Bring in set dressing to transform the blank canvas into anything your imagination creates.</p>
                <br>
                <p>Rift Studios provides a controlled environment for photgraphers shooting a variety of subjects, including:</p>
                <div class="photography_lists">

                    <div>
                        <li>Fashion</li>
                        <li>Portrait</li>
                        <li>Bridal</li>
                    </div>
                
                    <div>
                        <li>Family</li>
                        <li>Product</li>
                        <li>Automotive</li>
                    </div>
               
                </div>
                    
            </div>
            <img src="<?php echo get_template_directory_uri() . "/img/info_img.jpeg" ?>" alt="" />
        </div>
        
    </div>
</section>

<!--************************************* EVENTS AND RATES SECTION *******************************************--->
<section class="rates">
    <div class="container">
        <div class="rates_grid">
            
            <div class="rates_grid_rate">
                <h1>Rates</h1>
                <p><strong>Hourly:</strong> $150 per hour</p>
                <p><strong>Half-Day (5 hours):</strong> $595 per hour</p>
                <p><strong>Full-Day (10 hours):</strong> $995 per hour</p>
                <p><strong>Prep/Strike Day (8 hours):</strong> $650 per hour</p>
                <p><strong>Overtime:</strong> $200 per hour</p>
                <p>*Minimum rental is 3 hours</p>
                <p>*These rates do not include equipment rental or additional studio services.</p>
                <p>*CYC repainting is done prior to every booking and included in the above rates.</p>
            </div>

            <div class="rates_grid_location">
                <h1>Location</h1>
                <p>The convenient location is in a quiet neighborhood that is minutes away from the restaurants, downtown Charleston, and Charleston International Airport. There is plenty of on-site parking for production trailers, commercial vehicles, transport vans and crew vehicles.</p>
                <p>Rift Studios is a great place to impress your clients on your next video or photoshoot. Your crew will love the functional space and extra details that keep your production running smoothly.</p>
            </div>
        </div>
    </div>
</section>

<!--************************************* QUESTIONS SECTION *******************************************--->

<section class="questions">
    <div class="container">
        <div class="questions_content">
            <h1>Questions?</h1>
            <p>Contact us at: <a href="tel:<?php the_field('telephone_number'); ?>"><?php the_field('telephone_number'); ?></a> or <a href="email:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>

