<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(18.52,73),
    zoom:15,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsFjXLzauXCIkW0OdIXWm1d8CjdJ0NbEc&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>