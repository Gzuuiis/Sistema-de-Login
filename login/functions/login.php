<?php

session_start();

//Recebe dados do formulário

$nome = addslashes($_POST["nome_user"]);
$password = addslashes($_POST["senha_user"]);

//Conecta no banco de dados

$mysql = mysqli_connect('localhost','root','') or die("Sem conexão com o servidor");
mysqli_select_db($mysql,'contas');

// Preparando banco para evitar SQLInjection (Obs.: a tag "addslashes" evita o mesmo)
$sql = $mysql -> prepare("SELECT  nome_user, senha_user, email_user, cpf  FROM login WHERE nome_user = ? AND senha_user = ? ");
$sql->bind_param('ss',$nome, $password);
$sql->execute();    
$get = $sql->get_result();
$conta= $get->num_rows;

$data = mysqli_fetch_assoc($get);

if($conta > 0){
    $_SESSION['nome_user'] = $nome;
    $_SESSION['senha_user'] = $password;
    $_SESSION['cpf'] = $data['cpf'];
    header("location: /login/view_account.php");
}
else{
    unset ($_SESSION['nome_user']);
    unset ($_SESSION['senha_user']);
    header("location: /login/loginform.php");
}
?>