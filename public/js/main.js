jQuery(function($) {'use strict',

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000
		});
	});


	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});

		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),

			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
			}
		}).done(function(data){
			form_status.html('<p class="text-success">' + data.message + '</p>').delay(3000).fadeOut();
		});
	});


	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});

	//jQuery time
	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches
	$(".next").click(function(){
	if(animating) return false;
	animating = true;
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
	step: function(now, mx) {
	//as the opacity of current_fs reduces to 0 - stored in "now"
	//1. scale current_fs down to 80%
	scale = 1 - (1 - now) * 0.2;
	//2. bring next_fs from the right(50%)
	left = (now * 50)+"%";
	//3. increase opacity of next_fs to 1 as it moves in
	opacity = 1 - now;
	current_fs.css({'transform': 'scale('+scale+')'});
	next_fs.css({'left': left, 'opacity': opacity});
	},
	duration: 800,
	complete: function(){
	current_fs.hide();
	animating = false;
	},
	//this comes from the custom easing plugin
	easing: 'easeInOutBack'
	});
	});

	$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
	step: function(now, mx) {
	//as the opacity of current_fs reduces to 0 - stored in "now"
	//1. scale previous_fs from 80% to 100%
	scale = 0.8 + (1 - now) * 0.2;
	//2. take current_fs to the right(50%) - from 0%
	left = ((1-now) * 50)+"%";
	//3. increase opacity of previous_fs to 1 as it moves in
	opacity = 1 - now;
	current_fs.css({'left': left});
	previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
	},
	duration: 800,
	complete: function(){
	current_fs.hide();
	animating = false;
	},
	//this comes from the custom easing plugin
	easing: 'easeInOutBack'
	});
	});

	$("#intronumber").tokenInput("/members/introducer/?q=query",{resultsLimit : null});

	  $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
        e.stopPropagation();
    });
});
