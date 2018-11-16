$(document).ready(function() {
  setTimeout(function() {
    if(!localStorage.age) {
      $.magnificPopup.open({
        items: {
          src: '<section class="question-block">'+
            '<div class="in-block">'+
              '<div class="question-logo"><img src="http://blog.youandyours.com/wp-content/uploads/2018/08/logo.png" alt="logo"></div>'+
              '<div class="question">Quick Question.<br>  Are you over the<br> age of 21?</div>'+
              '<div style="margin:0 auto; width:205px;">'+
                '<div class="yes js-popap-close"><span>Yes!</span></div>'+
                '<div class="no js-window-close"><span>No</span></div>'+
              '</div>'+
            '</div>'+
          '</section>',
          type: 'inline',
        },
        modal: true,
        mainClass: 'mfp-fade'
      });

      $('.js-popap-close').click(function() {
        localStorage.age = true;
        $.magnificPopup.close();
      });

      $('.js-window-close').click(function() {
        window.close();
      });
    }

  }, 1300);

  $('.fixed-today-bar button').click(function() {
    $(this).parent().fadeOut();
  });
})


$(document).ready(function() {

	// $('.popup-gallery').magnificPopup({
	// 	delegate: 'a',
	// 	type: 'image',
	// 	tLoading: 'Loading image...',
	// 	mainClass: 'mfp-img-mobile',
	// 	gallery: {
	// 		enabled: true,
	// 		navigateByImgClick: true,
	// 		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	// 	},
	// 	image: {
	// 		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
	// 	}
	// });
	//

	$('.js-menu-popup').magnificPopup({
  	type: 'image',
		tLoading: 'Loading image...',
    mainClass: 'mfp-fade',
		image: {
			tError: '<a href="%url%">The image</a> could not be loaded.'
		}
	});
});


$(document).on('ready', function() {

  // $(".center").slick({
  //   infinite: true,
  //   centerMode: true,
  //   slidesToShow: 2,
  //   autoplay: true,
  // 	autoplaySpeed: 4000,
  //   slidesToScroll: 1,
	// 	dots: false,
	// 	arrows: false
  // });

  $('.single-item').slick({
    autoplay:false,
  	slidesToScroll: 1,
  	dots:true,
  	arrows:true,
		infinite: true,
    responsive: [
      {
        breakpoint: 770,
        settings: {
          dots:false,
          arrows:false,
          autoplay:false,
        }
      }
    ]
  });

	$('.js-recent-blog').slick({
    autoplay: false,
  	slidesToScroll: 1,
		slidesToShow: 4,
  	dots: false,
  	arrows: true,
		infinite: true,
		responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
  				slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
  				slidesToScroll: 1
        }
      },
  		{
        breakpoint: 479,
        settings: {
          arrows: false,
          slidesToShow: 2,
  				slidesToScroll: 1
        }
      }
  ]
  });


  $('.top-header-btn').click(function(){
  	$('.over').fadeIn();

  });

  $('.over, .fa-times').click(function(){
  	$('.over').fadeOut();
  });

	/*
	* Shedule day
	*/
		var dateNow = new Date(),
				weekDayNow = dateNow.getDay();
		if( weekDayNow > 0 && weekDayNow < 3 ) {
			$('.js-today').html('Today: <span>Closed</span>');
		} else if( weekDayNow > 2 && weekDayNow < 6 ) {
			$('.js-today span').html('4pm - 10pm');
		} else {
			$('.js-today span').html('noon - 10pm');
		}

		$( '[class*="day-hours-"]' ).removeClass('active');
		$( '.day-hours-' + weekDayNow ).addClass('active');


	// Contact form
	$('#bookEvent').on('click', function() {
		$(this).attr('disabled', true);
	});
	$('#contactForm').on('submit',function(event){
			event.preventDefault();
			$.post( "http://blog.youandyours.com/wp-content/themes/yandy-master/js/mail.php",$( "#contactForm" )
			 .serialize())
			 .done(function(data){
				 iziToast.show({
				    title: 'Thank you!',
				    message: 'Your message has been successfully sent. We will contact you very soon!',
						position: 'topRight',
						color: 'green',
						onClosing: function () {
							$('#contactForm').trigger("reset");
							$(this).attr('disabled', false);
						}
				 });
			})
			.fail(function(data) {
				iziToast.error({
					 title: 'Error',
					 message: 'Sorry! Something went wrong(((',
					 position: 'topRight',
					 onOpened: function () {
						 $('#contactForm').trigger("reset");
						 $(this).attr('disabled', false);
					 }
				});
			});
	 });
});

$('.d-block img').attr('data-object-fit', true);

setTimeout(function() {

	//object-fit ie polyfill

	if ('objectFit' in document.documentElement.style === false) {
		document.addEventListener('DOMContentLoaded', function () {
			Array.prototype.forEach.call(document.querySelectorAll('img[data-object-fit="true"]'), function (image) {
				(image.runtimeStyle || image.style).background = 'url("' + image.src + '") no-repeat 50%/' + (image.currentStyle ? image.currentStyle['object-fit'] : image.getAttribute('data-object-fit'));

				image.src = 'data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'' + image.width + '\' height=\'' + image.height + '\'%3E%3C/svg%3E';
			});
		});
	}

}, 10);
