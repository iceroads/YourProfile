<?php
get_header();
?>
      
        <section class="first-section header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h1><?php echo get_theme_mod('showcase_heading', 'Developer with an eye for Wordpress sites'); ?></h1>
                        <p class="big"><?php echo get_theme_mod('showcase_text', 'Do you seek an professional developer that can take care of your Wordpress site?'); ?></p>
                        <a href="<?php echo get_theme_mod('btn_url', 'http://example.com'); ?>" class="btn btn-lg btn-primary"><?php echo get_theme_mod('btn_text', 'View my Services'); ?></a>
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
<?php
get_footer();
?>
