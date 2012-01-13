$(document).ready(function(){
	
	$(".hide").hide();
	
	$(".fold").click(function(){
		
		$('.fold').css('background-image', 'url(images/sidearrow.png)');
		$(this).css('background-image', 'url(images/downarrow.png)');
		
		var currentDiv = $(this).next('div');
		$('.hide').not(currentDiv).hide();
		
		currentDiv.slideToggle('slow', function(){
			
		if($(this).is(':hidden'))
			{
				currentDiv.prev('h4').css('background-image', 'url(images/sidearrow.png)');
			}	
		
		});
			
	});

});