/* <![CDATA[ */
(function ($) {

    "use strict";
        
    $(document).ready(function(){
        
        $('#ut-option-switch-wrap').insertBefore('#ut-panel-tabs');
        $('#setting_ut_page_type').appendTo('#ut-option-switch');
        $('.ut-modal-option-tree').insertAfter('#ut-metapanel .inside');
                        
        var ut_hero_type = $(),
            ut_hero_settings = $(),
            ut_hero_styling = $(),
            ut_page_header_settings = $(),
            ut_section_settings = $(),
            ut_color_settings = $(),
            ut_section_parallax_settings = $(),
            ut_section_video_settings = $(),
            ut_section_overlay_settings = $(),
            ut_manage_team = $(),
            ut_contact_section = $(),
            ut_portfolio_details = $();
            
        
        $('.format-settings').each(function() {
            
            var $this = $(this);
            
            if($this.data("panel") === 'ut-page-header-settings') {
                ut_page_header_settings = ut_page_header_settings.add($this);
            } else if($this.data("panel") === 'ut-section-settings') {
                ut_section_settings = ut_section_settings.add($this);
            } else if($this.data("panel") === 'ut-color-settings') {
                ut_color_settings = ut_color_settings.add($this);
            } else if($this.data("panel") === 'ut-section-parallax-settings') {
                ut_section_parallax_settings = ut_section_parallax_settings.add($this);
            } else if($this.data("panel") === 'ut-section-video-settings') {
                ut_section_video_settings = ut_section_video_settings.add($this);    
            } else if($this.data("panel") === 'ut-section-overlay-settings') {
                ut_section_overlay_settings = ut_section_overlay_settings.add($this);
            } else if($this.data("panel") === 'ut-manage-team') {
                ut_manage_team = ut_manage_team.add($this);
            } else if($this.data("panel") === 'ut-contact-section') {
                ut_contact_section = ut_contact_section.add($this);
            } else if($this.data("panel") === 'ut-hero-type') {
                ut_hero_type = ut_hero_type.add($this);
            } else if($this.data("panel") === 'ut-hero-settings') {
                ut_hero_settings = ut_hero_settings.add($this);
            } else if($this.data("panel") === 'ut-hero-styling') {
                ut_hero_styling = ut_hero_styling.add($this);
            } else if($this.data("panel") === 'ut-portfolio-details') {
                ut_portfolio_details = ut_portfolio_details.add($this);
            }
            
        });        
        
        /* fill tabs */
        $('#ut-hero-type').append(ut_hero_type);
        $('#ut-hero-settings').append(ut_hero_settings);
        $('#ut-hero-styling').append(ut_hero_styling);
        $('#ut-page-header-settings').append(ut_page_header_settings);
        $('#ut-section-settings').append(ut_section_settings);
        $('#ut-color-settings').append(ut_color_settings);
        $('#ut-section-parallax-settings').append(ut_section_parallax_settings);
        $('#ut-section-video-settings').append(ut_section_video_settings);
        $('#ut-section-overlay-settings').append(ut_section_overlay_settings);
        $('#ut-manage-team').append(ut_manage_team);
        $('#ut-contact-section').append(ut_contact_section);
        $('#ut-portfolio-details').append(ut_portfolio_details);       
        
        /* post formats */        
        if( ut_meta_panel_vars.post_type === "portfolio" ) {
            
            /* reset post format - we do not need it anymore */
            $('#post-format-0').attr('checked' , 'checked');
            
            /* disable options */
            $('#setting_ut_section_header_align').addClass('ut-disabled-for-user');
            
        }
        
        /* now create tabs */        
        /* $("#ut-panel-tabs").tabs({
        
            active   : $.cookie('activetab'),
            activate : function( event, ui ){
                $.cookie( 'activetab', ui.newTab.index(),{
                    expires : 10
                });
            }         
        
        }); */ 
        
        $("#ut-panel-tabs").tabs();
        
        /*
        |--------------------------------------------------------------------------
        | Icon Modal
        |--------------------------------------------------------------------------
        */
        
        var iconbutton = '',
            iconpreview = '',
            iconinput = '';        
        
        $('.ut-choose-icon').click( function(event) {
           
            iconbutton = $(this),
            iconinput  = iconbutton.siblings('input:text').first();
            iconpreview = iconbutton.siblings('.ut-icon-preview');
            
            $(".ut-modal-option-tree").fadeIn(); 
            
            event.preventDefault();
            
        });
        
        $(document).on("click", ".close-ut-modal-option-tree", function(event){ 
                    
            $(".ut-modal-option-tree").fadeOut();
            
            event.preventDefault();
            
        });
        
        
        $(document).on("click", ".ut-icon-option-tree", function(event){ 
                    
            var icon = $(this).data('icon');
            
            $(iconinput).val(icon);
            $(iconpreview).children('.ut-preview-icon').attr('class' , '').addClass('ut-preview-icon fa ' + icon);
            $(".ut-modal-option-tree").fadeOut();
        
        });        
        
        $(document).on("click", ".ut-delete-icon", function(event){ 
           
           $(this).parent().children('.ut-preview-icon').attr('class' , '').addClass('ut-preview-icon fa');
           $(this).parent().next('input').val('');
           
           event.preventDefault();         
            
        });
        
        /*
        |--------------------------------------------------------------------------
        | radio buttons
        |--------------------------------------------------------------------------
        */
        
        $(document).on("click", ".ut-radio-button", function(event){
            
            var $this = $(this);
            
            /* deactivate buttons first */
            $this.parent().find('.ut-radio-button').removeClass('selected');
            
            /* now apply selected state to current button */
            $this.addClass('selected');
            
            /* change state of connected radio button */            
            $('#' +  $(this).data('for') ).attr('checked', true).trigger("change");
                        
            event.preventDefault();  
             
        });
        
        
        /*
        |--------------------------------------------------------------------------
        | show / hide available section / page options 
        |--------------------------------------------------------------------------
        */
        var section_settings_active = false,
            show_hide_tabs = function( type ) {                        
            if(type==='section') {                
                /* switch to first section settings tab */
                $("#ut-panel-tabs").tabs("option", "active", 3);
                /* show tab menu items */
                $('.ut-section-settings').show();
                $('.ut-section-parallax-settings').show();
                $('.ut-section-video-settings').show();
                $('.ut-section-overlay-settings').show();
                /* single options */
                $('#setting_ut_section_header_align').removeClass('ut-disabled-for-user');                
                /* hide tab menu items */
                $('.ut-hero-type').hide();
                $('.ut-hero-settings').hide();
                $('.ut-hero-styling').hide();
                $('.ut-contact-section').hide();
                section_settings_active=true;                
            } else {                
                /* show tab menu items */
                $('.ut-hero-type').show();
                $('.ut-hero-settings').show();
                $('.ut-hero-styling').show();
                $('.ut-contact-section').show();                
                /* single options */
                $('#setting_ut_section_header_align').addClass('ut-disabled-for-user');                                
                /* hide tab menu items */
                $('.ut-section-settings').hide();
                $('.ut-section-parallax-settings').hide();
                $('.ut-section-video-settings').hide();
                $('.ut-section-overlay-settings').hide();                
                /* switch to first page settings tab */
                $("#ut-panel-tabs").tabs( "option", "active", 0 );
                section_settings_active=false;
            }
        
        }        
        
        $("#setting_ut_page_type .ut-radio-button").each(function(){
            
            if( $(this).hasClass('selected') ) {                
                show_hide_tabs( $('#' +  $(this).data('for') ).val() );                
            } 
        
        });
        
        
        $(document).on("click", "#setting_ut_page_type .ut-radio-button", function(event){            
            
            if( $('#' +  $(this).data('for') ).filter(":checked").val() === 'section' ) {
                
                show_hide_tabs('section');
                        
            } else {
                
                show_hide_tabs('page');
                                
            }            
            
        });       
        
                
        /*
        |--------------------------------------------------------------------------
        | ui select groups
        |--------------------------------------------------------------------------
        */
        
        var adjust_second_level_options = function($options) {
            
            if ( $options instanceof Array ) {
                    
                for (var i = 0; i < $options.length; i++) {
                  
                    $("#"+$options[i]).trigger('change');                                       
                    
                }
              
            } else {
                  
                $("#"+$options).trigger('change');
              
            }
            
        }
        
        var show_hide_option_set = function( current_for ) {
            
            $("#setting_"+ current_for ).show( 1 , function() {                        
                
                var $this = $(this);                
                
                $this.find(".option-tree-ui-group-radio").filter(":checked").trigger("change");
                $this.find(".option-tree-ui-group-select").find(":selected").trigger("change");                
                
            }); 
        
        }
        
        $(".option-tree-ui-group-select").each(function(){
            
            var $this                 = $(this),
                group                 = $this.data('group'),
                current_for           = $this.find(':selected').data('for');
            
            $this.children("option").each(function() {
                
                /* hide other elements */
                if( $(this).data("for") !== 'current_for') {
                    
                    var hide_options = $(this).data("for").split(',');
                    
                    if ( hide_options instanceof Array ) {
                        
                        for (var i = 0; i < hide_options.length; i++) {
                                                        
                            $("#setting_"+ hide_options[i] ).hide();                            
                        
                        }
                    
                    } else {
                                               
                        $("#setting_"+ $(this).data("for") ).hide();                        
                    
                    }
                    
                }
                
            });
            
            var show_options = current_for.split(',');
            
            if ( show_options instanceof Array ) {
                    
                for (var i = 0; i < show_options.length; i++) {
                    
                    $("#setting_"+ show_options[i] ).show();                    
                                  
                }
              
            } else {
                
                $("#setting_"+ current_for ).show();              
                
            }
            
        });
        
        $(".option-tree-ui-group-select").change(function(){
            
            var current_for = $(this).find(':selected').data('for');
                        
            $(this).children("option").each(function() {
                                
                /* hide other elements */
                if( $(this).data("for") !== 'current_for') {
                    
                    var hide_options = $(this).data("for").split(',');
                    
                    if ( hide_options instanceof Array ) {
                        
                        for (var i = 0; i < hide_options.length; i++) {
                                                        
                            $("#setting_"+ hide_options[i] ).hide();
                        
                        }
                    
                    } else {
                                                
                        $("#setting_"+ $(this).data("for") ).hide();
                    
                    }                    
                    
                }
                
            });
            
            if( current_for ) {
            
                var show_options = current_for.split(',');
                
                if ( show_options instanceof Array ) {
                        
                    for (var i = 0; i < show_options.length; i++) {
                        
                        show_hide_option_set( show_options[i] );
                                              
                    }
                  
                } else {
                    
                    show_hide_option_set( current_for );                  
                  
                }
            
            }
            
        });
        
        $('.ut-toplevel-select-option').trigger('change');
        
        /*
        |--------------------------------------------------------------------------
        | ui radio groups
        |--------------------------------------------------------------------------
        */
                
        $(".ot-type-radio-group").each(function(){
            
            var group                 = $(this).data('group'),
                current_for           = $("input:radio[name ='"+group+"']:checked").data('for');
            
            /* loop through */
            $(this).parent().parent().find('input').each(function(){
                
                /* hide other elements */
                if( $(this).data("for") !== current_for ) {
                    
                    var hide_options = $(this).data("for").split(',');
                    
                    if ( hide_options instanceof Array ) {
                        
                        for (var i = 0; i < hide_options.length; i++) {
                            
                            $("#setting_"+ hide_options[i] ).hide();
                        
                        }
                    
                    } else {
                        
                        $("#setting_"+ $(this).data("for") ).hide();
                    
                    }
                    
                }
            
            });            
            
            if( current_for ) {
            
                var show_options = current_for.split(',');
                
                if ( show_options instanceof Array ) {
                        
                    for (var i = 0; i < show_options.length; i++) {
                        
                        $("#setting_"+ show_options[i] ).show();
                    
                    }
                  
                } else {
                    
                    $("#setting_"+ current_for ).show();                        
                  
                }
            }
            
        });                      
        
        $(".option-tree-ui-group-radio").change(function(){
            
            var current_for = $(this).filter(':checked').data('for');
            
            /* loop through */
            $(this).parent().parent().find('input').each(function(){
            
                /* hide other elements */
                if( $(this).data("for") !== current_for ) {
                    
                    var hide_options = $(this).data("for").split(',');
                    
                    if ( hide_options instanceof Array ) {
                        
                        for (var i = 0; i < hide_options.length; i++) {
                        
                            $("#setting_"+ hide_options[i] ).hide();
                        
                        }
                    
                    } else {
                        
                        $("#setting_"+ $(this).data("for") ).hide();
                    
                    }
                    
                }
            
            });            
            
            if( current_for ) {
            
                var show_options = current_for.split(',');
                
                if ( show_options instanceof Array ) {
                                        
                    for (var i = 0; i < show_options.length; i++) {                    
                        
                        show_hide_option_set( show_options[i] );                                   
                      
                    }
                  
                } else {
                    
                    show_hide_option_set( current_for );                
                  
                }
            
            }
                 
        });
        
        $('.ut-toplevel-radio-option').trigger('change');
        
        
        /*
        |--------------------------------------------------------------------------
        | Hide complete tabs depending on hero type 
        |--------------------------------------------------------------------------
        */                
        if(!section_settings_active) {
            if($("#ut_page_hero_type").val()==='slider'||$("#ut_page_hero_type").val()==='transition'||$("#ut_page_hero_type").val()==='custom'||$("#ut_page_hero_type").val()==='dynamic'){
                $(".ut-hero-settings").hide();
                $("#ut-hero-settings").hide();            
                if($("#ut_page_hero_type").val()==='custom'||$("#ut_page_hero_type").val()==='dynamic'){
                    $(".ut-hero-styling").hide();
                    $("#ut-hero-styling").hide();
                }            
                $("#ut-panel-tabs").tabs("refresh");            
            } else {            
                $(".ut-hero-settings").show();
                $("#ut-hero-settings").show();
                $(".ut-hero-styling").show();
                $("#ut-hero-styling").show();            
                $("#ut-panel-tabs").tabs("refresh");        
            }
        }
        $("#ut_page_hero_type").change(function(){            
            if(!section_settings_active) {
                if($(this).val()==='slider'||$(this).val()==='transition'||$(this).val()==='custom'||$(this).val()==='dynamic'){
                    $(".ut-hero-settings").hide();
                    $("#ut-hero-settings").hide();                
                    if($(this).val()==='custom'||$(this).val()==='dynamic'){
                        $(".ut-hero-styling").hide();
                        $("#ut-hero-styling").hide();
                    }                
                } else {
                    $(".ut-hero-settings").show();
                    $("#ut-hero-settings").show();
                    $(".ut-hero-styling").show();
                    $("#ut-hero-styling").show();
                }
                $("#ut-panel-tabs").tabs("refresh");
            }
        });
        
        /*
        |--------------------------------------------------------------------------
        | Team Template Switcher and Notification
        |--------------------------------------------------------------------------
        */
                
        var current_template = $("#page_template").val();
        
        /* display or hide team manager */        
        if(current_template == 'templates/template-team.php') {
            
            $('.ut-team-section').show();
            $('.ut-manage-team-info').hide();
            
        } else {
            
            $('.ut-team-section').hide();
            $('.ut-manage-team-info').show();
            
        }
        
        /* display or hide team manager on template change */    
        $("#page_template").change(function() { 
            
            var chosen_template = $(this).val();
            
            /* display or hide team manager */        
            if(chosen_template == 'templates/template-team.php') {
                
                $('.ut-team-section').show();
                $('.ut-manage-team-info').hide();
                
            } else {
                
                $('.ut-team-section').hide();
                $('.ut-manage-team-info').show();
                
            }            
        
        });
        
        
        /*
        |--------------------------------------------------------------------------
        | Header Styles Preview Boxes
        |--------------------------------------------------------------------------
        */
        tb_position = function() {
            var tbWindow = $('#TB_window');
            var width = 840;
            var H = 600;
            var W = width;
    
            if ( tbWindow.size() ) {
                tbWindow.width( W - 50 ).height( H - 45 );
                $('#TB_iframeContent').width( W - 50 ).height( H - 75 );
                tbWindow.css({'margin-left': '-' + parseInt((( W - 50 ) / 2),10) + 'px'});
                if ( typeof document.body.style.maxWidth != 'undefined' )
                    tbWindow.css({'top':'40px','margin-top':'0'});
            };
    
            return $('a.thickbox').each( function() {
                var href = $(this).attr('href');
                if ( ! href ) return;
                href = href.replace(/&width=[0-9]+/g, '');
                href = href.replace(/&height=[0-9]+/g, '');
                $(this).attr( 'href', href + '&width=' + ( W - 80 ) + '&height=' + ( H - 85 ) );
            });
        };
    
        $('a.thickbox').click(function(){
            if ( typeof tinyMCE != 'undefined' &&  tinyMCE.activeEditor ) {
                tinyMCE.get('content').focus();
                tinyMCE.activeEditor.windowManager.bookmark = tinyMCE.activeEditor.selection.getBookmark('simple');
            }
        });
        
        /* show font style */
        $('.ut-font-preview').click( function() {
            
            tb_show('', ut_meta_panel_vars.pop_url + 'fontpreview.html?TB_iframe=true');
             return false;
            
        });
                
        /* show header style */
        $('.ut-header-preview').click( function() {
            
            tb_show('', ut_meta_panel_vars.pop_url + 'headerpreview.html?TB_iframe=true');
             return false;
            
        });
        
        /* show header style */
        $('.ut-hero-preview').click( function() {
            
            tb_show('', ut_meta_panel_vars.pop_url + 'heropreview.html?TB_iframe=true');
             return false;
            
        });    
        
        
        /*
        |--------------------------------------------------------------------------
        | Section Background Video
        |--------------------------------------------------------------------------
        */
        
         /* disable parallax settings if video background is active */
        var video_status = $("#ut_section_video_state").val();
               
        if(video_status === 'on') {
            $("#ut_parallax_section").prop('selectedIndex', 1);
            $("#ut_parallax_section").attr("disabled", true ).wrap('<div class="disabled" />');            
        }
        
        $("#ut_section_video_state").change(function() { 
        
            if($(this).val() === 'on') {
                
                $("#ut_parallax_section").prop('selectedIndex', 1).trigger("change");
                $("#ut_parallax_section").attr("disabled", true ).parent().wrap('<div class="disabled" />');
                            
            } else {
                
                $("#ut_parallax_section").attr("disabled", false ).parent().unwrap();                
            
            }            
            
        });
        
        
        /*
        |--------------------------------------------------------------------------
        | Parallax 
        |--------------------------------------------------------------------------
        */
        
        /* disable background settings if parallax is active */
        var parallax_status = $("#ut_page_hero_parallax").val();
                
        if( parallax_status === 'on' ) {
            
            $("#ut_page_hero_image-attachment").prop('selectedIndex', 0);
            $("#ut_page_hero_image-attachment").attr("disabled", true ).wrap('<div class="disabled" />');
            
            $("#ut_page_hero_image-position").prop('selectedIndex', 0);
            $("#ut_page_hero_image-position").attr("disabled", true ).wrap('<div class="disabled" />');
        
        }
        
        $("#ut_page_hero_parallax").change(function() { 
        
            parallax_status = $(this).val();
            
            if( parallax_status === 'on' ) {
                
                $("#ut_page_hero_image-attachment").prop('selectedIndex', 0).trigger("change");
                $("#ut_page_hero_image-attachment").attr("disabled", true ).parent().wrap('<div class="disabled" />');
                
                $("#ut_page_hero_image-position").prop('selectedIndex', 0).trigger("change");
                $("#ut_page_hero_image-position").attr("disabled", true ).parent().wrap('<div class="disabled" />');
                            
            } else {
                
                $("#ut_page_hero_image-attachment").attr("disabled", false ).parent().unwrap();                
                $("#ut_page_hero_image-position").attr("disabled", false ).parent().unwrap();            
            
            }            
        
        });
        
        /* disable background settings of parallax is active */
        var parallax_status = $("#ut_parallax_section").val();
                
        if( parallax_status === 'on' ) {
            
            $("#ut_parallax_image-attachment").prop('selectedIndex', 0);
            $("#ut_parallax_image-attachment").attr("disabled", true ).wrap('<div class="disabled" />');
            
            $("#ut_parallax_image-position").prop('selectedIndex', 0);
            $("#ut_parallax_image-position").attr("disabled", true ).wrap('<div class="disabled" />');
        
        }
        
        $("#ut_parallax_section").change(function() { 
        
            parallax_status = $(this).val();
            
            if( parallax_status === 'on' ) {
                
                $("#ut_parallax_image-attachment").prop('selectedIndex', 0).trigger("change");
                $("#ut_parallax_image-attachment").attr("disabled", true ).parent().wrap('<div class="disabled" />');
                
                $("#ut_parallax_image-position").prop('selectedIndex', 0).trigger("change");
                $("#ut_parallax_image-position").attr("disabled", true ).parent().wrap('<div class="disabled" />');
                            
            } else {
                
                $("#ut_parallax_image-attachment").attr("disabled", false ).parent().unwrap();                
                $("#ut_parallax_image-position").attr("disabled", false ).parent().unwrap();            
            
            }            
        
        });
        
        
        
    });

})(jQuery);
 /* ]]> */    