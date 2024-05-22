<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frescos Lda. | Log-In</title>
    <link href="output.css" rel="stylesheet">
    <link href="number.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../imagens/fruits.png">
</head>
<body class="bg-green-300">
    <?php 
        require "./header.php";
        session_destroy();
    ?>
    <div class="flex justify-center mt-24 mb-10">
        <div class="w-80 rounded-2xl bg-white">
            <div class="flex flex-col justify-center text-center gap-y-3">
                <div class="bg-green-500 rounded-md border-white border-2">
                    <form method="POST" class="p-4" <?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="user">Username:</label>
                        <input placeholder="Username" class="w-48 rounded-lg border border-gray-300 bg-green-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100" type="text" id="user" name="user" required><br><br>
                        <label for="pass">Password:</label>
                        <input placeholder="Password" class="w-48 rounded-lg border border-gray-300 bg-green-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100" type="password" id="pass" name="pass" required><br><br>
                        <button type="submit" id="btnLogin" class="mt-4 bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 w-48 cursor-pointer rounded-md text-center">Iniciar Sessão</button>
                    </form>
                    <a href="criar_user.php"><button class="mt-4 bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 w-48 cursor-pointer rounded-md text-center">Criar Utilizador</button></a>
                </div>
            </div>
        </div>
    </div>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require "./connect.php";
        
            if ($conn->connect_error) {
                die('Falha na Conexão: ' . $conn->connect_error);
            }
        
            if (isset($_POST['user']) && isset($_POST['pass'])) {
                $user = $conn->real_escape_string($_POST['user']);
                $pass = $conn->real_escape_string($_POST['pass']);
            
                $sql = "SELECT * FROM utilizadores WHERE user = '$user' AND pass = '$pass'";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    session_start();
                    $_SESSION['user'] = $user;
                    header('Location: index.php');
                    exit();
                }else{
                    echo "
                        <div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
                            <div class='flex items-center gap-4'>
                                <span class='p-2 text-white'><p class='font-medium sm:text-lg text-emerald-600'>Frescos Lda.</p>
                                <p class='mt-4 text-gray-600'>Utilizador não existe!</p>
                                <div class='mt-6 sm:flex sm:gap-4'>
                                </div>
                            </div>
                        </div>
                    ";
                }
            }
        }
    ?>
    <footer class="bg-green-500 bottom-0 w-full text-center text-white">
        Copyright 2024 - Francisco Zambujo
    </footer>
</body>
</html>