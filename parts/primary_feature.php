<?php global $sdc_sub_section;
if( isset( $sdc_sub_section ) && $sdc_sub_section ){
	get_template_part('parts/primary_image');
} else {
	get_template_part('parts/primary_slideshow');
};?>