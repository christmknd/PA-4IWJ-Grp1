let annonces = [];
let evenements = [];
// Initialize and add the map
function initMapIndex() {
    const France = new google.maps.LatLng(48.85, 2.32);
    const mapOptions = {
        zoom: 5,
        center: France
    }
    const map = new google.maps.Map(document.getElementById('map'), mapOptions);

    for (let annonce of annonces)
    {
        let annonceLatLng = annonce.split(",")
        const mark_annonce = new google.maps.LatLng(annonceLatLng[0], annonceLatLng[1]);
        // The marker
        const marker = new google.maps.Marker({
            position: mark_annonce,
            clickable : false,
            map: map,
        });
    }

    for (let evenement of evenements)
    {
        let evenementLatLng = evenement.split(",")
        const mark_evenement = new google.maps.LatLng(evenementLatLng[0], evenementLatLng[1]);
        // The marker
        const marker = new google.maps.Marker({
            position: mark_evenement,
            icon : "../map_green2.png",
            clickable : false,
            map: map,
        });

    }

}

function annoncesJson(){
    const annoncesNodes = document.getElementsByClassName('annonceJson')
    for ( let annonce of annoncesNodes)
    {
        annonces.push(annonce.innerHTML)
    }
}

function evenementsJson(){
    const evenementsNodes = document.getElementsByClassName('evenementJson')
    for ( let evenement of evenementsNodes)
    {
        evenements.push(evenement.innerHTML)
    }
}