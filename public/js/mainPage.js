$(document).ready(function() {

    // responsive photo slider

    var jssor_1_options = {
        $AutoPlay: 1,
        $SlideWidth: 720,
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
          $Class: $JssorBulletNavigator$
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      /*#region responsive code begin*/

      var MAX_WIDTH = 980;

      function ScaleSlider() {
          var containerElement = jssor_1_slider.$Elmt.parentNode;
          var containerWidth = containerElement.clientWidth;

          if (containerWidth) {

              var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

              jssor_1_slider.$ScaleWidth(expectedWidth);
          }
          else {
              window.setTimeout(ScaleSlider, 30);
          }
      }

      ScaleSlider();

      $(window).bind("load", ScaleSlider);
      $(window).bind("resize", ScaleSlider);
      $(window).bind("orientationchange", ScaleSlider);
      /*#endregion responsive code end*/


    // youtube API

    var key = 'AIzaSyB8_UVih4YcLtdIWkU4lAnDh104vZokbpY';
    var playlistId = 'PLGSIEmIEDaU_otfvgAbbcwHS-L1_cMlD4';
    var URL = 'https://www.googleapis.com/youtube/v3/playlistItems';

    var options = {
        part: 'snippet',
        key: key,
        maxResults: 5,
        playlistId: playlistId
    }

    loadVideos();

    function loadVideos() {
        $.getJSON(URL, options, function(data){
            console.log(data);
            //var id = data.items[0].snippet.resourceId.videoId;
            //mainVideo(id);
            resultsLoop(data);
        });
    }

    function mainVideo(id) {
        $('#boardVid').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/'+id+'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
    }

    function resultsLoop(data) {
            var vidMasivs = [
                data.items[0].snippet.resourceId.videoId,
                data.items[1].snippet.resourceId.videoId,
                data.items[2].snippet.resourceId.videoId,
                data.items[3].snippet.resourceId.videoId,
                data.items[4].snippet.resourceId.videoId
            ];
            var randomVid = vidMasivs[Math.floor(Math.random()*vidMasivs.length)];
            $('#video').html(`<iframe width="853" height="480" src="https://www.youtube.com/embed/${randomVid}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>`);
    }

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