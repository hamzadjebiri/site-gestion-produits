@extends('layouts.header-admin')

@section('header')


  <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Website CSS style -->
    
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext" rel="stylesheet">

    <title>Paramètres</title>
  </head>
  <body>
    <div class="container" style="margin: 25px auto;">
      <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th></th>
                <th>Nom du Produit</th>
                <th>Site Web</th>
                <th>Prix</th>
                <th>Référence</th>
                <th>ID</th>
                               
            
            </tr>
        </thead>
        <tbody>

          @foreach($produit as $resultat)
            <tr>
              <td>

                 <a href="/Delete/{{$resultat->id_produit}}" ><i class="fa fa-trash-o" style="font-size:20px;color:red"  title="Supprimer le Produit"></i> </a>

                  <a href="/Update/{{$resultat->id_produit}}/{{session()->get('marque')}}" ><i class="fa fa-wrench" style="font-size:20px;color:green" title="Modifier le Produit"></i> </a>

                </td>
                
                <td>{{$resultat->Nom_Produit}}</td>
                <td>{{$resultat->Site_Produit}}</td>
                <td>{{$resultat->Prix_Produit}}</td>

                <td>{{$resultat->Référence}}</td>

                <td>{{$resultat->id_produit}}</td>

                
              
            
               
            </tr>
         
         @endforeach



               </tbody>
    </table>
    
        </div><!--container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
      
  </body>
</html>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
  
@endsection