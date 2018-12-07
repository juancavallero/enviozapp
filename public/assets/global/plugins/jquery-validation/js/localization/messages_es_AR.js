(function( factory ) {
	if ( typeof define === "function" && define.amd ) {
		define( ["jquery", "../jquery.validate"], factory );
	} else {
		factory( jQuery );
	}
}(function( $ ) {

/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: ES (Spanish; Español)
 * Region: AR (Argentina)
 */
$.extend($.validator.messages, {
	required: "Este campo es obligatorio.",
	remote: "Por favor, completá este campo.",
	email: "Ingresar un e-mail válido.",
	url: "Ingresar una URL válida.",
	date: "Ingresar una fecha válida.",
	dateISO: "Por favor, escribí una fecha (ISO) válida.",
	number: "Ingresar un número entero válido.",
	digits: "Ingresar sólo dígitos.",
	creditcard: "Ingresar un número de tarjeta válido.",
	equalTo: "Ingresar el mismo valor nuevamente.",
	extension: "Por favor, escribí un valor con una extensión aceptada.",
	maxlength: $.validator.format("Ingresar máximo {0} caracteres."),
	minlength: $.validator.format("Ingresar mínimo {0} caracteres."),
	rangelength: $.validator.format("Ingresar un valor entre {0} y {1} caracteres."),
	range: $.validator.format("Ingresar un valor entre {0} y {1}."),
	max: $.validator.format("Ingresar un valor menor o igual a {0}."),
	min: $.validator.format("Ingresar un valor mayor o igual a {0}."),
	nifES: "Por favor, escribí un NIF válido.",
	nieES: "Por favor, escribí un NIE válido.",
	cifES: "Por favor, escribí un CIF válido."
});

}));