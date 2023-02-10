<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

 <?php
 
 //Variavel arquivo armazena o nome e extensão do arquivo.
 $arquivo = "ListaNaoVao.txt";

 //Variavel $fp armazena a conexão com o arquivo e o tipo de ação.
 $fp = fopen($arquivo, "r");

 //Recebe o conteudo do arquivo aberto.
 $contents = fread($fp, filesize($arquivo));

 //Exibe o conteudo do arquivo.
 echo"$contents";

 //Fecha o arquivo.
 fclose($fp);
 
  

 
 
 
 
 ?>
</body>
</html>