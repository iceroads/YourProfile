<?php
get_header();
?>
<div class="page-header" style="margin-bottom: 1em;">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <h1> <?php echo __('Search page','yourprofile'); ?> </h1>
                <hr>
                <p> <?php printf(__('Searching for ... <i>%s</i> </p>'), get_search_query() ); ?></p>
            </div>
        </div>
    </div>
</div>
<?php
if( have_posts() ):
    while( have_posts() ) : the_post();
        ?>
        <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-9">
                            <article>
                                <?php the_post_thumbnail('article-thumbnail'); ?>
                                <h3><?php echo the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                            </article>
                        </div>
                    </div>
                </div>
            <hr>
        <?php
    endwhile;
else:
    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <?php echo __('Sorry. We could not find any posts that matches. Please try again =(','yourprofile'); ?>
            </div>
        </div>
    </div>
    <?php

endif;

get_footer();