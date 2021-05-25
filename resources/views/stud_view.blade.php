<!DOCTPE html>
<html>
<head>
<title>View Users Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
<td>email</td>
<td>Organisation</td>
<td>Compagne</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->idOrganisation }}</td>
<td>{{ $user->idCompagne }}</td>
</tr>
@endforeach
</table>
</body>
</html>