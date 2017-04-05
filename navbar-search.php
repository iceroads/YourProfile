<?php
/*
Navbar search form
==================
*/
?>
 <div class="search-container">
	<form class="my-2 my-md-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	  <input class="form-control mr-sm-2" type="text" id="searchforminput" value="" placeholder="<?php echo __('Search...','yourprofile'); ?>" name="s" id="s">
	</form>

	<button id="searchsubmit" value="<?php esc_attr_x('Search', 'yourprofile') ?>" class="btn btn-outline-info"><i class="fa fa-search"></i></button>
</div>