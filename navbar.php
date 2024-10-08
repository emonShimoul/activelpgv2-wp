<!-- top bar -->
<div class="top-bar">
    <div class="container">
        <ul class="social-bx list-inline">
            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
            <li><a class="fab fa-twitter" href="https://twitter.com/" target="blank"></a></li>
            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank" ></a></li>
            <li><a class="fab fa-google-plus-g" href="https://mail.google.com/" target="blank" ></a></li>
        </ul>
    </div>
</div>
<!-- top bar END-->

<div class="nav-bar">
    <div class="container d-flex justify-content-between align-items-center">
        <?php if(current_theme_supports( "custom-logo" )): ?>
        <div class="header-logo text-center">
            <?php the_custom_logo(); ?>
        </div>
        <?php endif; ?>

        <div class="contacts d-flex">
            <p class="contact-number">+8801711843533</p>
            <p>lpgactive@gmail.com</p>
        </div>
    </div>
</div>

<div class="menu">
    <div class="container">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'mainmenu',
                    'menu_class'     => 'mainmenucontainer',
                )
            );
        ?>
    </div>
</div>