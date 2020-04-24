<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

<!--menu du sidebar-->
<!--TODO : corriger le bug des font-awesome pour les logos-->
@section('sidebar')

@section('logo')
  <img src="/template/brand_logo.png" class="img-responsive" alt="logo">
@stop
    <!--épingle 1 du menu -->
    @section('menu1')
    <a href="/fr" title="Accueil">
      Accueil
    </a>
    @stop

    <!--épingle 2 du menu -->
    @section('menu2')
    <a role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" id="dropdownMenu_2" data-toggle="dropdown" href="#" title="Hotel">
      Les Locations
    </a>
    @stop
              <!--épingle du dropdownMenu_2 -->
              @section('DDmenu2_1')
              <a href="" title="">
                Villa cosy
              </a>
              @stop

              <!--épingle du dropdownMenu_2 -->
              @section('DDmenu2_2')
              <a href="" title="">
                Parenthèse
              </a>
              @stop

              <!--épingle du dropdownMenu_2 -->
              @section('DDmenu2_3')
              <a href="" title="">
                Bateau Dream
              </a>
              @stop

              <!--épingle du dropdownMenu_2 -->
              @section('DDmenu2_4')
              <a href="" title="">
                L'impérial
              </a>
              @stop

    <!--épingle 3 du menu -->
    @section('menu3')
    <a href="/Activiés" title="Activités">
      Les Activités
    </a>
    @stop

    <!--épingle 4 du menu -->
    @section('menu4')
    <a href="/galerie" title="Galerie">
      Galerie
    </a>
    @stop

    <!--épingle 4 du menu -->
    @section('menu5')
    <a href="/tourisme" title="Tourisme">
      Tourisme
    </a>
    @stop

    <!--épingle 4 du menu -->
    @section('menu6')
    <a href="/contact" title="Contact">
      Contact
    </a>
    @stop


    <!--Footer de la sidebar -->
    @section('telephone')

    <a href="tel:0494151738" class="phone-number">
      04 94 15 17 38
    </a>
    @stop

    @section('adresse')
    254 chemin de la farlède, <br>83500 La Seyne sur Mer
    @stop

    @section('social')
    <a>Suivez Nous</a>
    @stop

@endsection

<!--Fin du sidebar -->


<!--Début du background-->
<!--TODO : ajouter de quoi faire fonctionner le slider pour avoir plusieurs image de fonds en définalement-->

        @section('background')
        <div data-v-24a269aa="" class="fullbg  " style="background-image: url(/template/background.jpg);"></div>
        @stop

<!--Fin du background-->



@section('content')
    <p>This is my body content.</p>
@endsection
