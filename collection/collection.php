<body id="body" onload="collectioninit(); init();">
		<main class="mdl-layout__content">
			<div class="container-fluid">
				<div class="infocontainer mdl-card mdl-shadow--2dp">
					<div class="profile_header" id="js-profile-header" style="margin-bottom:50px;">
						<div class="banner-image banner_image--more-transparent_gradient">
							<div class="banner_image-blurred_image clipped_background_image" id="js-profile-header-banner"></div>
						</div>
						<div class="user_avatar profile_header-avatar clipped_background_image--background_fill clipped_background_image" id="js-profile-header-avatar"></div>
					</div>
					<h1 class="profile_identity-name_iq_and_role_icon u-hair_bottom_margin" style="margin:0 auto;">
						<span class="headline">Hey <span id="js-profile-username">Henni</span>!</span>
						<span class="profile_identity-iq tag_label tag_label--yellow_background" id="js-profile-iq" style="text-align:center;"></span>
					</h1>
					<span class="info">
						This is your current badges collection. You can move, remove and add badges, save your changes and
						then they will be shown in your badges profile.<br>Some badges, like the role badges, are assigned
						automatically to your collection and cannot be removed. However, you can hide them.
					</span>
				</div>
				<button id="add"
					class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored container-fluid">ADD
					BADGES</button>
				<div id="badgescatalog" style="display: none"></div>
				<div class="nav mdl-card mdl-shadow--2dp" id="nav">
					<div class="items" nav-index="0">
						<div id="collectionpage">COLLECTION</div>
						<div id="editpage">EDIT</div>
						<div id="savepage">SAVE</div>
					</div>
				</div>
				<div id="collectioncontainer" class="mdl-card mdl-shadow--2dp">
					<div id="badgescontainer">
						<div class="badgebox" id="001-010topazgenius">
							<img src="../badges/001%20Genius%20Badges/genius-001-010topazgenius500px.png?time=1477737861146"
								class="badge">
						</div>
						<div class="badgebox" id="002-006platinumtranscriber">
							<img src="../badges/002%20Transcriber%20Badges/genius-002-006platinumtranscriber500px.png?time=1477737861147"
								class="badge">
						</div>
						<div class="badgebox" id="003-012amethystannotator">
							<img src="../badges/003%20Annotator%20Badges/genius-003-012amethystannotator500px.png?time=1477737861147"
								class="badge">
						</div>
						<div class="badgebox" id="004-004moderator">
							<img src="../badges/004%20Role%20Badges/genius-004-004moderator500px.png?time=1477737861149"
								class="badge">
						</div>
						<div class="badgebox" id="005-001verifiedartist">
							<img src="../badges/005%20Verified%20Artist%20Badges/genius-005-001verifiedartist500px.png?time=1477737861150"
								class="badge">
						</div>
					</div>
					<ul id="editbadges" class="sortable">
						<li class="badgebox ui-state-default" id="001-010topazgenius">
							<img src="../badges/001%20Genius%20Badges/genius-001-010topazgenius500px.png?time=1477737861146"
								class="badge">
							<div id="smallfooter" class="smallfooter">
								<div class="smallfooterreally">
									<a id="footertext" class="remove">REMOVE</a>
								</div>
							</div>
						</li>
						<li class="badgebox ui-state-default" id="002-006platinumtranscriber">
							<img src="../badges/002%20Transcriber%20Badges/genius-002-006platinumtranscriber500px.png?time=1477737861147"
								class="badge">
							<div id="smallfooter" class="smallfooter">
								<div class="smallfooterreally">
									<a id="footertext" class="remove">REMOVE</a>
								</div>
							</div>
						</li>
						<li class="badgebox ui-state-default" id="003-012amethystannotator">
							<img src="../badges/003%20Annotator%20Badges/genius-003-012amethystannotator500px.png?time=1477737861147"
								class="badge">
							<div id="smallfooter" class="smallfooter">
								<div class="smallfooterreally">
									<a id="footertext" class="remove">REMOVE</a>
								</div>
							</div>
						</li>
						<li class="badgebox ui-state-default" id="004-004moderator">
							<img src="../badges/004%20Role%20Badges/genius-004-004moderator500px.png?time=1477737861149"
								class="badge">
							<div id="smallfooter" class="smallfooter">
								<div class="smallfooterreally">
									<a id="footertext" class="remove">REMOVE</a>
								</div>
							</div>
						</li>
						<li class="badgebox ui-state-default" id="005-001verifiedartist">
							<img src="../badges/005%20Verified%20Artist%20Badges/genius-005-001verifiedartist500px.png?time=1477737861150"
								class="badge">
							<div id="smallfooter" class="smallfooter">
								<div class="smallfooterreally">
									<a id="footertext" class="remove">REMOVE</a>
								</div>
							</div>
						</li>
					</ul>
					<div id="savebadges">
						<span id="savetext">Click on the button below to save your collection.</span>
						<button id="save"
							class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">SAVE</button>
						<span id="generatedtext" style="display: none;opacity: 0;"></span>
						<div id="search" style="display:none;"></div>
					</div>
				</div>
			</div>
		</main>
		<script>
			(function (i, s, o, g, r, a, m) { i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m) })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-47871844-3', 'auto');
			ga('send', 'pageview');
		</script>
		<script type="text/javascript">
			/**
			 * You must include the dependency on 'ngMaterial' 
			 */
			angular.module('BlankApp', ['ngMaterial']);
		</script>
		<script src="../assets/js/function.js"></script>
</body>