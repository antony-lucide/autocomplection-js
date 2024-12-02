<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="/Assets/style.css">
</head>
<body>
    <header>
        <h1>Moteur de Recherche</h1>
        <form action="/?controller=search&action=search" method="get">
            <input type="hidden" name="controller" value="search">
            <input type="hidden" name="action" value="search">
            <input type="text" name="query" placeholder="Recherchez ici...">
            <button type="submit">Rechercher</button>
        </form>
    </header>
</body>
</html>
