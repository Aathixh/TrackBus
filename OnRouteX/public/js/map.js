document.addEventListener('DOMContentLoaded', function() {
    var mapElement = document.getElementById('map');
    var latitude = parseFloat(mapElement.getAttribute('data-latitude'))||0;
    var longitude = parseFloat(mapElement.getAttribute('data-longitude'))||0;

    var mapOptions = {
        center: [latitude, longitude],
        zoom: 16
    };

    // Creating a map object
    var map = new L.map('map', mapOptions);

    // Creating a Layer object
    var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

    // Adding layer to the map
    map.addLayer(layer);

    var scale = L.control.scale(); // Creating scale control
    scale.addTo(map);

    var marker = L.marker([latitude, longitude]);
    marker.addTo(map);
    console.log('Latitude:', latitude);
    console.log('Longitude:', longitude);
    marker.bindPopup("Here Is Your Bus").openPopup();
});

document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('alertButton').addEventListener('click', function() {
        var input = prompt("Please enter your alert message and the queries to send to the admin dashboard (comma-separated), separated by a '|':");
        if (input !== null) {
            var parts = input.split("|");
            var alertMessage = parts[0];
            var selectedQueries = parts[1];
            if (selectedQueries) {
                var queries = selectedQueries.split(",");
                // Send the queries to the admin dashboard
                sendQueriesToAdminDashboard(queries);
            }
            fetch('/send-alert', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({message: alertMessage}),
            });
        }
    });
});