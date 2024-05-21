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
    ?>
    <main>
        <div>
            <h1 class="font-bold text-4xl mt-24">Produtores</h1>
            <div class="flex m-4">
                <div class="bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 mr-4 rounded flex w-48">
                    <img src="../imagens/plus.svg" alt="Plus">
                    <button onclick="window.location.href='add-produtor.php'" class="w-48">Novo Produtor</button></a>
                </div>
                <div class="bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 rounded flex w-48">
                    <img src="../imagens/refresh-cw.svg" alt="Refresh">
                    <button id="reloadButton" class="w-48">Atualizar</button>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <table class="bg-white border-collapse table-auto text-left rtl:text-right text-black">
                <thead class="text-black font-bold text-center">
                    <tr>
                        <td class="p-2 border border-slate-700">Id</td>
                        <td class="p-2 border border-slate-700">Nome</td>
                        <td class="p-2 border border-slate-700">Endereço</td>
                        <td class="p-2 border border-slate-700">Contacto</td>
                        <td class="p-2 border border-slate-700">Email</td>
                        <td class="p-2 border border-slate-700">Opções</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($resultado->num_rows > 0){
                        while ($registo = $resultado->fetch_assoc())
                            {
                                echo 
                                "<tr>
                                <td class='p-2 border border-slate-700'>".$registo['id']."</td> 
                                <td class='p-2 border border-slate-700'>".$registo['nome']."</td> 
                                <td class='p-2 border border-slate-700'>".$registo['endereco']."</td> 
                                <td class='p-2 border border-slate-700'>".$registo['contacto']."</td> 
                                <td class='p-2 border border-slate-700'>".$registo['email']."</td> 
                                <td class='p-2 border border-slate-700'>
                                <div class='flex flex-row gap-2'>
                                    <button id='btn_visualizar' class='p-2 bg-green-800 hover:bg-green-900 text-white font-bold flex rounded'><img class='size-4' src='../imagens/eye.svg'>Visualizar</button>
                                    <button id='btn_editar' class='p-2 bg-yellow-500 hover:bg-yellow-600 text-black font-bold flex rounded'><img src='../imagens/pencil.svg'>Editar</button>
                                    <a href='./delete-produtor.php'><button id='btn_eliminar' class='p-2 bg-red-500 hover:bg-red-600 text-black font-bold flex rounded'><img src='../imagens/trash-2.svg'>Eliminar</button></td></a>
                                </div>
                                </tr>";
                            }
                        }   
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer class="bg-green-500 bottom-0 w-full text-center text-white">
            Copyright 2024 - Francisco Zambujo
    </footer>

    <script>
        const reloadButton = document.getElementById('reloadButton');
        reloadButton.addEventListener('click', function() {
          window.location.reload();
        });
    </script>
</body>
</html>