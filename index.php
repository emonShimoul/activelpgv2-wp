<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part("navbar"); ?>

    <?php if(is_front_page()){ ?>

        <?php get_template_part("slider"); ?>
        <div class="slider">
            <h2>Slider</h2>
            <?php
            if ( class_exists( 'Attachments' ) ) {
                $attachments = new Attachments( 'slider' );
                if ( $attachments->exist() ) {
                    while ( $attachment = $attachments->get() ) { ?>
                        <div>
                            <?php echo $attachments->image( 'large' ); ?>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>

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
    ?>
    <div class="post" <?php post_class(); ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title">
                        <?php the_title(); ?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(); ?></strong><br>
                        <?php the_date(); ?>
                    </p>

                    <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>","</li><li>","</li></ul>") ?>

                </div>
                <div class="col-md-8">
                    <p>
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail("large", array("class='img-fluid'"));
                        }
                        ?>
                    </p>

                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        // get_template_part("post-formats/content",get_post_format());
        // the_content();
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php
                    the_posts_pagination(array(
                        "screen_reader_text" => ' '
                    ));
                ?>
            </div>
        </div>
    </div>
    </div>

<?php get_footer(); ?>