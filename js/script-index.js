$(document).ready(function(){
	
	$("input[name^=perc]").sum({
		bind: "keyup",
		selector: "#totalpercent",
		oncalc: function(){
			if($("#totalpercent").val() != "100"){ $('#totalpercent').css("color", "red"); }
			else{ $("#totalpercent").css("color", "green"); }
			}
		});
	
	$(".hide").hide();
	
	$(".fold").click(function(){
		
		$('.fold').css('background-image', 'url(images/sidearrow.png)');
		$(this).css('background-image', 'url(images/downarrow.png)');
		
		var currentDiv = $(this).next('div');
		$('.hide').not(currentDiv).hide();
		
		currentDiv.slideToggle('slow', function(){
			
		$(".mceLayout").attr("style", "width:480px; margin-bottom:15px;");// this is a hack to fix width on the tinymce textboxes
			
		if($(this).is(':hidden'))
			{
				currentDiv.prev('h4').css('background-image', 'url(images/sidearrow.png)');
			}	
		
		});
			
	});
	
	$('.tinymice').tinymce({
			script_url : 'js/tinymce/tinymce.min.js',
			theme : "modern",
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
	
	
	$('#addEval').click(function() {
		var num     = $('.clonedeval').length;
		var newNum  = new Number(num + 1);

		var newElem = $('#eval' + num).clone().attr('id', 'eval' + newNum);

		newElem.children('.description').attr('id', 'desc' + newNum).attr('name', 'desc' + newNum).attr('value', '');
		newElem.children('.percent').attr('id', 'perc' + newNum).attr('name', 'perc' + newNum).attr('value', '');

		$('#eval' + num).after(newElem);

		$("input[name^=perc]").sum({
		bind: "keyup",
		selector: "#totalpercent",
		oncalc: function(){
			if($("#totalpercent").val() != "100"){ $('#totalpercent').css("color", "red"); }
			else{ $("#totalpercent").css("color", "green"); }
			}
		});
		
		if (newNum == 10)
		{
			$('#addEval').attr('disabled','disabled');
		}
	});
	
	$('#addBook').click(function() {
		var num     = $('.clonedbook').length;
		var newNum  = new Number(num + 1);

		var newElem = $('#book' + num).clone().attr('id', 'book' + newNum);
		
		newElem.children('.booktype').attr('name', 'booktype' + newNum).val('');
		
		newElem.children('.titlelabel').attr('for', 'bookname' + newNum);
		newElem.children('.title').attr('id', 'bookname' + newNum).attr('name', 'bookname' + newNum).val('');
		
		newElem.children('.authorlabel').attr('for', 'author' + newNum);
		newElem.children('.author').attr('id', 'author' + newNum).attr('name', 'author' + newNum).val('');
		
		newElem.children('.publabel').attr('for', 'pub' + newNum);
		newElem.children('.publisher').attr('id', 'pub' + newNum).attr('name', 'pub' + newNum).val('');
		
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
	
	// Shakes the login box if there is an error logging in
	if( $('.loginerror').length >0 )
	{
		setTimeout('shakebox()', 500);
	}

});

// the shake function for the loginbox
function shakebox()
{
	$('#loginform').animate({ left: '100' }, 80, function(){
		$('#loginform').animate({ left: '-100' }, 80, function(){
			$('#loginform').animate({ left: '70' }, 80, function(){
				$('#loginform').animate({ left: '-70' }, 80, function(){
					$('#loginform').animate({ left: '0' }, 1000, 'easeOutElastic');
				});
			});
		});
	});
}