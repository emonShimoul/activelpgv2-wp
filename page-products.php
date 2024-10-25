<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>
<div class="container">
    <h1 class="mt-4">Here are our products:</h1>

    <div class="services container mt-4">
        <?php
        while(have_posts()){
            the_post();
        ?>
        <div class="post" <?php post_class(); ?> >
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-start">
                        <?php
                        the_content();
                        ?>
                    </div>
                    <div class="col-md-5">
                        <p>
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail("large", array("class='img-fluid'"));
                            }
                            ?>
                        </p>
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