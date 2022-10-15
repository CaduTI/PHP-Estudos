<?php
//$nome = $_GET["a"];
//var_dump($nome);
//o $_GET serve para pegarmos um dados de um formulário
//Vale lembrar que não podemos usar para dados sensíveis, como senhas, cartão e outros.
//para esses casos usamos o $_POST,
$ip = $_SERVER["REMOTE_ADDR"];
//USAMOS O $_SERVER PARA PERGARMOS O IP DA MÁQUINA
echo $ip;
$teste = $_POST["teste"];
var_dump($teste);
?>