
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




         <div class="row centered-form modal fade" id="produit" role="dialog">
         

              <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 modal-dialog  col-lg-7">
                
                    <div class="panel panel-default">


                          <div class="panel-heading">

                                 <button class="close" data-dismiss="modal" >&times;</button>


                                  <h3 class="panel-title">Ajouter  Un Produit </h3>

                           </div>



                          <div class="panel-body">

                              <form role="form" action="/Add/1" method="post">

                                  {{ csrf_field() }} 
                               

                                      

                                          <div class="form-group">
                                      
                                              <div class="row"> 

                                                     <label class="col-lg-6" for="Nom_Produit">Nom du Produit</label>

                                                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                          <input type="text" name="Nom_Produit" id="Nom_Produit" class="form-control input-sm" placeholder="Nom de Produit" required>

                                                      </div>    

                                               </div>
                                    
                                          </div>



                                   

                                     <div class="form-group">

                                            <div class="row"> 

                                                   <label class="col-lg-6" for="Site_Produit">Site Web</label>

                                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                        <input type="text" name="Site_Produit" id="Site_Produit" class="form-control input-sm" placeholder="Lien vers Le  Site web ..." required>
                                     
                                                   </div>  

                                                 
                                            </div> 

                                     </div>

                                

                                 
                            
                              
                                        <div class="form-group">

                                             <label class="col-lg-6" for="Prix_Produit">Prix</label>

                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                
                                                <input type="number" name="Prix_Produit" id="Prix_Produit" class="form-control input-sm" placeholder="Prix de Produit...." required>

                                             </div>   
                              
                                        </div></br> </br> </br>

                                           <div class="form-group">

                                                <label class="col-lg-6" for="Prix_Produit">Référence</label>

                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                
                                                   <input type="number" name="Référence" id="Référence" class="form-control input-sm" placeholder="Référence Produit ..." required>

                                                </div>   
                              
                                           </div> </br> </br> </br>


                                         <div class="form-group">

                                             <label class="col-lg-6" for="Prix_Produit">Photo</label>

                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                
                                                <input type="file"  required name="Photo1_Produit">

                                             </div>   
                             
                                        </div>


                                        <br>
                                        <br>
                           
                           
                                      
                              


                                       <input type="submit" value="Ajouter" class="btn btn-info btn-block">
 
                                   
              
                              </form>
                                                    
                         </div>


                       
  
                    </div>

                </div>

        </div>

     