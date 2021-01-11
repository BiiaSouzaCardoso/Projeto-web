<?php
    $Conexao_Banco = mysqli_connect("localhost", "root", "", "GirlPower");
    if(!$Conexao_Banco){
        echo "Deu erro ao se conectar ao banco";
    }
?>
