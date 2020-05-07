
<div class="wrapper">
  <nav class="sidebar">
        <div class="sidebar-header">
          <a class="navbar-brand" href="/vue1">
            @yield('logo')
          </a>
        </div>


        <div class="sidebar-body flyout_menu">
          <ul class="list-unstyled components">

              <li class="active">
                @section('menu1')
                @show
              </li>

              <hr class="hr-menu">

              <li class="nav-item dropdown">
                @section('menu2')
                @show
                          <ul class="dropdown" aria-labelledby="true">
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


                              <li >
                    @section('menu3')
                    @show
                  </li>
            <hr class="hr-menu">



                                      <li >
                    @section('menu4')
                    @show
            </li>
            <hr class="hr-menu">


                                      <li >
                    @section('menu5')
                    @show
            </li>
            <hr class="hr-menu">


                                      <li>
                    @section('menu6')
                    @show
            </li>
        </div>

        <div class="sidebar-footer">
              <div class="adresse" id="">
                      @section('adresse')
                      @show
              </div>

              <div class="phone">
                <i class="fa fa-phone" aria-hidden="true"></i>
                      @section('telephone')
                      @show
                      <div class="marker" id="" onclick="">
                               <i class="fa fa-map-marker" aria-hidden="true"></i>
                       </div>
                       <div class="mail" id="" onclick="">
                               <i class="fa  fa-envelope-o" aria-hidden="true"></i>
                       </div>
                       <div class="fr" id="" onclick="">
                             <img src="/template/fr.jpg" alt="fr">
                       </div>
                </div>
                <div class="social">
                  Suivez-Nous
                  <div class="fb">
                    <i class="facebook-logo fa fa-facebook-official" aria-hidden="true"></i>
                  </div>
                  <div class="twitter">
                    <i class="fab fa fa-twitter" aria-hidden="true"></i>
                  </div>
                </div>





        </div>

  </nav>
</div>
