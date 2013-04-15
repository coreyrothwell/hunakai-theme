$(function(){
	$('.nav-button').on('click',function(e){

		var $nav = $('.navigation'),
			$icon = $(this).find('i');

		$nav.slideToggle(function(){
			if($nav.is(':visible')){
				$icon.removeClass('icon-angle-down').addClass('icon-angle-up');
			} else {
				$icon.addClass('icon-angle-down').removeClass('icon-angle-up');
			}
		});

		
		e.preventDefault();

	});
});