<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part("navbar"); ?>

    <?php if(is_front_page()){ ?>

    <div class="heading">
        <p>Active LPG</p>
        <h1>Unleash the Power <br> of LPG Conversion</h1>
    </div>

    <!-- clients-seen section starts -->
    <div class="clients-seen container">
        <h3>Our clients have seen</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <i class="fa-solid fa-gas-pump"></i>
                <h5>Reduced fuel costs</h5>
            </div>
            <div class="col">
                <i class="fa-solid fa-taxi"></i>
                <h5>Prolonged engine life</h5>
            </div>
            <div class="col">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h5>Lower maintenance costs</h5>
            </div>
        </div>
        <div class="clients-seen-bottom mx-auto">
            <p>The right LPG conversion can be the difference between a problematic car that's always at the garage and a car that lives up to the promise of LPG conversion. </p>
            <button type="button" class="btn btn-dark btn-lg">Contact Us</button>
        </div>
    </div>
    <!-- clients-seen section ends -->

    <!-- services section starts -->
    <div class="services container">
        <h3>Services to Save You Money</h3>
        <p>Every person needs something a little different. Here are ways we can <br> help you save money.</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col ps-4">
                <h5>Conversion</h5>
                <ul>
                    <li>LPG Conversion: Sequential or Traditional kits (made in Italy or Turkey)</li>
                    <li>Installation: Our conversion time is around 4 hours. There is a variance in the time it takes based on the vehicle but we will always look to complete your vehicle as quickly as possible. Call us to check availability. </li>
                </ul>
            </div>
            <div class="col service-section">
                <h5>Service</h5>
                <ul>
                    <li>Oil change</li>
                    <li>CNG Service and Maintenance</li>
                    <li> Tune-up / Spark Plug Replacement</li>
                    <li> Cabin Air Filter Replacement</li>
                    <li> Engine Air Filter Replacement</li>
                    <li> Radiator Coolant Fluid Exchange</li>
                    <li> Vehicle Inspections and Diagnostics</li>
                </ul>
            </div>
            <div class="col">
                <h5>Wholesale</h5>
                <ul>
                    <li>LPG Full Kit Set</li>
                    <li>LPG Front Kit Set</li>
                    <li>LPG Rear Kit Set</li>
                    <li>LPG Spare Parts</li>
                    <li>LPG Regulator</li>
                </ul>
            </div>
        </div>
        <!-- <div class="services-btn mx-auto">
            <button type="button" class="btn btn-dark btn-lg">Contact Us</button>
        </div> -->
    </div>
    <!-- services section ends -->

    <div class="container text-center mb-4">
        <img src="<?php echo header_image(); ?>" alt="">
    </div> 
            
    <?php } ?>

    <div class="posts container mt-4">
    <?php
        while(have_posts()){
            the_post();
            get_template_part("post-formats/content",get_post_format());
            the_content(); // Renders the blocks added from the Gutenberg editor
        }
    ?>
    </div>

<?php get_footer(); ?>