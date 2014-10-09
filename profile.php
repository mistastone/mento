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
			<h3>Web Developer <span>(Toronto)</span></h3>
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

				<select name="Level" id="levelhave">
					<option value="1">Beginner</option>
					<option value="2">Intermediate</option>
					<option value="3">Advanced</option>
					<option value="4">Expert</option>
				</select>

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

			<!-- <div class="begmeter">
				<div class="greendot"></div>
				<div class="graydot"></div>
				<div class="graydot"></div>
				<div class="graydot"></div>
				<div class="graydot"></div>
			</div> -->

		</div>

	</section>

<!-- BUTTON TO ALLOW USERS TO COMPLETE THEIR PROFILE -->

	<section class="completeprofile">
		<div class="button prof">
			<h5>Complete Your Profile</h5>
		</div>
	</section>

<!-- JQUERY FOR PROFILE PAGE -->

<script>

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



</script>
	
</body>
</html>