
@extends('layouts.MarqueProduit')

@section('content')

@include('layouts.header_nav_search')


<div class="container gallery-container">

    <h1 class="text-center">Nos Produits </h1>

    <p class="page-description text-center"></p>
    

    <div class="row">


        @if($search->count() == 0 )

         <p>aucun objet n'a été trouvé !</p>

        @else
         
       @foreach($search as $resultat)   

            <div class="col-sm-6 col-md-4">

                 <div class="tz-gallery">

                    <div class="thumbnail">

                       
                        <img class="lightbox" src="/img/{{$resultat->Photo1_Produit}}"   width="250px" height="250px" >
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


        @endif

       


    </div>

</div>

@yield('section_cards')





@endsection