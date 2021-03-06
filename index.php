<html>
	<head>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet/less" type="text/css" href="less/styles.less" />
		<script src="js/less.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/modernizr.custom.js" type="text/javascript"></script>
		<script src="js/touch.js"></script>
	</head>
	<body ng-app="app">
		<section class="page-wrapper" id="ComingSoon" ng-controller="MainCtrl">		
			<!-- fullscreen bg -->
			<!-- <img class="full-screen" src="images/one.png" /> -->
			<img class="full-screen" src="images/two.jpg" />

			<!-- main -->
			<section class="main-content">
				<section class="intro" ng-show="!formSubmitted">
					<h1 class="text-logo">Gentle Bitch Club</h1>
					<p class="headliner">Coming soon...</p>
				</section>
	
				<section ng-controller="FormCtrl" >
					<form ng-show="!formSubmitted" id="SignupForm" name="SignupForm" ng-submit="processForm()" action="" method="POST">
						<input type="email" name="email" placeholder="Enter your email address" ng-model="signup.email" required />
						<!-- <p ng-show="SignupForm.email.$error.email">invalid</p> -->
						<input id="SubmitBtn" type="submit" value="Sup" ng-disabled="SignupForm.$invalid" />
					</form>
					<section class="confirmation" ng-show="formSubmitted">
						<p>Testing</p>
						<h1 class="confirmation-msg">{{ signup.email }}</h1>
					</section>
				</section>
			</section>

			<!-- footer -->
			<footer>
				<section id="SocialMedia">
					<a class='symbol social-icon' title='circlefacebook' href="https://www.facebook.com/pages/Gentle-Bitch-Club/491352914331802?skip_nax_wizard=true"></a>
					<a class='symbol social-icon' title='circleinstagram' href="http://instagram.com/gentlebitchclub"></a>
					<a class='symbol social-icon' title='circletwitterbird' href="https://twitter.com/GentleBitchClub"></a>
				</section>
				<section id="Copyright">
					<p>2014 &#169; <a href="mailto:info.gbcbrooklyn@gmail.com">Gentle Bitch Club</a></p>
				</section>
			</footer>
		</section>
	</body>
</html>