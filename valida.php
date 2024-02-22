<?php
    require_once('db.class.php');

    $objDb = new db();

    $link = $objDb->conecta_mysql();

    $user = $_POST['user'];
    $password = $_POST['password'];

    $max_attemps = 3;
    $retry_times = [10,200,2000];

    $sql = "select * from usuarios where user = '$user' AND password = '$password'";

    $consulta = mysqli_query($link, $sql);

    if($consulta) {
        $row = mysqli_fetch_assoc($consulta);

        if (isset($row['user'])) {
            echo 'usuario logado';
        } else {
            //errou a senha? inicia sessão e começa contar as tentativas 
            session_start();
            if (!isset($_SESSION['login_attempts'])) {
                $_SESSION['login_attempts'] = 1;
            } else {
                $_SESSION['login_attempts']++;
            }        

            if ($_SESSION['login_attempts'] > $max_attemps) {

                $retry_time_index = count($retry_times) - 1;
                for ($i = $max_attemps -1; $i >= 0; $i--){

                }
            }
        }

    } else {
        echo 'erro de consulta no banco de dados';
    }
    
    ?>