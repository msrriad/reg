$(function(){
	$('.btn-register').on('click', function(){
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
});