<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>App name- @yield('title')</title>
      <link rel="stylesheet" href="/fontanwesome/css/font-awesome.min.css" type="text/css">
      <link href="/css/app1.css" rel="stylesheet" type ="text/css">


    </head>
    <body>

        </div>


<!--Début sidebar -->
        <div class="sidebar-nav">
              <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                  <a class="navbar-brand" href="/">
                    @yield('logo')
                  </a>
                </div>
                <div class="navbar-collapse sidebar-navbar-collapse collapse in" aria-expanded="true">
                  <ul class="nav navbar-nav">

                          <li class="active">
                            @section('menu1')
                            @show
                          </li>

                          <hr class="hr-menu">

                          <li class="dropdown ">
                            @section('menu2')
                            @show
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu_2">
                                                                                <li>
                                            @section('DDmenu2_1')
                                            @show
                                          </li>
                                                                                <li>
                                            @section('DDmenu2_2')
                                            @show
                                          </li>
                                                                                <li>
                                            @section('DDmenu2_3')
                                            @show
                                          </li>
                                                                                <li>
                                            @section('DDmenu2_4')
                                            @show
                                          </li>

                                                        </ul>
                        </li>
                            <hr class="hr-menu">

                                          <li>
                                @section('menu3')
                                @show
                              </li>

                                    <hr class="hr-menu">

                                                  <li>
                                @section('menu4')
                                @show
                        </li>

                                    <hr class="hr-menu">

                                                  <li>
                                @section('menu5')
                                @show
                        </li>

                                    <hr class="hr-menu">

                                                  <li>
                                @section('menu6')
                                @show
                        </li>


            </div>

                <div class="navbar-footer">
            <div class="contact-footer">
                    <div class="contact-element col-xs-6">
                  <div class="phone-element">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    @section('telephone')
                    @show
                  </div>
                </div>
                        <div class="contact-element col-xs-2 selected-element" id="address" onclick="openPanel('address', 'address-panel')">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                        <div class="contact-element col-xs-2" id="email" onclick="openPanel('email', 'email-panel')">
                  <i class="fa  fa-envelope-o" aria-hidden="true"></i>
                </div>
                  <div class="contact-element col-xs-2" id="language" onclick="openPanel('language', 'language-panel')">
                <img src="/template/fr.jpg" alt="fr">
              </div>
                    <div class="panel-element opened-panel" id="address-panel">
                  @section('adresse')
                  @show
                </div>

      </div>

              <div class="social">
                @section('social')
                @show

              <i class="facebook-logo fa fa-facebook-official" aria-hidden="true"></i>
              <i class="twitter-logo fa fa-twitter-official" aria-hidden="true"></i>
        	     </div>
            </div>
          </div>
        </div>
<!--main navigation zone-->


              <div id="slider-accueil">
              <div id="slider">
              <div data-v-24a269aa="" class="blurry blurry-enhanced">
                  @section('background')
                  @show
              </div>
              </div>
              </div>



<!--Form réservation -->
                <div id="formResaAccueil">
                      <div id="formResa">
                            <div id="formResa-trigger-mobile" class="visible-xs" onclick="openCloseResa()">
                            <div class="form-title">
                            <h3><i class="formResa-trigger-icon fa fa-calendar" aria-hidden="true"></i></h3>
                            </div>
                            </div>

                      <div class="hidden-xs form-title">
                            <h3><i class="far fa-calendar-alt"></i>&nbsp;Réservation</h3>
                      </div>
                <div id="formResaPanel" class="col-xs-12 panel-closed">
                <div class="form-subtitle">   Meilleur tarif garanti </div>

               <form name="resamail" method="POST" action="/reservation">
                <div class="row">
                <input type="hidden" name="_token" value="c0UlJM4byxDJ2BpM9mdcsuAV7XUvTalEurTLIvHh">

                <div class="col-xs-6" id="left-side-resa">
                  <div class="col-xs-12">
                      <div class="row">
                        <div class="form-group flatpickr" id="arrivee">
                          <!-- input is mandatory -->
                          <input name="arrivee" type="text" data-input="" class="flatpickr-input" readonly="readonly">
                            <div id="arrivee-target" data-toggle="">
                              <div class="title-input">
                              <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>&nbsp;Arrivée        </div>
                                <div class="form-date" title="Arrivée">
                                <div class="col-xs-12" id="form-placeholder"></div>
                                <div class="col-xs-5">
                                <div id="form-day">12</div>
                                </div>
                                  <div class="col-xs-7">
                                    <div id="form-month">Septembre</div>
                                    <div id="form-year">2018</div>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-xs-6" id="right-side-resa">
                <div class="form-group">
                    <div class="col-xs-3">
                        <div class="row">
                            <div class="title-input">
                                <i class="fa fa-moon-o fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-9">
                        <div class="row">
                            <input type="number" name="nbnuit" class="formContactInputs" min="1" value="1" required="">
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-xs-3">
                        <div class="row">
                            <div class="title-input">
                                <i class="fa fa-user-o fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-9">
                        <div class="row">
                            <input type="number" name="nbadult" class="formContactInputs" min="1" value="2" required="">
                        </div>
                    </div>
                </div>
                </div>


                <div class="col-xs-12">
                <button class="btn btn-block btn-primary" style="margin-top: 10px" onclick="nextstep()">Voir les disponibilités</button>
                </div>
                </div>

              </div>
                </div>
              </div>



<!--Fin form reservation -->



        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
