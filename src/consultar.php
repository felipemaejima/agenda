<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Pessoal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
        max-width: 360px;
        min-width: 360px;
        /* padding: 8% 0 0; */
        /* margin: auto; */
        }
        .form {
        position: relative;
        z-index: 1;
        background: #ffffff;
        /* max-width: 360px; */
        margin: 0 0 100px;
        padding: 45px;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input,
        select,
        textarea {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #e4e4e4;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        border-radius: 10px;
        }
        .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4caf50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #ffffff;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        border-radius: 10px;
        }
        .form button:hover,
        .form button:active,
        .form button:focus {
        background: #43a047;
        }
        body {
        background: #76b852; 
        background: rgb(141, 194, 111);
        background: linear-gradient(
            90deg,
            rgba(141, 194, 111, 1) 0%,
            rgba(118, 184, 82, 1) 50%
        );
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        }
        .flex-row{ 
        margin-top: 10px;
        display: flex;
        flex-direction: row ; 
        }

    </style>
<body>
    <?php require "../components/header.php" ?>
    <div class="flex-row">
        <div class="login-page">
            <div class="form">
                <form class="login-form" method="post" action="../database/agenda.php?tipo=2">
                    <input type="text" id="titulo" name="titulo" placeholder="Título:" maxlength="30"><br><br>

                    <textarea type="" id="descricao" name="descricao" placeholder="Descrição:"></textarea><br><br>

                    <label for="data">De:</label>
                    <input type="date" id="data" name="data"><br><br>

                    <input type="time" id="hora" name="hora"><br><br>
                    <label for="data2">Até:</label>
                    <input type="date" id="data2" name="data2"><br><br>

                    <input type="time" id="hora2" name="hora2"><br><br>

                    <select name="importancia">
                        <option value="">Escolha a importancia</option>
                        <option value="1">Sem importância</option>
                        <option value="2">Importância leve</option>
                        <option value="3">Importância moderada</option>
                        <option value="4">Importância alta</option>
                        </select>

                    <button type="submit">Consultar</button>
                </form>
            </div>
        </div>
    <!-- <div class="form" style="width: 1000px;">
        <div class="list-model">
             <span style="font-size: 12px ">00/00/0000 20:00  - importancia</span>
            <h3 style="margin-top: 5px;">Título</h3>
        </div>
        <p>descricao</p>
    </div> -->
<?php 
if (isset($_GET['listagem']) && isset($_SESSION['consulta'])){
    
    $dados = $_SESSION['consulta'];
    foreach ($dados as $key => $value) {
        $data = new DateTime($value['data_comp']);
        $data = $data->format("d/m/Y H:i");
        $titulo = $value['titulo'];
        $imp = $value['importancia'];
        $desc = $value['descricao'];
        switch ($imp) {
            case 1:
                $imp = 'Sem importância';
                break;
            
            case 2:
                $imp = 'Importância leve';
                break;
            case 3:
                $imp = 'Importância moderada';
                break;
            case 4:
                $imp = 'Importância alta';
                break;
        }
        echo "
        <div class='form' style='min-width: 360px;'>
        <div class='list-model'>
             <span style='font-size: 12px '>$data  - $imp</span>
            <h3 style='margin-top: 4px;'>$titulo</h3>
        </div>
        <p>$desc</p>
    </div>
        ";
    }
    session_destroy();
    
}
?>    
    </div>
</body>
</html>