<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->

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
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet"/>


</head>

<body class="dark-edition">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="javascript:void(0)" class="simple-text logo-normal">
                PROFESSEUR
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li class="nav-item  ">
                    <a class="nav-link" href="{{route("departement.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>departement</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("filiere.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>filiere</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("etudiant.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>etudiant</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("module.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>module</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("matiere.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>matiere</p>
                    </a>
                </li>
                <li class="nav-item ">

                    <a class="nav-link" href="{{route("niveau.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>niveau</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("professeur.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>professeur</p>
                    </a>
                </li>


                <!-- <li class="nav-item active-pro ">
                      <a class="nav-link" href="./upgrade.html">
                          <i class="material-icons">unarchive</i>
                          <p>Upgrade to PRO</p>
                      </a>
                  </li> -->
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:void(0)">Liste des tableaux</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.logout')}}">
                                <i class="material-icons">logout</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Table des professeurs</h4>
                            </div>
                            <div class="row justify-content-between card-header">
                                <button id="btn" class="btn btn-info">Export to Excel</button>
                                <div>
                                    <form action={{ route('professeur.import') }} method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file">
                                        <input class="btn btn-primary" type="submit" name="upload" value="upload">
                                    </form>
                                </div>
                                <a href="" class="btn btn-info" data-toggle="modal"
                                   data-target="#exampleModal">ajouter</a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>cin</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>username</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>grade</th>
                                            <th>departement_id</th>
                                            <th class="exclude">Action</th>
                                        </tr>
                                        <tbody>
                                        @foreach($professeurs as $key=>$professeur)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$professeur->cin}}</td>
                                                <td>{{$professeur->nom}}</td>
                                                <td>{{$professeur->prenom}}</td>
                                                <td>{{$professeur->username}}</td>
                                                <td>{{$professeur->email}}</td>
                                                <td>{{$professeur->password}}</td>
                                                <td>{{$professeur->grade}}</td>
                                                <td>{{$professeur->departement_id}}</td>
                                                <td class="exclude">
                                                    <a data-professeur_id="{{$professeur->professeur_id}}"
                                                       data-cin="{{$professeur->cin}}"
                                                       data-nom="{{$professeur->nom}}"
                                                       data-prenom="{{$professeur->prenom}}"
                                                       data-username="{{$professeur->username}}"
                                                       data-email="{{$professeur->email}}"
                                                       data-password="{{$professeur->password}}"
                                                       data-grade="{{$professeur->grade}}"
                                                       data-departement_id="{{$professeur->departement_id}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm">modifier</a>
                                                    <a data-professeur_id="{{$professeur->professeur_id}}" data-toggle="modal"
                                                       data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        {{$professeurs->links()}}
                                        </thead>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal add -->
                <div class="modal fade-right" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter professeur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('professeur.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cin_p" style="color:#c21db7;">cin</label>

                                        <input required type="text" name="cin_p" style="color:black;" class="form-control"
                                               pattern="[A-Z]{1,2}[0-9]{2,5}" placeholder="Exemple: XX145">
                                    </div>

                                    <div class="form-group">
                                        <label for="nom_p" style="color:#c21db7;">nom</label>


                                        <input required type="text" name="nom_p" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z]*" placeholder="nom de professeur">
                                    </div>

                                    <div class="form-group">
                                        <label for="prenom_p" style="color:#c21db7;">prenom</label>


                                        <input required type="text" name="prenom_p" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z]*" placeholder="prenom de professeur">
                                    </div>

                                    <div class="form-group">
                                        <label for="username_p" style="color:#c21db7;">nom d'utilsateur</label>


                                        <input required type="text" name="username_p" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z1-9]*" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email_p" style="color:#c21db7;">email</label>


                                        <input required type="text" name="email_p" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z1-9]*@ests.ac.ma"
                                               placeholder="Exemple: XXX111@ests.ac.ma">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_p" style="color:#c21db7;">mot de passe</label>
                                        <div>
                                            <input required type="password" id="eye" name="password_p" style="color:black;"
                                                   class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                   placeholder="Utiliser au moin 6 cratctéres contient des lettre en MAJ et des lettre en MIN et des chiffres">
                                            <span toggle="#eye" class="fa fa-fw fa-eye field-icon toggle-password"
                                                  style="float: right; margin-left: -25px; margin-top: -25px; position: relative; z-index: 2;"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="grade_p" style="color:#c21db7;">grade</label>

                                        <input required type="text" name="grade_p" style="color:black;" class="form-control"
                                               pattern="[1-9]{1,2}" placeholder="grade de professeur">
                                    </div>

                                    <div class="form-group">
                                        <label for="departement_id" style="color:#c21db7;">Departement</label>
                                        <?php $departement = \App\Departement::all()?>
                                        <select name="departement_id" size="2">
                                            @foreach($departement as $d)
                                                <option value="{{$d->departement_id}}">{{$d->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

                                <button type="submit" class="btn btn-success">enregistrer</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Modal edit -->
                <div class="modal fade-left" id="exampleModal-edit" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">modifier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('professeur.update','professeur_id')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">

                                        <label for="">cin</label>

                                        <input required type="text" style="color:black;" id="cin_p" name="cin_p"
                                               class="form-control"
                                               pattern="[A-Z]{1,2}[1-9]{2,5}" placeholder="Exemple: XX154">
                                    </div>
                                    <input required type="hidden" style="color:black;" name="professeur_id" id="professeur_id">
                                    <div class="form-group">

                                        <label for="">nom</label>

                                        <input required type="text" style="color:black;" id="nom_p" name="nom_p"
                                               class="form-control"
                                               pattern="[a-zA-Z]*" placeholder="nom de professeur">
                                    </div>
                                    <div class="form-group">

                                        <label for="">prenom</label>

                                        <input required type="text" style="color:black;" id="prenom_p" name="prenom_p"
                                               class="form-control"
                                               pattern="[a-zA-Z]*" placeholder="prenom de professeur">
                                    </div>
                                    <div class="form-group">

                                        <label for="">nom d'utilsateur</label>

                                        <input required type="text" style="color:black;" id="username_p" name="username_p"
                                               class="form-control"
                                               pattern="[a-zA-Z1-9]*" placeholder="username">
                                    </div>
                                    <div class="form-group">

                                        <label for="">email</label>

                                        <input required type="text" style="color:black;" id="email_p" name="email_p"
                                               class="form-control"
                                               pattern="[a-zA-Z1-9]*@ests.ac.ma"
                                               placeholder="Exemple: XXX111@ests.ac.ma">
                                    </div>
                                    <div class="form-group">

                                        <label for="">mot de passe</label>
                                        <div>
                                            <input required type="password" style="color:black;" id="password_p"
                                                   name="password_p" class="form-control"
                                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                   placeholder="Utiliser au moin 6 cratctéres contient des lettre en MAJ et des lettre en min et des chiffres">
                                            <span toggle="#password_p"
                                                  class="fa fa-fw fa-eye field-icon toggle-password"
                                                  style="float: right; margin-left: -25px; margin-top: -25px; position: relative; z-index: 2;"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <label for="">grade</label>

                                        <input required type="text" style="color:black;" id="grade_p" name="grade_p"
                                               class="form-control"
                                               pattern="[1-9]{1,2}" placeholder="grade de professeur">
                                    </div>
                                    <div class="form-group">
                                        <label for="departement_id" style="color:#c21db7;">Departement</label>
                                        <?php $departement = \App\Departement::all()?>
                                        <select name="departement_id" size="2">
                                            @foreach($departement as $d)
                                                <option value={{$d->departement_id}}>{{$d->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>

                                <button type="submit" class="btn btn-success">modifier</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Modal delete -->
                <div class="modal fade-left" id="exampleModal-delete" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">supprimer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('professeur.destroy','professeur_id')}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input required type="hidden" name="professeur_id" id="professeur_id">
                                    <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer ce
                                        professeur</p>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>

                                <button type="submit" class="btn btn-danger">supprimer</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
</body>
<script>$(".toggle-password").click(function () {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });</script>
<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var cin = button.data('cin')
        var nom = button.data('nom')
        var prenom = button.data('prenom')
        var username = button.data('username')
        var email = button.data('email')
        var password = button.data('password')
        var grade = button.data('grade')
        var professeur_id = button.data('professeur_id')
        var departement_id = button.data('departement_id')

        var modal = $(this)

        modal.find('.modal-title').text('Modifier les informations');
        modal.find('.modal-body #cin_p').val(cin);
        modal.find('.modal-body #nom_p').val(nom);
        modal.find('.modal-body #prenom_p').val(prenom);
        modal.find('.modal-body #username_p').val(username);
        modal.find('.modal-body #email_p').val(email);
        modal.find('.modal-body #password_p').val(password);
        modal.find('.modal-body #grade_p').val(grade);
        modal.find('.modal-body #professeur_id').val(professeur_id);
        modal.find('.modal-body #departement_id option:selected').val(departement_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var professeur_id = button.data('professeur_id')


        var modal = $(this)

        modal.find('.modal-title').text('Supprimer le professeur');

        modal.find('.modal-body #professeur_id').val(professeur_id);
    });

</script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
    $('#myTable').DataTable({
        responsive: true
    });
</script>


<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/r-2.2.3/datatables.min.js"></script>
<script>
    $('#btn').click(function () {
        $('.table').table2excel({
            exclude: ".exclude",
            name: "Professseur",
            filename: "Professeur",
            fileext: ".xls",
        })
    });
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
</html>
