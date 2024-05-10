<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log-In</title>
</head>
<body>
    <div class="box">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>>
            <label for="user">Username:</label>
            <input type="text" id="user" name="user" required><br><br>
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required><br><br>
            <input type="submit" value="Entrar">
        </form>
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
                    header("teste");
                    exit();
                }else{
                    header("failed");
                    exit();
                }
            }
        }
    ?>
</body>
</html>