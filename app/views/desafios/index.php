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
                            <p><strong>Período:</strong> <?php echo htmlspecialchars($desafio->getDataInicio()) . ' a ' . htmlspecialchars($desafio->getDataFim()); ?></p>
                            <p><strong>Status:</strong> <?php echo htmlspecialchars($desafio->getStatus()); ?></p>
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