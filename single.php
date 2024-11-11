<?php
get_header();
?>

<div class="container">
    <!-- <h1 class="mt-4">Here are our products:</h1> -->

    <div class="services container mt-4">

        <div class="single-img">
            <?php
            if(has_post_thumbnail()){
                the_post_thumbnail("large", array("class='img-fluid'"));
            }
            ?>
        </div>

        <?php
        while(have_posts()){
            the_post();
        ?>
        <div class="single-post" <?php post_class(); ?> >
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2 class="mt-4"><?php the_title(); ?></h2>
                    </div>
                    <div class="col-md-12 text-start mt-2">
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
