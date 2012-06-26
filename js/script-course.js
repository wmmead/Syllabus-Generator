$(document).ready(function(){

	$("body").delegate(".clonedInput a", "click", function(){
		var thisButton = $(this);
		thisButton.toggleClass("indentbtn exdentbtn");
		thisButton.prev('input').toggleClass("txtfield txtfieldind");
		 
		var hiddenVal = thisButton.next('input').attr('value');
		
		if(hiddenVal == 0)
		{
			thisButton.next('input').attr('value', '2');	
		}
		else
		{
			thisButton.next('input').attr('value', '0');
		}
		return false;
	});

	
	$('#addComp').click(function() {
		var num     = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
		var newNum  = new Number(num + 1);      // the numeric ID of the new input field being added

		// create the new element via clone(), and manipulate it's ID using newNum value
		var newElem = $('#input' + num).clone().attr('id', 'input' + newNum);

		// manipulate the name/id values of the input inside the new elements
		newElem.children('label').attr('for', 'comp' + newNum);
		newElem.children('input[type="text"]').attr('id', 'comp' + newNum).attr('name', 'comp' + newNum).attr('value', '');
		newElem.children('a').attr('id', 'indent' + newNum);
		newElem.children('input[type="hidden"]').attr('id', 'level' + newNum).attr('name', 'level' + newNum);

		// insert the new element after the final "duplicatable" input field
		$('#input' + num).after(newElem);

		// business rule: you can only add 50 competencies
		if (newNum == 50)
			$('#addComp').attr('disabled','disabled');
	});
	
	$('#addPrereq').click(function() {
		
		var num     = $('.clonedPrereq').length;
		var newNum  = new Number(num + 1);

		var newElem = $('#prereq-input' + num).clone().attr('id', 'prereq-input' + newNum);

		newElem.children('label').attr('for', 'prereq' + newNum);
		newElem.children('input').attr('id', 'prereq' + newNum).attr('name', 'prereq' + newNum).attr('value', '');

		$('#prereq-input' + num).after(newElem);

		if (newNum == 50)
			$('#addPrereq').attr('disabled','disabled');
	});
	
	$(".hide").hide();
	
	$(".fold").click(function(){
		
		$('.fold').css('background-image', 'url(images/sidearrow.png)');
		$(this).css('background-image', 'url(images/downarrow.png)');
		
		var currentUL = $(this).next('ul');
		$('.hide').not(currentUL).hide();
		
		currentUL.slideToggle('slow', function(){
			
		if($(this).is(':hidden'))
			{
				currentUL.prev('h4').css('background-image', 'url(images/sidearrow.png)');
			}	
		
		});
			
	});


});