$(document).ready(function() {

	// Gestionnaire d’événement délégué
	

	
	$('[data-js-btn]').click(function(e) {
		e.preventDefault();

		$.get('requeteAJAX.php',function(data) {

			//console.log(data);

			let parsedData = $.parseJSON(data),
				msg = '';

			$.each(parsedData, function(i, item) {
				msg += `<p>${item.nom} - ${item.quartier}</p>`;
			});

			$('[data-js-result]').html(msg);

		});
	});
});