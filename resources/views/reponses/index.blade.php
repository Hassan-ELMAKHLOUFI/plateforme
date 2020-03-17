<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
<table>
    <thead>
    <tr>
        <th>nom</th>
        <th>reponses</th>
    </tr>
    </thead>
    <tbody>
    @foreach($session as $s)
    <tr>
        <td>{{$s->username}}</td>
        <td>
            @php $reponses = \App\Reponse_text::query()->where('etudiant_id','=',$s->session_id)->get() @endphp
            <button value="{{$reponses}}" type="button" class="word" onclick="getWord(this)">reponses</button>
        </td>

    </tr>
    @endforeach

</body>
</html>
<script>
    function getWord(elm) {
        var doc = new jsPDF();
        var reponses = JSON.parse(elm.value);
        var i = 0;
        var out = "";
        while(i < reponses.length){
            out = out + reponses[i].fichier;
            out = out + "<br>" + "<hr>";
            i++;
        }
        doc.fromHTML(out);
        //console.log(reponses);
        doc.fromHTML();
        doc.save($(elm).closest('tr').find("td:first-child").text()+'.pdf');
    }
</script>

