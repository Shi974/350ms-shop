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
                <strong>{{ __('Veuillez entrer le nom du jeu.') }}</strong>
            </span>
            @endif

            <div>Plateforme <span class="required">*</span></div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="formatRadio1" value="steam" required>
                <label class="form-check-label" for="formatRadio1">Steam</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="formatRadio2" value="ps4">
                <label class="form-check-label" for="formatRadio2">PS4</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="formatRadio3" value="switch">
                <label class="form-check-label" for="formatRadio3">Switch</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="formatRadio4" value="one">
                <label class="form-check-label" for="formatRadio4">One</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="format" id="formatRadio5" value="3ds">
                <label class="form-check-label" for="formatRadio5">3DS</label>
            </div>
            @error('format')
                <span class="alert alert-danger text-danger-eva invalid-feedback text-center" role="alert">
                    <strong>{{ __('Veuillez sélectionner une case pour la plateforme.') }}</strong>
                </span>
            @enderror

            <div>Genre <span class="required">*</span></div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="genre" id="genreRadio1" value="RPG" required>
                <label class="form-check-label" for="genreRadio1">RPG</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="genre" id="genreRadio2" value="Action">
                <label class="form-check-label" for="genreRadio2">Action</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="genre" id="genreRadio3" value="Aventure">
                <label class="form-check-label" for="genreRadio3">Aventure</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="genre" id="genreRadio4" value="Simulation">
                <label class="form-check-label" for="genreRadio4">Simulation</label>
            </div>
            <div class="form-check form-check-inline font-weight-normal">
                <input class="form-check-input" type="radio" name="genre" id="genreRadio5" value="Sport">
                <label class="form-check-label" for="genreRadio5">Sport</label>
            </div>
            @error('genre')
                <span class="alert alert-danger text-danger-eva invalid-feedback text-center" role="alert">
                    <strong>{{ __('Veuillez sélectionner une case pour le genre.') }}</strong>
                </span>
            @enderror
            <button type="button" class="btn btn-outline-info btn-sm mb-2 ml-2">+</button>
            {{-- AJOUTER JQUERY SUR BOUTON + GENRE_2 --}}

            <div class="form-group">
                <label for="buyingprice">Prix d'achat (€)</label>
                <input name="buyingprice" type="number" step="0.01" min="0" class="form-control" id="buyingprice" 
                placeholder="Prix d'achat">
            </div>
            @if ($errors -> has('buyingprice'))
                <span class="help-block">
                    <strong>{{ $errors -> first('buyingprice') }}</strong>
                </span>
            @endif 
        
            <div class="form-group">
                <label for="sellingprice">Prix de vente (€) <span class="required">*</span></label>
                <input name="sellingprice" type="number" step="0.01" min="0" class="form-control" id="sellingprice" 
                placeholder="Prix de vente" required />
            </div>
            @if ($errors -> has('sellingprice'))
                <span class="help-block">
                    <strong>{{ $errors -> first('sellingprice') }}</strong>
                </span>
            @endif 

            <div class="form-group">
                <label for="stock">Stock <span class="required">*</span></label>
                <input name="stock" type="number" class="form-control @error('stock') is-invalid @enderror" 
                    id="stock" placeholder="2" value="{{ old('stock') }}" maxlength="2" min="0" max="99" required />
                @error('stock')
                    <span class="alert alert-danger text-danger-eva invalid-feedback text-center" role="alert">
                        <strong>{{ __('Veuillez entrer un nombre entier valide.') }}</strong>
                    </span>
                @enderror
            </div>
                
            <button type="submit" class="btn btn-outline-dark font-weight-bold text-gold">Ajouter</button>
        </form>

    </div>

</div>
{{-- FIN CONTENU BODY --}}
@endsection
