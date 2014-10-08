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

	<header class="profile">
		<a href="index.html"><h1>Mento</h1></a>
		<ul>
			<li>Sign Out</li>
			<li>Browse</li>
			<li>Profile</li>
		</ul>
	</header>

	<section class="profiletop">

		<div class="profileimage">
			<img src="assets/images/profile.jpg" alt="Profile Image">
		</div>

	
		<div class="profilename">
			<h2>Michael Stone</h2>
			<h3>Web Developer <span>(Toronto)</span></h3>
		</div>

	</section>

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

				<select name="Level" id="level">
					<option value="1">Beginner</option>
					<option value="2">Intermediate</option>
					<option value="3">Advanced</option>
				</select>

				<button class="button add" id="addskill">Add</button>
				
				<ul class="skilllist">
				</ul>
		</div>

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

			<select name="Level" id="level">
				<option value="1">Beginner</option>
				<option value="2">Intermediate</option>
				<option value="3">Advanced</option>
			</select>


			<button class="button add" id="addwant">Add</button>

			<ul class = "wantlist">
			</ul>
		</div>

	</section>

	<section class="completeprofile">
		<div class="button prof">
			<h5>Complete Your Profile</h5>
		</div>


	</section>

<script>


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