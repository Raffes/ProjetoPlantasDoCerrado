<?php
include 'php/conexao.php';


$login = $_POST['login'];
$senhaLogin = $_POST['senhaDeLogin'];



$result = mysqli_query($conecta,"SELECT * FROM cadastroDeUsuario WHERE login = '$login' AND senha = '$senhaLogin' LIMIT 1")
        or die("Error");

$linhas = mysqli_num_rows($result);


if($linhas == ''){
    echo "Usuário e/ou senha inválidos";
}else{
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['login'] = $senhaLogin;
?>
<script type="text/javascript">
    window.location = 'logIndex.php';
</script>
<?php }




