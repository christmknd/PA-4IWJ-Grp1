"use strict";

var geocoder;
var map;
var LatLng;
function initMap() {
    const componentForm = [
        'location',
        'locality',
        'country',
        'postal_code',
    ];
    const autocompleteInput = document.getElementsByClassName('location')[0];
    const autocomplete = new google.maps.places.Autocomplete(autocompleteInput, {
        fields: ["address_components", "geometry", "name"],
        types: ["address"],
    });
    autocomplete.addListener('place_changed', function () {
        const place = autocomplete.getPlace();
        if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert('No details available for input: \'' + place.name + '\'');
            return;
        }
        fillInAddress(place);
        var mapOptions = {
            zoom: 5,
            center: codeAddress()
        }
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
    });

    function fillInAddress(place) {  // optional parameter
        const addressNameFormat = {
            'street_number': 'short_name',
            'route': 'long_name',
            'locality': 'long_name',
            'administrative_area_level_1': 'short_name',
            'country': 'long_name',
            'postal_code': 'short_name',
        };
        const getAddressComp = function (type) {
            for (const component of place.address_components) {
                if (component.types[0] === type) {
                    return component[addressNameFormat[type]];
                }
            }
            return '';
        };
        document.getElementsByClassName('location')[0].value = getAddressComp('street_number') + ' '
            + getAddressComp('route');
        for (const component of componentForm) {
            // Location field is handled separately above as it has different logic.
            if (component !== 'location') {
                document.getElementsByClassName(component)[0].value = getAddressComp(component);
            }
        }
    }

    function codeAddress() {
        geocoder = new google.maps.Geocoder();
        var address = document.getElementById('annonce_address').value;
        console.log(address)
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == 'OK') {
                LatLng = results[0].geometry.location
                console.log(results)
                console.log(results[0].geometry.location.toString())
                var nodeA = document.createElement('p')
                var nodeB = document.createTextNode(results[0].geometry.location.toString())
                nodeA.appendChild(nodeB)
                document.body.appendChild(nodeA)
                return results[0].geometry.location
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
}