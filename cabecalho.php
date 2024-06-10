<?php
$servername="localhost";
$username= "root";
$password="usbw";
$dbname= "imobiliaria";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Imobiliaria</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    

    <!-- Example Code -->
    
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastro
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cadastrar_imoveis.php">Cadastrar Imovel</a></li>
                <li><a class="dropdown-item" href="cadastrar_usuarios.php">Cadastrar Usuário</a></li>
                
              </ul>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Imoveis
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="listar_imoveis.php">Listar Imoveis</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>

      
    <!-- End Example Code -->
  </body>
</html>