<?php 
	global $sdc_sub_section;
	$sdc_sub_section = false;
	if( has_category( 'architecture' ) ) { $sdc_sub_section = 'Architecture';}
	else if( has_category( 'interior-design' ) ) { $sdc_sub_section = 'Interior Design';}
	else if( has_category( 'landscape-architecture' ) ) { $sdc_sub_section = 'Landscape Architecture';}
	else if( has_category( 'construction-management' ) ) { $sdc_sub_section = 'Construction Management';};
?>