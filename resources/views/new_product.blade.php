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

    <div class="mt-5 font-weight-bold container">

        <div>
            <span class="required">*</span> = Champ obligatoire
        </div>
        
        <form class="form" action="/stock/new" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Nom du jeu <span class="required">*</span></label>
                <input name="name" type="text" class="form-control {{ $errors -> has('name') ? ' bg-danger ' : ''}}" id="name" 
                placeholder="Nom" required>
            </div>
            @if ($errors -> has('name'))
            <span class="help-block">
                <strong {{ $errors -> first('name') }}</strong>
            </span>
            @endif

            <div>Plateforme <span class="required">*</span></div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="inlineRadio1" value="steam" required>
                <label class="form-check-label" for="inlineRadio1">Steam</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="inlineRadio2" value="ps4">
                <label class="form-check-label" for="inlineRadio2">PS4</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="inlineRadio3" value="switch">
                <label class="form-check-label" for="inlineRadio3">Switch</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="inlineRadio4" value="one">
                <label class="form-check-label" for="inlineRadio4">One</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="inlineRadio5" value="3ds">
                <label class="form-check-label" for="inlineRadio5">3DS</label>
            </div>
            @error('format')
                <span class="alert alert-danger text-danger-eva invalid-feedback text-center" role="alert">
                    <strong>{{ __('Veuillez sélectionner une case pour la plateforme.') }}</strong>
                </span>
            @enderror

            <div class="form-group @error('genre') is-invalid @enderror">
                <label for="genre">Genre du jeu<span class="required">*</span></label><br/>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="genre" id="inlineCheckbox1" value="RPG">
                    <label class="form-check-label" for="inlineCheckbox1">RPG</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="genre" id="inlineCheckbox2" value="Action">
                    <label class="form-check-label" for="inlineCheckbox2">Action</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="genre" id="inlineCheckbox3" value="Aventure">
                    <label class="form-check-label" for="inlineCheckbox3">Aventure</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="genre" id="inlineCheckbox4" value="Simulation">
                    <label class="form-check-label" for="inlineCheckbox4">Simulation</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="genre" id="inlineCheckbox5" value="Sport">
                    <label class="form-check-label" for="inlineCheckbox5">Sport</label>
                </div> 
            </div>
        
            @error('description')
                <span class="alert alert-danger text-danger-eva invalid-feedback text-center" role="alert">
                    <strong>{{ __('Veuillez sélectionner au moins une case pour décrire le(s) matériel(s) à récupérer.') }}</strong>
                </span>
            @enderror

            <div class="form-group">
                <label for="prix_achat">Prix d'achat</label>
                <input name="prix_achat" type="text" class="form-control" id="prix_achat" placeholder="Prix d'achat">
            </div>
            @if ($errors -> has('prix_achat'))
                <span class="help-block">
                    <strong>{{ $errors -> first('prix_achat') }}</strong>
                </span>
            @endif 
        
            <div class="form-group">
                <label for="price">Prix de vente</label>
                <input name="price" type="text" class="form-control" id="price" placeholder="Prix de vente">
            </div>
            @if ($errors -> has('price'))
                <span class="help-block">
                    <strong>{{ $errors -> first('price') }}</strong>
                </span>
            @endif 
        
            <div class="form-group">
                <label for="stock">Stock</label>
                <input name="stock" type="text" class="form-control" id="stock" placeholder="Stock">
            </div>
            @if ($errors -> has('stock'))
                <span class="help-block">
                    <strong {{ $errors -> first('stock') }}</strong>
                </span>
            @endif
        
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>

    </div>

</div>
{{-- FIN CONTENU BODY --}}
@endsection
