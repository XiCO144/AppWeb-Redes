<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frescos Lda | Produtores.</title>
    <link href="./output.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../imagens/fruits.png">
</head>
<body class="bg-green-300">
    <?php
        require "./header.php";
        require "./connect.php";
        $sqle = "SELECT * FROM produtores;";
        $resultado = $conn->query($sqle);
        if (isset($_POST['btn_editar'])) {
            EditarEstilo($codProdutor,$conn);
        }
        {
            echo "Ação Não Reconhecida!";
        }

        function EditarProdutor($codProdutor,$conn){
            $sqls = "select * from estilo where cod_estilo=".$codProdutor.";";
            $resultado = $conn->query($sqls);
            if ($resultado->num_rows>0)
            {   
            while($registo=$resultado->fetch_assoc()){
                //MUDAR CÓDIGO | IR BUSCAR PELA LINHA NO BTN EDITAR
                echo "
                <main>
                    <form method='post'>
                        <label for='id_produtor'>ID Produtor</label>
                        <input type='number' class='input' name='id_produtor' id='id_produtor' value='".$registo["id"]."' readonly='readonly'>
                        <label for='produtor'>Nome Produtor</label>
                        <input type='text' class='input' name='produtor' id='produtor' value='".$registo["nome"]."'>
                        <label for='endereco'>Morada</label>
                        <input type='text' class='input' name='endereco' id='endereco' value='".$registo["endereco"]."'>
                        <label for='endereco'>Contacto</label>
                        <input type='text' class='input' name='contacto' id='contacto' value='".$registo["contacto"]."'>
                        <label for='endereco'>Email</label>
                        <input type='text' class='input' name='email' id='email' value='".$registo["email"]."'>
                        <input type='submit'>
                    </form>
                </main>";
            }
        }
        else {
            echo "Produtor não encontrado";
        }
        }
    ?>
    <main>
        <div>
            <h1 class="font-bold text-4xl mt-24">Editar Produtores</h1>
            <div class="flex m-4">
        </div>
        <hr>                    
        <?php
                if ($resultado->num_rows > 0){
                while ($registo = $resultado->fetch_assoc())
                    {
                        echo 
                        "<form method='POST'>
                        <label for='nome'>Nome do Produtor</label>
                        <input class='input' type='text' name='nome' id='nome' value= '".$registo['nome']."'>
                        <label for='endereco'>Endereço</label>
                        <input class='input' type='text' name='endereco' id='endereco'>
                        <label for='contacto'>Contacto</label>
                        <input class='input' type='text' name='contacto' id='contacto'>
                        <label for='email'>email</label>
                        <input class='input' type='email' name='email' id='email'>
                        <button type='submit' class='btn-submit'>Adicionar Produtor</button>
                    </form>
                    ";
                    }
                }   
            ?>
    </main>
    <footer class="bg-green-500 bottom-0 w-full text-center text-white">
            Copyright 2024 - Francisco Zambujo
    </footer>
</body>
</html>