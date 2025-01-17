<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

    <title>Cadastro</title>
  </head>
  <body>

   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Cadastro de Cliente</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuário</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>

<DIV class="container">
    <div class="row">
        <div class="col mt-5">
        
        <?php
        include('config.php');
        $sql = "SELECT * FROM usuarios";
    switch (@$_REQUEST['page']){
        case 'novo';
            include ('novo-usuario.php');
        break;
        case 'listar':
            include ('listar-usuario.php');
        break;
        case 'salvar':
          include('salvar_usuario.php');
        break;
        case 'editar':
          include('editar-usuario.php');
        break;
        default:
            print "<h1>Bem Vindos!</h1>";

    }
?>

        </div>
    </div>
</DIV>



    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>