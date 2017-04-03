<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <h1><?php echo __('Error 404','yourprofile'); ?></h1>
                <p class="big"><?php echo __('The page you are looking for does not exist!','yourprofile'); ?></p>
                <a href="<?php echo bloginfo('url'); ?>" class="btn btn-primary"><?php echo __('Take my back to start!','yourprofile'); ?></a>
            </div>
        </div>
    </div>
</div>  

<?php
get_footer();