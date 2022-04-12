<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
<?php 

  session_start();
  if((!isset ($_SESSION['nome_user']) == true) and (!isset ($_SESSION['senha_user']) == true))
  {
    header('location:loginform.php');
    }

  $con = mysqli_connect("localhost", "root","", "contas");
  $sql = "select * from login where cpf='".$_SESSION['cpf']."'";
  $dados = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($dados);

  $logado = $_SESSION['nome_user']; 
  $cpf = $_SESSION['cpf'];

?>
  </head>
  <body>

    <div class="container">
        <div class="infos">

          <h2>Suas informações:</h2>
          <hr>
          
          <div class="form-row">
            <label for="cpf"><strong>CPF:</strong></label>
             <input class="form-control col-md-12" readonly="true" type="text" name="cpf" value="<?php echo $row["cpf"];?>">
          </div>

          <div class="form-row">
            <label for="nome_user"><strong>Nome:</strong></label>
            <input class="form-control col-md-12" readonly="true" type="text" name="nome_user" value="<?php echo $row["nome_user"];?>">
          </div>


          <div class="form-row">
            <label for="senha_user"><strong>Senha:</strong></label>
            <input class="form-control col-md-12" readonly="true" type="text" name="senha_user" value="<?php echo $row["senha_user"];?>">
          </div>

          <div class="form-row">
           <label for="email_user"><strong>Email:</strong></label>
            <input class="form-control col-md-12" readonly="true" type="text" name="email_user" value="<?php echo $row["email_user"];?>">
          </div>


          <div class="form-row">
           <a class="btn btn-info col-md-3 col-sm-2" href="editform.php?cpf=<?php echo $cpf;?>" role="button">Editar</a>
           <a class="btn btn-danger col-md-3 col-sm-2" href="functions/logout.php" role="button">Sair</a>
          </div>

        </div>


    </div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>