<?php
//simulação de dados no BD:
$s;enha = 123;
$login = "Mel"

$loginDigitado = $_POST['login'];
$senhaDigitada = $_POST['senha'];
$email = $_POST['email'];
$dtcad = $_POST['dtcad'];

//echo "Login: $login <br>";
//echo "Senha: $senha <br>";
//echo "Email: $email <br>";
//echo "Data de Cadastro: $dtcad <br>";

if ($senha == $senhaDigitada and $login == $loginDigitado) {
    echo "Olá, $login";
} else {
    echo "Mete o pé";
}
