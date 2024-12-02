<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <header>
        <h1>Moteur de Recherche</h1>
        <form action="recherche.php" method="get">
            <input type="text" name="search" id="search-bar" placeholder="Recherchez ici..." autocomplete="off">
            <button type="submit">Rechercher</button>
        </form>
        <div id="suggestions"></div>
    </header>
</body>
</html>
