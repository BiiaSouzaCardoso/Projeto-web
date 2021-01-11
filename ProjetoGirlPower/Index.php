<!DOCTYPE html>

<html>
    <head>
        <title>girlpower</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Administrador/Css/Estilo.css">
    </head>
    <body>
        <img id="logo" src="Administrador/Imagens/ImagensSite/logo.jpg">
        <div>
            <h1><em>GIRL POWER</em></h1>
            <h2 id="juju">Seja bem-vindo!!</h2>
            <h2 id="juju">Venha conferir nossas novidades!!</h2></div>
        
        <ul id="link"><strong>
            <li id="li"><a href="#">Pagina inicial</a></li>
            <li id="li"><a href="Administrador/Visao/AdministradorIndex.php">Administrador</a></li>
            <li id="li"><a href="#">Login</a></li>
            <li id="li"><a href="Site/Carrinho.html"> Carrinho de compras</a></li>
            <li id="li"><a href="Administrador/Cliente/CadastroCliente.php"> Cadastre-se</a></li></strong>
        </ul>
        
        
        <div id="bia">
            <?php 
                require "Administrador/Banco/ConexaoBanco.php";
                $BancoSql = "SELECT * FROM Produto";
                 $Lista = mysqli_query($Conexao_Banco, $BancoSql);
                $Dados = array(); 
                if(empty($Lista)){
                    echo "Nenhum Produto Cadastrado";
                }else{
                    while ($Dados = mysqli_fetch_assoc($Lista)){
            ?>
                <div>
                    <img src="<?=$Dados['ImagemProduto']?>" alt="<?=$Dados['Nomeproduto']?>">
                    <h2><a href="Administrador/Produto/DetalharProduto.php?IdProduto= <?=$Dados['IdProduto']?>"><?=$Dados['Nomeproduto']?></a></h2>
                    <p>R$ <?=$Dados['PrecoProduto']?>,99</p><br>
                </div>

    <?php
            }}
    ?>
        </div>  
       
       <div> <ul id="link2">
            <li id="lis"><p><a href="administrador.html">Administrador</a></p></li>
            <li id="lis"><p><a href="sobreloja.html">Sobre a Loja</a></p></li>
            <li id="lis"><p><a href="mapaSite.html">Mapa do Site</a></p></li>
        </ul></div>
    </body>
</html>
