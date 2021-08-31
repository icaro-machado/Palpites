<?php

$url = 'http://www.receitaws.com.br/v1/cnpj/'.$_POST['cnpj'];
$conteudo = file_get_contents($url);
$responseReceitaWsContent = json_decode($conteudo, true);

echo "CNPJ: ".$responseReceitaWsContent['cnpj']."<br>";
echo "Nome: ".$responseReceitaWsContent['nome']."<br>";
echo "Tipo: ".$responseReceitaWsContent['tipo']."<br>";
echo "UF: ".$responseReceitaWsContent['uf']."<br>";
echo "Telefone: ".$responseReceitaWsContent['telefone']."<br>";
echo "E-mail: ".$responseReceitaWsContent['email']."<br>";

//    $responseReceitaWsContent = [
//        'nome' => 'batata'
//    ];

//echo $conteudo;
//echo '<br><br>';

//echo '<pre>';
//print_r($responseReceitaWsContent);

//var_dump($responseReceitaWsContent);

//echo '</pre>';
//echo '<br><br>';
