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
            $CpfCliente = $_GET['CpfCliente'];
        ?>
        <br>
        <br>
        <div>
            <form  action="" method="POST"><br>
            <input type="hidden" name="CpfCliente" value="<?=$CpfCliente?>"?>
            <input type="text" placeholder="Estado..." name="Estado"><br>
            <input type="text" placeholder="Cidade..." name="Cidade"><br>
            <input type="text" placeholder="Bairro..." name="Bairro"><br>
            <input type="text" placeholder="Rua..." name="Rua"><br>
            <input type="number" placeholder="Numero..." name="Numero"><br>
          <button type="submit">Cadastre-se</button>
        </form>

        <?php
            require "../Banco/ConexaoBanco.php";
                $CpfCliente = $_POST['CpfCliente'];
                $Estado = $_POST['Estado'];
                $Cidade = $_POST['Cidade'];
                $Bairro = $_POST['Bairro'];
                $Rua = $_POST['Rua'];
                $Numero = $_POST['Numero'];

                

            $BancoSql = "INSERT INTO Endereco (CpfCliente,Estado,Cidade,Bairro,Rua,Numero)
            VALUES ('$CpfCliente','$Estado','$Cidade','$Bairro','$Rua','$Numero')";
            $Inserir = mysqli_query($Conexao_Banco, $BancoSql);
                if($Inserir == true){
                    echo "Registro do Endereco feito com secesso!";
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