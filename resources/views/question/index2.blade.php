<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AuThemes Templates">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuThemes Templates">


    <!-- Icons font CSS-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <link href="{{ asset('/passage_test/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
          media="all">
    <link href="{{ asset('/passage_test/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
          media="all">
    <!-- Font special for pages-->
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i') }}"
        rel="stylesheet">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet">

    <!-- Vendor CSS-->

    <!-- Main CSS-->
    <link href="{{ asset('/passage_test/css/main.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/passage_test/css/stylecheckbox.css') }}" rel="stylesheet" media="all">
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
</head>

<body>

<?php
$test1 = $test->test_id;
$dif1 = 1;
$dif2 = 0;
$dif3 = 0;
$dif4 = 1;
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
$nombre = 0;
for ($n = 0; $n < $k; $n++) {
    foreach ($qcms[$n] as $qcm) {

        $nombre++;
    }
}
for ($m = 0; $m < $i; $m++) {
    foreach ($binaires[$m] as $binaire) {


        $nombre++;

    }
}

for ($b = 0; $b < $j; $b++) {
    foreach ($text_libre[$b] as $text) {

        $nombre++;
    }
}
?>
<header class="cd-main-header">
    <?php $nomtest = $test->nom ?>
    <a class="cd-logo"><label class="labelogo">{{$nomtest}} </label></a>
    <?php $dure = $test->duree ?>
    <?php $hour = intval($dure / 60); ?>
    <?php $minut = $dure % 60; ?>

    <ul class="countdown cd-header-buttons" style="  background: #ffffff;">

        <li>
            <span id="hour" class="hours">0{{$hour}}</span>
            <p class="hours_ref">hours</p>
        </li>
        <li>
            <span id="min" class="minutes">0{{$minut}}</span>
            <p class="minutes_ref">minutes</p>
        </li>
        <li>
            <span id="sec" class="seconds last">00</span>
            <p class="seconds_ref">seconds</p>
        </li>
    </ul>
</header>
<div class=" p-t-150 p-b-80">
    <div class="wrapper wrapper--w1070">
        <div class="card card-1">
            <div class="card-heading">
                <h2 class="title"></h2>
            </div>

            <div class="card-body">
                <?php $test1 = $test->test_id;?>
                <form class="wizard-container" method="POST" action="{{ route('Resultat.store')}}" id="js-wizard-form">
                    @csrf
                    <?php  $cou = $nombre;?>
                    <?php  $nv = intval(100 / $cou) ?>
                    <?php $vaj = 100 - ($cou * $nv) ?>
                    <?php $final = $vaj + $nv ?>

                    <div class="progress" id="js-progress">
                        <div class="numb" role="numb">
                            <span class="numbe" style="display:none">{{$cou}}</span>
                        </div>
                        <div class="shi" role="shi">
                            <span class="shii" style="display:none">{{$nv}}</span>
                        </div>
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                             aria-valuemax="100" style="width:{{$final}}%;">
                            <span class="progress-val">{{$final}}%</span>

                        </div>
                    </div>


                    <ul class="nav nav-tab">
                        @for ($somme=0;$somme<(DB::table('qcm')->where('test_id',$test1)->count()+DB::table('binaire')->where('test_id',$test1)->count()+DB::table('text_libre')->where('test_id',$test1)->count());$somme++)
                            <li>
                                <a href="#tab{{$somme+1}}" data-toggle="tab">1</a>

                            </li>

                        @endfor

                    </ul>
                    <div class="tab-content">
                        @php
                            $page=0;
                        @endphp
                        @for($n=0;$n<$k ; $n++)
                            @foreach ($qcms[$n]  as $qcm)
                                <div class="tab-pane " id="tab{{$page+1}}">
                                    <div class="numquestion">question {{$page+1}} of {{$cou}}</div>
                                    <div class="input-group">
                                        <input type="hidden" name="qcms[{{ $qcm->question_id }}]"
                                               value="{{$qcm->question_id}}">
                                        <div class="answ">Question :</div>
                                        <label class="label"> {{ $qcm->question_text }}</label>
                                        <div class="answ">Answer :</div>
                                        @php $opt=DB::table('option')->where('question_id',$qcm->question_id)->get() @endphp
                                        @foreach ($opt  as $option)
                                            <label>
                                                <input type="checkbox" class="option-input checkbox"
                                                       name="options[{{ $option->option_id }}]"
                                                       id="option-{{$option->option_id}}"
                                                       value="{{$option->option_id}}">
                                                <label class="opti">{{$option->option_text}}</label>
                                                <br>
                                            </label>
                                        @endforeach
                                    </div>

                                    <div class="btn-next-con">

                                        @if ($page === 0)<a class="btn-next" href="#">Next</a>
                                        @elseif($page === ($cou-1))
                                            <a class="btn-back" href="#">back</a>
                                            <input type="hidden" name="test_id" value="{{$test1}}">
                                            <a class="btn-last" href="javascript:$('form').submit()">Submit</a>
                                        @else
                                            <a class="btn-back" href="#">back</a>
                                            <a class="btn-next" href="#">next</a>
                                        @endif
                                    </div>

                                </div>
                                @php
                                    $page++ ;
                                @endphp


                            @endforeach
                        @endfor
                        @for($m=0;$m<$i;$m++)
                            @foreach ($binaires[$m]  as $binaire)
                                <div class="tab-pane " id="tab{{$page+1}}">
                                    <div class="numquestion">question {{$page+1}} of {{$cou}}</div>
                                    <div class="input-group">
                                        <div class="answ">Question :</div>
                                        <label class="label">{{ $binaire->question_text }}</label>
                                        <div class="answ">Answer :</div>
                                        @php $opt1=DB::table('option')->where('binaire_id',$binaire->binaire_id)->get() @endphp
                                        @foreach ($opt1  as $option)
                                            <label>
                                                <input type="radio" class="option-input radio"
                                                       name="questions[{{ $binaire->binaire_id}}]"
                                                       id="option-{{$option->option_id}}"
                                                       value="{{$option->option_id}}">
                                                <label class="opti">{{$option->option_text}}</label>
                                                <br>
                                            </label>
                                        @endforeach
                                    </div>

                                    <div class="btn-next-con">

                                        @if ($page === 0)<a class="btn-next" href="#">Next</a>
                                        @elseif($page === ($cou-1))
                                            <a class="btn-back" href="#">back</a>
                                            <input type="hidden" name="test_id" value="{{$test1}}">
                                            <a class="btn-last" href="javascript:$('form').submit()">Submit</a>
                                        @else
                                            <a class="btn-back" href="#">back</a>
                                            <a class="btn-next" href="#">next</a>
                                        @endif
                                    </div>

                                </div>
                                <?php $page++ ?>

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

                                <div class="tab-pane " id="tab{{$page+1}}">
                                    <div class="numquestion">question {{$page+1}} of {{$cou}}</div>
                                    <div class="input-group">
                                        <div class="answ">Question :</div>
                                        <label class="label"> {{ $text->question_text }}</label>
                                        <div class="answ" style="margin-bottom: 40px;">Answer :</div>
                                        <!--<div class="paper">
                                            <div class="paper-content">
                                                <textarea autofocus></textarea>
                                            </div>
                                        </div>-->
                                        <div id="toolbar[{{$i}}]"></div>
                                        <div id="editor[{{$i}}]"></div>
                                        @php
                                            $i++;
                                        @endphp
                                        <input type="hidden" name="nb_ql" value="{{$i}}">
                                        <div class="btn-next-con">

                                            @if ($page === 0)<a class="btn-next" href="#">Next</a>
                                            @elseif($page === ($cou-1))
                                                <a class="btn-back" href="#">back</a>
                                                <input type="hidden" name="test_id" value="{{$test1}}">
                                                <a class="btn-last" href="javascript:$('form').submit()"
                                                   onclick="getHTML()">Submit</a>
                                            @else
                                                <a class="btn-back" href="#">back</a>
                                                <a class="btn-next" href="#">next</a>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                <?php $page++ ?>

                            @endforeach
                        @endfor

                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
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
<!-- Jquery JS-->
<script src="{{ asset('/passage_test/vendor/jquery/jquery.min.js') }}"></script>
<!-- Vendor JS-->
<script src="{{ asset('/passage_test/vendor/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/passage_test/vendor/bootstrap-wizard/bootstrap.min.js') }}"></script>
<script src="{{ asset('/passage_test/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

<!-- Main JS-->
<script src="{{ asset('/passage_test/js/global.js') }}"></script>
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
<script src="{{ asset('/passage_test/js/jquery.downCount.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>

</html>
<!-- end document-->
