$(document).ready(function(){
	
	
	
	$('.menuOpener a').click(function(){
		
		$('nav.topMenu').css('display','block');
	});
	

	$('.menuCloser a').click(function(){
		
		$('nav.topMenu').css('display','none');
	});
	
	
	
	$( window ).resize(function(){
		
		if($(document).width()>640)
		{
			$('nav.topMenu').css('display','');
		}
		
	});
	
	
	if($( "#slider-range" ).length)
	{	
	    $( "#slider-range" ).slider({
	        range: true,
	        min: 0,
	        max: 500,
	        values: [ 75, 300 ],
	        slide: function( event, ui ) {
	        	
	        	$('#priceFrom').val(ui.values[ 0 ]);
	        	$('#priceTo').val(ui.values[ 1 ]);
	        	
	        	$('#priceFromSpan').html(ui.values[ 0 ]);
	    	    $('#priceToSpan').html(ui.values[ 1 ]);
	        }
	      });
	    
	    $('#priceFrom').val($( "#slider-range" ).slider( "values", 0 ));
	    $('#priceTo').val($( "#slider-range" ).slider( "values", 1 ));
	    
	    $('#priceFromSpan').html($( "#slider-range" ).slider( "values", 0 ));
	    $('#priceToSpan').html($( "#slider-range" ).slider( "values", 1 ));
	}
	
	if($(".rightSizeChart").length)
	{
		$(".rightSizeChart a").click(function(){
			
			$('.mask, .sizeChart').css('display','block');
			$("html,body").scrollTop(0)
			
		});
		
		
		$(".mask, .popupCloser").click(function(){
			
			$('.mask, .sizeChart').css('display','none');
			
		});
	}
});