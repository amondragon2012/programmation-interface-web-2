$(document).ready(function() {

    $('[data-js-btn]').click(function(e) {
		//e.preventDefault();

		let msg = '';

		$.get('requeteAJAX.php', function(data) {

			console.log(data);

			let parsedData = $.parseJSON(data);

			$.each(parsedData, function(i, item) {
				console.log(item.nom);
				msg += `<p>${item.nom} - ${item.quartier}</p>`;
			});
		})
		.done(function() {
			$('[data-js-result]').html(msg);
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