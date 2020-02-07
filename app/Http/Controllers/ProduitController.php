<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produits ; use DB ;

use Illuminate\Pagination\simplePaginate;


use Illuminate\Pagination\Paginator;

class ProduitController extends Controller
{
      
      public function afficher($Marque)
    {  

    	    //session(['marque'=>$Marque]);

    	 	$produit =DB::table('produit')
    	 	->where('Nom_Marque' ,$Marque)
    	 	->paginate(2);
    	 	

             $arr=Array('produit' => $produit);

             return view('produits',$arr);

    }

    public function search( Request $request){

                
                $search =DB::table('produit')
                         
                         ->where('Nom_Produit' ,$request->input('recherche'))
                         ->orwhere('Site_Produit' ,$request->input('recherche'))
                         ->orwhere('Prix_Produit' ,$request->input('recherche'))  
                                            
                        ->paginate(2);
                    
                    $arr=Array('search' => $search);

                    return view('search',$arr);

    }
}
