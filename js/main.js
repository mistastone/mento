// SLIDE DOWN FOR HOW IT WORKS MENU
	
		$('.how').click(function (){
			$('.instruction').slideDown('slow');
			$('header').hide(300);
		});

		$('.instructionclose').click(function () {
			$('.instruction').slideUp('slow');
			$('header').show(800);
		});

// SMOOTH SCROLL

		$(function() {
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top
					}, 1000);
					return false;
		      		}
		    	}
		  	});
		});

// jQUERY OVERLAY EFFECT FOR SIGN IN MENU

		$('.show-popup').click(function(event){
			event.preventDefault();
			var docHeight = $(document).height();
			var scrollTop = $(window).scrollTop();
			var selectedPopup = $(this).data('showpopup');

			$('.overlay').fadeIn('fast').css({'height' : docHeight});
			$('.popup' + selectedPopup).show();
			$('.overlay-content').css({'top' : scrollTop+40+'px'});
		});

		
		$('.overlay').click(function(){
			$('.overlay, .overlay-content').fadeOut('fast');
		})
		
		$('.overlay-content').click(function(){
			return false;
		});


// AJAX Email send feature
$('#signup').click(function() {
		
		var first = $('input[name=first]');
		var last = $('input[name=last]');
		var email = $('input[name=email]');
		var password = $('input[name=password]');
		
		var data ='email=' + email.val() + '&' + 'first=' + first.val()+ '&' + 'last=' + last.val()+ '&' + 'password=' + password.val();
		
		// Disable fields
		$('.text').attr('disabled','true');
		
		// Start jQuery
		$.ajax({
		
			// PHP file that processes the data and send mail
			url: "includes/signup.php",	
			
			// GET method is used
			type: "GET",

			// Pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			// Success
			success: function (html) {				
					
				//show the success message
				$('.success-message').slideDown('slow');
				$(".signup_form")[0].reset();
										
				// Disable send button
				$('#signup').attr('disabled',true);
					
			}		
		});
	
		return false;
		
	});