@extends('home')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach($produits as $produit) 
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top"  src="{{ asset('produits/'.$produit->photo_principale)}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{$produit->nom}} <br/> {{$produit->description}} <br/>
                   <a class="btn btn-sm btn-outline-primary" href="{{route('voir_produits_par_cat', ['id'=>$produit->category->id])}}" >
                   {{$produit->category->nom}}
                   </a>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                                <span class="price">{{ number_format($produit->prix_ht,2)}} €</span>
                                <a href="produit/{{$produit->id}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                </div>
              </div>
            </div>
            @endforeach
@endsection
