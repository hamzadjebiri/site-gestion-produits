
@extends('layouts.MarqueProduit')

@section('content')

 @include('layouts.header_nav_search')


<div class="container gallery-container">

    <h1 class="text-center">Nos Produits </h1>

    <p class="page-description text-center"></p>


    

    <div class="row">



         
       @foreach($produit as $resultat)  

            <div class="col-sm-6 col-md-4">

                 <div class="tz-gallery">

                    <div class="thumbnail">

                       
                        <img class="lightbox" src="{{$resultat->Photo1_Produit}}"   width="250px" height="250px" >
                        </img>


                        <div class="caption text-center">

                            <h3>{{ $resultat->Nom_Produit}}</h3>

                            <p>Site Web : {{ $resultat->Site_Produit}} </p>
                               
                            <h4>{{ $resultat->Prix_Produit}} DA</h4>

                        </div>

                    </div>

                </div>

            </div>


        @endforeach

       

    

    </div>

     {!!$produit->links()!!}


</div>

@yield('section_cards')





@endsection