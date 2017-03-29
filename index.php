<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php bloginfo('name'); ?></title>
<?php
wp_head();
?>
</head>
<body <?php body_class(); ?> >

    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <hr class="hidden-lg-up">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'headmenu',
              'container'      => false,
              'menu_class'     => 'nav navbar-nav',
              'fallback_cb'    => '__return_false',
              'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'          => 2,
              'walker'         => new bootstrap_4_walker_nav_menu()
              ) );
            ?>
        </div>
    </nav> 
    <div id="wrap">
      
        <section class="first-section container">        
            <div class="row">
                <div class="col">
                    <div class="example"></div>
                    hejsanasdasdlaskjdlk
                </div>
            </div>
        </section>

        <section class="second-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="example">
                            kolumn1
                        </div>
                    </div>
                    <div class="col">
                        <div class="example">
                            kolumn2
                        </div>
                    </div>
                    <div class="col">
                        <div class="example">
                            kolumn3
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="third-section">
            <div class="container">    
                <div class="row">
                    <div class="col">
                        <div class="example">
                            kolumn1
                        </div>
                    </div>
                    <div class="col">
                        <div class="example">
                            kolumn1
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fourth-section">
            <div class="container">    
                <div class="row">
                    <div class="col">
                        <div class="example"></div>
                    </div>
                    <div class="col">
                        <div class="example"></div>
                    </div>
                    <div class="col">
                        <div class="example"></div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer class="site-footer">
        <div class="container">
            &copy; 2017 Pontus Nilsson - <cite>The greatest motherfucker of all time and space</cite>
        </div>
    </footer>

<?php
    wp_footer();
?>
</body>
</html>
