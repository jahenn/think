/* <![CDATA[ */
(function($){
	
	"use strict";
	
    $(document).ready(function(){
        
		$( "#ut-sortable-tax" ).sortable({ 
			handle: '.ut-handle',
			placeholder: "ut-handle-highlight"
		});
		
        /* ------------------------------------------------
        display chosen portfolio settings type after load
        ------------------------------------------------ */
        $("#ut_portfolio_type").each(function(){
            
            var type = $(this).find(":selected").val();
            $('.ut-option-section').hide();
            
            if( type ) {
                $( '#' +  type + '_options' ).show();          
            }
            
        }); 
        
        
        /* ------------------------------------------------
        display chosen portfolio settings type on change
        ------------------------------------------------ */
        $("#ut_portfolio_type").change(function() {
        
            var type = $(this).find(":selected").val();
            $('.ut-option-section').hide();
            
            if( type ) {
                $( '#' +  type + '_options' ).show();          
            }   
        
        });
        
        
			
		/* ------------------------------------------------
		Color Picker 
        ------------------------------------------------ */
		$('.ut_color_picker').wpColorPicker();
		
		
		/* ------------------------------------------------
		Opacity Range Slider
        ------------------------------------------------ */
		var sliderdefault = $(".ut-opacity-slider").data('state');
		$( ".ut-opacity-slider" ).slider({
			
			min: 0,
			max: 1,
			step: 0.1,
			value: sliderdefault ,
			slide: function( event, ui ) {

				$(this).parent().find('.ut-hidden-slider-input').val( ui.value );
				$(this).parent().find('.ut-opacity-value').text( ui.value );
				
			}
		
		});
        
    });
    
})(jQuery);
 /* ]]> */	