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
        $CpfCliente= $_GET['CpfCliente'];
        require "../Banco/ConexaoBanco.php";
        $Comando = "SELECT * FROM Cliente WHERE CpfCliente = $CpfCliente";
        $Result = mysqli_query($Conexao_Banco, $Comando);
        $Dados = array();
        $Dados = mysqli_fetch_assoc($Result);
    ?>
        
            <form  action="" method="POST"><br>
            <input type="hidden" value="<?=$CpfCliente?>" name="Id">
            <input type="text" placeholder="Nome..." name="Nome" value="<?=$Dados['Nome']?>"><br>
            <input type="text" placeholder="Sobrenome..." name="Sobrenome" value="<?=$Dados['Sobrenome']?>"><br>
            <input type="number" placeholder="Telefone..." name="Telefone" value="<?=$Dados['Telefone']?>"><br>
            <input type="email" placeholder="Email..." name="Email" value="<?=$Dados['Email']?>"><br>
            <input type="password" placeholder="Senha..." name="Senha"><br>
            <input type="password" placeholder="Confirme a Senha..." name="RepeticaoSenha"><br>
          <button type="submit">Cadastre-se</button>
          </form>


          <?php
    require "../Banco/ConexaoBanco.php";

    $CpfCliente = $_POST['Id'];
    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Telefone = $_POST['Telefone'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $SenhaRepetir = $_POST['RepeticaoSenha'];

    if($Senha == $SenhaRepetir){
    $BancoSql = "UPDATE Cliente SET Nome ='$Nome', Sobrenome ='$Sobrenome',
    Telefone ='$Telefone', Email ='$Email', Senha = $Senha WHERE CpfCliente = '$CpfCliente'";
       $Update = mysqli_query($Conexao_Banco, $BancoSql);
           if($Update == true){
               echo "Atualização do Cliente feito com secesso!";
           }
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