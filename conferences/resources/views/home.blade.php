<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Konferencijų sistema</title>
</head>
<body>
    <h1>Konferencijų sistema</h1>
    <p>Arnas Aleksas Sidorovičius, PIT-23-I-NT</p>
    <a href="{{ route('home') }}">Pagrindinis puslapis</a>
    <p>
    <a href="{{ route('client.index') }}">Kliento posistemis</a>
</p>
<p>
    <a href="{{ route('employee.index') }}">Darbuotojo posistemis</a>
</p>
<p>
    <a href="{{ route('admin.index') }}">Administratoriaus posistemis</a>
</p>
</body>
</html>