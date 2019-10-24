@extends('layouts.default')
{{-- ['title' => 'Accueil'] --}}
@section('content')
{{-- DEBUT CONTENU BODY --}}
<div id="boutique">

    <div class="jumbotron rounded-0 text-center">
        <div class="container">
            <h1 class="display-3">Boutique</h1>
            <h2 class="text-black small-caps">Slogan</h2>
        </div>
        <p>Accroche</p>
    </div>

    <div class="container">
        <h3 class="h3">Nos jeux</h3>
        <div class="row">
            @foreach ($product as $item)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="{{ $item -> picture }}">
                            <img class="pic-2" src="{{ $item -> picture_2 }}">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">{{ $item -> format }}</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{ $item -> name }}</a></h3>
                        <div class="price">
                            {{ $item -> sellingprice }}
                            {{-- <span>$75.00</span> --}}
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
{{-- FIN CONTENU BODY --}}
@endsection
