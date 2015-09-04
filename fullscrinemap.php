<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
<style>
    #mapg {
        height: 900px;
        clear:both;
    }
</style>
<div id="panel" class="contacts">
    <h3 style="margin:0; padding:0 15px">Рекомендуемый способ передвижения по этому маршруту</h3>
    <select id="mode" class="form-control">
        <option value="DRIVING">На автомобиле</option>
        <option value="WALKING">Пешком</option>
        <option value="TRANSIT">Общ. транспортом</option>
    </select>
</div>
<div id="mapg"></div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<script>
    function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('mapg'), {
            zoom: 19,
            center: {lat: 55.7966986, lng: 37.4915241}
        });
        directionsDisplay.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsDisplay);
        document.getElementById('mode').addEventListener('change', function() {
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
    }
    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var selectedMode = document.getElementById('mode').value;
        directionsService.route({
            origin: {lat: 55.7966986, lng: 37.4915241},  // Haight.
            destination: {lat: 37.495643, lng:55.798673},  // Ocean Beach.
            // Note that Javascript allows us to access the constant
            // using square brackets and a string value as its
            // "property."
            travelMode: google.maps.TravelMode[selectedMode]
        }, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
</script>



