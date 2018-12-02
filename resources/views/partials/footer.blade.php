<?php

use Carbon\Carbon;

    $year = Carbon::now();
    $thisYear = $year->year;

?>

<footer id="aboutUs">
        <div>
          <div class="container">
            <div class="row">
              <div id="map" class="col-sm-6 col-lg">
                  <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1btEdBkIDSJznm7i2fW5yQES94qLTRNY&callback=initMap">
                  </script>
              </div>
              <div class="col-sm-6 col-lg contact">
                <p><i class="fas fa-envelope"></i> info@xgames.org</p>
                <p><i class="fas fa-phone-square"></i> +1 970-429-9100‎</p>
                <p><i class="fas fa-map-marked-alt"></i> 415 E Dean St, Aspen, CO‎</p>
                <p><i class="fas fa-user-circle"></i> Developed by Simona Stagava</p>
                <p><i class="fas fa-copyright"></i> Copyright &copy; {{ $thisYear }}</p>
              </div>
              <div class="col-lg emailInput">
                <form class="form-validation" method="post" action="">
                  <div class="input-group">
                    <label><b>Sign up for updates</b></label>
                    <input id="email" type="email" name="email" placeholder="example@gmail.com">
                  </div>
                  <div class="input-group">
                    <button type="submit" name="subscribe" class="btn">SUBSCRIBE</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </footer>