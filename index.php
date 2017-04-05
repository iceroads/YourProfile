<?php
get_header();
?>
        <!-- 
                FRONT SHOWCASE
        -->
        <section class="first-section header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h1><?php echo get_theme_mod('showcase_heading', __('Developer with an eye for Wordpress sites','yourprofile')); ?></h1>
                        <p class="big"><?php echo get_theme_mod('showcase_text', __('Do you seek an professional developer that can take care of your Wordpress site?','yourprofile')); ?></p>
                        <a href="<?php echo get_theme_mod('btn_url', 'http://example.com'); ?>" class="btn btn-lg btn-primary"><?php echo get_theme_mod('btn_text', __('View my services','yourprofile')); ?></a>
                    </div><!-- //.text-center -->
                </div><!-- //.col -->
            </div><!-- //.row -->
        </div><!-- //.container -->  
        </section>
        <!-- 
                FRONT PROMOTION
        -->
        <section class="second-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center item">
                            <div class="img-wrap">
                                <img src="<?php echo get_theme_mod( 'promo_img1', get_template_directory_uri().'/assets/images/codeblock.png' ); ?>">
                            </div>
                            <h3><?php echo get_theme_mod( 'promo_title1', __('Clean Code','yourprofile') ); ?></h3>
                            <p><?php echo get_theme_mod( 'promo_text1', __('With more than 7 years of experience of coding I know how to make your website professional','yourprofile') ); ?></p>
                            <a href="<?php echo get_theme_mod( 'promo_btn_url1', '#' ); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'promo_btn_text1', __('Services','yourprofile') ); ?></a>
                        </div><!-- //.text-center .item -->
                    </div><!-- //.col-md-4 -->
                    <div class="col-md-4">
                        <div class="text-center item">
                            <div class="img-wrap">
                                <img src="<?php echo get_theme_mod( 'promo_img2', get_template_directory_uri().'/assets/images/wordpress.png' ); ?>">
                            </div>
                            <h3><?php echo get_theme_mod( 'promo_title2', __('Functions & Plugins','yourprofile') ); ?></h3>
                            <p><?php echo get_theme_mod( 'promo_text2', __('Do you miss a function or have an plugin stopped working for you? Contact me to solve it quick!','yourprofile') ); ?></p>
                            <a href="<?php echo get_theme_mod( 'promo_btn_url2', '#' ); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'promo_btn_text2', __('Contact me','yourprofile') ); ?></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center item">
                            <div class="img-wrap">
                                <img src="<?php echo get_theme_mod( 'promo_img3', get_template_directory_uri().'/assets/images/optimize.png' ); ?>">
                            </div>
                            <h3><?php echo get_theme_mod( 'promo_title3', __('Optimizing','yourprofile') ); ?></h3>
                            <p><?php echo get_theme_mod( 'promo_text3', __('I know how to optimize your site and make it super fast! Read more about my optimizing','yourprofile') ); ?></p>
                            <a href="<?php echo get_theme_mod( 'promo_btn_url3', '#' ); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'promo_btn_text3', __('Get a quicker site','yourprofile') ); ?></a>
                        </div><!-- //.text-center .item -->
                    </div><!-- //.col-md-4 -->
                </div><!-- //.row -->
            </div><!-- //.container -->
        </section>
        <!-- 
                FRONT TESTIMONIAL
        -->
        <?php

        $args = [
            'post_type' =>  'testimonial',
            'posts_per_page' =>  4
        ];
        $testimonial_query = new WP_Query($args);
        if( $testimonial_query->have_posts() ):      
            ?>
            <section class="third-section">
                <div class="container">    
                    <div class="row">
                        <?php
                        while( $testimonial_query->have_posts() ):
                            $testimonial_query->the_post();
                            ?>
                            <div class="col-md-6">
                                <div class="feedback"> 
                                    <blockquote>
                                    <?php the_content(); ?>
                                    </blockquote>
                                    <div class="feedback-writer">
                                        <?php echo the_post_thumbnail( 'testimonial-thumbnail' );  ?>
                                        <author> <?php echo the_title(); ?> </author>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </section>
            <?php
            wp_reset_postdata();
        endif;
        ?>
        <!-- 
                FRONT LATEST ARTICLE
        -->
        <section class="fourth-section archive">
            <div class="container">    
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="latest-article-title"><?php echo __('Latest articles','yourprofile'); ?></h2>
                    </div>
                    <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                ?>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <a href="<?php echo the_permalink(); ?>">
                                        <?php
                                            // Have post thumbnail else post default image
                                            if( has_post_thumbnail() ):
                                                echo the_post_thumbnail('latest-article-thumbnail');
                                            else:
                                                echo '<img src="http://placehold.it/300x210/333333">';
                                            endif;
                                        ?>
                                        </a>
                                        <a href="<?php echo the_permalink(); ?>"> <h4><?php echo the_title(); ?></h4> </a>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </section>
<?php
get_footer();
?>