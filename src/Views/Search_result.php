<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de Recherche</title>
    <link rel="stylesheet" href="/Assets/style.css">
</head>
<body>
    <header>
        <h1>Résultats pour "<?php echo htmlspecialchars($query); ?>"</h1>
    </header>
    <main>
        <ul>
            <?php foreach ($results as $result): ?>
                <li>
                    <a href="/?controller=element&action=show&id=<?php echo $result['id']; ?>">
                        <?php echo htmlspecialchars($result['name']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
