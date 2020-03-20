<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Regna Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <script src="https://kit.fontawesome.com/2622940fba.js" crossorigin="anonymous"></script>
    <!-- Favicons -->
    <link href="/managetest/img/favicon.png" rel="icon">
    <link href="/managetest/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/managetest/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/managetest/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/managetest/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/managetest/css/style.css" rel="stylesheet">
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
    <link rel='stylesheet prefetch'
          href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/managetest/css/stylemodal.css">
    <link rel="stylesheet" href="/managetest/css/stylechoice.css">

    <!-- =======================================================
      Theme Name: Regna
      Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
      ======================================================= -->
</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="/managetest/img/logo.png" alt="" title=""/></img></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="menu-has-children"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Hero Section
  ============================-->
<section id="hero">

</section><!-- #hero -->

<main id="main">

    <!--==========================
         Portfolio Section
         ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">manage test</h3>
            </div>
            <div style="text-align: center"><a href="create-test/{{$prof->professeur_id}}">
                    <button class="btn btn-primary"><i class="fa fa-plus"></i></button>
                </a></div>

            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="show-entries">
                                <span>Show</span>
                                <select>
                                    <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                </select>
                                <span>entries</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                    <input type="text" class="form-control" placeholder="Search&hellip;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom de test<i class="fa fa-sort"></i></th>
                        <th>Reponse</th>
                        <th>Activer session</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $tests = DB::table('test')->where('professeur_id', '=', $prof->professeur_id)->get();
                    $key = 0;
                    ?>
                    @foreach($tests as $test)
                        @php
                            $sess = App\Session::query()->where('test_id','=',$test->test_id)->first();
                                if ( $sess->active == 0){
                                    $value = 0;
                                }else{
                                    $value = 1;
                                }
                        @endphp
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$test->nom}}</td>
                            <td><a href="/reponses/{{$test->test_id}}">reponses</a></td>
                            <td>
                                <div style="text-align:center;">

                                    <form action="{{action('TestController@setSession')}}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                        @if($value == 0)
                                            <button class="btn btn-success" name="active" value="0">Activer</button>
                                        @endif
                                        @if($value == 1)
                                            <button class="btn btn-danger" name="active" value="1">disactiver</button>
                                        @endif
                                    </form>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="view modal-button" title="ajouter question" data-toggle="tooltip"><i
                                        class="material-icons">note_add</i></a>
                                <a href="#" class="edit" title="modifier" data-toggle="tooltip"><i
                                        class="material-icons">&#xE254;</i></a>
                                <a href="#" data-test_id="{{$test->test_id}}" class="delete" title="supprimer"
                                   data-target="#exampleModal-delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
                                <a href="{{route('test.pdf',$test->test_id)}}" class="view" title="exporter session" data-toggle="tooltip"><i
                                        class="material-icons">input</i></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>


            </div>

    </section><!-- #portfolio -->
    <section id="service">

        <div class="modal">
            <div class="modal-container">
                <div class="modal-left">
                    <div class="input-block">
                        <input type="radio" id="al" class="sty" name="select" value="1">
                        <label for="al" class="stl">
                            <h2>Aléatoire</h2>
                            <p>les question seront ajouter d'une maniére aléatoire</p>
                        </label>
                        <div class="contental">
                            <div class="form__group field " style="margin-left: 150px">
                                <input type="number" class="form__field" placeholder="question" name="question"
                                       id='question' min="1"/>
                                <label for="name" class="form__label">Nombre question: </label>
                            </div>
                            <div class="form__group field" style="margin-left: 150px">
                                <input type="number" class="form__field" placeholder="Difficulté" name="Difficulté"
                                       id='Difficulté' min="1" max="5"/>
                                <label for="name" class="form__label">Difficulté</label>
                            </div>
                            <br>
                            <label style="font-size: 18px">Type de question:</label>
                            <br>
                            <br>
                            <div class="switch" style="margin-left: 175px">
                                <input name="switch" id="one" type="radio" checked/>
                                <label for="one" class="switch__label">QCM</label>
                                <input name="switch" id="two" type="radio"/>
                                <label for="two" class="switch__label">Binaire</label>
                                <input name="switch" id="three" type="radio"/>
                                <label for="three" class="switch__label">Text</label>
                                <div class="switch__indicator"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-block">
                    <input type="radio" id="se" name="select" class="sty" value="2">
                    <label for="se" class="stl">
                        <h2>sélectioner</h2>
                        <p>vous pouvez sélectioner vos ancienne questions </p>
                    </label>
                    <div class="contentse">
                        <label style="font-size: 18px">Type de question:</label>
                        <br>
                        <br>
                        <div class="switch2" style="margin-left: 175px">
                            <input name="switch2" id="one2" type="radio" checked/>
                            <label for="one2" class="switch__label2">QCM</label>
                            <input name="switch2" id="two2" type="radio"/>
                            <label for="two2" class="switch__label2">Binaire</label>
                            <input name="switch2" id="three2" type="radio"/>
                            <label for="three2" class="switch__label2">Text</label>
                            <div class="switch__indicator2"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-block">
                <input type="radio" id="cr" class="sty" name="select" value="3">
                <label for="cr" class="stl">
                    <h2>nouveau</h2>
                    <p>créer des nouveaux questions</p>
                </label>
                <div class="contentcr">
                    <label style="font-size: 18px">Type de question:</label>
                    <br>
                    <br>
                    <div class="switch3" style="margin-left: 175px">
                        <input name="switch3" id="one3" type="radio" checked/>
                        <label for="one3" class="switch__label3">QCM</label>
                        <input name="switch3" id="two3" type="radio"/>
                        <label for="two3" class="switch__label3">Binaire</label>
                        <input name="switch3" id="three3" type="radio"/>
                        <label for="three3" class="switch__label3">Text</label>
                        <div class="switch__indicator3"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-buttons">
            <button class="input-button">Enregistrer</button>
        </div>
        </div>

        <button class="icon-button close-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                <path
                    d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
            </svg>
        </button>
        </div>
        </div>
    </section>

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

                    <form action="{{action('TestController@destroy','test_id')}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input required type="hidden" name="test_id" id="test_id">
                        <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer ce
                            matiere</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-danger">supprimer</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script>
    const st = {};

    st.flap = document.querySelector('#flap');
    st.toggle = document.querySelector('.toggle');

    st.choice1 = document.querySelector('#choice1');
    st.choice2 = document.querySelector('#choice2');

    st.flap.addEventListener('transitionend', () => {

        if (st.choice1.checked) {
            st.toggle.style.transform = 'rotateY(-15deg)';
            setTimeout(() => st.toggle.style.transform = '', 400);
        } else {
            st.toggle.style.transform = 'rotateY(15deg)';
            setTimeout(() => st.toggle.style.transform = '', 400);
        }

    })

    st.clickHandler = (e) => {

        if (e.target.tagName === 'LABEL') {
            setTimeout(() => {
                st.flap.children[0].textContent = e.target.textContent;
            }, 250);
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        st.flap.children[0].textContent = st.choice2.nextElementSibling.textContent;
    });

    document.addEventListener('click', (e) => st.clickHandler(e));
</script>
<script>
    $(document).ready(function () {

        $("input[name$='select']").click(function () {
            var radio_value = $(this).val();
            if (radio_value == '1') {
                $(".contental").animate({height: "toggle"}, 500);
                $(".contentse").hide();
                $(".contentcr").hide();


            } else if (radio_value == '2') {
                $(".contentse").animate({height: "toggle"}, 500);
                $(".contental").hide();
                $(".contentcr").hide();
            } else if (radio_value == '3') {
                $(".contentcr").animate({height: "toggle"}, 500);
                $(".contental").hide();
                $(".contentse").hide();
            }
        });
    });

</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        // Animate select box length
        var searchInput = $(".search-box input");
        var inputGroup = $(".search-box .input-group");
        var boxWidth = inputGroup.width();
        searchInput.focus(function () {
            inputGroup.animate({
                width: "300"
            });
        }).blur(function () {
            inputGroup.animate({
                width: boxWidth
            });
        });
    });
</script>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
<!-- JavaScript Libraries -->
<script src="/managetest/lib/jquery/jquery.min.js"></script>
<script src="/managetest/lib/jquery/jquery-migrate.min.js"></script>
<script src="/managetest/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/managetest/lib/easing/easing.min.js"></script>
<script src="/managetest/lib/wow/wow.min.js"></script>
<script src="/managetest/lib/waypoints/waypoints.min.js"></script>
<script src="/managetest/lib/counterup/counterup.min.js"></script>
<script src="/managetest/lib/superfish/hoverIntent.js"></script>
<script src="/managetest/lib/superfish/superfish.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="/managetest/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/managetest/js/main.js"></script>

<script src="/managetest/js/scriptmodal.js"></script>

</body>
</html>

<script>
    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var test_id = button.data('test_id')

        var modal = $(this)

        modal.find('.modal-title').text('delete STUDENT INFORMATION');

        modal.find('.modal-body #test_id').val(test_id);
    });
</script>
