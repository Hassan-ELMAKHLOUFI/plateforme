<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PDF</title>
</head>
<body>
<img src="{{ base_path() }}/public/logo.PNG" alt="logo.png"/>
<br>

<h1 style="text-align: center;border-style: dashed">Etudiant Session List</h1><br>



<table cellpadding="10" align="center" border="2">
    <thead>
    <tr>
        <!--<th>ID</th>-->
        <th>Username</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sessions as $s)
        <tr>
        <!--<td>{{ $s->etudiant_id }}</td>-->
            <td>{{ $s->username }}</td>
            <td>{{ $s->password }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>


