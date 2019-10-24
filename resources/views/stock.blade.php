@extends('layouts.default')
{{-- ['title' => 'Accueil'] --}}
@section('content')
{{-- DEBUT CONTENU BODY --}}
<div id="stock">

    <div class="jumbotron rounded-0 text-center">
        <div class="container">
            <h1 class="display-3">Stock</h1>
            <h2 class="text-black small-caps">Slogan</h2>
        </div>
        <p>Accroche</p>
    </div>

    <div class="d-flex justify-content-center mt-5 resp text-center font-weight-bold">
        <p>
            Grid -- Stock des items de la boutique<br/>
            Boutons de tri en haut
        </p>
    </div>

</div>
{{-- FIN CONTENU BODY --}}
@endsection
