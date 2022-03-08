<?php
session_start();
if(isset($_POST["login"]) && isset($_POST["senha"])){
    $login_user = $_POST["login"];
    $senha_user = $_POST["senha"];
if(!(empty($login_user) or empty($senha_user))){

    include("conexao.php");
    $sql="select * from tbUsuario where login_user =
    '$login_user' and senha_user = '$senha_user'";
    $res = mysqli_query($conexao,$sql);
    $linha = mysqli_num_rows($res);
    if($linha==0){
       session_destroy();
       echo "Login ou Senha Incorretos!";
       exit;
    }
    else{
       $_SESSION["login_user"] = $_POST["login"];
       $_SESSION["senha_user"] = $_POST["senha"];
       header("Location: Pagina-restrita1.php");
    }
    }
    else{
       session_destroy();
       echo "Você não efetou o login!";
       exit;
    }
    }
    ?>
  
