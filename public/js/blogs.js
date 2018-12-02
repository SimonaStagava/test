$(document).ready(function() {
 
     // Google map API
       function initMap() {
         var aspen = {lat: 39.1771779, lng: -106.8720581};
         var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: aspen});
         var marker = new google.maps.Marker({position: aspen, map: map});
       }
       initMap();
 
    // button to top
        $('.btn--up').on('click', function(){
            $('html').animate({scrollTop: 0}, 800);
        });
    });