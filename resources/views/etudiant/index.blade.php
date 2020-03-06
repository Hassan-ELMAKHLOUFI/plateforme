<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Etudiant
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
        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Etudiant
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
                <li class="nav-item active">
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
                <li class="nav-item ">
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
                    <a class="navbar-brand" href="javascript:void(0)">Etudiant</a>
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
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                                <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                                <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="material-icons">person</i>
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
                                <h4 class="card-title ">Etudiant Table</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="row justify-content-between card-header">
                                <button id="btn" class="btn btn-info">Export to Excel</button>
                                <div>
                                    <form action={{ route('etudiant.import') }} method="POST" enctype="multipart/form-data">
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
                                            <th>niveau</th>
                                            <th>cne</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>email</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>numero</th>
                                            <th>num_apologie</th>
                                            <th class="exclude">action</th>
                                        </tr>
                                        <tbody>
                                        @foreach($etudiants as $key=>$etudiant)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$etudiant->cin}}</td>
                                                <td>{{$etudiant->niveau_id}}</td>
                                                <td>{{$etudiant->cne}}</td>
                                                <td>{{$etudiant->nom}}</td>
                                                <td>{{$etudiant->prenom}}</td>
                                                <td>{{$etudiant->email_address}}</td>
                                                <td>{{$etudiant->username}}</td>
                                                <td>{{$etudiant->password}}</td>
                                                <td>{{$etudiant->numero}}</td>
                                                <td>{{$etudiant->num_apologie}}</td>
                                                <td class="exclude">
                                                    <a data-id="{{$etudiant->etudiant_id}}"
                                                       data-groupe_id="{{$etudiant->groupe_id}}"
                                                       data-cin="{{$etudiant->cin}}"
                                                       data-cne="{{$etudiant->cne}}" data-nom="{{$etudiant->nom}}"
                                                       data-prenom="{{$etudiant->prenom}}"
                                                       data-id_niveau="{{$etudiant->niveau_id}}"
                                                       data-email_address="{{$etudiant->email_address}}"
                                                       data-username="{{$etudiant->username}}"
                                                       data-password="{{$etudiant->password}}"
                                                       data-numero="{{$etudiant->numero}}"
                                                       data-num_apologie="{{$etudiant->num_apologie}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm">modifier</a>
                                                    <a data-id="{{$etudiant->etudiant_id}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        {{$etudiants->links()}}
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
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter etudiant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('etudiant.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cin" style="color:#c21db7;">cin</label>

                                        <input type="text" name="cin" style="color:black;" class="form-control"
                                               placeholder="cin">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="cne" style="color:#c21db7;">cne</label>

                                        <input type="text" name="cne" style="color:black;" class="form-control"
                                               placeholder="cne">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="nom" style="color:#c21db7;">nom</label>

                                        <input type="text" name="nom" style="color:black;" class="form-control"
                                               placeholder="nom">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="prenom" style="color:#c21db7;">prenom</label>

                                        <input type="text" name="prenom" style="color:black;" class="form-control"
                                               placeholder="prenom">
                                    </div>
                                    <div class="form-group">
                                        <label for="niveau_id" style="color:#c21db7;">Niveau</label>
                                        <?php

                                        use App\filiere;use App\Niveau;$niveaux = Niveau::all();
                                        echo "<select size='2' name=niveau_id>";
                                        foreach($niveaux as $n){
                                            $niveau_id =$n->niveau_id;
                                            echo "<option value=$niveau_id>$n->nom</option>";
                                        }
                                        echo "</select>";
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="filiere_id" style="color:#c21db7;">Filiere</label>
                                        <?php

                                        $filieres = filiere::all();
                                        echo "<select size='2' name=filiere_id>";
                                        foreach($filieres as $f){
                                            $id_filiere=$f->filiere_id;
                                            echo "<option value=$id_filiere>$f->nom</option>";
                                        }
                                        echo "</select>";
                                        ?>
                                    </div>
                                    <div class="form-group">

                                        <label for="email_address" style="color:#c21db7;">email</label>

                                        <input type="email" style="color:black;" name="email_address"
                                               class="form-control"
                                               placeholder="email">
                                    </div>
                                    <div class="form-group">

                                        <label for="username" style="color:#c21db7;">username</label>

                                        <input type="text" style="color:black;" name="username" class="form-control"
                                               placeholder="username">
                                    </div>
                                    <div class="form-group">

                                        <label for="password" style="color:#c21db7;">password</label>

                                        <input type="password" id="eye" style="color:black;" name="password" class="form-control"
                                               placeholder="password">
                                        <span toggle="#eye" class="fa fa-fw fa-eye field-icon toggle-password" style="float: right; margin-left: -25px; margin-top: -25px; position: relative; z-index: 2;"></span>
                                    </div>
                                    <div class="form-group">

                                        <label for="numero" style="color:#c21db7;">numero</label>

                                        <input type="number" style="color:black;" name="numero" class="form-control"
                                               placeholder="numero">
                                    </div>
                                    <div class="form-group">

                                        <label for="num_apologie" style="color:#c21db7;">num apologie</label>

                                        <input type="number" style="color:black;" name="num_apologie"
                                               class="form-control"
                                               placeholder="num_apologie">
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

                                <form action="{{route('etudiant.update','id')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label for="cin" style="color:#c21db7;">cin</label>

                                        <input type="text" name="cin" id="cin" style="color:black;" class="form-control"
                                               placeholder="cin">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="cne" style="color:#c21db7;">cne</label>

                                        <input type="text" name="cne" id="cne" style="color:black;" class="form-control"
                                               placeholder="cne">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="nom" style="color:#c21db7;">nom</label>

                                        <input type="text" name="nom" id="nom" style="color:black;" class="form-control"
                                               placeholder="nom">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="prenom" style="color:#c21db7;">prenom</label>

                                        <input type="text" name="prenom" id="prenom" style="color:black;" class="form-control"
                                               placeholder="prenom">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_niveau" style="color:#c21db7;">id_niveau</label>

                                        <input type="number" name="id_niveau" id="id_niveau" style="color:black;" class="form-control"
                                               placeholder="id_niveau" value="1" readonly>
                                    </div>
                                    <div class="form-group">

                                        <label for="email_address" style="color:#c21db7;">email</label>

                                        <input type="email" id="email_address" style="color:black;" name="email_address"
                                               class="form-control"
                                               placeholder="email">
                                    </div>
                                    <div class="form-group">

                                        <label for="username" style="color:#c21db7;">username</label>

                                        <input type="text" id="username" style="color:black;" name="username" class="form-control"
                                               placeholder="username">
                                    </div>
                                    <div class="form-group">

                                        <label for="password" style="color:#c21db7;">password</label>

                                        <input type="password" id="password" style="color:black;" name="password" class="form-control"
                                               placeholder="password">
                                    </div>
                                    <div class="form-group">

                                        <label for="numero" style="color:#c21db7;">numero</label>

                                        <input type="number" id="numero" style="color:black;" name="numero" class="form-control"
                                               placeholder="numero">
                                    </div>
                                    <div class="form-group">

                                        <label for="num_apologie" style="color:#c21db7;">num apologie</label>

                                        <input type="number" id="num_apologie" style="color:black;" name="num_apologie"
                                               class="form-control"
                                               placeholder="num_apologie">
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

                                <form action="{{route('etudiant.destroy','id')}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="hidden" name="id" id="id">
                                    <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer ce
                                        etudiant</p>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-danger">supprimer</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>
</body>

<script>$(".toggle-password").click(function() {

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

        var button = $(event.relatedTarget);
        var id = button.data('id')
        var cin = button.data('cin')
        var cne = button.data('cne')
        var nom = button.data('nom')
        var prenom = button.data('prenom')
        var id_niveau = button.data('id_niveau')
        var email = button.data('email_address')
        var username = button.data('username')
        var password = button.data('password')
        var numero = button.data('numero')
        var num_apologie = button.data('num_apologie')


        var modal = $(this)

        modal.find('.modal-title').text('EDIT STUDENT INFORMATION');
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #cin').val(cin);
        modal.find('.modal-body #cne').val(cne);
        modal.find('.modal-body #nom').val(nom);
        modal.find('.modal-body #prenom').val(prenom);
        modal.find('.modal-body #id_niveau').val(id_niveau);
        modal.find('.modal-body #email_address').val(email);
        modal.find('.modal-body #username').val(username);
        modal.find('.modal-body #password').val(password);
        modal.find('.modal-body #numero').val(numero);
        modal.find('.modal-body #num_apologie').val(num_apologie);


    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var id = button.data('id')

        var modal = $(this)

        modal.find('.modal-title').text('delete STUDENT INFORMATION');

        modal.find('.modal-body #id').val(id);
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
<script src="/public/assets/js/core/jquery.min.js"></script>
<script src="/public/assets/js/core/popper.min.js"></script>
<script src="/public/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="/public/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="/public/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/public/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/public/assets/js/material-dashboard.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="/public/assets/demo/demo.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/r-2.2.3/datatables.min.js"></script>
<script>
    $('#btn').click(function () {
        $('.table').table2excel({
            exclude: ".exclude",
            name: "Etudiant",
            filename: "Etudiant",
            fileext: ".xls",
        })
    });
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

</html>
