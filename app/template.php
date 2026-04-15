<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Capstone 3 - Layout</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header { background-color: #003366; color: white; padding: 15px; text-align: center; }
        main { padding: 20px; min-height: 400px; }
        footer { background-color: #333; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>

    <header>
        <h1>Web PWL - CodeIgniter 4</h1>
    </header>

    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <footer>
        <p>&copy; 2026 Tugas Kuliah - Universitas Dian Nuswantoro</p>
    </footer>

</body>
</html>