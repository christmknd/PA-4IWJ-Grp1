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
        codeAddress();
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
        let address = document.getElementById('annonce_address');
        if (address !== null)
        {
            address = address.value;
        }else{
            address = document.getElementById('evenement_address').value;
        }
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == 'OK') {
                LatLng = results[0].geometry.location
                const nodeA = document.getElementsByClassName('LatLng')[0]
                nodeA.value = [results[0].geometry.location.lat(),results[0].geometry.location.lng()];
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
}