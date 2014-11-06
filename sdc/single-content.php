<?php
global $post;
$menu_items = array();
if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ 'site' ] ) ) { // CHECK IF LOCATION IS SET
	$menu = wp_get_nav_menu_object( $locations[ 'site' ] ); // GET THE MENU OBJECT FROM LOCATION
	$menu = wp_get_nav_menu_items( $menu->term_id ); // GET MENU ITEMS FROM OBJECT ID
	$current = false;
	foreach( $menu as $k => $m ){
		$menu[$m->ID ] = $m;
		unset( $menu[$k] ); 
		if( $post->ID == $m->object_id ) {
			if( !$m->menu_item_parent ) break; // First Level Item
			if( array_key_exists( $m->menu_item_parent , $menu ) && !$menu[$m->menu_item_parent]->menu_item_parent ){
				$current = $m->ID;
			} else {
				$current = $m->menu_item_parent;
			}
		}
	}
	if( $current ){
		foreach( $menu as $k => $m ){
			if( $current == $m->ID || $current == $m->menu_item_parent ){
				$menu_items[] = $m;
			}
		}
	}

} // End if
if( $menu_items && 1 < count( $menu_items ) ){
	foreach( $menu_items as $item ){
		echo $item->post_title;
	}
}
echo $content;
?>