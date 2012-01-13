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
	
	$('.tinymice').tinymce({
			script_url : 'js/tiny_mce/tiny_mce.js',
			theme : "advanced",
			plugins : "spellchecker, paste", 
			theme_advanced_buttons1 : "bold,italic,underline,|,bullist,numlist,|,outdent,indent,|,code,|,spellchecker",
			theme_advanced_buttons2 : "",
			theme_advanced_buttons3 : "",      
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_resizing : false,
			paste_create_paragraphs : false,
			paste_create_linebreaks : false,
			paste_use_dialog : true,
			paste_auto_cleanup_on_paste : true,
			paste_convert_middot_lists : true,
			paste_unindented_list_class : "unindentedList",
			paste_convert_headers_to_strong : true
			});

});