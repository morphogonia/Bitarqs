
$(document).ready(function(){
	
	/******************************************
	/* FORM CONTACTO */
	$('form#myform').validate({
		debug: false,
		rules: {
			nombre: 'required',
			email: 'required',
			comments: 'required'
		},
		messages: {
			nombre: '* Required',
			email: '* Required',
			comments: '* Required'
		},
		submitHandler: function(form) {
			$.post('process.php', $('form#myform').serialize(), function(data) {
				$('div#thx').html('<h2>Hemos recibido tu mensaje. A la brevedad responderemos a tus inquietudes.</h2>');
			});
		}
	});


});



