<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>departement</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
</head>
<body>
<style>
   .container{
       padding:0.5%;
   }
</style>
    <div class="container">
      <h2 class="alert alert-success">gestion des departement</h2>
      <div class="row">
      <a href="" class="btn btn-info" style="margin-left:85%" data-toggle="modal" data-target="#exampleModal">ajouter</a>
      <div class="col-md-12">
     <table class="table table-bordered">
     <thead>
          <tr>
          <th>#</th>
          <th>nom</th>
          <th>nombre inscrit</th>
          <th>id departement</th>
          <th>Action</th>
          </tr>
             <tbody>
             @foreach($filieres as $key=>$filiere)
                 <tr>
                 <td>{{++$key}}</td>
                 <td>{{$filiere->nom}}</td>
                 <td>{{$filiere->nombre_inscrit}}</td>
                 <td>{{$filiere->id_departement}}</td>
                 <td>
                 <a data-id_filiere="{{$filiere->id_filiere}}" data-nom="{{$filiere->nom}}" data-nombre_inscrit="{{$filiere->nombre_inscrit}}" data-id_departement="{{$filiere->id_departement}}" data-toggle="modal" data-target="#exampleModal-edit"  type="button" class="btn btn-warning btn-sm">modifier</a>
                 <a data-id_filiere="{{$filiere->id_filiere}}"  data-toggle="modal" data-target="#exampleModal-delete"class="btn btn-danger btn-sm">supprimer</a>
                 </td>
                 </tr>
             @endforeach
             </tbody>
             {{$filieres->links()}}
       </thead>
  </table>




<!-- Modal add -->
<div class="modal fade-right" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
               <form action="{{route('filiere.store')}}" method="POST"> 
               @csrf
               <div class="input-group">
               <div class="input-group-prepend">
               <span class="input-group-text">nom</span>
               </div>
               <input type="text" name ="nom" class="form-control" placeholder="nom de departement"  >
                </div>
               <br>
                <div class="input-group">
               <div class="input-group-prepend">
               <span class="input-group-text">nombre inscrit</span>
               </div>
               <input type="number" name ="nombre_inscrit" class="form-control" placeholder="nom de departement"  >
                </div> 
                 <br>

                <div class="input-group">
               <div class="input-group-prepend">
               <span class="input-group-text">id departement</span>
               </div>
               <input type="number" name ="id_departement" class="form-control" placeholder="chef"  >
                </div>

                
                <select name="nom_dep" size="1">
                    <?php
                    use App\departement;
                    $departements = Departement::all();
                    foreach ($departements as $un) {
                      echo '<option>';
                        echo $un->nom;
                        echo '</option>';
                    }
                    ?>
                </select>
               
            
           
               
      
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <button type="submit" class="btn btn-success">Save </button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal edit -->
<div class="modal fade-left" id="exampleModal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
               <form action="{{route('filiere.update','id_filiere')}}" method="POST"> 
               @csrf
               @method('PUT')
               <div class="input-group">
               <div class="input-group-prepend">
               <span class="input-group-text">nom</span>
               </div>
               <input type="text" id="nom" name ="nom" class="form-control" placeholder="nom de departement"  >
                </div>
                <input type="hidden" name="id_filiere" id="id_filiere">
               <br>
                <div class="input-group">
               <div class="input-group-prepend">
               <span class="input-group-text">nombre inscrit</span>
               </div>
               <input type="text" id="nombre_inscrit"name ="nombre_inscrit" class="form-control" placeholder="id departement"  >
                </div> 
                 <br>

                <div class="input-group">
               <div class="input-group-prepend">
               <span class="input-group-text">id departemeent</span>
               </div>
               <input type="text" id="id_departement" name ="id_departement" class="form-control" placeholder="chef">
              </div>
          
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <button type="submit" class="btn btn-success">Save </button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal delete -->
<div class="modal fade-left" id="exampleModal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
               <form action="{{route('filiere.destroy','id_filiere')}}" method="POST"> 
               @csrf
               @method('DELETE')
       
                <input type="hidden" name="id_filiere" id="id_filiere">
                 <p class="text-center" width="50px"> vous ete sur que vous voulez supprimer ce departement</p>
          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        
        <button type="submit" class="btn btn-danger">supprimer </button>
      </div>
      </form>
    </div>
  </div>
</div>








</div>
      
       </div>
    
    </div>
</body>

<script>
$('#exampleModal-edit').on('show.bs.modal', function(event){

var button = $(event.relatedTarget)
var nom = button.data('nom')
var nombre_inscrit = button.data('nombre_inscrit')
var id_departement = button.data('id_departement')
var id_filiere = button.data('id_filiere')



var modal = $(this)

modal.find('.modal-title').text('EDIT STUDENT INFORMATION');
modal.find('.modal-body #nom').val(nom);
modal.find('.modal-body #nombre_inscrit').val(nombre_inscrit);
modal.find('.modal-body #id_departement').val(id_departement);
modal.find('.modal-body #id_filiere').val(id_filiere);
});


$('#exampleModal-delete').on('show.bs.modal', function(event){

var button = $(event.relatedTarget)

var id_filiere = button.data('id_filiere')



var modal = $(this)

modal.find('.modal-title').text('delete STUDENT INFORMATION');

modal.find('.modal-body #id_filiere').val(id_filiere);
});

</script>
</html>