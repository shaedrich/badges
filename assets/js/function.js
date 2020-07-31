var apiKey = "8CqqwrIyKbAymHVZxLkjYO8k4axOzSXcvHoea6svoLqugeZwJRIdWssm3_tOUvDI0"
async function loadUser(id) {/*
	var req = await fetch(`https://api.genius.com/users/${id}`, {
		headers: {
				'Authorization': 'Bearer' + ' ' + apiKey
		}
	})
	var res = await req.json();
	return res.response.user;*/
	return {
		"_type": "user",
		"about_me": {},
		"about_me_summary": "Manche gehen, manche bleiben, dankbar bin ich beiden\n\n\n\nGlück ist harte Arbeit und kein Wunder\n\n\n\nHerkunft: Frankfurt\nGenius Start: 6. März 2019\nAktiv auf Genius seit: Januar 2020\nFortschritte:\nIQ:\n02. Mai 2020: 1.000 IQ\n01. Juni 2020: 5.000 IQ\n11. Juni 2020: 10.000 IQ\n27. Juni 2020: 15.000 IQ\n06. Juli 2020: 20.000 IQ\n27. Juli 2020: 25.000 IQ\n\nAndere Fortschritte:\n25. Juni 2020: 187 Transcriptions xD\n06. Juli 2020: Erste Transcription über 40k Views\n28. Juli 2020: 400 Transcriptions\n\n\n\nAbzeichen:\n\n\n\n\n\n\n\n\n\n\n\n Created with Genius Graph\nDanke an @GeniusMoblin für den Banner\nDanke an @Crackar für das Coaching\nMein Twitter",
		"annotations_count": 174,
		"api_path": "/users/8068117",
		"avatar": {
		  "tiny": {
			"url": "https://images.genius.com/avatars/tiny/77f43d4117013dfdd70e36be9af902d3",
			"bounding_box": {
			  "width": 16,
			  "height": 16
			}
		  },
		  "thumb": {
			"url": "https://images.genius.com/avatars/thumb/77f43d4117013dfdd70e36be9af902d3",
			"bounding_box": {
			  "width": 32,
			  "height": 32
			}
		  },
		  "small": {
			"url": "https://images.genius.com/avatars/small/77f43d4117013dfdd70e36be9af902d3",
			"bounding_box": {
			  "width": 100,
			  "height": 100
			}
		  },
		  "medium": {
			"url": "https://images.genius.com/avatars/medium/77f43d4117013dfdd70e36be9af902d3",
			"bounding_box": {
			  "width": 300,
			  "height": 400
			}
		  }
		},
		"channel_iqs": [],
		"custom_header_image_url": "https://images.genius.com/32ed9250e32e40f41ed4fdea03b510d2.1000x165x1.png",
		"followed_users_count": 12,
		"followers_count": 12,
		"header_image_url": "https://images.genius.com/32ed9250e32e40f41ed4fdea03b510d2.1000x165x1.png",
		"human_readable_role_for_display": "Contributor",
		"id": 8068117,
		"iq": 25659,
		"iq_for_display": "25,659",
		"is_meme_verified": false,
		"is_verified": false,
		"login": "Kontrollieren",
		"name": "Henni",
		"photo_url": "https://images.genius.com/1e3e426783719ce6d81e196030f245fb.1000x1000x1.jpg",
		"pusher_channel": "private-user-8068117",
		"role_for_display": "contributor",
		"roles_for_display": [
		  "contributor"
		],
		"tracking_paths": {
		  "aggregate": "/Kontrollieren"
		},
		"url": "https://genius.com/Kontrollieren",
		"current_user_metadata": {
		  "permissions": [
			"follow",
			"send_new_message",
			"send_message"
		  ],
		  "excluded_permissions": [
			"edit",
			"change_login",
			"manage_identities",
			"manage_accomplishments",
			"view_admin_info",
			"view_activity_stream",
			"view_roles",
			"toggle_verification_status",
			"toggle_penalty_status",
			"mark_spam",
			"mark_ham",
			"mass_delete_unreviewed_activity",
			"mass_delete_votes",
			"view_tracked_errors",
			"toggle_moderator_status",
			"toggle_editor_status",
			"toggle_mediator_status",
			"see_messages",
			"tweet_offsite_annotation",
			"see_unreviewed_referents",
			"view_spam_status"
		  ],
		  "interactions": {
			"following": true
		  },
		  "features": [
			"ios_spotify_auth"
		  ]
		},
		"artist": {
		  "_type": "artist",
		  "api_path": "/artists/2266170",
		  "header_image_url": "https://images.genius.com/32ed9250e32e40f41ed4fdea03b510d2.1000x165x1.png",
		  "id": 2266170,
		  "image_url": "https://images.genius.com/1e3e426783719ce6d81e196030f245fb.1000x1000x1.jpg",
		  "index_character": "h",
		  "is_meme_verified": false,
		  "is_verified": false,
		  "name": "Henni",
		  "slug": "Henni",
		  "url": "https://genius.com/artists/Henni",
		  "iq": 25665
		},
		"stats": {
		  "annotations_count": 178,
		  "answers_count": 16,
		  "comments_count": 47,
		  "forum_posts_count": 6,
		  "pyongs_count": 18,
		  "questions_count": 11,
		  "transcriptions_count": 401
		}
	  }
}

loadUser(8068117).then(function(userData) {
    var banner = document.getElementById('js-profile-header-banner');
	var avatar = document.getElementById('js-profile-header-avatar');
	var username = document.getElementById('js-profile-username');
	var iq = document.getElementById('js-profile-iq');
	
	banner.style.backgroundImage = `url(${userData.header_image_url})`;
	avatar.style.backgroundImage = `url(${userData.avatar.small.url})`;
	username.innerHTML = `${userData.name} (@${userData.login})`
	iq.innerHTML = userData.iq
})