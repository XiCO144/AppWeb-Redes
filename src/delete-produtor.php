<?php 
    require "./connect.php";

    function deleteProdutor($idprodutor,$conn)
    {
        
        $sqlq = "delete from produtores where id=".$idprodutor.";";
        $sqlr= $conn->query($sqlq);
        echo $sqlr;
        if($sqlr)
            echo "<div class='sucesso'>Produtor removido da tabela com sucesso!</div>";
        else
            echo "<div class='erro'>Erro a remover produtor!</div>";
    }
?>