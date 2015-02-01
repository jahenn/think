/* <![CDATA[ */
(function($){
	
	"use strict";
	
    $(document).ready(function(){
		
		$(".add-feature").click(function(e) {
            
			var featuregroup = $(this).data("featuregroup"),
				column		 = $(this).data("column"),
				count 		 = $(this).data("featurecount")	;
			
			/* increase count */
			count = count + 1;
			
			/* update count */
			$(this).data("featurecount" , count)
			
			/* add new feature */
			$('#ut-repeat-'+featuregroup+'-'+column).append('<p><input type="text" class="regular-text" name="' + featuregroup + '['+column+'][features]['+count+'][title]" value="" /><span class="ut-admin-remove remove-feature">X</span></p>');			
			
			e.preventDefault();
			
        });
		
		$(document).on("click", ".remove-feature", function(e) { 
										
			$(this).parent().remove();
			e.preventDefault();
			
		});
		
		
		$( "#ut-table-tabs" ).tabs();
	
	});
    
})(jQuery);
 /* ]]> */	