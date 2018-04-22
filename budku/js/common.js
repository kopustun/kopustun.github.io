$(function() {

	// Custom JS
	
	$('.booth-packages').owlCarousel({
		items: 1,
		smartSpeed: 700,
		nav: true,
		touchDrag: true,
		navText: ['<a><i class="fa fa-long-arrow-left"></i>Previous</a>', '<a>Next<i class="fa fa-long-arrow-right"></i></a>']
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
