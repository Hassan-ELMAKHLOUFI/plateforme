<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset("css/style.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/styleinput.css")}}"/>
    <title></title>
    <script src="https://kit.fontawesome.com/2622940fba.js" crossorigin="anonymous"></script>
</head>
<body>
<?php $p1 = $p->professeur_id ?>
<div class="wrapper">

    <div id="wizard" class="wizard">
        <div class="wizard__content">
            <header class="wizard__header">
                <div class="wizard__header-overlay"></div>
                <div class="wizard__header-content">
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
                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">4</p>
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
                <input type="hidden" value="{{$p1}}" name="professeur_id">

                <div class="panels">
                    <div class="panel" style="margin-left: 10%;">
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" style=';margin-left: 220px;width: 50%;' name="ng"
                                                   id="ng" class="form-control" required>
                                            <span class="label" style="left: 400px;">Nombre des étudiants </span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="inner" style="display: flex;">
                                <div class="form-row" style="padding-right: 100px;">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <?php

                                            use App\Matiere;
                                            use App\Matiere_prof;
                                            $id = [];
                                            $i = 0;
                                            $mtrs = DB::table('matiere_prof')->where('professeur_id', $p1)->get();?>
                                            @foreach($mtrs as $mtr)
                                                <?php $id[$i] = $mtr->matiere_id;
                                                $i++;
                                                ?>
                                            @endforeach
                                            <?php   $matiere = DB::table('matiere')->whereIn('matiere_id', $id)->get();?>

                                            <select type='text' size='1' style='width: 235px;' name="matiere_id">
                                                @foreach ($matiere as $m)
                                                    <?php $matiere_id = intval($m->matiere_id);?>
                                                    <option value="{{$matiere_id}}">{{$m->nom_matiere}}</option>
                                                @endforeach
                                            </select>

                                            <span class="label" style="top: -30px; left:85px"
                                                  for="niveau_id">Matiere</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row" style="padding-right: 100px;">
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

                                <div class="form-row" style="padding-right: 100px;">
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
                                                  class="form-control" style="width: 200%;"
                                                  required></textarea>
                                            <span class="label" style="left:210px;top: -140px">Discription</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="panel" style="margin-left: 18%;">
                        <section>
                            <div class="inner" style="display:flex;">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="note" id="note" class="form-control" required>
                                            <span class="label" style="left: 100px;">Note</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row" style="padding-left: 200px;">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <input type="number" name="duree" id="duree" class="form-control" required>
                                            <span class="label" style="left: 70px;">Duree(minute)</span>
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
                                <div class="form-row" style="padding-left: 200px;">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="date" style="font-size: 16px;width: 260px" name="date"
                                                   id="date"
                                                   class="form-control" required>


                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="panel" style="margin-left: 18%;">
                        <section>
                            <div class="inner" style="display:flex;">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="d1" id="d1" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Difficulté 1</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row" style="padding-left: 200px;">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <input type="number" name="d2" id="d2" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Difficulté 2</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display:flex;">

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="d3" id="d3" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Difficulté 3</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                                <div class="form-row" style="padding-left: 200px;">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="d4" id="d4" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Difficulté 4</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display:flex;">

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="d5" id="d5" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Difficulté 5</span>
                                            <span class="border"></span>

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
