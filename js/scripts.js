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
		if(confirm("Are you sure you want to delete this?")){
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

	$('.btn-search').on('click', function(){
		window.location.href = 'search.php?token=' + $('.search-value').val();
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
			}
		} 
	});

	return false;


});