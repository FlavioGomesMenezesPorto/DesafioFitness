<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios Fitness</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styles.css">
</head>
<body>
    <header style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 2rem;">
        <h1>Desafios Fitness</h1>
        <div>
            <a href="<?php echo BASE_URL; ?>login" style="color: white; text-decoration: none; margin-right: 15px;">Login</a>
            <a href="<?php echo BASE_URL; ?>register" style="color: white; text-decoration: none;">Cadastrar</a>
        </div>
    </header>
    <main>
        <h2>Meus Desafios</h2>
        <a href="<?php echo BASE_URL; ?>desafios_create">Criar Novo Desafio</a>
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
                            <a href="<?php echo BASE_URL; ?>desafios_edit?id=<?php echo $desafio->getId(); ?>">Editar</a>
                            <a href="<?php echo BASE_URL; ?>desafios_delete?id=<?php echo $desafio->getId(); ?>" class="delete-link">Excluir</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Nenhum desafio encontrado no momento.</p>
            <?php endif; ?>
        </div>
    </main>
    <script src="<?php echo BASE_URL; ?>js/script.js"></script>
</body>
</html>