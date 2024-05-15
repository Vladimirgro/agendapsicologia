<?php include "vistas/header.php"; ?>

                <h1 class="title">Bienvenido <?php echo '<strong>'.$_SESSION['usuario'].'</strong>'; ?></h1>
                
                <ul class="breadcrumbs">
                    <li><a href=".php">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Dashboard</a></li>
                </ul>


<?php include "vistas/footer.php"; ?>