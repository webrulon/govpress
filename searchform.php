<?php
	$squery = get_search_query();
	if ( !$squery ) {
		$squery = __( 'Search', 'govpress' );
	}
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php _e( 'Search for:', 'govpress' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo $squery; ?>" value="" name="s" title="<?php _e( 'Search for:', 'govpress' ); ?>" />
	</label>
	<input type="submit" class="icon-font search-submit" value="&#xf002;" />
</form>
