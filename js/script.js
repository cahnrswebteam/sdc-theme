var init_cahnrs_page;
jQuery( document ).ready( function(){
	cahnrs_page = new init_cahnrs_page();
	});

var init_cahnrs_page =  function(){
	var ch = this;
	/*****************************
	** Dropdown Module **
	** Fires if "is_dropdown" has been added to menu wrapper **
	** is_dropdown should be placed on ul of menu - 'menu_class' ** 
	******************************/
	ch.dropdown = function(){
		var dr = this;
		dr.menu_items = jQuery( '.is_dropdown > li');
		
		jQuery('body').on( 'hover' , '.is_dropdown > li', function( e ){
			var ih = jQuery( this );
			if (e.type == "mouseenter") {
				jQuery( this ).addClass('activedrop');
				setTimeout(function(){ dr.active_drop( ih ) }, 150);  
			} else { 
				dr.close_drop( ih );
			}
		});
		
		dr.active_drop = function( ih ){
			if( ih.hasClass('activedrop')){
				ih.children('ul').slideDown('fast');
			}
		}
		dr.close_drop = function( ih ){
			ih.removeClass('activedrop');
			ih.children('ul').slideUp('fast');
		}
	};
	
	if( jQuery('.is_dropdown').length > 0 ) ch.dropdown(  );
}