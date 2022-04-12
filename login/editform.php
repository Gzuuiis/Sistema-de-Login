<?php 
$con = mysqli_connect("localhost", "root","", "contas");
$cpf = (int) $_GET['cpf'];
$sql = "select * from login where cpf=$cpf";
$dados = mysqli_query($con, $sql);
$row = mysqli_fetch_array($dados);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <title>Editar informações</title>
  </head>
  <body>
      <form action="functions/atualiza.php" method="post">

        <div class="container">
          <h3>Editar usuário</h3>
          <hr>
          
            <div class="form-row"> 
              <strong>CPF usuário:</strong> <br>
              <input class="form-control" readonly="true" value="<?php echo $row["cpf"];?>" type="text" name="cpf">
            </div>

            <div class="form-row"> 
              <strong>Nome usuário: </strong><br>
              <input class="form-control" value="<?php echo $row["nome_user"];?>" type="text" name="nome_user">
            </div>

            <div class="form-row"> 
              <strong>Senha usuário:</strong><br>
              <input class="form-control" value="<?php echo $row["senha_user"];?>" type="text" name="senha_user">
            </div>

            <div class="form-row"> 
              <strong>Email usuário:</strong><br>
              <input class="form-control" value="<?php echo $row["email_user"];?>" type="text" name="email_user">
            </div>

            <div class="form-row"> 
               <input class="btn btn-light col-md-3" type="submit" value="Atualizar">
              <a class="redirect" href="view_account.php">Voltar a visualização</a>
            </div>

        </div>
        
    </form>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>