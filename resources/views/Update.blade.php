@extends('layouts.header-admin')

@section('header')



<style type="text/css">
    

.centered-form{
  margin-top: 100px;

}
.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;

  /* */
}

label,input{
  color:black;
}

div .col-lg-7{

  margin-left: 20%;
}

</style>




         <div class="container" >
            
            

               <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 modal-dialog  col-lg-12">

                <div class="row">
                  
                  <div class="col-lg-11">

                    <div class="panel panel-default">


                          <div class="panel-heading">

                                 <button class="close" data-dismiss="modal" >&times;</button>


                                  <h3 class="panel-title">Ajouter  Un Produit </h3>

                           </div>



                          <div class="panel-body">

                           @foreach($produit as $resultat)

                              <form role="form" action="/Update/{{$resultat->id_produit}}" method="post">

                                  {{ csrf_field() }} 
                               

                                      
                               

                                          <div class="form-group">
                                      
                                              <div class="row"> 

                                                     <label class="col-lg-6" for="Nom_Produit">Nom du Produit</label>

                                                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                          <input type="text" name="Nom_Produit" id="Nom_Produit" class="form-control input-sm" placeholder="Nom de Produit" required value="{{$resultat->Nom_Produit}}">

                                                      </div>    

                                               </div>
                                    
                                          </div>



                                   

                                     <div class="form-group">

                                            <div class="row"> 

                                                   <label class="col-lg-6" for="Site_Produit">Site Web</label>

                                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                        <input type="url" name="Site_Produit" id="Site_Produit" class="form-control input-sm" placeholder="Lien vers Le  Site web ..." required value="http://{{$resultat->Site_Produit}}">
                                     
                                                   </div>  

                                                 
                                            </div> 

                                     </div>

                                

                                 
                            
                              
                                        <div class="form-group">

                                             <label class="col-lg-6" for="Prix_Produit">Prix</label>
                                             
                                             <div class="row">
                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
                                
                                                <input type="test" name="Prix_Produit" id="Prix_Produit" class="form-control input-sm" placeholder="Prix de Produit...." required value="{{$resultat->Prix_Produit}}">

                                             </div> 

                                                <span>DA</span>

                                           </div> 
                             
                                        </div>


                                        <br>
                                        <br>
                           
                                @endforeach
                                      
                              


                                       <input type="submit" value="Ajouter" class="btn btn-info btn-block">
 
                                   
              
                              </form>
                                                    
                         </div>


                       
  
                    </div>
 
                </div>


                <!-- IMAGE -->
                 

                   
                    <div class="container">

                      <div class="col-lg-2">
                        <img src="{{asset('img/download.jpg')}}">

                        <h4 class="col-lg-12">image test </h4>
                      
                      </div>
                      
                      </div>




                </div>

          </div>




        </div>

     @endsection