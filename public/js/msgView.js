$(document).ready(function() {

    // form validation 
    $('.msgForm').validate( {
        rules: {
            name: {
                required: true,
                minlenght: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true,
                maxlenght: 50
            },
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlenght: "Your name must consist of at least 2 characters"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter <em>valid</em> email"
            },
            message: {
                required: "Please enter your message",
                maxlenght: "Your message can consist of max 100 characters"
            },
        },
    });

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