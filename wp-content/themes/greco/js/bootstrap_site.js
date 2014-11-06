jQuery(document).ready(function () {
	$('.page-modalidades .cycle-slideshow li').hover(function () {
		$(this).find('.conteudo').stop(true, true).delay(100).fadeIn({duration: 800, queue: true, easing: 'easeInOutExpo'});
	}, function () {
		$(this).find('.conteudo').stop(true, true).delay(100).fadeOut({duration: 800, queue: true, easing: 'easeInOutExpo'});
	});
});