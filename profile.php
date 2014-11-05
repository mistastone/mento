<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mento: Profile</title>
	<link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700,400' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- NAVIGATION BAR -->

	<header class="profile">
		<a href="index.html"><h1>Mento</h1></a>
		<ul>
			<li>Sign Out</li>
			<li>Browse</li>
			<li>Profile</li>
		</ul>
	</header>

<!-- PROFILE IMAGE AND NAME -->

	<section class="profiletop">

		<div class="profileimage">
			<img src="assets/images/profile.jpg" alt="Profile Image">
		</div>

	
		<div class="profilename">
			<h2>Michael Stone</h2>
			<h3>Front-End Web Developer <span>(Toronto)</span></h3>
		</div>

	</section>

<!-- SKILLS SECTION -->

<!-- SKILLS YOU KNOW -->

	<section class ="skills">

		<div class="havelearned">
			<h3>I Am Offering These Skills...</h3>
	
				<select name="Languages" id="langskill" class = "langskill">
					<option value="Angular">Angular</option>
					<option value="CSS3">CSS3</option>
					<option value="HTML5">HTML5</option>
					<option value="JavaScript">JavaScript</option>
					<option value="jQuery">jQuery</option>
					<option value="PHP">PHP</option>
					<option value="Responsive Design">Responsive Design</option>
					<option value="Ruby">Ruby</option>
					<option value="UX/UI Design">UX/UI Design</option>
					<option value="Wordpress">Wordpress</option>
				</select>

			<div id="meter" class="meter">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

				<!-- <select name="Level" id="levelhave">
					<option value="1">Beginner</option>
					<option value="2">Intermediate</option>
					<option value="3">Advanced</option>
					<option value="4">Expert</option>
				</select> -->

				<button class="button add" id="addskill">Add</button>
				
				<ul class="skilllist"></ul>
				<ul class ="skilllevel"></ul>

				<!-- <div class="meter">
					<span style="width: 25%"></span>
				</div>
				<div class="meter">
					<span style="width: 50%"></span>
				</div>
				<div class="meter adv">
					<span style="width: 75%"></span>
				</div>
				<div class="meter exp">
					<span style="width: 95%"></span>
				</div> -->


		</div>

<!-- SKILLS YOU WANT TO LEARN -->

		<div class="learning">
			<h3>I Am Looking For These Skills...</h3>

			<select name="Languages" id="langwant" class = "langwant">
					<option value="Angular">Angular</option>
					<option value="CSS3">CSS3</option>
					<option value="HTML5">HTML5</option>
					<option value="JavaScript">JavaScript</option>
					<option value="jQuery">jQuery</option>
					<option value="PHP">PHP</option>
					<option value="Responsive Design">Responsive Design</option>
					<option value="Ruby">Ruby</option>
					<option value="UX/UI Design">UX/UI Design</option>
					<option value="Wordpress">Wordpress</option>
			</select>

			<select name="Level" id="levelwant">
				<option value="1">Beginner</option>
				<option value="2">Intermediate</option>
				<option value="3">Advanced</option>
				<option value="4">Expert</option>
			</select>


			<button class="button add" id="addwant">Add</button>

			<ul class = "wantlist"></ul>
			<ul class ="wantlevel"></ul>

			

		</div>

	</section>

<!-- BUTTON TO ALLOW USERS TO COMPLETE THEIR PROFILE -->

	<section class="completeprofile">
		<div id="complete" class="button prof">
			<h5>Complete Your Profile</h5>
		</div>
	</section>

<!-- FULL PROFILE SECTION -->

	<section id="fullprofile" class="fullprofile">
		<div class="aboutme">
			<h3>About Me</h3>
			<div class="inputs">
				<p>A little story about me and what I do...</p>
				<a class="aboutcomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>

		<div class="education">
			<h3>Education</h3>
			<div class="inputs">
				<p>Where I got educated...</p>
				<a class="educomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>

		<div class="otherinterests">
			<h3>Other Interests</h3>
			<div class="inputs">
				<p>When I'm not designing or coding I like to...</p>
				<a class="othercomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>

		<div class="portfolio">
			<h3>Portfolio Links</h3>
			<div class="inputs">
				<p>Check out my work...</p>
				<a class="portcomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>

		<div class="overlay">
			<div class="overlay-content aboutcontent">
				<h3>About Me</h3>

				<div class="inputs">
					<textarea rows="6" placeholder="A little story about me and what I do..."></textarea>
				</div>
			
				<button class="profilebutton">
					<p>Save</p>
				</button>
				<button class="profilebutton cancel">
					<p>Cancel</p>
				</button>
			</div>

			<div class="overlay-content educontent">
				<h3>Education</h3>

				<div class="inputs">
					<div class="schoolinfo">
						<input class="schoolname" type="text" placeholder="School Name">
						<input class="schoolname" type="text" placeholder="Program">
						<input class="year" type="text" placeholder="Year Started">
						<input class="year" type="text" placeholder="Year Finished">
					</div>
					
					<div class="schoolcontainer"></div>
				
				<button class="profilebutton addschool">
					<p>Add More</p>
				</button>
			</div>

				
				<button class="profilebutton">
					<p>Save</p>
				</button>
				
				<button class="profilebutton cancel">
					<p>Cancel</p>
				
				</button>
			</div>

			<div class="overlay-content othercontent">
				<h3>Other Interests</h3>

				<div class="inputs">
					<textarea rows="6" placeholder="When I'm not designing or coding I like to..."></textarea>
				</div>
			
				<button class="profilebutton">
					<p>Save</p>
				</button>
				<button class="profilebutton cancel">
					<p>Cancel</p>
				</button>
			</div>

			<div class="overlay-content portcontent">
				<h3>Portfolio Links</h3>

			<div class="inputs">
					<div class="portinfo">
						<input class="nameproject" type="text" placeholder="Name of Project">
						<input class="nameproject" type="text" placeholder="URL">
						<textarea rows="6" placeholder="Description"></textarea>
					</div>
					
					<div class="portcontainer"></div>
				
				<button class="profilebutton addport">
					<p>Add More</p>
				</button>
			</div>

				
				<button class="profilebutton">
					<p>Save</p>
				</button>
				
				<button class="profilebutton cancel">
					<p>Cancel</p>
				
				</button>
			</div>

		</div>

	</section>

	<script>

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
			$('#fullprofile').slideDown('slow');
		});


// Add Additional School, Program, and Year

	$('.addschool').click(function(){
		$('.schoolinfo:first').clone().find('input:text').val('').end().appendTo('.schoolcontainer');
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

// 'Save' and 'Cancel' Buttons for profile detail overlay sections

		$('.profilebutton.cancel').click(function(){
			$('.overlay, .overlay-content').fadeOut('fast');
		})
		
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


</script>
	
</body>
</html>