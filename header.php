<?php
session_start();
?>

<header>
    <div class="btnentrar">
    <nav>
        <ul>
            <?php if (isset($_SESSION['usuario'])): ?>
                <li><a href="perfil.html">Bem-vindo, <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></a></strong>!</li>
                <li><a href="logout.php">Sair</a></li>
            <?php else: ?>
                <li><a href="login.php">Entrar</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    </div>
</header>
