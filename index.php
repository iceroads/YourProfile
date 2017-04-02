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
      
        <section class="first-section header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h1><?php echo __('Utvecklare med koll på Wordpress baserade sajter','yourprofile'); ?></h1>
                        <p class="big">Söker du en professionell webbutvecklare som kan ta hand om din Wordpress site?</p>
                        <button class="btn btn-lg btn-primary">Besök mina tjänster</button>
                    </div>
                </div>
            </div>
        </div>     
        </section>

        <section class="second-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center item">
                            <div class="img-wrap">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/webbprogrammering.png' ?>">
                            </div>
                            <h3>Kodning</h3>
                            <p>Med bra kodning kommer din hemsida fungera optimalt. Jag har 7 års erfarenhet</p>
                            <button class="btn btn-primary">Mina tjänster</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center item">
                            <div class="img-wrap">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/wordpress.png' ?>">
                            </div>
                            <h3>Funktioner & Plugins</h3>
                            <p>Saknar ni en viktig funktion på er Wordpress site? Maila mig om dina behov!</p>
                            <button class="btn btn-primary">Kontakta mig</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center item">
                            <div class="img-wrap">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/webbprestanda.png'; ?>">
                            </div>
                            <h3>Dina idér är viktiga</h3>
                            <p>Jag lyssnar på dina behov när det kommer till ditt projekt</p>
                            <button class="btn btn-primary">Portfolio</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="third-section">
            <div class="container">    
                <div class="row">
                    <div class="col-md-6">
                        <div class="feedback"> 
                            <blockquote>
                                Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok. Lorem ipsum har inte bara överlevt fem århundraden
                            </blockquote>
                            <div class="feedback-writer">
                                <img src="http://lorempixel.com/60/60/people/6/">
                                <author> Lisa Nilsson </author>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feedback"> 
                            <blockquote>
                                Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare
                            </blockquote>
                            <div class="feedback-writer">
                                <img src="http://lorempixel.com/60/60/people/7/">
                                <author> Daniel Lemma </author>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="fourth-section archive">
            <div class="container">    
                <div class="row">
                    <div class="col-sm-12">    
                        <h2>Latest posts</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="http://placehold.it/300x210/333333">
                        <h4>Hur optimerar man bilder</h4>
                    </div>
                    <div class="col-md-4">
                        <img src="http://placehold.it/300x210/333333">
                        <h4>Hur optimerar man bilder</h4>
                    </div>
                    <div class="col-md-4">
                        <img src="http://placehold.it/300x210/333333">
                        <h4>Hur optimerar man bilder</h4>
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
