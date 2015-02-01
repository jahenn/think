/* requires istope and images loaded plugin */

(function($) {
	
	$.fn.utmasonry = function( options ) {
				
		var settings = $.extend({
            columns		: 4 ,
			tcolumns	: 3 ,
			mcolumns	: 2 ,
			unitHeight  : '',
			itemClass 	: 'isotope-item'
        }, options);

		return this.each(function(options){
									
			var $win = $(window),
				$container = $(this),
				unitHeight = '';
			
			function getUnitWidth() {
                    
				var width,
					containersize = $container.parent().width(),
					columns = settings.columns;
				
				if(containersize <= 1024) {
                    columns = settings.tcolumns;
                } 
				
				if(containersize <= 768) {
                    columns = settings.mcolumns;
                }
                	
				width = containersize / columns;
				return width;
				
			}
			
			
			function setWidths() {
                    
				var unitWidth = getUnitWidth();
				
				if( settings.unitHeight ) {
					unitHeight = settings.unitHeight;
				} else {
					unitHeight = Math.round(unitWidth);
				}
															
				/* set item width */
				$container.children().width( unitWidth ).addClass('show');
				
				if(unitHeight !== 'dynamic') {
					
					/* set item height */
					$container.children().height( unitHeight );
					
				}
				
			}
			
			
			function centerImages() {
                
				$container.children().each(function() {
					
					var $this		 = $(this),
						imagewidth   = $this.find('figure').find('img').attr("width"),
						parentwidth  = $this.width();
					
					if( imagewidth > parentwidth ) {
												
						$this.find('figure').find('img').css({ "left" : -( imagewidth - parentwidth ) / 2 });				
					
					} else if( imagewidth < parentwidth ) {
											
						$this.find('figure').find('img').css({ "left" : ( parentwidth - imagewidth  ) / 2 });
					}
					
				});
				
				// trigger scroll for lazy load
                $win.trigger("scroll");
				
			}
			
									
			$(window).load(function() {	
					
				setWidths();
								
				if(settings.unitHeight) {
					unitHeight = settings.unitHeight;
				} else {
					unitHeight = getUnitWidth();
				}
										  
				$container.isotope({
					
					animationEngine : 'jquery',
					itemSelector 	: '.ut-masonry',
					transformsEnabled: false,
					layoutMode: 'perfectMasonry',
					itemClass : settings.itemClass,
					perfectMasonry: { liquid: false , columnWidth: getUnitWidth() },
					onLayout: function( $elems, instance ) {
													
						$(window).trigger( "scroll" );
						
					}
				 			   
				});
				
				centerImages();
			
			});
			
			$(window).smartresize(function(){
                    
				setWidths(); 
				
				if(settings.unitHeight) {
					unitHeight = settings.unitHeight;
				} else {
					unitHeight = getUnitWidth();
				}
				
				$container.isotope({
					
					animationEngine : 'jquery',
					itemSelector 	: '.ut-masonry',
					transformsEnabled: false,
					layoutMode: 'perfectMasonry',
					itemClass : settings.itemClass,
					perfectMasonry: { liquid: false , columnWidth: getUnitWidth() },
					onLayout: function( $elems, instance ) {
					
						$('.parallax-banner').each(function(index, element) {
							$(this).trigger( "scroll" );							
						});
					
					}
				
				});
				
				centerImages();                    
														
			});
			
		});

    }

}(jQuery));