let annoncesAll = [];
let evenementsAll = [];
// Initialize and add the map
function initMapIndex() {
    const France = new google.maps.LatLng(48.85, 2.32);
    const mapOptions = {
        zoom: 5,
        center: France
    }
    let map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // Info GoogleMap
    let infoWindowGeolocalisation = new google.maps.InfoWindow();

    // Geolocalisation
    const locationButton = document.createElement("button");
    locationButton.textContent = "Géolocalisation";
    locationButton.classList.add("custom-map-control-button");
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
    locationButton.addEventListener("click", () => {
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };

                    infoWindowGeolocalisation.setPosition(pos);
                    infoWindowGeolocalisation.setContent("Ma position");
                    infoWindowGeolocalisation.open(map);
                    map.setCenter(pos);
                    map.setZoom(12)
                },
                () => {
                    handleLocationError(true, infoWindowGeolocalisation, map.getCenter());
                }
            );
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindowGeolocalisation, map.getCenter());
        }
    });

    let urlcourante = document.location.href;
    urlcourante=urlcourante.slice(0,urlcourante.length-1)

    const contentStringAnnonce = (annonce) =>
        '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">'+annonce.nomAnimal+'</h1>' +
        '<div id="bodyContent">' +
        '<p>Espece: '+annonce.espece+' Sexe: '+annonce.sexe+' Age: '+annonce.age+'</p>' +
        '<p>Accéder à l\'annonce <a href=' + urlcourante.toString() +annonce.lien+ '>'
        +annonce.titre+
        '</a></p>'+
        '<p>Publié le '+annonce.atCreated+' par '+annonce.pseudo+'</p>' +
        '</div>' +
        '</div>'
    ;
    // Creation des Markers des Annonces
    for (let annonce of annoncesAll)
    {
        let infoWindow = new google.maps.InfoWindow();
        let annonceLatLng = annonce.LatLng.split(",")
        const mark_annonce = new google.maps.LatLng(annonceLatLng[0], annonceLatLng[1]);
        // The marker
        const marker = new google.maps.Marker({
            position: mark_annonce,
            animation: google.maps.Animation.DROP,
            map: map,
        });

        // Add a click listener for each marker, and set up the info window.
        marker.addListener("click", () => {
            marker.setAnimation(google.maps.Animation.BOUNCE);
            infoWindow.addListener("closeclick", () => {
                marker.setAnimation(null);
            })
            infoWindow.close();
            infoWindow.setContent(contentStringAnnonce(annonce));
            infoWindow.open(marker.getMap(), marker);
        });
    }

    console.log(evenementsAll)
    const contentStringEvenement = (evenement) =>
        '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">'+evenement.titre+'</h1>' +
        '<div id="bodyContent">' +
        '<p>Date de l\'evenement: '+evenement.dateEvent+' à '+evenement.ville+'</p>' +
        '<p>Nombre de participant: '+evenement.user_registered+' Nombre d\'annonce: '+evenement.annonces+'</p>' +
        '<p>Accéder à l\'evenement <a href=' + urlcourante.toString() +evenement.lien+ '>'
        +evenement.titre+
        '</a></p>'+
        '<p>Publié le '+evenement.atCreated+' par '+evenement.pseudo+'</p>' +
        '</div>' +
        '</div>'
    ;

    // Creation des Markers des Evenements
    for (let evenement of evenementsAll)
    {
        let infoWindow = new google.maps.InfoWindow();
        let evenementLatLng = evenement.LatLng.split(",")
        const mark_evenement = new google.maps.LatLng(evenementLatLng[0], evenementLatLng[1]);
        // The marker
        const marker = new google.maps.Marker({
            position: mark_evenement,
            icon : "../map_green2.png",
            animation: google.maps.Animation.DROP,
            map: map,
        });

        // Add a click listener for each marker, and set up the info window.
        marker.addListener("click", () => {
            marker.setAnimation(google.maps.Animation.BOUNCE);
            infoWindow.addListener("closeclick", () => {
                marker.setAnimation(null);
            })
            infoWindow.close();
            infoWindow.setContent(contentStringEvenement(evenement));
            infoWindow.open(marker.getMap(), marker);
        });

    }

}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
    );
    infoWindow.open(map);
}

function annoncesJson(){
    const annoncesNodes = document.getElementsByClassName('annonceJson3')
    for ( let annonce of annoncesNodes)
    {
        annoncesAll.push(JSON.parse(annonce.innerHTML))
    }
}

function evenementsJson(){
    const evenementsNodes = document.getElementsByClassName('evenementJson3')
    for ( let evenement of evenementsNodes)
    {
        evenementsAll.push(JSON.parse(evenement.innerHTML))
    }
}