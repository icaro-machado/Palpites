
<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "test";

$link = mysqli_connect($servername, $username, $password, $database);

if (!$link) {
    die('Não foi possível conectar: ' . mysqli_error());
}

echo 'Conexão bem sucedida<br><br>' . PHP_EOL();

$query = "INSERT INTO registros_chutes (id, name, created_at, chute) VALUES (4, 'NOME', 2021-08-23, 10)";

if (mysqli_query($link, $query)) {
    echo "Novo registro gerado!";
} else {
    echo "Erro durante o registro" . $query . "<br>" . mysqli_error($link);
}

mysqli_close($link);
