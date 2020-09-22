<!DOCTYPE html>
<html lang="en">
<head>
    <!-- | TITLE -->
	<title>Badges</title>
	<link rel="author" href="humans.txt" />
	<!-- | Web Application Manifest -->
	<link rel="manifest" href="manifest.json">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Badges">
	<!-- | META -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="badgesbadgesbadgesbadgesbadgesbadges">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-title" content="Badges">
	<meta name="application-name" content="Badges">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png?v=m2dBzPMjbw">
	<meta name="msapplication-config" content="favicon/browserconfig.xml?v=m2dBzPMjbw">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="theme-color" content="#ffffff">
	<!-- | FAVICON -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png?v=m2dBzPMjbw">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png?v=m2dBzPMjbw" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-194x194.png?v=m2dBzPMjbw" sizes="194x194">
	<link rel="icon" type="image/png" href="favicon/android-chrome-192x192.png?v=m2dBzPMjbw" sizes="192x192">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png?v=m2dBzPMjbw" sizes="16x16">
	<!-- <link rel="manifest" href="favicon/manifest.json?v=m2dBzPMjbw"> -->
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg?v=m2dBzPMjbw" color="#ffff64">
	<link rel="shortcut icon" href="favicon/favicon.ico?v=m2dBzPMjbw">
	<!-- | CSS -->
	<!-- || LIBRARIES -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="libraries/normalize/normalize.css">
	<link rel="stylesheet" href="libraries/emojione/assets/css/emojione.css" />
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.1/angular-material.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel='stylesheet' href="libraries/nprogress/nprogress.css" />
	<link rel='stylesheet' href="libraries/animate.css/animate.css" />
	<!-- || MAIN -->
	<link rel="stylesheet" href="fonts/fonts.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="collection/style.css">
	<link rel="stylesheet" href="assets/css/profil.css">
	<!-- | JS -->
	<!-- || LIBRARIES -->
	<script src="libraries/sortable-animation/Sortable.js"></script>
	<!-- ||| JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="libraries/jquery-ui-1.12.1/jquery-ui.js"></script>
	<!-- |||| JQUERY PLUGINS -->
	<script src="libraries/bez/jquery.bez.js"></script>
	<script src="libraries/jquery-disablescroll/jquery.disablescroll.js"></script>
	<!-- ||| BOOTSTRAP -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
	<!-- |||| BOOTSTRAP PLUGINS -->
	<script src="libraries/bootbox/bootbox.min.js"></script>
	<!-- Angular Material Dependencies -->
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular-animate.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular-aria.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular-messages.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular-sanitize.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular-route.js"></script>
	<!-- ||| ANGULAR MATERIAL -->
	<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.1/angular-material.min.js"></script>
	<script src="libraries/angular-material/svg-icons.js"></script>

	<script src="libraries/browserify/bundle.js"></script>
	<script src="libraries/emojione/emojione.js"></script>
	<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
	<script src="libraries/is.js/is.js"></script>
	<script src="libraries/svg4everybody/dist/svg4everybody.legacy.js"></script>
	<script src="libraries/mdl/material.js"></script>
	<script src="libraries/nprogress/nprogress.js"></script>
	<script src="libraries/xhr/xhr.js"></script>
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
	<script>
		var OneSignal = window.OneSignal || [];
		OneSignal.push(["init", {
			appId: "df0170e8-ef9f-4a50-8748-63d50cfc1d98",
			autoRegister: false,
			notifyButton: {
				enable: true /* Set to false to hide */
			},
			safari_web_id: 'web.onesignal.auto.66c7fbb6-f0f6-47ab-9f8e-1bd725d1f3d2'
		}]);
	</script>
	<!--- MAIN --->
	<script src="assets/js/badges.js"></script>
	<script src="collection/collection.js"></script>
	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
		<![endif]-->
</head>

<body class="badges-layout" ng-app="badges" ng-controller="all" ng-cloak>
	<md-content id="site" ng-style="styles.site">
		<md-sidenav class="md-sidenav-left" md-component-id="left">
			<md-list>
				<md-list-item>
					<div class="md-list-item-text" layout="column">
						<h2><a ng-href="{{homepath}}" id="badgesdrawertitle">BADGES</a></h2>
					</div>
				</md-list-item>
				<md-divider></md-divider>
				<md-list-item class="secondary-button-padding" ng-href="?page=collection">
					<md-icon md-svg-icon="brush"></md-icon>
					<p flex>CUSTOMIZE COLLECTION</p>
				</md-list-item>
				<md-divider></md-divider>
				<md-list-item class="secondary-button-padding" ng-click="doPrimaryAction($event)">
					<md-icon md-svg-icon="help-circle"></md-icon>
					<p>ABOUT</p>
				</md-list-item>
				<md-divider></md-divider>
				<md-list-item id="donate" class="secondary-button-padding md-primary" target="_blank" ng-href="{{url.donate}}" ng-mousedown="ui.newtab()">
					<md-icon md-svg-icon="currency-usd"></md-icon>
					<p>DONATE</p>
				</md-list-item>
				<md-divider></md-divider>
				<md-list-item id="github" class="secondary-button-padding md-primary" target="_blank" ng-href="{{url.github}}" ng-mousedown="ui.newtab()">
					<md-icon md-svg-icon="github-circle"></md-icon>
					<p>GITHUB</p>
				</md-list-item>
				<md-divider></md-divider>
				<md-list-item id="impressum" class="secondary-button-padding" ng-click="doSecondaryAction($event)">
					<md-icon md-svg-icon="lock"></md-icon>
					<p>PRIVACY & TERMS</p>
					</md-list-item>
				<md-divider></md-divider>
				<md-list-item id="impressum" class="secondary-button-padding" ng-click="toggleTheme()">
					<md-icon md-svg-icon="Theme"></md-icon>
					<p>TOGGLE THEME</p>
				</md-list-item>
			</md-list>
		</md-sidenav>
		<md-card id="top" ng-style="styles.top">
			<md-card-content>
				<div id="optionscontainer" ng-style="styles.optionscontainer">
					<div id="info" ng-style="styles.info">
						<img id="badgeslogo" src="images/badgeslogooncircletransparent.png" />
						<h1 id="title">BADGES</h1>
					</div>	
					<form action="">
						<md-input-container id="inputcontainer" class="md-block" flex-gt-sm
							ng-style="styles.inputcontainer">
	    
						</md-input-container>
					</form>
				</div>
			</md-card-content>	
		</md-card>		
		<md-toolbar>
			<div class="md-toolbar-tools">
				<md-button class="md-icon-button" ng-click="toggleLeft()" aria-label="Settings">
					<md-icon id="black-icon" md-svg-icon="img/icons/menu.svg"></md-icon>
				</md-button>
				<div id="titlecontainer">
					<div class="logo_container">
						<a href="https://genius.com/" class="logo_link">GENIUS</a>
					</div>
				</div>
				<div><!--
					has to stay empty in order for the flexbox layout to work properly.
					space-between property simulates a grid
				--></div>
			</div>
		</md-toolbar>
	</md-content> 
	<?php
		$page = isset($_GET['page']) ? $_GET['page'] : 'home';
		if ($page === 'collection') {
			include('collection/collection.php');
		} else {
			include('home.php');
		}
	?>
	<script src="assets/js/function.js"></script>
</body>
</html>