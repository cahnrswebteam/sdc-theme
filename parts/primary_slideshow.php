<?php 
$slides = array(
	array( 
		'title' => '[Architecture News Item ]',
		'src' => get_stylesheet_directory_uri().'/images/sdc-arch-slide.jpg',
		),
	array( 
		'title' => '[Interior Design News Item]',
		'src' => get_stylesheet_directory_uri().'/images/sdc-arch-slide.jpg',
		),
	array( 
		'title' => '[Landscape Architecture News Item]',
		'src' => get_stylesheet_directory_uri().'/images/sdc-arch-slide.jpg',
		),
	array( 
		'title' => '[Construction Management News Item]',
		'src' => get_stylesheet_directory_uri().'/images/sdc-arch-slide.jpg',
		),
);
shuffle ( $slides );
?>

<div id="full-page-wrap">
	<div id="sdc-slide-wrap">
	<? foreach( $slides as $slide ):?>
    	<div class="sdc-slide" title="<?php echo $slide['title'];?>" >
        	<img src="<?php echo $slide['src'];?>" />
        	<div class="sdc-caption">
            	<div class="sdc-caption-inner sdc-content-wrap">
                    <div class="sdc-caption-title ">
                        <?php echo $slide['title'];?>
                    </div>
                    <div class="sdc-caption-summary">
                        [ News Item Summary ] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et turpis quis est porta tempus quis eu orci.
                    </div>
                </div>
            </div>
        </div>
    <? endforeach;?>
    </div>
    <div id="slide-next" class="slide-nav"></div>
    <div id="slide-prev" class="slide-nav"></div>
    <nav id="thumb-slide-nav">
    	<div class="sdc-content-wrap">
    	<ul>
        </ul>
        </div>
    </nav>
	<!--<nav id="page-slide-nav">
    	<ul class="sdc-content-wrap">
        	<!--<li class="active">
            	<a href="#">
                	<span class="sdc-title"><span class="sdc-center">[Architecture News Item ]</span></span>
                </a>
            </li><li>
            	<a href="#">
                	<span class="sdc-title"><span class="sdc-center">[Interior Design News Item ] - extra long title here</span></span>
                </a>
            </li><li>
            	<a href="#">
                	<span class="sdc-title"><span class="sdc-center">[Landscape Architecture News Item ]</span></span>
                </a>
            </li><li>
            	<a href="#">
                	<span class="sdc-title"><span class="sdc-center">[Construction Management News Item ]</span></span>
                </a>
            </li><li class="sdc-more">
            	<a href="#">
                	<span class="sdc-title">More ></span>
                </a>
            </li>
        </ul>
    </nav>-->
</div>