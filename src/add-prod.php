<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frescos Lda. | Adicionar Produto</title>
    <link href="./output.css" rel="stylesheet">
    <link href="./number.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../imagens/fruits.png">
</head>
<body class="bg-green-300">
    <?php 
        require "./header.php";
    ?>
    <main class="text-black">
        <h1 class="m-10 font-bold text-4xl flex justify-center">Novo Produto</h1>
        <hr class="border-black w-4/5 m-auto">
        <div class="flex justify-center mt-10 mb-10">
            <div class="w-96 rounded-2xl bg-white">
                <div class="flex flex-col justify-center text-center gap-y-3">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="space-y-10">
                <div class="grid grid-cols-4 items-center text-right gap-4 p-4">
                    <label for="nome">Nome do Produto</label>
                    <input id='nome' name='nome' class="input col-span-3 ml-6" type="text" name="nome" id="nome"></input>
                    <label for="preco">Preço</label>
                    <input id='preco' name='preco' class="input col-span-3 ml-6" type="number" name="preco" id="preco"></input>
                    <label for="quantidade">Quantidade(Kg)</label>
                    <input id='quantidade' name='quantidade' class="input col-span-3 ml-6" type="number" name="quantidade" id="quantidade"></input>
                    <label for="descricao">Descrição</label>
                    <input id='descricao' name='descricao' class="input col-span-3 ml-6" type="text" name="descricao" id="descricao"></input>
                    
                    <label for="produtores">Nome do Produtor</label>
                    <select name="produtores" id="produtores" class="ml-6 flex m-auto border rounded-lg px-4 py-3 border-gray-300">
                        <?php 
                            require "./connect.php";
                            $sqls = "SELECT id, nome FROM produtores";
                            $result = $conn->query($sqls);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row["id"];
                                    $nome = $row["nome"];
                                    $selected = "";
                                    if (isset($_POST["produtores"]) && $_POST["produtores"] == $id) {
                                        $selected = "selected";
                                    }
                                    echo "<option value='$id' $selected>$nome</option>";
                                }
                            } else {
                                echo "Nenhum resultado encontrado.";
                            }
                        ?>
                    </select>
                    </div>
                    <button type="submit" class="btn-submit">Adicionar Produto</button>
                </form>
                </div>
            </div>
        </div>
        <?php 
            require "./connect.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["nome"];
                $preco = $_POST["preco"];
                $quantidade = $_POST["quantidade"];
                $descricao = $_POST["descricao"];
                $produtor_id = $_POST["produtores"];
            
                $sql = "INSERT INTO produtos (nome, preco, quantidade, descricao, nome_produtor) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssi", $nome, $preco, $quantidade, $descricao, $produtor_id);
                $stmt->execute();
            
                if ($stmt->affected_rows > 0) {
                    echo "
                    <div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
                    <div class='flex items-center gap-4'>
                    <span class='p-2 text-white'><p class='font-medium sm:text-lg text-emerald-600'>Frescos Lda.</p>
                    <p class='mt-4 text-gray-600'>Produto inserido com sucesso!</p>
                    <div class='mt-6 sm:flex sm:gap-4'>
                    <a href='./produtos.php' class='inline-block w-full rounded-lg bg-emerald-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto'>OK</a>
                    </div>
                    </div>
                    </div>";
                } else {
                    echo "Erro ao adicionar produto: " . $stmt->error;
                }
            }
        ?>
    </main>
    <footer class="bg-green-500 bottom-0 w-full text-center text-white">
            Copyright 2024 - Francisco Zambujo
    </footer> 
</body>
</html>