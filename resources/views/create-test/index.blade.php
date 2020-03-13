<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="{{asset("css/style.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/styleinput.css")}}"/>
<title>{{$p->propfesseur_id}}</title>
    <script src="https://kit.fontawesome.com/2622940fba.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">

    <div id="wizard" class="wizard">
        <div class="wizard__content">
            <header class="wizard__header">
                <div class="wizard__header-overlay"></div>

                <div class="wizard__header-content">
                    <h1 class="wizard__title">créer</h1>
                </div>

                <div class="wizard__steps">
                    <nav class="steps">
                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">1</p>
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="lines">
                                    <div class="line -start">
                                    </div>

                                    <div class="line -background">
                                    </div>

                                    <div class="line -progress">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">2</p>
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="lines">
                                    <div class="line -background">
                                    </div>

                                    <div class="line -progress">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">3</p>
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="lines">
                                    <div class="line -background">
                                    </div>

                                    <div class="line -progress">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

            <form id='createTest' action="{{action('TestController@store')}}" method='POST'>
                @csrf
                <input type="hidden" value="{{$p->professeur_id}}" name="professeur_id">

                <div class="panels">
                    <div class="panel">
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="ng" id="ng" class="form-control" min="1" required>
                                            <span class="label" style="left: 160px;">Nombre des etudiants </span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <?php

                                            use App\Matiere;
                                            $matiere = $p->matiere;
                                            echo "<select type='text' size='1' style='width: 235px;margin-bottom:-50px' name='matiere_id'>";
                                            foreach ($matiere as $m) {
                                                $matiere_id = $m->matiere_id;
                                                echo "<option value=$matiere_id>$m->nom_matiere</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                            <span class="label" style="top: -30px; left:85px"
                                                  for="niveau_id">Matiere</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display: flex">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <?php
                                            use App\filiere;use App\Niveau;$niveaux = Niveau::all();
                                            echo "<select type='text' size='1' style='width: 235px;margin-bottom:-50px' name=niveau_id> ";
                                            foreach ($niveaux as $n) {
                                                $niveau_id = $n->niveau_id;
                                                echo "<option value=$niveau_id>$n->nom</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                            <span class="label" style="top: -30px; left:85px"
                                                  for="niveau_id">Niveau</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <?php

                                            $filieres = filiere::all();
                                            echo "<select size='1' style='width: 235px;margin-bottom:-80px ' name=filiere_id>";
                                            foreach ($filieres as $f) {
                                                $id_filiere = $f->filiere_id;
                                                echo "<option value=$id_filiere>$f->nom</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                            <span class="label" style="top:-30px; left:80px "
                                                  for="filiere_id">Filiere</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="panel">
                        <section>
                            <div class="inner" style="display: flex;align-items: stretch">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="nom" id="nom" class="form-control"
                                                   style="margin-left: -4px;width: 200%;" required>
                                            <span class="label" style="left:210px">Nom de test </span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display: flex;align-items: stretch">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                        <textarea rows="8" cols="33" name="discription" id="discription"
                                                  class="form-control" style="margin-left: -4px;width: 200%;"
                                                  style='margin-bottom:-0px' required></textarea>
                                            <span class="label" style="left:210px;top: -140px">Discription</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="panel">
                        <section>
                            <div class="inner" style="display:flex;">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="note" id="note" class="form-control" min="1" required>
                                            <span class="label" style="left: 100px;">Note</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <input type="number" name="duree" id="duree" class="form-control" min="1" required>
                                            <span class="label" style="left: 100px;">Duree(minute)</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display:flex;">

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="salle" id="salle" class="form-control" required>
                                            <span class="label" style="left: 100px;">Salle</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="date" style="font-size: 14px;" name="date" id="date"
                                                   class="form-control" required>


                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <div class="wizard__footer" style="justify-content: space-between">
                    <button type="button" class="button previous">Précedent</button>
                    <button type="button" id="save" class="button next">Suivant</button>
                </div>
            </form>
        </div>

        <h1 class="wizard__congrats-message">
            Un nouveau test est créé, n'oubliez pas de créer les questions!
        </h1>
    </div>

</div>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
