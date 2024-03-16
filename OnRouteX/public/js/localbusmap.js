document.addEventListener('DOMContentLoaded', function() {
    var mapElement = document.getElementById('map');
    var latitude = parseFloat(mapElement.getAttribute('data-latitude')) || 0;
    var longitude = parseFloat(mapElement.getAttribute('data-longitude')) || 0;

    var mapOptions = {
        center: [latitude, longitude],
        zoom: 16
    };

    


    

    var markers = [
        { coordinates: [8.596550, 76.891823], label: 'Bus No 1' },
        { coordinates: [8.594610, 76.88152], label: 'Bus No 2' },
        { coordinates: [8.601117, 76.897462], label: 'Bus No 3' },
        { coordinates: [8.592237, 76.894037], label: 'Bus No 4' }
    ];

    // Creating a map object
    var map = new L.map('map', mapOptions).setView(markers[0].coordinates, 13);
    var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

    // Adding layer to the map
    map.addLayer(layer);

    var scale = L.control.scale(); // Creating scale control
        // Creating a Layer object
    scale.addTo(map);
   
    markers.forEach(function(markerData) {
        var marker = L.marker(markerData.coordinates, { icon: L.icon({ iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png', iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34], shadowSize: [41, 41] }) });
        marker.addTo(map);
        marker.bindPopup(markerData.label);
    });

    console.log('Latitude:', latitude);
    console.log('Longitude:', longitude);
});