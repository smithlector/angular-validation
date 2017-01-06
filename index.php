<!DOCTYPE html>
<html ng-app="myApp">
	<head>
		<title>Slider - AngularJs</title>
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
	</head>
	<body >
		<div class="container-fluid" ng-controller="validateController as vCtrl">
			<div class="row">
				<div class="container">
					<div class="row">
						<form class="formValidator">
							<div class="form-group">
								<label form="email"></label>
								<input type="email" id="email" validate=" email | required"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="script/validator.js"></script>
		<script type="text/javascript" src="script/script.js"></script>
	</body>
</html>