// CONTACT MAP

var PageContact = function() {
    // console.log(ubicaciones);
    // ubicaciones.forEach(function(ubicacion){
    //     console.log(ubicacion);
    // });
	var _init = function() {
		var mapbg = new GMaps({
			div: '#map',
            zoom: 6,
            lat: -32.04571,
            lng: -63.2014,
			scrollwheel: true
		});
        ubicaciones.forEach(function(ubicacion){
            mapbg.addMarker({
                lat: ubicacion['latitud'],
                lng: ubicacion['longitud'],
                title: 'Ubicacion',
                infoWindow: {
                    content: '<h3>'+ ubicacion['nombre'] + ' ' + ubicacion['apellido'] + '</h3><img style="max-width: 350px"><p style="color: black">Latitud:' + ubicacion['latitud'] + '</p><p style="color: black">Longitud:' + ubicacion['longitud'] + '</p><p style="color: black">Dirección:' + ubicacion['direccion'] + '</p>'
                }
            });
        });
        // mapbg.addMarker({
			// lat: -32.0228997,
			// lng: -62.9185859,
			// title: 'Pellfood',
			// infoWindow: {
			// 	content: '<h3>Pellfood</h3><img style="max-width: 350px" src="' + baseurl + '/web/images/contacto/casacentral.jpg"><p style="color: black">Sanchez Manzanera 295, Pozo del Molle, Córdoba, Argentina, C.P 5913</p>'
			// }
        // });
        // mapbg.addMarker({
        //     lat: -31.665265,
        //     lng: -63.201600,
        //     title: 'Pellfood',
        //     infoWindow: {
        //         content: '<h3>Planta 1</h3><img style="max-width: 350px" src="' + baseurl + '/web/images/contacto/planta1.jpeg"><p style="color: black">J. D. Perón y 25 de Mayo, sobre Ruta Provincial Nº13, Calchín, Córdoba, Argentina.</p>'
        //     }
        // });
        // mapbg.addMarker({
        //     lat: -31.664788,
        //     lng: -63.173233,
        //     title: 'Pellfood',
        //     infoWindow: {
        //         content: '<h3>Planta 2</h3><img style="max-width: 350px" src="' + baseurl + '/web/images/contacto/planta2.jpeg"><p style="color: black">Zona Industrial Calchín, Ruta Provincial Nº13 km 73, Calchín, Córdoba, Argentina.</p>'
        //     }
        // });
	}

    return {
        //main function to initiate the module
        init: function() {

            _init();

        }

    };
}();

$(document).ready(function() {
    PageContact.init();
});