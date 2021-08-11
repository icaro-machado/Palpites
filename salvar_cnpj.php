<?php

$url = 'http://www.receitaws.com.br/v1/cnpj/'.$_POST['cnpj'];
$conteudo = file_get_contents($url);
echo $conteudo;
echo '<br><br>';
echo json_encode($conteudo);
echo '<br><br>';
