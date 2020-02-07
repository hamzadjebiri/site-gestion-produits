
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Panel Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="{{asset('css/panel-admin.css')}}" rel="stylesheet" >

     <link href="{{asset('css/table.css')}}" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>




  

    <script src="{{asset('js/filtre.js')}}"></script>



</head>
<body>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div id="flipkart-navbar">
    <div class="container">

        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
                <h3 style="margin:0px;"><span class="largenav">La Marque :{{session()->get('marque')}} </span></h3>
            </div>

        <div class="row row1">

            <ul class="largenav pull-right">
                
                <li class="upper-links dropdown"><a class="links" href="http://clashhacks.in/" style="color: red">Changer la Marque</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="#">LeGrand</a></li>
                    
                    </ul>
                </li>

               
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">ADMIN
                                 <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                  
               
             
            </ul>


               <button type="" class="btn btn-warning" data-toggle="modal" data-target="#produit">
                

                                    <a href="#" style="text-decoration: none;">Ajoutée un Produit </li><span class="item-number ">+</span></a>

              </button> 

              @include('Add')

           

        </div>

           
             
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Marque</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
</div>


@yield('header')


	<script src="{{asset('js/navbar.js')}}"></script>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


</body>
</html>
