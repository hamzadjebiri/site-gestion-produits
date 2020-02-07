@extends('layouts.header-home')



@section('header-home')
      


<link rel="stylesheet"  href="{{asset('css/style_App.css')}}">

<link rel="stylesheet"  href="{{asset('css/creative.min.css')}}">

 <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet'>


 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Paging/1.2.0/jquery.paging.min.js" ></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
</head>
<body>
   
       


                <header > 

                	 <!-- NAVBAR -->
                         <div>
                          
                               @include('layouts.header-navbar')

                         </div>



                       <!-- ENDnavbar -->
                         <div class="container">
                    
                           <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/3/3e/Logo_Legrand.svg/1280px-Logo_Legrand.svg.png"  style="margin-top:70px; width: 100%;height:200px;" >
                  
                         </div>


                     <!-- /.navbar-recharcher -->
              
             
                </header>
              <!-- END_navbar-collapse -->

                    <section id="listProduit">
                       <div class="container-fluid">


                           	<div class="row">
                                  <!--navbar gauche-->
		                           <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 ">  

                                         @include('layouts.section-nav-gauche')

    	                      		</div>
          
                                        
                                
                                 
                                <!-- BEGIN PRODUCTS -->
                                <div class=" col-xl-9 col-lg-9 col-md-12 col-sm-12 ">
                                     
                                      @yield('content')         

                               </div>
                           </div>
                        </div>
                     </section>
               <!--pagination-->         
             







 

  <script src="{{asset('js/creative.min.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>


<script>
    baguetteBox.run('.tz-gallery');
</script>










@endsection