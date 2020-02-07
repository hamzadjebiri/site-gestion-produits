<div class="content-area ">
      <div class="top-filter tfilter-box margin-b-20">
   
   <form method="post"  action="/search">

      {{ csrf_field() }}

     <div class="container-fluid">
     
        <div class="row">
            <div class="col-sm-2 col-lg-7">
             
                  <input class="form-control" placeholder="Par : Prix , Nom du produit ou site web " type="text" name="recherche">
              
            </div>
       
            <div class=" col-sm-1">

              <button type="submit" class="btn btn-primary site-btn12">Go</button>

            </div>


         


            

          </div>

      </div>

    </form>


  </div>

</div>

@yield('header_nav-search')