/* <![CDATA[ */
(function($){
	
	"use strict";
	
    $(document).ready(function(){
        
        /* panel move - only execute if meta panel vars are not available */
        if( typeof ut_meta_panel_vars.post_type === "undefined" ) {
        
            /* move page slogan beneath titlediv */
            $('#ut_page_slogan').insertAfter('#titlediv').before('<h3 class="ut_page_slogan_title">Portfolio Page Slogan</h3>');
            
            /* tabs */
            $('#ut-panel-tabs').insertBefore('#ut_portfolio_settings .inside');       
            $('#ut-panel-tabs').tabs();
            
            /* post formats */        
            var $wrap = $('<tr valign="top"><th scope="row">Portfolio Format:</th><td id="post-format-wrapper"></td></tr>');
            $wrap.appendTo('#ut-portfolio-format-tab .form-table tbody');
            $('#post-formats-select').appendTo('#post-format-wrapper');    
            $('#formatdiv').remove();            
            
            /* hide misc tab */
            $('#ut-portfolio-misc-tab').remove();        
                    
            /* not supported post formats */		
            $('#post-format-quote').remove();
            $('.post-format-quote').next('br').remove();
            $('.post-format-quote').remove();
            
            $('#post-format-link').remove();
            $('.post-format-link').next('br').remove();
            $('.post-format-link').remove();
            
            $('#post-format-image').remove();
            $('.post-format-image').next('br').remove();
            $('.post-format-image').remove();
        
        }             
        
    });
    
})(jQuery);
 /* ]]> */	