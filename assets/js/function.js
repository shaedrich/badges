async function loadUser(id) {
	var user = await fetch(`https://api.genius/users/${id}`);
	var userData = await user.json();
	return userData;
}
loadUser(8068117).then(function(userData) {
})