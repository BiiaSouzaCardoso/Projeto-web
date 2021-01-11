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
                <th>CPF</th>
                <th>NOME</th>
                <th>SOBRENOME</th>
                <th>TELEFONE</th>
                <th>EMAIL</th>
                <th>SENHA</th>
                <th>ENDEREÇO</th>
            </tr>
    <?php    
        require "../Banco/ConexaoBanco.php";
        $CpfCliente = $_GET['CpfCliente'];
        $Comando = "SELECT * FROM Cliente WHERE CpfCliente = $CpfCliente";
        $Result = mysqli_query($Conexao_Banco, $Comando);
        $Dados = array(); 
        while ($Dados = mysqli_fetch_assoc($Result)){
    ?>
     
                <tr>
                    <td><?=$Dados['CpfCliente']?></td>
                    <td><?=$Dados['Nome']?></td>
                    <td><?=$Dados['Sobrenome']?></td>
                    <td><?=$Dados['Telefone']?></td>
                    <td><?=$Dados['Email']?></td>
                    <td><?=$Dados['Senha']?></td>
                    <td><a href="CadastrarEnderecoCliente.php?CpfCliente= <?=$Dados['CpfCliente']?>">Endereço</a></td>
                </tr>
                <?php }?>
        </table>

<br>

        <table border = 1>
            <tr>
                <th>CPF</th>
                <th>ESTADO</th>
                <th>CIDADE</th>
                <th>BAIRRO</th>
                <th>RUA</th>
                <th>NUMERO</th>
            </tr>
    <?php    
        require "../Banco/ConexaoBanco.php";
        $CpfCliente = $_GET['CpfCliente'];
        $Comando = "SELECT * FROM Endereco WHERE CpfCliente = $CpfCliente";
        $Result = mysqli_query($Conexao_Banco, $Comando);
        $Dados = array(); 
        while ($Dados = mysqli_fetch_assoc($Result)){
    ?>
     
                <tr>
                    <td><?=$Dados['CpfCliente']?></td>
                    <td><?=$Dados['Estado']?></td>
                    <td><?=$Dados['Cidade']?></td>
                    <td><?=$Dados['Bairro']?></td>
                    <td><?=$Dados['Rua']?></td>
                    <td><?=$Dados['Numero']?></td>
                </tr>
                <?php }?>
        </table>

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