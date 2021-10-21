var geocoder;
var map;
// Initialize and add the map
function initMapIndex() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(48.85, 2.32);
    var mapOptions = {
        zoom: 5,
        center: latlng
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
}

// Initialize and add the map
function initMapShow() {
    var mapOptions = {
        zoom: 8
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
}

// GOECODING => Parse string en Geocode
// address => adresse saisi par user à parser
function codeAddress(address) {
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == 'OK') {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}
