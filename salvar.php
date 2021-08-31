<?php

$nome = $_POST['name'];
$idade = $_POST['idade'];
$chute = $_POST['chute'];
$data = date('Y-m-d');
$sorteio = rand(1,10);

    //Front-end

echo "Olá ".$nome."!<br>";
echo "Sua idade é ".$idade."!<br>";
echo "O número escolhido por você foi: ".$chute."<br>";
echo "O número sorteado foi ".$sorteio."<br><br>";

if ($chute == $sorteio) {
    echo "ACERTOU-MIZERAVI!!<br>";
    echo "<img src='https://25horasdehumor.files.wordpress.com/2015/09/acertou-mizeravi.jpg' height=10% width=10%>"."<br><br>";
} else {
    echo "ERROU-MIZERAVI!!<br>";
    echo "<img src='https://conteudo.imguol.com.br/c/bol/fotos/97/2018/01/10/faustao-mostrou-que-nem-sempre-quem-sabe-faz-ao-vivo-1515582826765_615x300.jpg' height=10% width=10%>"."<br><br>";
}

    //Conexão com Banco e inserção dos dados na tabela

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "test";

$link = mysqli_connect($servername, $username, $password, $database);

if (!$link) {
    die('Não foi possível conectar: ' . mysqli_error());
}

$linhas = "SELECT id from registros_chutes";
$result = mysqli_query($link, $linhas);
$num_rows = mysqli_num_rows($result);

$query = "INSERT INTO registros_chutes (id, name, created_at, chute) VALUES ($num_rows, '$nome', '$data', $chute)";

if (mysqli_query($link, $query)) {
    echo "Registro salvo!<br>";
} else {
    echo "Erro durante o registro" . $query . "<br>" . mysqli_error($link);
}

mysqli_close($link);

