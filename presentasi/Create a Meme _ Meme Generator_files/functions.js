;(function($, window, document, undefined) {
	// vars
	var $win = $(window);
	var $doc = $(document);

	$doc.on('ready', function() {
		// show/hide mobile navigation
		$('.menu-btn').on('click', function(e){
			$(this).toggleClass('expanded')
				.closest('.header-top').find('.header-nav').stop(true).slideToggle();
			$('.custom-mobile-nav').fadeToggle();

			e.preventDefault();
		});

		// show/hide tabs navigation
		$('.btn-filter').on('click', function(e){
			$(this).toggleClass('expanded')
				.closest('.tabs-small').find('.tabs-nav').stop(true).slideToggle();

			e.preventDefault();
		});

		// update text on tabs nav click for mobile
		$('.tabs-nav-small a').on('click', function(e){
			if($win.width() <= 767) {
				var linkText = $(e.target).text();
				
				$('html, body').animate({ scrollTop: 0 });

				$(this).closest('.tabs-nav-small').slideUp();
				$('.btn-filter').html(linkText);
			}
		});

		// tabs nav active content
		$('.tabs .tabs-nav a').on('click', function(e){
			var $this = $(this);
			var href = $this.attr('href');

			$(href).addClass('active').siblings().removeClass('active');
			$(this).parent().addClass('active').siblings().removeClass('active');

			e.preventDefault();
		});

		// custom navigation for mobile 
		$('.custom-mobile-nav li a').on('click', function(e){
			if($win.width() < 767) {
				var $this = $(this);
				var href = $this.attr('href');

				$(href).addClass('active').siblings().removeClass('active');
				$(this).parent().addClass('active').siblings().removeClass('active');

				$('html, body').animate({ scrollTop: 0 });
				e.preventDefault();
			}
		});

		// main slider init
		//$('.slider-carousel').owlCarousel({
		//	margin: 10,
		//	loop: true,
		//	nav: true,
		//	navText: '',
		//	items: 1
		//});

		// sticky nav
		$('.tabs-nav-wrapper, .custom-mobile-nav').sticky({ topSpacing: 50 });

		// overflow scrollbar
		$('.popup-comments').mCustomScrollbar({
			setHeight: 600
		});

		// header search form show
	    $('.search-mobile .search-icon').on('click', function(e){
	    	$(this).next('.search-input')
	    		.addClass('visible')
	    		.find('.text-input').focus();

	    	e.preventDefault();
	    });

	    // close header search bar 
	    $('.close-search-input').on('click', function(e){
	    	$(this).parent('.search-input').removeClass('visible');

	    	e.preventDefault();
	    });

	    // add submit comments button on input click
	    $('.comment-add-input .input-text').on('click', function(){
	    	$(this).parent().addClass('active');
	    });

	    // show/hide submit button for cooments
		$('.comment-add-input .input-text').on('keyup', function(){
			var $this = $(this);

			if(!$this.val()) {
				$this.parent().removeClass('active');
			} else {
				$this.parent().addClass('active');
			}
		});

		// tooltip init
		$('.tipso').tipso({
			position: 'left',
			background: '#e54d3c',
			offsetY: -10,
			background: '#38353c',
			titleBackground: '#e54d3c',
			speed: 100,
			size: 'small',
			width: 240,
			delay: 500
		});

		// init magnific popup
		$('.open-popup').magnificPopup({
		  type:'inline'
		});

		// show/hide "create group" option
		$('.group-cr-text').on('click', function(){
			var $this = $(this);

			$this.closest('.group-create').toggleClass('active');
		});
	});

	var previousScroll = 0;
    
    $win.on('scroll', function(){
    	// hide mobile nav on scroll down and show on scroll up
        var currentScroll = $(this).scrollTop();
        
        // if (currentScroll > 0 && currentScroll < $doc.height() - $win.height()){
        //     if (currentScroll > previousScroll){
        //         window.setTimeout(hideNav, 300);
        //     } else {
        //         window.setTimeout(showNav, 300);
        //     }
        //     previousScroll = currentScroll;
        // }
    });

    // functions
    function hideNav() {
        $('.nav-mobile').removeClass('is-visible').addClass('is-hidden');
    }
    function showNav() {
        $('.nav-mobile').removeClass('is-hidden').addClass('is-visible');
    }
})(jQuery, window, document);