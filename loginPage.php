<?php 
if(isset($_COOKIE['user']) and isset($_COOKIE['senha'])){
    header('location: perfil.php?type=conta&user='.$_COOKIE['user']);
}
else{
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $msgErro = '';
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if((!empty(trim($_POST['email_username'])) and !empty(trim($_POST['password']))) or (trim($_POST['email_username']) != '' and trim($_POST['password']) != '')){
            $user = $_POST['email_username'];
            $senha = $_POST['password'];
    
            //Consulta ao BD
            include 'connection.php';
    
            $sql1 = "SELECT idUsuarioWeb FROM EcoMomentBD_UsuarioWeb WHERE NomeWeb = '$user' AND SenhaWeb = '$senha' AND ativo = 1"; //nome de usuario ativo
            $sql2 = "SELECT idUsuarioWeb FROM EcoMomentBD_UsuarioWeb WHERE EmailWeb = '$user' AND SenhaWeb = '$senha' AND ativo = 1";//email ativo
    
            $sql3 = "SELECT idUsuarioWeb FROM EcoMomentBD_UsuarioWeb WHERE NomeWeb = '$user' AND SenhaWeb = '$senha' AND ativo = 0"; //nome de usuario banido
            $sql4 = "SELECT idUsuarioWeb FROM EcoMomentBD_UsuarioWeb WHERE EmailWeb = '$user' AND SenhaWeb = '$senha' AND ativo = 0";//email banido
    
            $result1 = $con->query($sql1);
            $result2 = $con->query($sql2);
            $result3 = $con->query($sql3);
            $result4 = $con->query($sql4);
    
            if(mysqli_num_rows($result1) == 1){
                setcookie('user', $user, time()+604800, '/');
                setcookie('senha', $senha, time()+604800, '/');
                $con->close();
                header('Location: logado.php');
            }
            else if(mysqli_num_rows($result2) == 1){
                $sql3 = "SELECT NomeWeb FROM EcoMomentBD_UsuarioWeb WHERE EmailWeb = '$user' AND SenhaWeb = '$senha'";
                $result3 = $con->query($sql3);
                if ($result3->num_rows > 0){
                    if ($row = $result->fetch_assoc()){
                        $nomeUser = $row['idPostagem'];
                        setcookie('user', $nomeUser, time()+604800, '/');
                        setcookie('senha', $senha, time()+604800, '/');
                        $con->close();
                        header('Location: logado.php');
                    }
                }
            }
            else if(mysqli_num_rows($result3) == 1 || mysqli_num_rows($result4) == 1){
                header('location: acesso-negado.php?id=banido');
            }
            else{
                $msgErro = 'Usuário ou senha incorretos';
            }
            
            $con->close();
        }
        else{
            $msgErro = 'Um ou mais campos vazios. Preencha todos para continuar.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login-page.css">
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="styles/mediaQuery-login.css">
    <link rel="shortcut icon" href="midias/favicon.png" type="image/x-icon">


    <style>
        .circeR{
            font-family: "circe", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .circeB{
            font-family: "circe", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .msgErro{
            color: red;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-bottom: 1.1rem;
        }
    </style>
</head>
<body>


    
<div class="container">

<!---------------------------------------- Começo da form-image --------------------------------------------------->
        
        <div class="form-image">

            <div class="header">
                <div class="title">
                    <h1 id="bv" class="circeB">BEM VINDO DE</h1>
                    <h1 id="bv2" class="circeB">VOLTA!</h1>
                </div>
            </div>

            <div class="image">
                <img id="ip" src="imagens/imgLogin.png" alt="">
            </div>
            
            <div class="logo">
                <img src="imagens/EcoMomenticon.ico" alt="">
            </div>
        </div>
        
<!---------------------------------------- Fim da form-image --------------------------------------------------->


<!----------------------------------------Começo da form dos inputs --------------------------------------------------->

        <div class="form">

                <div class="form-header">
                    <div class="bvf logo">
                        <img src="imagens/EcoMomenticon.ico" alt="">
                    </div>
                    <div class="title2">
                        <h1 class="circeB">Login</h1>
                    </div>
                </div>

                    <button class="buton circeB" id="b2">
                        <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                        <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                        <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                        <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                        <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                      </svg>
                        Continuar com o Google
                      </button>

                    <p id="or" class="circeB">ou</p>

                <form method="post">
                    <div class="input-group">
                        <div class="input-box">
                            <label class="lbl circeB" for="email_username">E-mail / nome de usuário:</label>
                            <div class="InputContainer">
                                <label for="email_username" class="labelforsearch">
                                    <img id="icon" src="imagens/email.png" alt="">
                                </label>
                                <input type="text" name="email_username" class="input" id="email_username" required>
                            <div class="border"></div>
                            <button class="micButton">
                                <img id="icon" src="imagens/danger.png" alt="">
                            </button>
                            </div>
                        </div>

                        <div class="input-box">
                            <label class="lbl circeB" for="password">Senha:</label>
                            <div class="InputContainer">
                                <label for="password" class="labelforsearch">
                                    <img id="icon" src="imagens/padlock.png" alt="">
                                </label>
                                <input type="password" name="password" class="input" id="password" required>
                                <div class="border"></div>
                                <button class="micButton">
                                    <img id="icon" src="imagens/danger.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="msgErro"><?=$msgErro?></div>

                    <div class="btn-entrar">
                        <button class="button" type="submit">Entrar</button>
                    </div>
                </form>
                <div class="footer">
                    <p class="circeB">Não tem uma conta? <a href="cadastroPage.php">Cadastre-se</a></p>
                </div>
                <div class="footer-image">
                    <img class="logo" src="" alt="">
                </div>
                <div class="voltar circeB">
                    <a href="index.php">Continuar sem login</a>
                </div>
        </div>


<!---------------------------------------------- Fim da form dos inputs --------------------------------------------->
    
    </div>
</body>
</html>