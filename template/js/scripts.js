(function ($) {
	"use strict";

	// Page Loaded...
	$(document).ready(function () {

		/*==========  Responsive Navigation  ==========*/
		$('.main-nav').children().clone().appendTo('.responsive-nav');
		$('.responsive-menu-open').on('click', function(event) {
			event.preventDefault();
			$('body').addClass('no-scroll');
			$('.responsive-menu').addClass('open');
			return false;
		});
		$('.responsive-menu-close').on('click', function(event) {
			event.preventDefault();
			$('body').removeClass('no-scroll');
			$('.responsive-menu').removeClass('open');
			return false;
		});

		/*==========  Accordion  ==========*/
		$('.panel-heading a').on('click', function() {
			$('.panel-heading').removeClass('active');
			$(this).parents('.panel-heading').addClass('active');
			$('.panel-heading .icon').removeClass('rotate');
			$(this).find('.icon').addClass('rotate');
		});

		/*==========  Portfolio Thirds  ==========*/
		var $portfolioThirdsContainer = $('#portfolio-thirds').imagesLoaded(function() {
			$('#portfolio-thirds .item').height($('#portfolio-thirds .item').width());
			$(window).on('resize', function() {
				$('#portfolio-thirds .item').height($('#portfolio-thirds .item').width());
			});
			$portfolioThirdsContainer.isotope({
				itemSelector: '.item',
				layoutMode: 'masonry',
				percentPosition: true,
				masonry: {
					columnWidth: $portfolioThirdsContainer.find('.portfolio-sizer')[0]
				}
			});
			return false;
		});
		$('#portfolio-thirds-filters').on('click', 'button', function() {
			$('#portfolio-thirds-filters button').removeClass('active');
			$(this).addClass('active');
			var filterValue = $(this).attr('data-filter');
			$portfolioThirdsContainer.isotope({filter: filterValue});
		});

		/*==========  Portfolio Fifths  ==========*/
		var $portfolioFifthsContainer = $('#portfolio-fifths').imagesLoaded(function() {
			$portfolioFifthsContainer.isotope({
				itemSelector: '.item',
				layoutMode: 'masonry',
				percentPosition: true,
				masonry: {
					columnWidth: $portfolioFifthsContainer.find('.portfolio-sizer')[0]
				}
			});
			return false;
		});
		$('#portfolio-fifths-filters').on('click', 'button', function() {
			$('#portfolio-fifths-filters button').removeClass('active');
			$(this).addClass('active');
			var filterValue = $(this).attr('data-filter');
			$portfolioFifthsContainer.isotope({filter: filterValue});
		});

		/*==========  Portfolio Details  ==========*/
		var $portfolioDetailsContainer = $('#portfolio-details').imagesLoaded(function() {
			$portfolioDetailsContainer.isotope({
				itemSelector: '.item',
				layoutMode: 'masonry',
				percentPosition: true,
				masonry: {
					columnWidth: $portfolioDetailsContainer.find('.portfolio-sizer')[0]
				}
			});
			return false;
		});

		/*==========  Home Slider  ==========*/
		$('#home-slider').flexslider({
			selector: '.slides > .slide',
			controlNav: false,
			pauseOnHover: false,
			smoothHeight: true
		});

		/*==========  Testimonial Slider  ==========*/
		$('.testimonial-slider').owlCarousel({
			loop: true,
			autoplay: true,
			items: 3,
			nav: false,
			dots: true,
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			center: true,
			responsive: {
				0:{
					items: 1
				},
				768:{
					items: 3
				}
			}
		});

		/*==========  Testimonial Simple Slider  ==========*/
		$('.testimonial-simple-slider').owlCarousel({
			loop: true,
			autoplay: true,
			items: 1,
			nav: true,
			dots: false,
			navText: ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
		});

	});
	
	try {

	  var ZoomImage = jQuery('.zoom, .zoom-image');
	    ZoomImage.magnificPopup({
	        type: 'image',
	         gallery: {
	            enabled: true
	        }
	    });
	  } catch(err) {
	}



 	/*-------------------------------------------------*/
	/* =  Scroll to TOP
	/*-------------------------------------------------*/
	$('a[href="#top"]').on('click', function(){
        $('html, body').animate({scrollTop: 0}, 'slow');
        return false;
    });


	/*-------------------------------------------------*/
	/* =  count increment
	/*-------------------------------------------------*/
	try {
		$('.statistic-post').appear(function() {
			$('.timer').countTo({
				speed: 1000,
				refreshInterval: 60,
				formatter: function (value, options) {
					return value.toFixed(options.decimals);
				}
			});
		});
	} catch(err) {

	}
	
	/*========== Feedback Form Class ===========*/


    function FeedbackForm(form) {
      	this.form=form;
	this.data=form.serializeArray();
        this.errorContainer=form.find('#contact-error');
        this.successContainer=form.find('#contact-success');
        this.loadingContainer=form.find('#contact-loading');
        
	this.fields=['name','phone','address','comment'];
	this.errorStatus = {
		name:"Не допускается ввод ссылок на сторонние ресурсы.",
		phone:"Введите номер телефона в корректном формате.",
		address:"Не допускается ввод ссылок на сторонние ресурсы.",
		comment:"Не допускается ввод ссылок на сторонние ресурсы."
	};        
        console.log(this.data);
    }

    FeedbackForm.prototype.clearStatus = function() {
        this.errorContainer.fadeOut();
        this.errorContainer.find('.field').remove();
        this.successContainer.fadeOut();
        this.successContainer.find('.field').remove();
        this.loadingContainer.fadeOut();
    }

    FeedbackForm.prototype.setErrorStatus = function(obj) {
        this.errorContainer.fadeIn();
	for(let i in obj.errorFields) {
                this.errorContainer.append("<div class='message field'>"+this.errorStatus[obj.errorFields[i]]+"</div>");
	}
    }


    FeedbackForm.prototype.validate = function () {
	let emailtmpl = /[a-zA-Z0-9_\-\.]+@[a-z0-9]+\.(ru|ua|by|kz|com|[a-z]{2,3}|��)/;
	let phonetmpl = /^\+?[78][\s\-]?\(?\d\d\d\)?[\s\-]?\d{3}[\-\s]?\d\d[\-\s]?\d\d$/;
	let urltmpl = /(http[s]?:\/\/)?(www\.)?[a-z0-9�-�_\-]+\.(ru|ua|by|kz|com|[a-z]{2,3}|��)/;
	
	let obj = {'isValid': true, 'errorFields':[]};

        for(let i in this.data) {
            var x=this.data[i].value.trim();
            switch(this.data[i].name) {
                case "contact-name":
                    if(x.length==0 || urltmpl.test(x)) {
                        obj.isValid=false;	
                        obj.errorFields.push('name');
                    }
                    break;
                case "contact-phone":
                    if(!phonetmpl.test(x)) {
                        obj.isValid=false;	
                        obj.errorFields.push('phone');
                    }
                    break;
                case "contact-message":
                    if(urltmpl.test(x)) {
                        obj.isValid=false;	
                        obj.errorFields.push('comment');
                    }
                    break;
                case "contact-address":    
                    if(urltmpl.test(x)) {
                        obj.isValid=false;	
                        obj.errorFields.push('address');
                    }
            }
        }
	return obj;
    }
    FeedbackForm.prototype.setData = function() {
	this.data=this.form.serializeArray();
    }
    FeedbackForm.prototype.sendStat = function() {
	ga('send', 'event', 'Form', 'Send', 'SendForm');		
    }

    FeedbackForm.prototype.printResponse= function(data) {
        switch(data.status) {
            case "error":
                this.errorContainer.fadeIn();        
                this.errorContainer.append("<div class='message field'>"+data.response+"</div>");
                break;
            case "success":
                this.successContainer.fadeIn();        
                this.successContainer.append("<div class='message field'>"+data.response+"</div>");
                
	}
    }
    FeedbackForm.prototype.submit = function() {
        this.loadingContainer.fadeIn();        
        this.setData();
	let validRes=this.validate();			
	this.clearStatus();

	if(!validRes.isValid) {
		this.setErrorStatus(validRes);
	}
	else {
//		this.sendStat();
		let that=this;
		$.ajax({		
                        url: this.form.attr("action"),
			type:"POST", 
			data: {
				type: $('#type').val(),
				contact_name: $('#contact-name').val(),
				contact_email: $('#contact-email').val(),
				contact_phone: $('#contact-phone').val(),
				contact_subject: $('#contact-subject').val(),
				contact_message: $('#contact-message').val()
			},
			success: function(data) {
console.log(data);
				that.printResponse(JSON.parse(data));
			},
			error:  function(xhr, str){
				that.printResponse({'status':str,'response':"Ошибка отправки"});
			}
		});   
	}
    }
	/*==========  Contact Form  ==========*/

	var $fd=new FeedbackForm($('#contact-form'));
	$('#contact-form').submit(function() {$fd.submit(); return false;});

	/*==========  Footer Map  ==========*/

	/*==========  Full Width Map  ==========*/
	var full_width_map;
	function initialize_full_width_map() {
		if ($('.full-width-map').length) {
			var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
			var mapOptions = {
				zoom: 14,
				center: myLatLng,
				scrollwheel: false,
				panControl: false,
				zoomControl: false,
				scaleControl: false,
				mapTypeControl: false,
				streetViewControl: false
			};
			full_width_map = new google.maps.Map(document.getElementById('full-width-map'), mapOptions);
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: full_width_map,
				title: 'Envato',
				icon: './images/contact-marker.png'
			});
		} else {
			return false;
		}
		return false;
	}
	google.maps.event.addDomListener(window, 'load', initialize_full_width_map);

})(jQuery);