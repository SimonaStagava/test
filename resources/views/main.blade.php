@extends('layouts.main')

@section('content')
    <div class="advert_link">
        <a href="https://xgamesaspen.frontgatetickets.com/" target="_blank">
          <img class="advert--img" src="img/Winter_X_Games_logo.png">
        </a>
    </div>
  
    <section>
      <div class="container header_photos">
        <div class="row">
          <div class="col-4 header_src" style="background-image: url('img/Aspen_small.png');">
            <a id="open-mikes-modal" class="header_click">
              <h3 class="header_txt">Mark McMorris</h3>
            </a>
          </div>
          <div class="col-4 header_src" style="background-image: url('img/snowkiting_small.png');">
            <a class="header_click">
              <h3 class="header_txt">Sebastian Copeland</h3>
            </a>
          </div>
          <div class="col-4 header_src" style="background-image: url('img/Hibbert_small.png');">
            <a class="header_click">
              <h3 class="header_txt">Tucker Hibbert</h3>
            </a>
          </div>
        </div>
      </div>
  
      <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
          <div>
            <img data-u="image" src="img/Aspen.jpg" alt="Aspen" />
          </div>
          <div>
            <img data-u="image" src="img/Hibbert.jpg" alt="Hibbert" />
          </div>
          <div>
            <img data-u="image" src="img/snowkiting.png" alt="snowkiting" />
          </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1"
          data-scale="0.5" data-scale-bottom="0.75">
          <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
          </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2"
          data-scale="0.75" data-scale-left="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2"
          data-scale="0.75" data-scale-right="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
          <h2><b>#X-GAMES 2018</b></h2>
        <div class="row">
            <div id="video" class="col-sm video--container"></div>
            <div class="col-sm programm">
              <h6><b>Thursday, January 24</b></h6>
              <p>Women's Ski SuperPipe Final</p>
              <p>Snowmobile Speed & Style</p>
              <p>LifeProof Men's Ski SuperPipe Final</p>
              <h6><b>Friday, January 25</b></h6>
              <p>Jeep Women's Snowboard Slopestyle Final</p>
              <p>Snowmobile Freestyle</p>
              <p>The Real Cost Men's Snowboard Big Air</p>
              <h6><b>Saturday, January 26</b></h6>
              <p>Jeep Women's Ski Slopestyle</p>
              <p>Women's Snowboard Big Air</p>
              <p>Jeep Men's Snowboard Slopestyle</p>
              <p>Snow BikeCross</p>
              <p>The Real Cost Men's Ski Big Air</p>
              <p>SoFi Women's Snowboard SuperPipe</p>
              <h6><b>Sunday, January 27</b></h6>
              <p>Women's Ski Big Air</p>
              <p>Jeep Men's Ski Slopestyle</p>
              <p>Monster Energy Men's Snowboard SuperPipe</p>
              <p>Snow Bike Best Trick</p>
            </div>
        </div>
      </div>
    </section>
@endsection