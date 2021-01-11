<!DOCTYPE html>

<html>
    <head>
        <title>cadastro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Css/Estilo.css">
    </head>
<body>
    <ul id="link"><strong>
        <li id="li"><a href="../../Index.php">Pagina inicial</a></li>
        <li id="li"><a href="..//Visao/AdministradorIndex.php">Administrador</a></li>
        <li id="li"><a href="produtocadastrado.html">Login</a></li>
        <li id="li"><a href="carrinhodecompras.html">Carrinho</a></li>
        <li id="li"><a href="Administrador/Cliente/CadastroCliente.php"> Cadastre-se</a></li></strong>
    </ul>
       <div> <h2>Ainda não é cadastrado no site?</h2>
        <h2>Faça agora mesmo o seu cadastro, é simples e rápido!!
        </div>
        
        <div id="FormulárioCliente">
            <form action="" method="POST">
                <input type="number" name="Cpf" placeholder="CPF..."><br><br>
                <input type="text" name="Nome" placeholder="Nome..."><br><br>
                <input type="text" name="Sobrenome" placeholder="Sobrenome..."><br><br>
                <input type="number" name="Telefone" placeholder="Telefone"><br><br>
                <input type="text" name="Email" placeholder="E-mail..."><br><br>
                <input type="password" name="Senha" placeholder="Senha..."><br><br>
                <input type="password" name="SenhaRepetir" placeholder="Repita a Senha..."><br><br>
                <button type="submit">Cadastrar</button><br><br>
            </form>
        </div>

<?php
    require "../Banco/ConexaoBanco.php";
    $Cpf = $_POST['Cpf'];
if(!empty($Cpf)){
    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Telefone = $_POST['Telefone'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $SenhaRepetir = $_POST['SenhaRepetir'];

    if($Senha == $SenhaRepetir){
        $BancoSql = "INSERT INTO Cliente (CpfCliente,Nome,Sobrenome,Telefone,Email,Senha)
        VALUES ('$Cpf','$Nome','$Sobrenome','$Telefone','$Email','$Senha')";
        $Inserir = mysqli_query($Conexao_Banco, $BancoSql);
            if($Inserir == true){
                echo "Processo de cadastro do Cliente feito com secesso!";
            }}else{
                die("Processo de cadastro falhou!".mysqli_error($Conexao_Banco));
            }
    }
?>
            <br>
        <a href="../../Index.php"> Voltar a página inicial</a>
        <br><a href="mapaSite.html">Mapa do site</a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div> <ul id="link2">
            <li id="lis"><p><a href="administrador.html">Administrador</a></p></li>
            <li id="lis"><p><a href="sobreloja.html">Sobre a Loja</a></p></li>
            <li id="lis"><p><a href="mapaSite.html">Mapa do Site</a></p></li>
        </ul></div>
    </body>
</html>
