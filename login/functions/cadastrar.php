<?php 
    // Criando conexão com o banco.
    $con = mysqli_connect('localhost','root','', 'contas');

    // Puxando valores de cadastro do usuário.
    $user = $_POST["nome_user"];
    $senha =$_POST["senha_user"];
    $mail = $_POST['email_user'];
    $cpf = $_POST['cpf'];

    // Puxando CPF passado pelo usuário e vendo se já existe no banco .
    $sql2 = "SELECT `cpf` FROM `login` WHERE (`cpf` = '".$cpf."')";
    $query2 = mysqli_query($con,$sql2);

    if(mysqli_num_rows($query2)!=0){
        echo "CPF ja cadastrado";
        return false;
    }else{
        $sql = "insert into login values";
        $sql .= "('$user','$senha','$mail','$cpf')";
        $query = mysqli_query($con,$sql);
        header("location: /login/loginform.php");
    }




?>