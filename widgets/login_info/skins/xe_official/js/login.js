/* After Login */
function completeLogin(ret_obj, response_tags, params, fo_obj) {
    var url =  current_url.setQuery('act','');
    location.href = url;
}

jQuery(function($){
	// keep signed?
	var keep_msg = $('.keep_msg');
	keep_msg.hide();
	$('#keep_signed').change(function(){
		if($(this).is(':checked')){
			keep_msg.slideDown(200);
		} else {
			keep_msg.slideUp(200);
		}
	});

	// focus userid input box
	if (!$(document).scrollTop()) {
		try {
			$('#fo_login_widget > input[name=user_id]').focus();
		} catch(e){};
	}
});



/* Google SSO */
var googleUser = {};
var startApp = function() {
	gapi.load('auth2', function() {
						auth2 = gapi.auth2.init({
							client_id : '901872542156-l43rnlajp3tgup8lloagvof2de46djcf.apps.googleusercontent.com',
									cookiepolicy : 'single_host_origin',
									scope: 'profile email'
								});
						attachSignin(document.getElementById('customBtn'));
					});
};

function attachSignin(element) {
	auth2.attachClickHandler(element, {}, function(googleUser) {
		var id_token = googleUser.getAuthResponse().id_token;
		console.log("ID Token: " + id_token);

		var xhr = new XMLHttpRequest();
		xhr.open('POST', '/login');
		xhr.setRequestHeader('Content-Type',
				'application/x-www-form-urlencoded');
		xhr.send('idtoken=' + id_token);
		xhr.onload = function() {
			console.log('Signed in as: ' + xhr.responseText);
			//location.href = '/index';
		};
		
	}, function(error) {
		alert('error!');
		console.log(JSON.stringify(error, undefined, 2));
	});
}