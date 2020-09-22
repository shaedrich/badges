						<label>USER</label>
						<input id="userinput" ng-model="logininput" type="text">
					</md-input-container>
				</form>
				<md-button ng-click="ui.search()" id="search" class="md-raised md-primary" ng-style="styles.search">
					{{buttons.search.text | uppercase}}</md-button>
			</div>
			<div id="menucontainer" ng-style="styles.menucontainer">
				<md-button ng-click="ui.profile()" id="profile" class="md-raised md-primary">
					{{buttons.profile.text | uppercase}}</md-button>
			</div>
			<div id="profilebox" ng-style="styles.profilebox">
				<span id="profiletext">You are {{user.name}}? Just copy-paste this text to your profile bio:</span>
				<span id="generatedtext"></span>
				<hr id="profilehr">
				<span id="customize">Do you want to customize your badges collection? Connect with your Genius
					account below!</span>
				<a
					ng-href="https://api.genius.com/oauth/authorize?client_id={{client_id}}&redirect_uri={{homepath}}&scope=me&state=loggedin&response_type=code">
					<md-button id="authenticate" class="md-raised md-primary">CONNECT</md-button>
				</a>
			</div>
		</md-card-content>
	</md-card>
	<md-card id="userinfo" style="display: none;">
		<div class="BOXavatar">
			<div id="avatar" ng-style="{'background-image':'url('+user.avatar.medium.url+')'}">
			</div>
		</div>
		<div class="identity">
			<div class="line1">
				<a ng-href="https://genius.com/{{user.login}}">
					<div class="BOXname">
						<span id="name">{{user.name}}</span>
					</div>
				</a>
				<div class="BOXiq_for_display">
					<span id="iq_for_display">{{user.iq_for_display}}</span>
				</div>
			</div>
			<div class="line2">
				<div class="BOXlogin">
					<span>@</span><span id="login">{{user.login}}</span>
				</div>
				<span id="divider" style="display: inline-block"> | </span>
				<div class="BOXrole_for_display">
					<div class="BOXrole_icon" id="iconbox" style="display: inline-block">
						<svg ng-if="user.role_for_display == 'contributor'" id='role_icon'
							src='equilateral_triangle.svg' xmlns='https://www.w3.org/2000/svg' viewBox='0 0 9 7'
							version='1.1'
							style='fill: #ffffff;width: 1rem;height: 1rem;stroke: #9a9a9a;stroke-width: 1px;top: 2px;position: relative;display: block'>
							<path id='role_icon_path' d='M8.25 6.418L4.25 0l-4 6.418z' cx='74' cy='10' r='9'></path>
						</svg>
						<svg ng-if="user.role_for_display == 'mediator'" id='role_icon' src='square.svg'
							xmlns='https://www.w3.org/2000/svg' viewBox='0 0 20 20' version='1.1'
							style='fill: #ff518c;width: .9rem;height: .9rem;stroke: #9a9a9a;stroke-width: 2px;position: relative;display: block'>
							<path id='role_icon_path' d='M1.5 1.5h17v17h-17z' cx='74' cy='10' r='9'></path>
						</svg>
						<svg ng-if="user.role_for_display == 'editor'" id='role_icon' src='square.svg'
							xmlns='https://www.w3.org/2000/svg' viewBox='0 0 20 20' version='1.1'
							style='fill: #ffff64;width: .9rem;height: .9rem;stroke: #9a9a9a;stroke-width: 2px;position: relative;display: block'>
							<path id='role_icon_path' d='M1.5 1.5h17v17h-17z' cx='74' cy='10' r='9'></path>
						</svg>
						<svg ng-if="user.role_for_display == 'moderator'" id='role_icon' src='diamond.svg'
							xmlns='https://www.w3.org/2000/svg' viewBox='0 0 22 22' version='1.1'
							style='fill: #7689e8;width: 1.05rem;height: 1.05rem;stroke: #9a9a9a;stroke-width: 2px;position: relative;display: block'>
							<path id='role_icon_path' d='M11 1.95l8.98 8.98L11 19.91l-8.98-8.98z' cx='74' cy='10'
								r='9'></path>
						</svg>
						<svg ng-if="user.role_for_display == 'regulator'" id='role_icon' src='circle.svg'
							xmlns='https://www.w3.org/2000/svg' viewBox='64 0 20 20' version='1.1'
							style='fill: #b0c4de;width: .9rem;height: .9rem;stroke: #9a9a9a;stroke-width: 2px;position: relative;display: block'>
							<circle id='role_icon_circle' d='M1.5 1.5h17v17h-17z' cx='74' cy='10' r='9'></circle>
						</svg>
						<svg ng-if="user.role_for_display == 'verified_artist'" id='role_icon' src='checky.svg'
							xmlns='https://www.w3.org/2000/svg' viewBox='0 0 11 11' version='1.1' width='14px'
							height='14px'
							style='fill: #38ef51;    height: 17px;margin: 0 2px;top: 2px;width: 17px;stroke: #fff;position: relative;display: block'>
							<polygon
								points='5.5 0 10.2631397 2.75 10.2631397 8.25 5.5 11 0.736860279 8.25 0.736860279 2.75 '>
							</polygon>
							<path d='M2.5,5.5 L4.5,7.5' stroke-width='1.2' stroke-linecap='square'></path>
							<path d='M4.5,7.5 L8.5,3.5' stroke-width='1.2' stroke-linecap='square'></path>
						</svg>
					</div>
					<span id="role_for_display" style="display: inline-block">{{user.role_for_display}}</span>
				</div>
			</div>
		</div>
		<div id="statsbox">
			<div class="statistics_panel" id="leftstats">
				<statistics-panel-item class="statistics_panel-item">
					<div>
						<div class="statistic_and_label">
							<div class="statistic_and_label-primary">
								<svg class="inline_icon inline_icon--tall" src="bloopie.svg" viewBox="0 0 49 56"
									xmlns="https://www.w3.org/2000/svg">
									<g fill="none" fill-rule="evenodd">
										<path fill="#000"
											d="M23.29 44.936h11.646L29.113 56.17M0 0h50.463v44.936H0z"></path>
										<g fill="#FFF">
											<path
												d="M15.56 23.787c.04.026.084.04.14.04.14 0 .253-.104.253-.234 0-.026 0-.065-.014-.09-.37-.908-.566-1.893-.566-2.93-.014-2.294 1-4.393 2.605-5.923l.014-.013.014-.013c.026-.038.054-.09.054-.142v-2.98c0-.13-.112-.234-.253-.234h-3.25c-.07 0-.14.04-.184.077-.07.052-.127.117-.198.17-1.564 1.437-2.536 3.42-2.536 5.624 0 2.2.972 4.183 2.534 5.622.408.388.872.725 1.38 1.023zm6.053-6.22c-.14.012-.24.116-.24.233v.052c.07.66.353 1.257.803 1.723l.014.013.085.078.028.026.084.078.03.026c.027.026.055.038.083.064.014.013.028.026.042.026.028.026.057.04.085.065.014.016.028.03.042.03.025.012.053.04.07.05.01.013.026.026.054.04.028.012.056.025.07.05.014.014.042.027.056.04.03.012.058.025.07.04.016.01.044.024.058.024.027.013.055.026.07.04.028.012.042.025.07.025.028.012.042.025.07.04.028.01.043.01.07.024.03.013.043.026.07.026.03.01.043.01.07.024.03.013.044.013.072.026.028.014.056.014.084.027.028.013.043.013.07.026.03.012.057.012.085.025.03 0 .04.013.07.013.03.016.056.016.084.016.028 0 .042.013.07.013.03 0 .057.012.1.012.027 0 .04.014.07.014.028 0 .07.013.098.013.014 0 .042 0 .056.012.042 0 .084 0 .112.012h.28c1.79-.04 3.226-1.374 3.226-3.033v-2.204c0-.13.11-.233.252-.233h.9c.142 0 .254-.104.254-.233 0-.027 0-.04-.014-.066-.295-1.296-.93-2.49-1.816-3.487-.042-.05-.112-.09-.197-.09H24.89c-.14 0-.253.103-.253.233v3.06c.014 1.594-1.323 2.903-3.027 3.006z">
											</path>
											<path
												d="M34.875 11.5c-.042-.05-.112-.09-.197-.09-.14 0-.253.104-.253.233 0 .026 0 .052.014.078v.016c.645 1.555 1.01 3.266 1.01 5.03 0 7.646-6.73 13.84-15.036 13.84-1.928 0-3.773-.336-5.462-.946-.028-.013-.057-.013-.1-.013-.14 0-.252.103-.252.233 0 .077.043.14.1.18 2.562 2.255 6.025 3.63 9.84 3.63 7.885 0 14.276-5.885 14.276-13.143 0-3.512-1.492-6.687-3.942-9.046z">
											</path>
										</g>
									</g>
								</svg>
								<span id="annotations_count"
									class="statistic_and_label-number">{{user.stats.annotations_count}}</span>
							</div>
							<div class="statistic_and_label-subtext">Annotations</div>
						</div>
					</div>
				</statistics-panel-item>
			</div>
			<div class="statistics_panel" id="rightstats">
				<statistics-panel-item class="statistics_panel-item">
					<div>
						<div class="statistic_and_label">
							<div class="statistic_and_label-primary">
								<svg class="inline_icon inline_icon--tall" src="one_document.svg"
									xmlns="https://www.w3.org/2000/svg" viewBox="-3392 6367.9 17.4 20">
									<path d="M-3392 6367.9v20h17.4v-20h-17.4zm15.2 17.8h-13v-15.6h13v15.6z"></path>
									<path d="M-3386.3 6374.3h6v1.1h-6zm0 3.3h6v1.1h-6zm0 4.3h6v-1.1h-6v1.1"></path>
								</svg>
								<span id="transcriptions_count"
									class="statistic_and_label-number">{{user.stats.transcriptions_count}}</span>
							</div>
							<div class="statistic_and_label-subtext">Transcriptions</div>
						</div>
					</div>
				</statistics-panel-item>
			</div>
		</div>
		<div id="starscontainer" ng-style="styles.starscontainer">
			<img src="images/badgesstar.png" id="starleft">
			<span id="stars" ng-style="styles.stars">{{user.stars + " stars" | uppercase}}</span>
			<img src="images/badgesstar.png" id="starright">
		</div>
		<div id="badgescontainer">
			<div class="badgebox" id="001-010topazgenius"><img
					src="badges/001%20Genius%20Badges/genius-001-010topazgenius500px.png?time=1477737861146"
					class="badge"></div>
			<div class="badgebox" id="002-006platinumtranscriber"><img
					src="badges/002%20Transcriber%20Badges/genius-002-006platinumtranscriber500px.png?time=1477737861147"
					class="badge"></div>
			<div class="badgebox" id="003-012amethystannotator"><img
					src="badges/003%20Annotator%20Badges/genius-003-012amethystannotator500px.png?time=1477737861147"
					class="badge"></div>
			<div class="badgebox" id="004-004moderator"><img
					src="badges/004%20Role%20Badges/genius-004-004moderator500px.png?time=1477737861149"
					class="badge"></div>
			<div class="badgebox" id="005-001verifiedartist"><img
					src="badges/005%20Verified%20Artist%20Badges/genius-005-001verifiedartist500px.png?time=1477737861150"
					class="badge"></div>
		</div>
	</md-card>
	<md-card id="usererror" style="display:none">
		<div class="BOXerror">
			<span>There is no user called "</span><span id="nouser">SwigSwagSwigSwag</span><span>".</span>
		</div>
	</md-card>
	<md-card id="nothing" style="display:none">
		<div class="BOXnothing">
			<span>Wow. You entered nothing, searched for it and waited even {{l.time.waitingtimeinseconds}} seconds
				expecting a result.
				<br>
				<br>
				So, yeah, here you have it.
				<br><br><br>
				<small id="muhahaha">
					Of course I could have checked if you entered nothing, <i>before</i> the whole
					script started and loaded through. Of course I could have <i>notified</i> you that the input box
					is empty.<br>By the way, have you heard my "Muhahaha" already?
				</small>
			</span>
		</div>
	</md-card>
	<md-card id="loadingcontainer" ng-style="styles.loadingcontainer">
		<div id="loading">
			<img id="load" src="https://i.imgur.com/7qHrFCE.gif" />
		</div>
	</md-card>
</md-content>
<script>
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function () {
			(i[r].q = i[r].q || [])
				.push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
	ga('create', 'UA-47871844-3', 'auto');
	ga('send', 'pageview');
</script>