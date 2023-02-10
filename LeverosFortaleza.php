<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <link rel="stylesheet" href="fortaleza.css">

    <title> Curriculo </title>
</head>

<body>
    <header>
    <div class="logo"><img height="61" width="200" src="./fortalezalogo.PNG" alt=""></div>

        
    </header>
   
    <main> 
    <form method="POST" action="LeverosFortaleza.php"> <!--  -->

    <h1 class="confirma">Confirme sua presença para a inauguração da Leveros Fortaleza</h1>
            <p class="endereco">16.01.23 das 18h às 21h
                Local: Rua Leonardo Mota, 2390 - Dionísio Torres - Fortaleza/CE
                </p>
    
    <div class="simesta">
                    <input type="radio" name="sim" id="yes">
                    <label for="yes">Sim, estarei presente! </label>
                </div>
                <div class="nome1">
        <label for="n1">Nome completo:</label>
        <input type="text" name="nom" id="n1" placeholder="Nome completo">
                </div>
        <div class="naoesta">
                    <input type="radio" name="nao" id="no" onclick="naoirei()">
                    <label for="no">Não, infelizmente não estarei presente</label>
                </div>
        
        
        <input class="envia" type="submit" value="Enviar">
    </form>

    <?php 
        if(isset($_POST["nom"])){
            $nom = $_POST["nom"];
        }
        else{
            $nom = null;
        }
        if(isset($_POST["sim"])){
            $sim = $_POST["sim"];
        }
        else{
            $sim = null;
        }
       

        if ($nom != null and $sim != null){
            
            $dados = "<p class='cadastro'><br> Nome: $nom </p>";
            $dadosd = "<p class='cadastro'><br> $nom </p>";
            //Junta a variavel com a extensão .txt
            $arquivo = $nom.".txt";
            $arquivod = "ListaNomes.txt";

            //variavel $fp armazena o nome e extensão do arquivo.
            $fp = fopen($arquivo, "w"); //O 'w' abre para escrever. 
            $dc = fopen($arquivod, "a"); //O 'a' acrescenta informação em um arquivo.

            //Escreve no arquivo aberto.
            fwrite($fp, $dados);
            fwrite($dc, $dadosd);

            //Fecha o arquivo.
            fclose($fp);
            fclose($dc);

            echo" <p class='dados'> Dados gravados: <br> <class='dados2' $dados </p>";
        }
       if(isset($_POST["nao"])){
            $nao = $_POST["nao"]; 
       }else{
        $nao = null;
       }

       if($nao != null){

        
        $dadosN = "<p class='naoir'> $nao </p>";
            $dadosdN = "<p class='naoir'> $nao </p>";
            //Junta a variavel com a extensão .txt
            $arquivoN = $nao.".txt";
            $arquivodN = "ListaNaoVao.txt";

            //variavel $fp armazena o nome e extensão do arquivo.
            $fp = fopen($arquivoN, "w"); //O 'w' abre para escrever. 
            $dc = fopen($arquivodN, "a"); //O 'a' acrescenta informação em um arquivo.


            //Escreve no arquivo aberto.
            fwrite($fp, $dadosN);
            fwrite($dc, $dadosdN);

            //Fecha o arquivo.
            fclose($fp);
            fclose($dc);
        echo"<p class='naoecho'> Enviado com sucesso <br> Obrigado por responder! </p>";


       }
       
    ?>
    <script>
        function naoirei(){
            document.getElementById("n1").disabled = true;
        }
    </script>
    </main>

    <footer>
       
    </footer>
</body>
</html>