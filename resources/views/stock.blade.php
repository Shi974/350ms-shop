@extends('layouts.default')
{{-- ['title' => 'Accueil'] --}}
@section('content')
{{-- DEBUT CONTENU BODY --}}
<div id="stock">

    <div class="jumbotron rounded-0 text-center">
        <div class="container">
            <h1 class="display-3">Gestion du stock</h1>
        </div>
    </div>

    <div class="mt-5 text-center font-weight-bold">
        <p>Il y actuellement {{ count($product) }} @if (count($product) > 1)produits @else produit @endif dans la base de 
            données.
        </p>
        <hr>
        <table class="table table-bordered table-striped">
            <thead class="text-center thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Images</th>
                    <th scope="col">Genre(s)</th>
                    <th scope="col">Plateforme</th>
                    <th scope="col">Prix d'achat (€)</th>
                    <th scope="col">Prix de vente (€)</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Note</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($product as $produit)
                <tr>
                    <th scope="row">{{ $produit -> id}}</th>
                    <td> {{ $produit -> name}} </td>
                    <td>
                        <img src="{{ $produit -> picture }}" height="50px" /> @if ( $produit -> picture_2 !== null )
                        <img src="{{ $produit -> picture_2 }}" height="50px" /> @endif
                    </td>
                    <td>{{ $produit -> genre }}@if ( $produit -> genre_2 !== null), {{ $produit -> genre_2}} @endif</td>
                    <td><img src="img/{{ $produit -> format }}.png" width="30px" alt="{{ $produit -> format }}" /></td>
                    <td class="text-center"> {{ $produit -> buyingprice }} </td>
                    <td class="text-center"> {{ $produit -> sellingprice }} </td>
                    <td class="text-center"> {{ $produit -> stock }} </td>
                    <td class="text-center"> {{ $produit -> rating }} /5 </td>
                    <td class="text-center">
                        <a href="/stock/edit/{{ $produit -> id}}">
                            <button type="button" class="btn btn-warning">Modifier</button>
                        </a>
                        <a href="/stock/delete/{{ $produit -> id }}" 
                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-center">
            <a href="/stock/new"><button type="button" class="btn btn-primary">Ajouter un produit</button></a>
        </div>

    </div>

</div>
{{-- FIN CONTENU BODY --}}
@endsection
