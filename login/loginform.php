<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <title>Fazer login</title>
  </head>
  <body>

    <form action="functions/login.php" method="POST">
      <div class="container">

            <h3>Login</h3>
            <hr>


          <div class="form-row"> 
            <label for="nome_user"><strong>Nome:</strong></label>
            <input class="form-control" type="text" maxlength="50" placeholder="Nome" name="nome_user" id="nome_user" required>
          </div>

          <div class="form-row"> 
            <label for="senha_user"><strong>Senha:</strong></label>
            <input class="form-control" type="text" maxlength="50" placeholder="Senha" name="senha_user" id="senha_user" required>
          </div>
          
          <div class="form-row"> 
            <input class="btn btn-light col-md-3" type="submit" value="Login">
            <a class="redirect" href="cadastroform.php">Cadastro</a>
          </div>

      </div>
    </form>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>