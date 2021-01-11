<?php
    $Conexao_Banco = mysqli_connect("localhost", "RicDB", "Ricardo@220820", "GirlPower");
    if(!$Conexao_Banco){
        echo "Deu erro ao se conectar ao banco";
    }
?>