// jQUERY FOR MAIN PAGE
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

		
		$('.overlay.mainpage').click(function(){
			$('.overlay, .overlay-content').fadeOut('fast');
		})
		
		$('.overlay-content').click(function(){
			return false;
		});


// EMAIL FUNCTIONALITY
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


// jQUERY SCRIPT FOR PROFILE PAGE

// ADDING SKILL LEVEL FROM THE DROPDOWN MENU TO THE UL LIST BELOW

	$(function(){
		$('#addskill').on('click', function(){
			var skilllevel = $('#levelhave').val();
			$('.skilllevel').append('<li>'+ skilllevel + '</li>');
		});
	});

	// $(function(){
	// 	$('#addwant').on('click', function(){
	// 		var wantlevel = $('#levelwant').val();
	// 		$('.wantlevel').append('<li class = "meter"><span style="width:'+ wantlevel +'%"></span></li>');
	// 	});
	// });

	$(function(){
		$('#addwant').on('click', function(){
			var wantlevel = $('#levelwant').val();
			$('.wantlevel').append('<li>'+ wantlevel + '</li>');
		});
	});

	// $(function(){
	// 	$('#meter').find('span').mouseover(function(){
	// 		$(this).prevAll().andSelf().addClass('filled');
	// 		$(this).nextAll().removeClass('filled');
	// 	});
	// });

	$(function(){
		$('#meter').find('span').on('click',function(){
			$(this).prevAll().andSelf().addClass('filled');
			$(this).nextAll().removeClass('filled');
		});
	});

	// $(function(){
	// 	$('#meter').find('span').mouseover(function(){
	// 		$(this).prevAll().andSelf().addClass('filled');
	// 		$(this).nextAll().removeClass('filled');
	// 	});
	// });

// 'Complete Profile' Button

	$('#complete').on('click',function(){
		$(this).hide();
			$('#fullprofile').slideDown('slow');
		});


// Add Additional School, Program, and Year

	$('.addschool').click(function(){
		$('.schoolinfo:first').clone().find('input:text').val('').end().appendTo('.schoolcontainer');
		$('.profilebutton.cancel').click(function(){
			// $('.schoolinfo:first')remove();
		});
	});

// Add Additional Portfolio Item, Link, and Description

	$('.addport').click(function(){
		$('.portinfo:first').clone().find('input:text').val('').end().appendTo('.portcontainer');
	});

// Overlay for 'About Me' Details

		$('.aboutcomplete').click(function(event){
			event.preventDefault();
			var docHeight = $(document).height();
			var scrollTop = $(window).scrollTop();
			var selectedPopup = $(this).data('showpopup');

			$('.overlay').fadeIn('fast').css({'height' : docHeight});
			$('.aboutcontent' + selectedPopup).show();
			$('.overlay-content').css({'top' : scrollTop+40+'px'});
		});

// Overlay for 'Education' Details

		$('.educomplete').click(function(event){
			event.preventDefault();
			var docHeight = $(document).height();
			var scrollTop = $(window).scrollTop();
			var selectedPopup = $(this).data('showpopup');

			$('.overlay').fadeIn('fast').css({'height' : docHeight});
			$('.educontent' + selectedPopup).show();
			$('.overlay-content').css({'top' : scrollTop+40+'px'});
		});

// Overlay for 'Other Interests' Details

			$('.othercomplete').click(function(event){
			event.preventDefault();
			var docHeight = $(document).height();
			var scrollTop = $(window).scrollTop();
			var selectedPopup = $(this).data('showpopup');

			$('.overlay').fadeIn('fast').css({'height' : docHeight});
			$('.othercontent' + selectedPopup).show();
			$('.overlay-content').css({'top' : scrollTop+40+'px'});
		});

// Overlay for 'Portfolio Links'

			$('.portcomplete').click(function(event){
			event.preventDefault();
			var docHeight = $(document).height();
			var scrollTop = $(window).scrollTop();
			var selectedPopup = $(this).data('showpopup');

			$('.overlay').fadeIn('fast').css({'height' : docHeight});
			$('.portcontent' + selectedPopup).show();
			$('.overlay-content').css({'top' : scrollTop+40+'px'});
		});

// Overlay for 'Contact Info' Details

			$('.contactcomplete').click(function(event){
			event.preventDefault();
			var docHeight = $(document).height();
			var scrollTop = $(window).scrollTop();
			var selectedPopup = $(this).data('showpopup');

			$('.overlay').fadeIn('fast').css({'height' : docHeight});
			$('.contactcontent' + selectedPopup).show();
			$('.overlay-content').css({'top' : scrollTop+40+'px'});
		});

// 'Save' and 'Cancel' Buttons for profile detail overlay sections

		$('.profilebutton.cancel').click(function(){
			$('.overlay, .overlay-content').fadeOut('fast');
			$('textarea, input').val('');
		});
		
		$('.overlay-content').click(function(){
			return false;
		});

// ADDING SKILLS FROM THE DROPDOWN MENU TO THE UL LIST BELOW

	$(function(){
		$('#addskill').on('click', function(){
			var selected = $('#langskill').val();
			$('.skilllist').append('<li>'+ selected +'</li>');
		});
		});

	$(function(){
		$('#addwant').on('click', function(){
			var selected = $('#langwant').val();
			$('.wantlist').append('<li>'+ selected +'</li>');
		});
		});



	$('.profilebutton.aboutsave').click(function(){
		var aboutdetails = $('textarea').val();
		$('.aboutplaceholder').remove();
		$('.aboutfill').append('<p>' + aboutdetails + '</p>');
		$('.overlay, .overlay-content').fadeOut('fast');
	});

	// $('.profilebutton.save').click(function(){
	// 	var edudetails = $('.schoolname, .schoolprogram, .yearstart, .yearend').val();
	// 	$('.eduplaceholder').remove();
	// 	$('.schoollist').append('<li>' + edudetails + '</li>');
	// 	$('.overlay, .overlay-content').fadeOut('fast');
	// });