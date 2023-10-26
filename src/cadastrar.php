
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Pessoal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
                @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
        width: 360px;
        padding: 3% 0 0;
        margin: 0 auto;
        }
        .form {
        position: relative;
        z-index: 1;
        background: #ffffff;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        textarea {
        height: 300px;
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
        background: #76b852; /* fallback for old browsers */
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

    </style>
<body>
<?php require "../components/header.php" ?>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="post" action="../database/agenda.php?tipo=1">
                <input type="text" id="titulo" name="titulo" placeholder="Título:" maxlength="30"><br><br>

                <textarea type="" id="descricao" name="descricao" placeholder="Descrição:"></textarea><br><br>

                <input type="date" id="data" name="data"><br><br>

                <input type="time" id="hora" name="hora"><br><br>

                <select name="importancia">
                    <option value="1">Sem importância</option>
                    <option value="2">Importância leve</option>
                    <option value="3">Importância moderada</option>
                    <option value="4">Importância alta</option>
                    </select>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

</body>
</html>