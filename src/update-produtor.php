<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frescos Lda.</title>
    <link href="./output.css" rel="stylesheet">    
    <link rel="icon" type="image/x-icon" href="../imagens/fruits.png">
</head>
<body class="bg-green-300">
    <?php 
        require './header.php';
        echo "   
        <h1 class='font-bold text-4xl mt-24'>Editar Produtor</h1>
        <hr>
        ";
        require "./connect.php";
        $produtorID = $_POST["id"];
        $nome = $_POST["nome"];
        $endereco= $_POST["endereco"];
        $contacto= $_POST["contacto"];
        $email= $_POST["email"];
        $sqlu= "update produtores set nome='".$nome."', endereco='".$endereco."', contacto='".$contacto."', email='".$email."' where id=".$produtorID.";";
        if ($conn->query($sqlu) === TRUE) {
        echo "
        <div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
            <div class='flex items-center gap-4'>
                <span class='p-2 text-white'><p class='font-medium sm:text-lg text-emerald-600'>Frescos Lda.</p>
                <p class='mt-4 text-gray-600'>Informações do produtor alteradas com sucesso!</p>
                <div class='mt-6 sm:flex sm:gap-4'>
                <a href='./produtores.php' class='inline-block w-full rounded-lg bg-emerald-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto'>OK</a>
            </div>
        </div>
        ";
        } else{
        echo ("<br>Erro a alterar informações do produtor");
        }
    ?>

</body>

</html>