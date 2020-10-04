<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
<header class="header">
    <h1>Curso de PHP</h1>
    <h2>Vizualição do Exercício</h2>
</header>

<nav class="navigation">
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="green">Sem formatação</a>
    <a href="index.php" class="red">Voltar</a>
</nav>

<main class="main">
    <div class="content">
        <?php
            include("{$_GET['dir']}/{$_GET['file']}.php")
        ?>
    </div>
</main>

<footer class="footer">
    COD3R & ALUNOS &copy; <?= date('Y'); ?>
</footer>
</body>
</html>
