
src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAF7f7LulVVbhe0_MpLb3Nx53lFgKTDmU4&sensor=false";
function initialize() {
    var mapOptions = {
        center: new google.maps.LatLng(-34.397, 150.644),
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
}
window.onload = initialize();