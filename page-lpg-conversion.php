<?php
/*
Template Name: LPG Conversion
*/

get_header();
?>

<div class="container">
    <!-- <h1 class="mt-4">Here are our products:</h1> -->

    <div class="services container mt-4">
        <?php
        while(have_posts()){
            the_post();
        ?>
        <div class="post" <?php post_class(); ?> >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-start">
                        <?php
                        the_content();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>
