<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        width: 0 auto;
        height: 500px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>

    <script>      
      function initMap() {
      var myLatLng = {lat:-25.8814190 , lng:32.604565 };

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: myLatLng
      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Isis Arte'
      });
    }
          
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer>
        </script>
  </body>
</html>