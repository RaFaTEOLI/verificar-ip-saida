<?php
/*
        Nome: verificarIPSaida.php
        Autor: Rafael Tessarolo
        Descrição: Programa para verificar IP da rede de saida do servidor
        Tecnologias: Estou usando o site meuip.com.br (como "API") para retornar o IP de saída
*/

$url = file_get_contents("http://meuip.com.br/");

$from = '<h3 class="m-0 font-weight-bold" style="color: #FF8000;">';
$to = "</h3>";

echo getStringBetween($url, $from, $to) . "\n";

function getStringBetween($str, $from, $to) {
        $sub = substr($str, strpos($str,$from)+strlen($from),strlen($str));
        return substr($sub,0,strpos($sub,$to));
}
?>
