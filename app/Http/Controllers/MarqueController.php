<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB ; use App\Produits ;

class MarqueController extends Controller
{
    
     public function afficher($Marque){

          session(['marque'=>$Marque]);

             $produit =DB::table('produit')
             ->where('Nom_Marque' ,$Marque)
             ->get();

             $arr=Array('produit' => $produit);

             return view('parametres',$arr);

    }

    public function Add(Request $request){
        
        $newProduct = new Produits();

    

           $newProduct->Nom_Produit  = $request->input('Nom_Produit');

           $newProduct->Site_Produit = $request->input('Site_Produit');

           $newProduct->Prix_Produit = $request->input('Prix_Produit');

           $newProduct->Photo1_Produit = $request->input('Photo1_Produit');

           $newProduct->Nom_Marque =  session()->get('marque');

           $newProduct->Référence =  $request->input('Référence');

           $newProduct->save();

            return redirect('/parametres/'.session()->get('marque') );

    }

   


    public function Delete($id){

    	 $findproduct =DB::table('produit')
    	     	->where('id_produit' ,$id) 
    	     	->delete();

          
           return redirect('/parametres/'.session()->get('marque'));

    }


    public function Update(Request $request,$id){
      
      if($request->isMethod('post')){
           
            	$produit =DB::table('produit')
    	     	->where('id_produit' ,$id) 
    	     	->Update([

                    'Nom_Produit' => $request->input('Nom_Produit'),

                    'Site_Produit' =>$request->input('Site_Produit'),

                    'Prix_Produit' =>$request->input('Prix_Produit'),

                    'Photo1_Produit' =>"test",

                    'Nom_Marque' => session()->get('marque'),

    	     	   ]);
            
             return redirect('/parametres/'.session()->get('marque') );
           
      }

      else
      {

               
    	 	$produit =DB::table('produit')
    	 	->where('id_produit' ,$id)
    	 	->get();

    	 
             $arr=Array('produit' => $produit);

             return view('parametres',$arr);
      

      }
    	 

    }
    
    
}
