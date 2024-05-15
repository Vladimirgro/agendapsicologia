<?php session_start();
  if (!isset($_SESSION['usuario'])){
    header("location:index.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Psicologia | Panel administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/css/admin.css">
    <link rel="stylesheet" href="public/css/citas.css">
    <script src="https://kit.fontawesome.com/2db89b7317.js" crossorigin="anonymous"></script>
  </head>
  <body>

<!-- SIDEBAR -->
    <section id="sidebar">
        <a href="inicio.php" class="brand"><i class="fa-solid fa-brain"></i></i>Psicología</a>
        <ul class="side-menu">
            <li><a href="inicio.php" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
            <li class="divider" data-text="main">Menu</li>           
            
            <li>
            
                <a href="#"><i class='bx bxs-book-alt icon' ></i> Citas <i class='bx bx-chevron-right icon-right' ></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Todas las citas</a></li>
                    <li><a href="citas.php">Nueva</a></li>
                    <li><a href="#">Calendario</a></li>
                   
                </ul>
            </li>

            <li>
                <a href="#"><i class='bx bxs-user icon' ></i> Pacientes <i class='bx bx-chevron-right icon-right' ></i></a>
                <ul class="side-dropdown">                    
                    <li><a href="pacientes.php">Nuevo</a></li>
                    <li><a href="#">Historial de los pacientes</a></li>
                    <li><a href="#">Documentos</a></li>
                   
                </ul>
            </li>                     
            
            <li>
                <a href="#"><i class='bx bxs-cog icon' ></i> Ajustes<i class='bx bx-chevron-right icon-right' ></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Ajustes</a></li>
                    <li><a href="#">Idioma</a></li>
                    <li><a href="#">Base de datos</a></li>
                    
                </ul>
            </li>

            <li><a href="#"><i class='bx bxs-info-circle icon' ></i> Acerca de</a></li>
          
           
        </ul>
       

    </section>
<!-- SIDEBAR -->

 <!-- NAVBAR -->
 <section id="content">
        <!-- NAVBAR -->
      <nav>
            <i class='bx bx-menu toggle-sidebar' ></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Buscar...">
                    <i class='bx bx-search icon' ></i>
                </div>
            </form>           
           
            <span class="divider"></span>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <ul class="profile-link">
                    <li><a href="../profile/mostrar.php">
                          <i class='bx bxs-user-circle icon' ></i> 
                            Profile
                        </a>
                    </li>
                    
                    <li>
                     <a href="servidor/login/logout.php"><i class='bx bxs-log-out-circle' ></i> Salir</a>
                    </li>
                   
                </ul>
            </div>
      </nav>
      <!-- NAVBAR --> 
 

    <!-- MAIN -->
    <main>