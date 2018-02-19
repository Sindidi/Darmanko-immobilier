window.onload = function() {
    var config = {
        latitude: 48.865460,
        longitude: 2.321120,
        location: 'Paris, Ile de France, France'
    };

    // Création d'un objet pLatLng pour stocker les coordonnées
    var latlng = new google.maps.LatLng(config.latitude, config.longitude);

    // Options de la carte
    var myOptions = {
        zoom: 2,
        center: latlng,
        // mapTypeId: google.maps.MapTypeId.SATELLITE
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // Création et affichage de la carte dans le div map_canvas
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    // Ajout d'un marqueur sur la carte
    var mark = new google.maps.Marker({
        position: latlng,
        map: map,
        title: config.location
    });
}