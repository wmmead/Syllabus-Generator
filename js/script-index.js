$(document).ready(function(){
	
	$(".hide").hide();
	
	$(".fold").click(function(){
		
		$('.fold').css('background-image', 'url(images/sidearrow.png)');
		$(this).css('background-image', 'url(images/downarrow.png)');
		
		var currentDiv = $(this).next('div');
		$('.hide').not(currentDiv).hide();
		
		currentDiv.slideToggle('slow', function(){
			
		$(".mceLayout").attr("style", "width:400px;");// this is a hack to fix width on the tinymce textboxes
			
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
			
	$('#addComp').click(function() {
		var num     = $('.clonedInput').length;
		var newNum  = new Number(num + 1);

		var newElem = $('#input' + num).clone().attr('id', 'input' + newNum);

		newElem.children('label').attr('for', 'comp' + newNum);
		newElem.children('input').attr('id', 'comp' + newNum).attr('name', 'comp' + newNum).attr('value', '');

		$('#input' + num).after(newElem);

		
		if (newNum == 10)
		{
			$('#addComp').attr('disabled','disabled');
		}
	});
	
	$('#addPolicy').click(function() {
		var num     = $('.clonedPolicy').length;
		var newNum  = new Number(num + 1);

		var newElem = $('#policyinput' + num).clone().attr('id', 'policyinput' + newNum);

		newElem.children('label').attr('for', 'policy' + newNum);
		newElem.children('input').attr('id', 'policy' + newNum).attr('name', 'policy' + newNum).attr('value', '');

		$('#policyinput' + num).after(newElem);

		
		if (newNum == 10)
		{
			$('#addPolicy').attr('disabled','disabled');
		}
	});
	
	$('#addBook').click(function() {
		var num     = $('.clonedbook').length;
		var newNum  = new Number(num + 1);

		var newElem = $('#book' + num).clone().attr('id', 'book' + newNum);
		
		newElem.children('.booktype').attr('name', 'booktype' + newNum);
		
		newElem.children('.titlelabel').attr('for', 'bookname' + newNum);
		newElem.children('.title').attr('id', 'bookname' + newNum).attr('name', 'bookname' + newNum).val('');
		
		newElem.children('.authorlabel').attr('for', 'author' + newNum);
		newElem.children('.author').attr('id', 'author' + newNum).attr('name', 'author' + newNum).val('');
		
		newElem.children('.datelabel').attr('for', 'date' + newNum);
		newElem.children('.date').attr('id', 'date' + newNum).attr('name', 'date' + newNum).val('');
		
		newElem.children('.isbnlabel').attr('for', 'isbn' + newNum);
		newElem.children('.isbn').attr('id', 'isbn' + newNum).attr('name', 'isbn' + newNum).val('');
		
		newElem.children('.linklabel').attr('for', 'link' + newNum);
		newElem.children('.link').attr('id', 'link' + newNum).attr('name', 'link' + newNum).val('');
		

		$('#book' + num).after(newElem);

		if (newNum == 10)
		{
			$('#addBook').attr('disabled','disabled');
		}
	});

});