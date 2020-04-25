<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>App name- @yield('title')</title>
      <link href="/css/app.css" rel="stylesheet" type ="text/css">
      <link href="/template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type ="text/css">
    </head>
    <body>




<!--Début sidebar -->
    <div id="menu-accueil">
          <div id="sidebar-trigger" class="sidebar-trigger visible-xs" onclick="openNav()">
              <div class="hamburger-menu"></div>
          </div>
          <div id="mobile-logo" class="visible-xs">
              @yield('logomobile')
          </div>
          <nav id="sidenav" class="sidenav">
	           <a href="javascript:void(0)" class="closebtn visible-xs" onclick="closeNav()">×</a>

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
                        <div class="contact-element col-xs-2 selected-element" id="address" onclick="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                        <div class="contact-element col-xs-2" id="email" onclick="">
                  <i class="fa  fa-envelope-o" aria-hidden="true"></i>
                </div>
                  <div class="contact-element col-xs-2" id="language" onclick="">
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
        </nav>
        </div>
        <!--Fonction ouverture fermeture mobile-->
        <script>
        			function openNav() {
        				document.getElementById('sidenav').className += ' sidenav-open'
        				document.getElementById('sidebar-trigger').className += ' trigger-open'


        				var closeOnNextClick = function () {
        						closeNav()
        						this.removeEventListener('click', closeOnNextClick)
        					}
        				var mc = document.getElementById('main-content-accueil')
        				mc.addEventListener('click', closeOnNextClick)
        			}

        			function closeNav() {
        				document.getElementById('sidenav').classList.remove('sidenav-open')
        				document.getElementById('sidebar-trigger').classList.remove('trigger-open')
        			}
                </script>

<!-- Début background-->


              <div id="slider-accueil">
                  <div id="slider">
                      <div  class="blurry blurry-enhanced">
                          @section('background1')
                          @show
                      </div>
                      <div  class="blurry blurry-enhanced">
                          @section('background2')
                          @show
                      </div>
                      <div  class="blurry blurry-enhanced">
                          @section('background3')
                          @show
                      </div>
                      <ol class="dots">
                        <li class="selecteddot"></li>
                        <li class="" ></li>
                        <li class="" ></li>
                      </ol>
                  </div>
              </div>



<!--Fin background-->



<!--Form réservation -->
                <div id="formResaAccueil">
                    <div id="formResa">
                      <!--Gestion mobile-->
                  <div id="formResa-trigger-mobile" class="visible-xs" onclick="openCloseResa()">
                      <div class="form-title">
                          <h3><i class="formResa-trigger-icon fa fa-calendar" aria-hidden="true"></i></h3>
                      </div>
                  </div>

                  <!--Fin gestion mobile-->
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

<!--Fontion de gestion ouverture fermeture sur mobile-->
              <script>

              		function openCloseResa() {
              			var hasClass = function hasClass(element, cls) {
              				return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
              			};

              			var swapToCal = function (icon) {
              				icon.className += " fa-calendar";
              				icon.classList.remove("fa-close");
              			};

              			var swapToClose = function (icon) {
              				icon.className += " fa-close";
              				icon.classList.remove("fa-calendar");
              			};

              			var elem = document.getElementById("formResaPanel");
              			var icons = document.getElementsByClassName("formResa-trigger-icon");

              			if (hasClass(elem, 'panel-closed')) {
              				var i;
              				elem.classList.remove("panel-closed");
              				elem.className += " panel-open";
              //swap the icons
              				for (i = 0 ; i < icons.length ; ++i) {
              					swapToClose(icons[i]);
              				}
              			} else {
              				elem.className += " panel-closed";
              				elem.classList.remove("panel-open");

              //swap the icons
              				for (i = 0 ; i < icons.length ; ++i) {
              					swapToCal(icons[i]);
              				}
              			}
              		}
                  </script>
<!--Fin form reservation -->

<!--Section pop-up-->
<!--Début pop-up 1-->
<div class="side-box ">
          <div class="popup-accueil ">
              <div class="col-xs-12 popup-accueil-content">
                <div class="sidebar-text" onclick="openClose('popup-accueil')">
								          <i id="popup-accueil-sidebar-icon" class="fa fa-2x fa-angle-left" aria-hidden="true"></i>
							  </div>
                        @section('popup1')
                        @show
              </div>
          </div>



<!--Fin pop-up 1-->



<!--Début pop-up 2-->

  <div class="text-accueil ">
        <div class="col-xs-12 text-accueil-content">
          <div class="sidebar-text" onclick="openClose('text-accueil')">
								<i id="text-accueil-sidebar-icon" class="fa fa-2x fa-angle-left" aria-hidden="true"></i>
					</div>
          @section('popup2')
          @show
        </div>

  </div>
</div>
<!--Fin pop-up 2-->

<!--Fonction d'ouverture fermeture de pop up-->
<script>
function hasClass(element, cls) {
			return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1
		}

function closeElement(elem, elemClass) {
			var icon = document.getElementById(elemClass + '-sidebar-icon')
			icon.classList.remove('fa-angle-right')
			icon.className += ' fa-angle-left'
			elem.className += ' closed'
		}

		function openElement(elem, elemClass) {
			var icon = document.getElementById(elemClass + '-sidebar-icon')
			icon.classList.remove('fa-angle-left')
			icon.className += ' fa-angle-right'
			elem.classList.remove('closed')
		}

		function openClose(elemClass) {
			var elem = document.getElementsByClassName(elemClass)[0]

			if (hasClass(elem, 'closed')) {
				openElement(elem, elemClass)

			} else {
				closeElement(elem, elemClass)
			}
		}

</script>
<!--Fin section pop-up-->


    </body>
</html>
