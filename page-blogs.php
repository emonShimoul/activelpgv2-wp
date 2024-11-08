<?php
/*
Template Name: Blogs
*/
?>
<?php if(! is_front_page()){ ?>
<div id="blog-layout">
    <div class="posts container">

        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h3>Featured Blogs</h3>
                    <h2>Our Blogs</h2>
                    <p class="mt-3 mb-5">Welcome to our LPG Conversion Blog! This is your one-stop resource for everything you need to know about converting your vehicle to run on Liquefied Petroleum Gas (LPG). </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                while(have_posts()){
                    the_post();
                ?>
                <div class="col-lg-4">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date"><?php echo get_the_date(); ?></div>
                                <?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail("large", array("class='img-fluid'"));
                                } 
                                else{
                                    ?>
                                    <a href="#">
                                        <img src="https://i.ibb.co.com/nmTZftM/actyivelpg2.jpg" alt="">
                                    </a>
                                <?php
                                }
                                ?>
                        </div>
                        <div class="blog-info">
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p>
                            <?php
                                if(is_single()){
                                    the_content();
                                }else{
                                    the_excerpt();
                                }
                            ?>
                            </p>
                            <?php
                                if(!is_single()){
                                ?>
                                <div class="btn-bar">
                                    <a href="<?php the_permalink(); ?>" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>    
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                
                <?php
                    // get_template_part("post-formats/content",get_post_format());
                    // the_content();
                }
                ?>

            </div>
        </div>

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