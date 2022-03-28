$(document).ready(function() {

    $('[data-js-team]').change(function() {
		let value = $('[data-js-team]').val();
		if (value != 0) $('[data-js-result]').load('requeteAJAX.php?idEquipe=' + value);
	});

});