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
			$('#addPolicy').attr('disabled','disabled');
	});
	
});