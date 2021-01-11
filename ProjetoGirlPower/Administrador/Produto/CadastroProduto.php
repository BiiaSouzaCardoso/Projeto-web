<!DOCTYPE html>

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
            <li id="li"><a href="../Visao/AdministradorIndex.php">Administrador</a></li>
            <li id="li"><a href="#">Login</a></li>
            <li id="li"><a href="carrinhodecompras.html"> Carrinho de compras</a></li>
            <li id="li"><a href="Administrador/Cliente/CadastroCliente.php"> Cadastre-se</a></li></strong>
        </ul>
    <?php
        require "../Banco/ConexaoBanco.php";
        $BancoSql = "SELECT * FROM Categoria";
        $Lista = mysqli_query($Conexao_Banco, $BancoSql);
        $Dados = array();
    ?> 

        <div><h2>Cadastro do produto</h2></div>
            <div>
            <form action="" method="POST" enctype="multipart/form-data" >
                <input type="file" name="Imagem"><br>
                <input type="text" placeholder="Nome do Produto..." name="NomeProduto"><br>
                <textarea name="DescricaoProduto" placeholder="Descrição..."></textarea><br>
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
                <input type="number" placeholder="Preço do Produto..." name="Preco"><br>
                <button type="submit"> Cadastrar </button>
            </form>
                </div>

<?php
    require "../Banco/ConexaoBanco.php";
    $Imagem = $_FILES['Imagem']['name'];
    $Destino = 'Administrador/Imagens/Produtos/'.$Imagem;

    $NomeProduto = $_POST['NomeProduto'];
    $Descricao = $_POST['DescricaoProduto'];
    $IdCategoria = $_POST['Categoria'];
    $Preco = $_POST['Preco'];
    


    $BancoSql = "INSERT INTO Produto (IdProduto,IdCategoria, ImagemProduto,
     NomeProduto,DescricaoProduto,PrecoProduto)
    VALUES (NULL,'$IdCategoria','$Destino', '$NomeProduto','$Descricao','$Preco')";
    $Inserir = mysqli_query($Conexao_Banco, $BancoSql);
        if($Inserir == true){
            echo "Registro do Produto feito com secesso!";
        }
?>
        <br>
        <a href="../Visao/AdministradorIndex.php"> Voltar</a>
        <br><a href="../../Site/mapaSite.html">Mapa do site</a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div> <ul id="link2">
            <li id="lis"><p><a href="administrador.html">Administrador</a></p></li>
            <li id="lis"><p><a href="sobreloja.html">Sobre a Loja</a></p></li>
            <li id="lis"><p><a href="mapaSite.html">Mapa do Site</a></p></li>
        </ul></div>
    </body>
</html>
