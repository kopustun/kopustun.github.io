$(function() {

	// Custom JS

	$('.booth-packages').owlCarousel({
		items: 1,
		smartSpeed: 700,
		nav: true,
		touchDrag: true,
		navText: ['<a><i class="fa fa-long-arrow-left"></i>Previous</a>', '<a>Next<i class="fa fa-long-arrow-right"></i></a>']
	});

	$('.services-home').owlCarousel({
		center: true,
		margin: 0,
		items: 3,
		loop: true,
		smartSpeed: 700,
		nav: true,
		touchDrag: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:3
        }
    }
	});

	$('.gallery-home').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 700,
		nav: false,
		dots: true,
		dotsData: true,
		touchDrag: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
	});

	$('.buttonform').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in',
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});

//E-mail Ajax Send
	$("form.callback").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			$(th).find('.success').addClass('active').css('display', 'flex').hide().fadeIn();
			setTimeout(function() {
				$(th).find('.success').removeClass('active').fadeOut();
				th.trigger("reset");
			}, 3000);
		});
		return false;
	});

		//Resize Window
	function onResize() {
			$('.services').equalHeights();
		}onResize();
		window.onresize = function() {onResize()};
});







