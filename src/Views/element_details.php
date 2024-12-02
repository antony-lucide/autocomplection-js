<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($element['name']); ?></title>
    <link rel="stylesheet" href="/Assets/style.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($element['name']); ?></h1>
    </header>
    <main>
        <p><?php echo htmlspecialchars($element['description']); ?></p>
    </main>
</body>
</html>
