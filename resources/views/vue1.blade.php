@extends('layout.header')

@section('title', 'Page Title')



<!--Navbar-->
@extends ('layout.navbar')

@section('logo')
  <img src="/template/brand_logo.png" class="img-fluid" alt="logo">
@stop

<!--épingle 1 du menu -->
@section('menu1')
<a href="/fr" title="Accueil">
  Accueil
</a>
@stop

<!--épingle 2 du menu -->
@section('menu2')
<a role="button" class="" id="dropdownMenu_2" href="#">
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


@section('adresse')
254 chemin de la fardèle <br>
83500 La Seyne sur mer
@stop

@section('telephone')
04 94 15 17 38
@stop
