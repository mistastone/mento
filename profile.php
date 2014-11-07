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

<!-- FULL PROFILE SECTION -->

<!-- FIXED SECTIONS THAT SLIDE DOWN ON CLICK -->

	<section id="fullprofile" class="fullprofile">
		<div class="aboutme">
			<h3>About Me</h3>
			<div class="inputs">
				<p class ="aboutplaceholder">A little story about me and what I do...</p>
				<p class ="aboutfill"></p>
				<a class="aboutcomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>

		<div class="education">
			<h3>Education</h3>
			<div class="inputs">
				<p class= "eduplaceholder">Where I got educated...</p>
				<p class="edufill"></p>
				<a class="educomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>

		<div class="portfolio">
			<h3>Portfolio Links</h3>
			<div class="inputs">
				<p class = "portplaceholder">Check out my work...</p>
				<p class= "portfill"></p>
				<a class="portcomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>

		<div class="otherinterests">
			<h3>Other Interests</h3>
			<div class="inputs">
				<p class="interestplaceholder">When I'm not designing or coding I like to...</p>
				<p class= "interestfill"></p>
				<a class="othercomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>


		<div class="contactinfo">
			<h3>Contact Info</h3>
			<div class="inputs">
				<p>Love me, follow me...</p>
				<a class="contactcomplete" href = "#" data-showpopup>Edit</a>
			</div>
		</div>

<!-- START OF EDITABLE PROFILE SECTIONS - ABOUT ME, EDUCATION, INTERESTS, PORTFOLIO LINKS, CONTACT -->

<!-- ABOUT ME OVERLAY -->

		<div class="overlay">
			<div class="overlay-content aboutcontent">
				<h3>About Me</h3>

				<div class="inputs">
					<textarea class = "aboutmetext" maxlength="600" rows="6" placeholder="A little story about me and what I do..."></textarea>
				</div>
			
				<button class="profilebutton aboutsave">
					<p>Save</p>
				</button>
				<button class="profilebutton cancel">
					<p>Cancel</p>
				</button>
			</div>

<!-- EDUCATION OVERLAY -->

			<div class="overlay-content educontent">
				<h3>Education</h3>

				<div class="inputs">
					<div class="schoolinfo">
						<input class="schoolname" type="text" placeholder="School Name">
						<input class="schoolprogram" type="text" placeholder="Program">
						<input maxlength="4" class="yearstart" type="text" placeholder="Year Started">
						<input maxlength="4" class="yearend" type="text" placeholder="Year Finished">
					</div>

					<div class="schoolcontainer"></div>
					
				
				<button class="profilebutton addschool">
					<p>Add More</p>
				</button>
			</div>

				<button class="profilebutton edusave">
					<p>Save</p>
				</button>
				<button class="profilebutton cancel">
					<p>Cancel</p>
				</button>
			</div>

<!-- OTHER INTERESTS OVERLAY -->

			<div class="overlay-content othercontent">
				<h3>Other Interests</h3>

				<div class="inputs">
					<textarea class = "interesttext" maxlength="600" rows="6" placeholder="When I'm not designing or coding I like to..."></textarea>
				</div>
			
				<button class="profilebutton interestsave">
					<p>Save</p>
				</button>
				<button class="profilebutton cancel">
					<p>Cancel</p>
				</button>
			</div>

<!-- PORTFOLIO LINKS OVERLAY -->

			<div class="overlay-content portcontent">
				<h3>Portfolio Links</h3>

				<div class="inputs">
					<div class="portinfo">
						<input class="projectname" type="text" placeholder="Name of Project">
						<input class="projecturl" type="text" placeholder="URL">
						<textarea class = "projectdescription" rows="6" placeholder="Description, languages, and tools used..."></textarea>
					</div>
					
					<div class="portcontainer"></div>
				
				<button class="profilebutton addport">
					<p>Add More</p>
				</button>
				</div>

				<button class="profilebutton portsave">
					<p>Save</p>
				</button>				
				<button class="profilebutton cancel">
					<p>Cancel</p>				
				</button>
			</div>

<!-- CONTACT INFO OVERLAY -->

			<div class="overlay-content contactcontent">
				<h3>Contact Info</h3>
			
				<div class="inputs">
					<div class="socialicons">
						<i class="fa fa-github-square fa-3x"></i>
						<i class="fa fa-codepen fa-3x"></i>
						<i class="tumblr fa fa-tumblr-square fa-3x"></i>
						<i class="twitter fa fa-twitter-square fa-3x"></i>
						<i class="facebook fa fa-facebook-square fa-3x"></i>
						<i class="linkedin fa fa-linkedin-square fa-3x"></i>
						<i class="mail fa fa-envelope-square fa-3x"></i>
					</div>

					<div class="socialtext">
						<input class="contacttext" type="text" placeholder="Github URL">
						<input class="contacttext" type="text" placeholder="Codepen URL">
						<input class="contacttext" type="text" placeholder="Tumblr URL">
						<input class="contacttext" type="text" placeholder="Twitter URL">
						<input class="contacttext" type="text" placeholder="Facebook URL">
						<input class="contacttext" type="text" placeholder="LinkedIn URL">
						<input class="contacttext" type="text" placeholder="Email Address">
					</div>

				</div>

				<div class="contactbuttons">
					<button class="profilebutton">
						<p>Save</p>
					</button>
					<button class="profilebutton cancel">
						<p>Cancel</p>
					</button>
				</div>
			</div>

<!-- CLOSING DIV FOR OVERLAY SECTION -->
		</div>

	</section>

<!-- BUTTON TO ALLOW USERS TO COMPLETE THEIR PROFILE -->

	<section class="completeprofile">
		<div id="complete" class="button prof">
			<h5>Complete Your Profile</h5>
		</div>
	</section>
	

<script src="js/main.js"></script>

</body>
</html>