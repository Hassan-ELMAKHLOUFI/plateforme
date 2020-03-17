<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<?php $test1 = $test->test_id;?>
<form id="form" action="{{ route('Resultat.store')}}" method="post">
    @csrf

    @foreach ($qcms['qcms']  as $qcm)

        {{ $qcm->question_text }}<br>
        <?php $opt = $qcm->options;?>
        @foreach ($opt  as $option)
            <input type="checkbox" name="options[{{ $option->option_id }}]" id="option-{{$option->option_id}}"
                   value="{{$option->option_id}}">{{$option->option_text}}<br>
        @endforeach

    @endforeach


    @foreach ($binaires['binaires']  as $binaire)


        {{ $binaire->question_text }}<br>
        <?php $opt1 = $binaire->options;?>
        @foreach ($opt1  as $option)
            <input type="radio" name="questions[{{ $binaire->binaire_id}}]" id="option-{{$option->option_id}}"
                   value="{{$option->option_id}}">{{$option->option_text}}<br>
        @endforeach

    @endforeach
    @php
        $i = 0;
    @endphp
    @foreach($text_libres['text_libre'] as $text_libre)

        <input type="hidden" name="fichier{{$i}}">
        <input type="hidden" name="question_id[{{$i}}]" value="{{$text_libre->question_id}}">
        <input type="hidden" name="etudiant_id" value="{{$session}}">
        {{ $text_libre->question_text }}<br>
        <div id="toolbar[{{$i}}]"></div>
        <div id="editor[{{$i}}]"></div>
        @php
            $i++;
        @endphp
    @endforeach
    <input type="hidden" name="nb_ql" value="{{$i}}">
    <input type="hidden" name="test_id" value="{{$test1}}">
    <button id="btn" onclick="getHTML()">Button</button>
</form>
</body>
</html>

<script>
    var container = [];
        @php
            $j = 0;
        @endphp
        @while($j < $i)
     container[{{$j}}]= document.getElementById('editor[{{$j}}]');

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
            var name = document.querySelector('input[name=fichier'+i+']'); // set name input var
            name.value = element[i].innerHTML.toString();
            i++;
        }
        var form = document.getElementById("form"); // get form by ID
        form.onsubmit = function () { // onsubmit do this first
            return true; // submit form
        }
    }

</script>
