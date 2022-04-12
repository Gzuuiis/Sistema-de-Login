<?php 

// Criando conexão com o banco.
$con = mysqli_connect("localhost", "root","", "contas");

// Puxando valores que serão ou não atualizados.
$cpf =  $_POST['cpf'];
$nome = $_POST['nome_user'];
$senha = $_POST['senha_user'];
$email = $_POST['email_user'];

// Trocando os valores antigos pelos novos.
$sql = "update login set nome_user='$nome', senha_user='$senha', email_user='$email' where cpf='$cpf';";
$result = mysqli_query($con, $sql);

if($result){
      header("location: /login/view_account.php");
    }else{
        echo "error";
    }
    
  



?>