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
                filiere
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li class="nav-item  ">
                    <a class="nav-link" href="{{route("departement.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>departement</p>
                    </a>
                </li>
                <li class="nav-item active">
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
                    <a class="navbar-brand" href="javascript:void(0)">Filiere</a>
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
                                <h4 class="card-title ">table filiere</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="row justify-content-between card-header">
                                <button id="btn" class="btn btn-info">Export to Excel</button>
                                <div>
                                    <form action={{ route('filiere.import') }} method="POST"
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
                                            <th>nom</th>
                                            <th>coordinateur</th>
                                            <th>date_de_debut</th>
                                            <th>date_de_fin</th>
                                            <th>departement_id</th>
                                            <th class="exclude">Action</th>
                                        </tr>
                                        <tbody>
                                        @foreach($filieres as $key=>$filiere)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$filiere->nom}}</td>
                                                <td>{{$filiere->coordinateur}}</td>
                                                <td>{{$filiere->datedebut}}</td>
                                                <td>{{$filiere->datefin}}</td>
                                                <td>{{$filiere->departement_id}}</td>
                                                <td class="exclude">
                                                    <a data-filiere_id="{{$filiere->filiere_id}}"
                                                       data-nom="{{$filiere->nom}}"
                                                       data-coordinateur="{{$filiere->coordinsteur}}"
                                                       data-datedebut="{{$filiere->datedebut}}"
                                                       data-datefin="{{$filiere->datefin}}"
                                                       data-departement_id="{{$filiere->departement_id}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm">modifier</a>
                                                    <a data-filiere_id="{{$filiere->filiere_id}}" data-toggle="modal"
                                                       data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        {{$filieres->links()}}
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
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('filiere.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">nom de filiere</label>


                                        <input required style="color:black;" type="text" id="nom" name="nom" class="form-control"
                                               placeholder="nom de departement">
                                    </div>
                                    <input required style="color:black;" type="hidden" name="filiere_id" id="filiere_id">
                                    <br>
                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">coordinateur</label>
                                        <input required style="color:black;" type="text" id="coordinateur" name="coordinateur"
                                               class="form-control"
                                               placeholder="coordinateur">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">date de debut</label>
                                        <input required style="color:black;" type="date" id="datedebut" name="datedebut"
                                               class="form-control"
                                               placeholder="date de debut">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">date de fin</label>


                                        <input required style="color:black;" type="date" id="datefin" name="datefin"
                                               class="form-control"
                                               placeholder="date de fin">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;"> id departemeent</label>

                                        <select name="nom_dep" size="2">
                                            <?php
                                            use App\departement;
                                            $departements = departement::all();
                                            foreach ($departements as $un) {
                                                echo '<option>';
                                                echo $un->nom;
                                                echo '</option>';
                                            }
                                            ?>
                                        </select>

                                        <div class="form-group">
                                            <label for="niveau_id" style="color:#c21db7;">niveau</label>
                                            <?php $niveau = \App\Niveau::all()?>
                                            <select name="niveau_id" size="2">
                                                @foreach($niveau as $n)
                                                    <option value="{{$n->niveau_id}}">{{$n->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>

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
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('filiere.update','filiere_id')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">nom de filiere</label>


                                        <input required style="color:black;" type="text" id="nom" name="nom" class="form-control"
                                               placeholder="nom de departement">
                                    </div>
                                    <input required type="hidden" name="filiere_id" id="filiere_id">
                                    <br>
                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">coordinateur</label>
                                        <input required style="color:black;" type="text" id="coordinateur" name="coordinateur"
                                               class="form-control"
                                               placeholder="coordinateur">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">date de debut</label>
                                        <input required style="color:black;" type="date" id="datedebut" name="datedebut"
                                               class="form-control"
                                               placeholder="date de debut">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">date de fin</label>


                                        <input required style="color:black;" type="date" id="datefin" name="datefin"
                                               class="form-control"
                                               placeholder="date de fin">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;"> id departemeent</label>

                                        <select name="nom_dep" size="1">
                                            <?php

                                            $departements = Departement::all();
                                            foreach ($departements as $un) {
                                                echo '<option>';
                                                echo $un->nom;
                                                echo '</option>';
                                            }
                                            ?>
                                        </select>

                                        <div class="form-group">
                                            <label for="niveau_id" style="color:#c21db7;">niveau</label>
                                            <?php $niveau = \App\Niveau::all()?>
                                            <select name="niveau_id" size="2">
                                                @foreach($niveau as $n)
                                                    <option value="{{$n->niveau_id}}">{{$n->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>

                                <button type="submit" class="btn btn-success">Modifier</button>
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
                                <h5 class="modal-title" id="exampleModalLabel">supprimer filiere</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('filiere.destroy','filiere_id')}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input required type="hidden" name="filiere_id" id="filiere_id">
                                    <p class="text-center" width="50px"> vous ete sur que vous voulez supprimer ce
                                        filiere</p>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">fermer</button>

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

<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var nom = button.data('nom')
        var coordinateur = button.data('coordinateur')
        var datedebut = button.data('datedebut')
        var datefin = button.data('datefin')
        var departement_id = button.data('departement_id')
        var filiere_id = button.data('filiere_id')


        var modal = $(this)

        modal.find('.modal-title').text('modifier');
        modal.find('.modal-body #nom').val(nom);
        modal.find('.modal-body #coordinateur').val(coordinateur);
        modal.find('.modal-body #datedebut').val(datedebut);
        modal.find('.modal-body #datefin').val(datefin);
        modal.find('.modal-body #departement_id').val(departement_id);
        modal.find('.modal-body #filiere_id').val(filiere_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var filiere_id = button.data('filiere_id')


        var modal = $(this)

        modal.find('.modal-title').text('supprimer');

        modal.find('.modal-body #filiere_id').val(filiere_id);
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
<script>
    <
    /html>







































































    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/r-2.2.3/datatables.min.js"></script>
<script>
    $('#btn').click(function () {
        $('.table').table2excel({
            exclude: ".exclude",
            name: "Filiere",
            filename: "Filiere",
            fileext: ".xls",
        })
    });
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
</html>
