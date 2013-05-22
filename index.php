<!DOCTYPE html>
<html ng-app>
	<head>
		<?php require('header.php'); ?>
	</head>
		<body>	
		<div id="sequence" ng-controller="StoryCtrl">
			<img class="sequence-prev" src="images/bt-prev.png" alt="Previous">
			<img class="sequence-next" src="images/bt-next.png" alt="Next">

			<ul class="sequence-canvas">
				<li ng-class="{'animate-in' : $first }" ng-repeat="story in stories">
					<div class="info">
						<h2>{{story.heading}}</h2>
						<h2>{{story.date}}</h2>
						<p>{{story.text}}</p>
					</div>
					<!--<img class="sky" src="images/bg-clouds.png" alt="Blue Sky">-->
					<img class="ship" ng-class="{step{{$index}}:true}" src="images/ship.png" alt="Ship">
				</li>
			</ul>
		</div>
	</body>

	<?php require ('include_js.php'); ?>
	
</html>