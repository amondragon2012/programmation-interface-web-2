$(document).ready(function() {

    $('[data-js-btn]').click(function(e) {
		e.preventDefault();

		let username = $('[data-js-username]').val(),
			password = $('[data-js-password]').val(),
			lastname = $('[data-js-last-name]').val(),
			firstname = $('[data-js-first-name]').val();

		$.post('requeteAJAX.php', { username: username, password: password, lastname: lastname, firstname: firstname })
		.done(function() {
			$('[data-js-form]').hide();
			$('[data-js-form-wrapper]').html('<h3>Merci !</h3>');
			console.log('Done');
		})
		.fail(function() {
			console.log('Fail');
		})
		.always(function() {
			console.log('Always');
		});
	});

});