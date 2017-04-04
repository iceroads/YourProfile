<?php

$args = [
    'post_type' =>  'post',
    'cat'       =>  '9'
];

$articles_query = new WP_Query($args);
if( $articles_query->have_posts() ):
    while( $articles_query->have_posts() ): $articles_query->the_post();
    ?>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9">
                    <article>
                        <?php the_post_thumbnail('article-thumbnail'); ?>
                        <h3><?php echo the_title(); ?></h3>
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </div>
    <hr>
    <?php
    endwhile;
else:
    echo __('Sorry. No portfolio have been wroten yet','yourprofile');
endif;
?>