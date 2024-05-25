<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_frutaria";

    error_reporting(0);
    try {
        $conn = new mysqli($servername, $username, $password, $database);
    } catch (mysqli_sql_exception) {
        echo "
            <div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
                <div class='flex items-center gap-4'>
                    <span class='p-2 text-white'><p class='font-medium sm:text-lg text-red-600'>Frescos Lda.</p>
                    <p class='mt-4 text-gray-600'>Erro de conexão!</p>
                    <div class='mt-6 sm:flex sm:gap-4'>
                        <a href='./index.php' class='inline-block w-full rounded-lg bg-red-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto'>OK</a>
                    </div>
                </div>
            </div>
        ";
        exit;
    }
?>