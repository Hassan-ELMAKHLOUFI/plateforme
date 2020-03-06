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
<form action='{{route('test.store')}}'  method='POST'>
    @csrf
    <label>
        Nom de Test
        <input type="text" name="nom">
    </label>
    <label>
        Note
        <input type="number" name="note">
    </label>
    <label>
        Duree
        <input type="number" name="duree">
    </label>
    <label>
        Salle
        <input type="text" name="salle">
    </label>
    <label>
        Date
        <input type="date" name="date">
    </label>
    <button type="submit">Enregistrer</button>
</form>
</body>
</html>
