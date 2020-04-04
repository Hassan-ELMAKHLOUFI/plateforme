<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <script src="/js/jspdf.min.js"></script>
    <script src="http://cdn.jsdelivr.net/g/filesaver.js"></script>
    <title>Document</title>
</head>
<body>


<?php
$test1 = $test->test_id;
$dif1 = 6;
$dif2 = 0;
$dif3 = 0;
$dif4 = 0;
$dif5 = 0;
$i = 0;
$j = 0;
$k = 0;
$c = 0;
$nbr = 0;
if ($dif1 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($dif1)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($dif1)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;

    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $dif1) {
        $c = 0;
        $difference = $dif1 - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '1')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '1')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }


} else {
    $take = intval($dif1 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;

    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '1')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '1')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }

    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;

    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '1')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '1')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }

    }


    $take = $dif1 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;

        if ($count != $difference) {

            $difference1 = $difference - $count;

            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }

    }

}


$nbr = 0;

if ($dif2 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($dif2)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($dif2)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $dif2) {
        $c = 0;
        $difference = $dif2 - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '2')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '2')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }


} else {
    $take = intval($dif2 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;

    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '2')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '2')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }

    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;

    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '2')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '2')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }

    }


    $take = $dif2 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;

        if ($count != $difference) {

            $difference1 = $difference - $count;

            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }

    }

}


$nbr = 0;

if ($dif3 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($dif3)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($dif3)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $dif3) {
        $c = 0;
        $difference = $dif3 - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '3')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '3')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }


} else {
    $take = intval($dif3 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '3')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '3')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }

    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;

    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '3')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '3')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }

    }


    $take = $dif3 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;

        if ($count != $difference) {

            $difference1 = $difference - $count;

            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }

    }

}
$nbr = 0;

if ($dif4 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($dif4)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($dif4)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;

    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $dif4) {
        $c = 0;
        $difference = $dif4 - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '4')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '4')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }


} else {
    $take = intval($dif4 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;

    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '4')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '4')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }

    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;

    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '4')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '4')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }

    }


    $take = $dif4 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;

        if ($count != $difference) {

            $difference1 = $difference - $count;

            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }

    }

}

$nbr = 0;
if ($dif5 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($dif5)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($dif5)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;

    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $dif5) {
        $c = 0;
        $difference = $dif5 - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '5')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '5')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }


} else {
    $take = intval($dif5 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;

    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }


    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;

        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '5')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '5')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }

    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;

    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }

        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '5')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '5')->take($difference1)->get()->count();
            $nbr = $nbr + $count;

            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }

    }


    $take = $dif5 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;

        if ($count != $difference) {

            $difference1 = $difference - $count;

            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }

    }

}

?>
<form action="{{ route('Resultat.store')}}" method="post">
    @csrf
    @for($n=0;$n<$k ; $n++)
        @foreach ($qcms[$n]  as $qcm)
            <input type="hidden" name="qcms[{{ $qcm->question_id }}]" value="{{$qcm->question_id}}">

            {{ $qcm->question_text }}<br>
            @php $opt=DB::table('option')->where('question_id',$qcm->question_id)->get();@endphp
            @foreach ($opt  as $option)

                <input type="checkbox" name="options[{{ $option->option_id }}]" id="option-{{$option->option_id}}"
                       value="{{$option->option_id}}">{{$option->option_text}}<br>


            @endforeach
        @endforeach
    @endfor
    @for($m=0;$m<$i;$m++)
        @foreach ($binaires[$m]  as $binaire)


            {{ $binaire->question_text }}<br>
            @php $opt1=DB::table('option')->where('binaire_id',$binaire->binaire_id)->get(); @endphp
            @foreach ($opt1  as $option)
                <input type="radio" name="questions[{{ $binaire->binaire_id}}]" id="option-{{$option->option_id}}"
                       value="{{$option->option_id}}">{{$option->option_text}}<br>
            @endforeach


        @endforeach
    @endfor
    @php
        $i = 0;
    @endphp

    @for($b=0;$b<$j;$b++)
        @foreach ($text_libre[$b]  as $text)
            <input type="hidden" name="fichier{{$i}}">
            <input type="hidden" name="question_id[{{$i}}]" value="{{$text->question_id}}">
            <input type="hidden" name="etudiant_id" value="{{$session}}">

            {{ $text->question_text }}<br>
            <div id="toolbar[{{$i}}]"></div>
            <div id="editor[{{$i}}]"></div>
            @php
                $i++;
            @endphp
        @endforeach
    @endfor
    <input type="hidden" name="nb_ql" value="{{$i}}">
    <input type="hidden" name="test_id" value="{{$test1}}">
    <input id="btn" type="submit" onclick="getHTML()" value="enregistrer">
</form>
</body>
</html>

<script>
    window.addEventListener("beforeunload", function (event) {
        event.returnValue = "Your custom message.";
    });
</script>
<script>
    var container = [];
    @php
        $j = 0;
    @endphp
        @while($j < $i)
        container[{{$j}}] = document.getElementById('editor[{{$j}}]');

    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{'header': 1}, {'header': 2}],               // custom button values
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
        [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
        [{'direction': 'rtl'}],                         // text direction

        [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
        [{'header': [1, 2, 3, 4, 5, 6, false]}],

        [{'color': []}, {'background': []}],          // dropdown with defaults from theme
        [{'font': []}],
        [{'align': []}],

        ['clean']                                         // remove formatting button
    ];
    var options = {
        modules: {
            toolbar: toolbarOptions
        },
        placeholder: 'Ecrire la reponse...',
        theme: 'snow'
    };
    var editor = new Quill(container[{{$j}}], options);

    @php
        $j++;
    @endphp
    @endwhile
    function getHTML() {
        var element = document.querySelectorAll(".ql-editor");
        var i = 0;
        while (i < element.length) {
            var name = document.querySelector('input[name=fichier' + i + ']'); // set name input var
            name.value = element[i].innerHTML.toString();
            i++;
        }
        var form = document.getElementById("form"); // get form by ID
        form.onsubmit = function () { // onsubmit do this first
            return true; // submit form
        }
    }

</script>
