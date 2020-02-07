
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark ">

      <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about" > <strong>About </strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services"> <strong>Services </strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"> <strong>Portfolio </strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"> <strong>Contact </strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="" style="margin-top: 2%"> 
         
   <nav class="navbar navbar-expand-lg navbar-light bg-light">

               
             
             <!-- if size page < = sm -->

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
              </button>
              
             <!-- endif size page < = sm -->

               <div class="collapse navbar-collapse" id="navbarText">

                    <ul class="navbar-nav  col-lg-6"">

                      <li class="nav-item  col-lg-6">

                         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Produits</button>

                      </li>

                    

                      <li class="nav-item  col-lg-6">

                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Table de produits</button>

                      </li>


                     

                    </ul>

                    <nav class="form-inline my-2 my-lg-0">
                      <bunavtton type="button" class="btn btn-success"> + Ajouter Un Produit</button> 
                    </nav>


                </div>
    </nav>





</div>
   
<script src="{{asset('js/tablejs')}}"></script>


@yield('section')
