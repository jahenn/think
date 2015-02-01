/* <![CDATA[ */
(function($){
	
	"use strict";
	
    $.fn.utHighlightShortcode = function(methodOrOptions) {
        if (methods[methodOrOptions]) {
            return methods[methodOrOptions].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof methodOrOptions === 'object' || !methodOrOptions) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + methodOrOptions + ' does not exist on jQuery.utHighlightShortcode');
        }
    }
    
    
    
    
    var methods = {
        
        init : function(){
            plugin = this;
            settings.onInit.apply(plugin);
        },
        apply : function(){
        
        },
        clear : function(){
        
        
        }    
    
    };
    
    
    
    
    
    
    
    
    
    
    
    
    
    $(document).ready(function(){
       
        var ut_visual_shortcodes = [];
        
        /* add color to shortcodes */
        ut_visual_shortcodes.push({ shortcode: "ut_spacer", color: "#008ED6"});
        
        
    
    });
        
})(jQuery);
 /* ]]> */	