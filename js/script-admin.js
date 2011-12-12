$(document).ready(function(){
	
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
});