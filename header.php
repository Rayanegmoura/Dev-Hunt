<?php
session_start();
?>
<head>
    <link rel="stylesheet" href="entrar.css">
</head>

<header>
    <div class="entrar">
    <nav>
        <ul>
            <?php if (isset($_SESSION['usuario'])): ?>
                <li><a href="perfil.html">Bem-vindo, <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></a></strong>!</li>
                <li><a class="sair" href="logout.php">Sair</a></li>
            <?php else: ?>
                <li><a href="login.php">Entrar</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    </div>
</header>
