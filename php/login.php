<?php 

//$conexao = include("conexao.php");

$hostname = "localhost";
$user = "root";
$senha = "sant04oliveira2004alves";
$db = "sge";

$mysqli = new mysqli($hostname, $user, $senha, $db);

$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta = "SELECT * FROM login_adm WHERE login='$email' and senha='$senha'";

$resultado = mysqli_query($mysqli, $consulta);

$dados = mysqli_num_rows($resultado);

if ($dados > 0) {
    header("Location: ../www/dashboard.html");
}else {
    echo "Email ou senha inválidos, tente novamente!";
    header("Location: index.html");
}

mysqli_free_result($resultado);
mysqli_close($conexao);