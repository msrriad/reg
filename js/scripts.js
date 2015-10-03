$(function(){
	$('.btn-toggle').on('click', function(){
		if($('.info').hasClass('show')){
			$('.info').removeClass('show');
			$('.info').addClass('hide');
			$('.well').removeClass('hide');
			$('.well').addClass('show');
		}else{
			$('.info').addClass('show');
			$('.info').removeClass('hide');
			$('.well').addClass('hide');
			$('.well').removeClass('show');
		}
	});

	$('.btn-verify').on('click', function(){
		if(confirm("Are you sure you want to do this?")){
			var button = $(this);
			$.post('ajax.php', {action: 'verify', id: button.data('id')}, function(response){
				response = $.parseJSON(response);
				console.log(response);
				if(response){
					button.removeClass('btn-danger');
					button.addClass('btn-success');
					button.text('Verified');
					button.attr('disabled', 'disabled');
				}
			});
		}
		else{
			return false;
		}
	});

	$('#guest_number').on('change', function(){
		var $guest_number = $(this).val();

		switch(parseInt($guest_number)){
			case 1:
				$('#amount').val(700);
				break;
			case 2:
				$('#amount').val(900);
				break;
			case 3:
				$('#amount').val(1100);
				break;
			default:
				$('#amount').val(500);
				break;
		}
	});

	$('.btn-search').on('click', function(){
		window.location.href = 'search.php?token=' + $('.search-value').val();
	});

	$('.btn-print').on('click', function(){
		window.print();
	});
	 
	// pass options to ajaxForm 
	$('.registration-form').ajaxForm({
		url: 'ajax.php',
		data: { action: 'registration' },
		// dataType:  'json',
		success: function(response) {
			response = $.parseJSON(response);
			if(response.response){
				alert('Please keep this token no for future use => ' + response.data.token);
				$('.registration-form').resetForm();
			}
		} 
	});

	return false;

});