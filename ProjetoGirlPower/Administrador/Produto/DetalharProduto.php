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

        <table border = 1>
            <tr>
                <th>ID</th>
                <th>IMAGEM</th>
                <th>NOME</th>
                <th>PREÇO</th>
                <th>DESCRIÇÃO</th>
                <th>CATEGORIA</th>
            </tr>
    <?php    
        require "../Banco/ConexaoBanco.php";
        $IdProduto = $_GET['IdProduto'];
        $Comando = "SELECT * FROM Produto WHERE IdProduto = $IdProduto";
        $Result = mysqli_query($Conexao_Banco, $Comando);
        $Dados = array(); 
        while ($Dados = mysqli_fetch_assoc($Result)){
    ?>
     
                <tr>
                    <td><?=$Dados['IdProduto']?></td>
                    <td><img src="../../<?= $Dados["ImagemProduto"] ?>"></td>
                    <td><?=$Dados['Nomeproduto']?></td>
                    <td><?=$Dados['PrecoProduto']?></td>
                    <td><?=$Dados['DescricaoProduto']?></td>
                    <td><?=$Dados['IdCategoria']?></td>
                </tr>
                <?php }?>
        </table>


        <br>
        <a href="../../Index.php"> Voltar</a>
        <br><a href="mapaSite.html">Mapa do site</a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div> <ul id="link2">
            <li id="lis"><p><a href="sobreloja.html">Sobre a Loja</a></p></li>
            <li id="lis"><p><a href="mapaSite.html">Mapa do Site</a></p></li>
        </ul></div>
    </body>
</html>