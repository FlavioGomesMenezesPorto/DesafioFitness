<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios Fitness</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <header>
        <h1>Desafios Fitness</h1>
    </header>
    <main>
        <h2>Meus Desafios</h2>
        <a href="../public/index.php?route=desafios/create" class="btn-create">Criar Novo Desafio</a>
        <div id="desafios-lista">
            <?php 
            if (isset($desafios) && !empty($desafios)): 
            ?>
                <ul>
                    <?php 
                    foreach ($desafios as $desafio): 
                    ?>
                        <li>
                            <h3><?php echo htmlspecialchars($desafio->getNome()); ?></h3>
                            <p><strong>Descrição:</strong> <?php echo htmlspecialchars($desafio->getDescricao()); ?></p>
                            <a href="../public/index.php?route=desafios/edit&id=<?php echo htmlspecialchars($desafio->getId()); ?>" class="btn-edit">Editar</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Nenhum desafio encontrado no momento.</p>
            <?php endif; ?>
        </div>
    </main>
    <script src="../public/js/script.js"></script>
</body>
</html>