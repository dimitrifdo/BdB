$(function(){
	var docHeight = parseInt($(document).height());
	$('.menu-container').height(docHeight);
	$('.menu-container').hide();
	$('.video-popup').css("display", "none");
	console.log("WORKING");

});


$(function(){
	$('.menu-btn-holder').click(function(){
		var isitopen = $(this).hasClass('opened')
		if (isitopen) {

			$('.logo-container').delay(600).fadeIn(200);
			$(this).removeClass('opened');
			$('.menu-container').delay(1000).fadeOut(200).removeClass('showing');
			$('body').css('overflow','auto');
			$('.menu-items a').removeClass('activated');
		} else {
			$(this).addClass('opened');
			$('.logo-container').fadeOut(200);
			$('.menu-container').fadeIn(200).addClass('showing');
			$('.menu-items a').delay(1000).addClass('activated');
			$('body').delay(1200).css('overflow','hidden');
			//$('.activated').css("opacity", "1");
		}
	});
});


$(function(){
	$('.menu-item-8 a').mouseenter(function(){
		if ($(window).width() < 1024) {
			$('.sub-menu').addClass('mobile');
		} else {
			$('.sub-menu').fadeIn('fast');
		}
	});

	$('.sub-menu').mouseleave(function(e){

		// NOT REALLY NEEDED var evt = $(e.target).attr("class");

		if (($(window).width() < 1024)) {
			$('.sub-menu').delay(300).removeClass('mobile');
		} else {
			$('.sub-menu').fadeOut('fast');
		}
	});

	$('.menu-item-57, .logo-container, .main-container').mouseenter(function(e){

		// NOT REALLY NEEDED var evt = $(e.target).attr("class");

		if (($(window).width() < 1024)) {
			$('.sub-menu').delay(300).removeClass('mobile');
		} else {
			$('.sub-menu').fadeOut('fast');
		}
	});


});

$(function(){
	if ($(window).width() > 1024) {
		$('.menu-item-181, .menu-item-57').mouseenter(function(e){
			$('.sub-menu').fadeOut('fast');
		});
	}
});



$(function(){
	$('.video-player .vc_single_image-img, .play-btn').click(function(){
	
		$('.video-popup').css("position", "fixed !important");
		$('.video-popup').fadeIn('slow');
		$('.blackout').fadeIn('fast');
	})

	$('.blackout').click(function(e){
		
		var vidPopout = $('.video-popup');
		//var mcPopout = $('.mc-sub-popout-2');
		var target = e.target;

		//console.log(target);

		if ( $(target).hasClass('apply-popout') 
			|| $(target).hasClass('vc_btn3-style-custom') 
			|| $(target).hasClass('mc-sub-popout-2')
			|| $(target).hasClass('mc-sub-btn')
			|| $(target).hasClass('tnc-btn') ) {
			console.log("To exit, please click anywhere else");console.log("TRIG");
		} else {
			$('.video-popup, .blackout, .mc-prog-popout, .tnc-popout').fadeOut('fast');
			//console.log("TRIG");
			$('.blackout').fadeOut('fast');
		}

	});
});