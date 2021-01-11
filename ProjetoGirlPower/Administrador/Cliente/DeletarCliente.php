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
    $Id = $_GET['CpfCliente'];
    $Comando = "DELETE FROM Cliente WHERE CpfCliente = $Id";
    $Result = mysqli_query($Conexao_Banco, $Comando);
    if ($Result){
        echo "Cliente excluido com sucesso!";
    }else{
        echo "Erro ao excluir Cliente";
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