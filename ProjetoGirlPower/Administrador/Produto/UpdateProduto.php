<html>
    <head>
        <title>cadastroproduto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Css/Estilo.css">
    </head>
    <body>
    <ul id="link"><strong>
            <li id="li"><a href="../../Index.php">Pagina inicial</a></li>
            <li id="li"><a href="Administrador/Visao/AdministradorIndex.php">Administrador</a></li>
            <li id="li"><a href="produtocadastrado.html">Login</a></li>
            <li id="li"><a href="carrinhodecompras.html"> Carrinho de compras</a></li>
            <li id="li"><a href="Administrador/Cliente/CadastroCliente.php"> Cadastre-se</a></li></strong>
        </ul>

    <?php
        require "../Banco/ConexaoBanco.php";
        $BancoSql = "SELECT * FROM Categoria";
        $Lista = mysqli_query($Conexao_Banco, $BancoSql);
        $Dados = array();
    ?>           

<?php
    $IdProduto= $_GET['IdProduto'];
    require_once "../Banco/ConexaoBanco.php";
    $Comando = "SELECT * FROM Produto WHERE IdProduto = $IdProduto";
    $Result = mysqli_query($Conexao_Banco, $Comando);
    $Dados = array();
    $Dados = mysqli_fetch_assoc($Result);
?>
        <h1>Atualizar Produto</h1>
        
    <div>
        form action="" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="IdProduto" value="<?=$IdProduto?>"><br>
        <input type="file" name="Imagem"><br>
        <input type="text" placeholder="Nome do Produto..." name="NomeProduto" value="<?=Dados['Nomeproduto']?>"><br>
        <textarea name="DescricaoProduto" value="<?=Dados['DescricaoProduto']?>"></textarea><br>
        <select name="Categoria"><br>
        <option>Escolha uma Categoria</option>
        <?php
            while($Dados = mysqli_fetch_assoc($Lista)){    
        ?>      
            <option value="<?=$Dados['IdCategoria']?>"><?=$Dados['DescricaoCategoria']?></option>
        <?php 
            }
         ?>
        </select><br>
        <input type="number" placeholder="Preço do Produto..." name="Preco" value="<?=$Dados['PrecoProduto']?>"><br>
        <button type="submit"> Atualizar </button>
    </form>

<?php

    require "../Banco/ConexaoBanco.php";    
    $Imagem = $_FILES['Imagem']['name'];
    $Destino = 'Administrador/Imagens/Produtos/'.$Imagem;

    $IdProduto = $_POST["IdProduto"];
    $NomeProduto = $_POST["NomeProduto"];    
    $DescricaoProduto = $_POST["DescricaoProduto"];
    $Categoria = $_POST["Categoria"];
    $Preco = $_POST["Preco"];


    $BancoSql = "UPDATE Produto SET ImagemProduto ='$Destino' ,Nomeproduto ='$NomeProduto',
     DescricaoProduto ='$DescricaoProduto',
     IdCategoria ='$Categoria', PrecoProduto ='$Preco' WHERE IdProduto = '$IdProduto'";
        $Update = mysqli_query($Conexao_Banco, $BancoSql);
            if($Update == true){
                echo "Atualização do Produto feito com secesso!";
            }
?>

        <br>
        <a href="../Visao/AdministradorIndex.php"> Voltar</a>
        <br><a href="mapaSite.html">Mapa do site</a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div> <ul id="link2">
            <li id="lis"><p><a href="sobreloja.html">Sobre a Loja</a></p></li>
            <li id="lis"><p><a href="mapaSite.html">Mapa do Site</a></p></li>
        </ul></div>
    </body>
</html>