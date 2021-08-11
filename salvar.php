<?php

$nome = $_POST['name'];
$idade = $_POST['idade'];
$chute = $_POST['chute'];

$sorteio = rand(1,10);

echo "Olá ".$nome."!<br>";
echo "Sua idade é ".$idade."!<br>";
echo "O número escolhido por você foi: ".$chute."<br>";
echo "O número sorteado foi ".$sorteio."<br><br>";

if ($chute == $sorteio) {
    echo "ACERTOU-MIZERAVI!!<br>";
    echo "<img src='https://25horasdehumor.files.wordpress.com/2015/09/acertou-mizeravi.jpg'>";
} else {
    echo "ERROU-MIZERAVI!!<br>";
    echo "<img src='https://conteudo.imguol.com.br/c/bol/fotos/97/2018/01/10/faustao-mostrou-que-nem-sempre-quem-sabe-faz-ao-vivo-1515582826765_615x300.jpg'>";
}