<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{action('Text_libreController@store')}}" method="POST">
    @csrf
    <input type="hidden" name="test_id" value="{{$test['test_id']}}">
    <label>
        Question:
        <input type="text" name="question_text" pattern="[a-z]{4,}" title="4 chars min">
    </label>
    <br>
    <select name="difficulty">
        <option value="1">trés facile</option>
        <option value="2">facile</option>
        <option value="3">moyenne</option>
        <option value="4">difficile</option>
        <option value="5">très difficile</option>
    </select>

    <label>
        Note:
        <input type="number" name="note">
    </label>
    <input type="submit" name="submit">
</form>
</body>
</html>
