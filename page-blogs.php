<?php
/*
Template Name: Blogs
*/
?>
<?php if(! is_front_page()){ ?>
<div id="blog-layout">
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
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <p>
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail("large", array("class='img-fluid'"));
                            }
                            ?>
                        </p>
                    </div>
                    <div class="col-md-7">
                        <?php
                        if(is_single()){
                            the_content();
                        }else{
                            the_excerpt();
                        }
                        // the_content();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            // get_template_part("post-formats/content",get_post_format());
            // the_content();
        }
        ?>
    <!-- display pagination -->
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
</div>
<?php } ?>