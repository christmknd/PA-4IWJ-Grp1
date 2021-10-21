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


// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
let autocomplete;
let address1Field;
let postalField;

function initAutocomplete() {
    address1Field = document.querySelector("#ship-address");
    postalField = document.querySelector("#postcode");

    // Create the autocomplete object, restricting the search predictions to
    // addresses in the FR
    autocomplete = new google.maps.places.Autocomplete(address1Field, {
        componentRestrictions: { country: ["fr"] },
        fields: ["address_components", "geometry"],
        types: ["address"],
    });
    address1Field.focus();
    // When the user selects an address from the drop-down, populate the
    // address fields in the form.
    autocomplete.addListener("place_changed", fillInAddress);
}

function fillInAddress() {
    // Get the place details from the autocomplete object.
    const place = autocomplete.getPlace();
    let address1 = "";
    let postcode = "";

    // Get each component of the address from the place details,
    // and then fill-in the corresponding field on the form.
    // place.address_components are google.maps.GeocoderAddressComponent objects
    // which are documented at http://goo.gle/3l5i5Mr
    for (const component of place.address_components) {
        const componentType = component.types[0];

        switch (componentType) {
            case "street_number": {
                address1 = `${component.long_name} ${address1}`;
                break;
            }

            case "route": {
                address1 += component.short_name;
                break;
            }

            case "postal_code": {
                postcode = `${component.long_name}${postcode}`;
                break;
            }

            case "postal_code_suffix": {
                postcode = `${postcode}-${component.long_name}`;
                break;
            }
            case "locality":
                document.querySelector("#locality").value = component.long_name;
                break;
            case "administrative_area_level_1": {
                document.querySelector("#state").value = component.short_name;
                break;
            }
            case "country":
                document.querySelector("#country").value = component.long_name;
                break;
        }
    }

    address1Field.value = address1;
    postalField.value = postcode;
}