	(function($){

	// Menu icon

	$('.menu-icon').click(function(){
		$(this).toggleClass('fa-bars fa-close');
		$('#nav').slideToggle();
	});

	// Search icon

	$('.fa-search').click(function(){
		$('.mobile-search').slideToggle();
	});
})

	// Owl Carousel
jQuery(document).ready(function($){

	var one = $("#one")
	var two = $("#two")
	var three = $("#three")

	one.owlCarousel({
		autoplay: true,
		autoplaySpeed:2000,
		autoplayTimeout:2000,
		rewind:true,
		responsive:{
			0:{
				items:1
			},
			600:{
					items:2
				},
				1000:{
					items:3
				}
			}
		
			})

	two.owlCarousel({
		items:1,
		autoplay: true,
	    autoplaySpeed:3000,
		autoplayTimeout:3000,
		rewind:true,
		responsive:{
			0:{
				items:1
			},
			600:{
					items:1
				},
			1000:{
					items:1
				}
			}

			})

	three.owlCarousel({
		items:2,
		autoplay: true,
		autoplaySpeed:1000,
		autoplayTimeout:5000,
		rewind:true,
		responsive:{
			0:{
					items:1
				},
			600:{
					items:2
				},
			1000:{
					items:2
				}
			}

		
		});
	});

