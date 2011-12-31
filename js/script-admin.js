$(document).ready(function(){
	
	$('#addHoliday').click(function() {
		var num     = $('.clonedHoliday').length;
		var newNum  = new Number(num + 1);

		var newElem = $('#holiday' + num).clone().attr('id', 'holiday' + newNum);
		
		newElem.children('.weekday').attr('id', 'wkday' + newNum).attr('name', 'wkday' + newNum).val(0);
		newElem.children('.day').attr('id', 'daymo' + newNum).attr('name', 'daymo' + newNum).val(0);
		newElem.children('.month').attr('id', 'month' + newNum).attr('name', 'month' + newNum).val(0);
		newElem.children('.descp').attr('id', 'descp' + newNum).attr('name', 'descp' + newNum).attr('value', 'holiday name');

		$('#holiday' + num).after(newElem);

		if (newNum == 10)
			$('#addHoliday').attr('disabled','disabled');
	});
	
	$('#addPolicy').click(function() {
		var num     = $('.clonedPolicy').length;
		var newNum  = new Number(num + 1);

		var newElem = $('#policyinput' + num).clone().attr('id', 'policyinput' + newNum);
		
		newElem.children('input').attr('id', 'policy' + newNum).attr('name', 'policy' + newNum).attr('value', '');

		$('#policyinput' + num).after(newElem);

		if (newNum == 50)
		{
			$('#addPolicy').attr('disabled','disabled');
		}
	});
	
	$('.clonedSection textarea').tinymce({
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
	
	$('#addSection').click(function() {
		var num     = $('.clonedSection').length;
		var newNum  = new Number(num + 1);

		$("<div></div>").attr('id', 'sectioninput' + newNum).attr('class', 'clonedSection').appendTo('.fieldcontainer');
		$("#sectioninput" + newNum).html("<label for='title" + newNum + "'>Title</label><br /><input type='text' id='title" + newNum +"' /><br /><br /><label for='content" + newNum + "'>Content</label>");
		$('#title' + newNum).attr('name', 'title' + newNum);
		$('<textarea cols="55" rows="15"></textarea>').attr('id', 'content' + newNum).attr('name', 'content' + newNum).appendTo("#sectioninput" + newNum);
		$('#content' + newNum).tinymce({
			script_url : 'tiny_mce/tiny_mce.js',
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
	
});