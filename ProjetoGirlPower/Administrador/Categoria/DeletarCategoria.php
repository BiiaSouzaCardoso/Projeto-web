<!DOCTYPE html>

<html>
    <head>
        <title>Cadastro Categoria</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Css/Estilo.css">
    </head>
<body>
    <ul id="link"><strong>
        <li id="li"><a href="../../Index.php">Pagina inicial</a></li>
        <li id="li"><a href="../Administrador/Visao/AdministradorIndex.php">Administrador</a></li>
        <li id="li"><a href="produtocadastrado.html">Login</a></li>
        <li id="li"><a href="carrinhodecompras.html">Carrinho</a></li>
        <li id="li"><a href="Administrador/Cliente/CadastroCliente.php"> Cadastre-se</a></li></strong>
    </ul>

<?php
    require "../Banco/ConexaoBanco.php";
    $Id = $_GET['IdCategoria'];
    $Comando = "DELETE FROM Categoria WHERE IdCategoria = $Id";
    $Result = mysqli_query($Conexao_Banco, $Comando);
    if ($Result){
        echo "Categoria excluida com sucesso!";
    }else{
        echo "Erro ao excluir Categoria";
    }
?>

            <br>
        <a href="../Visao/AdministradorIndex.php"> Voltar</a>
        <br><a href="mapaSite.html">Mapa do site</a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div> <ul id="link2">
            <li id="lis"><p><a href="administrador.html">Administrador</a></p></li>
            <li id="lis"><p><a href="sobreloja.html">Sobre a Loja</a></p></li>
            <li id="lis"><p><a href="mapaSite.html">Mapa do Site</a></p></li>
        </ul></div>
    </body>
</html>