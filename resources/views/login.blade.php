<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        .tela-login{
            background-color: rgba(0, 0, 0, 0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 16px;
            color: white;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        input{
            padding: 16px;
            border: none;
            outline: none;
            font-size: 16px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 16px;
            width: 100%;
            border-radius: 8px;
            color: white;
            font-size: 16px;
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="tela-login">
        <h1>Dona Creuzza</h1>
        <input type="text" placeholder="Nome"><br><br>
        <input type="password" placeholder="Senha"><br><br>
        <button class="btn-login">
            <a href="/welcome" style="text-decoration: none; color: black">Acessar</a>
        </button>

    </div>
</body>
</html>