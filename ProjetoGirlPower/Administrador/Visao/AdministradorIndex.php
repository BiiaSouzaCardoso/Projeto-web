<!DOCTYPE html>

<html>
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../Css/Estilo.css">
    </head>
<body>
        <ul id="link"><strong>
            <li id="li"><a href="../../Index.php">Pagina inicial</a></li>
            <li id="li"><a href="Administrador/Visao/AdministradorIndex.php">Administrador</a></li>
            <li id="li"><a href="produtocadastrado.html">Login</a></li>
            <li id="li"><a href="carrinhodecompras.html"> Carrinho de compras</a></li>
            <li id="li"><a href="../Cliente/CadastroCliente.php"> Cadastre-se</a></li></strong>
        </ul>
        <h1>ADMINISTRADOR</h1>
        
<h2>Produto</h2>
    <table border = 1>
        <tr>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>DETALHAR</th>
            <th>UPDATE</th>
            <th>DELETAR</th>
        </tr>
            <?php 
                require "../Banco/ConexaoBanco.php";
                $BancoSql = "SELECT * FROM Produto";
                $Lista = mysqli_query($Conexao_Banco, $BancoSql);
                $Dados = array(); 
                if(empty($Lista)){
                    echo "Nenhum Produto Cadastrado";
                }else{
                    while ($Dados = mysqli_fetch_assoc($Lista)){
            ?>
     
            <tr>
                <td><?=$Dados['Nomeproduto']?></td>
                <td><?=$Dados['PrecoProduto']?></td>
                <td><a href = "../Produto/DetalharProduto.php?IdProduto= <?=$Dados['IdProduto']?>">Detalhar</a></td>
                <td><a href = "../Produto/UpdateProduto.php?IdProduto= <?=$Dados['IdProduto']?>">Update</a></td>
                <td><a href = "../Produto/DeletarProduto.php?IdProduto= <?=$Dados['IdProduto']?>">Deletar</a></td>               
            </tr>
            <?php }}?>
            <td><button type="submit"><strong><a href="../Produto/CadastroProduto.php">Adicionar</a></strong></button></td>
            <td></td><td></td><td></td><td></td>                         
        </table>


<h2>Cliente</h2>
<table border = 1>
    <tr>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>DETALHAR</th>
        <th>UPDATE</th>
        <th>DELETAR</th>
    </tr>
<?php 
    require "../Banco/ConexaoBanco.php";
    $BancoSql = "SELECT * FROM Cliente";
    $Lista = mysqli_query($Conexao_Banco, $BancoSql);
    $Dados = array(); 
    if(empty($Lista)){
        echo "Nenhum Cliente Cadastrado";
    }else{
        while ($Dados = mysqli_fetch_assoc($Lista)){
?>
     
    <tr>
        <td><?=$Dados['Nome']?></td>
        <td><?=$Dados['Email']?></td>
        <td><a href = "../Cliente/DetalharCliente.php?CpfCliente= <?=$Dados['CpfCliente']?>">Detalhar</a></td>
        <td><a href = "../Cliente/UpdateCliente.php?CpfCliente= <?=$Dados['CpfCliente']?>">Update</a></td>
        <td><a href = "../Cliente/DeletarCliente.php?CpfCliente= <?=$Dados['CpfCliente']?>">Deletar</a></td>                
    </tr>
<?php }}?>
</table>


<h2>Categorias</h2>
    <table border = 1>
        <tr>
            <th>ID</th>
            <th>DESCRICAO</th>
            <th>DELETAR</th>
        </tr>
    <?php 
        require "../Banco/ConexaoBanco.php";
        $BancoSql = "SELECT * FROM Categoria";
        $Lista = mysqli_query($Conexao_Banco, $BancoSql);
        $Dados = array(); 
        if(empty($Lista)){
            echo "Nenhum Cliente Cadastrado";
        }else{
            while ($Dados = mysqli_fetch_assoc($Lista)){
    ?>
     
    <tr>
        <td><?=$Dados['IdCategoria']?></td>
        <td><?=$Dados['DescricaoCategoria']?></td>
        <td><a href = "../Categoria/DeletarCategoria.php?IdCategoria= <?=$Dados['IdCategoria']?>">Deletar</a></td>                
    </tr>
    <?php }}?>
    <td><button type="submit"><strong><a href="../Categoria/CadastroCategoria.php">Adicionar</a></strong></button></td>
            <td></td><td></td>
    </table>

        <br>

        <a href="index.html"> Voltar a página inicial</a><br>
        <a href="mapaSite.html"> Mapa do site</a>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div> <ul id="link2">
            <li id="lis"><p><a href="administrador.html">Administrador</a></p></li>
            <li id="lis"><p><a href="sobreloja.html">Sobre a Loja</a></p></li>
            <li id="lis"><p><a href="mapaSite.html">Mapa do Site</a></p></li>
        </ul></div>
    </body>
</html>
