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
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="styles/style-login.css">
    <link rel="shortcut icon" href="midias/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <div class="row center">

            <div class="d-none d-md-flex col-6 center div-img">
                <h1 id="titulo-img">OBRIGADO POR VOLTAR!</h1>
                <img src="imagens/imgLogin.png" alt="Duas pessoas plantando uma muda em uma garrafa de vidro" id="img-login">
                <img src="imagens/EcoMomenticon.ico" alt="Logo EcoMoment" id="logo">
            </div>

            <div class="col-12 col-md-6 center div-form">
                <div class="row ext-borda">
                    <div class="col-4 bb"></div>
                    <div class="col-4 center"><h1 id="titulo-form">LOGIN</h1></div>
                    <div class="col-4 bb"></div>
                </div>
                <div id="borda" class="center">
                    <button class="button mt-3" id="google" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                            <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                            <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                            <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                            <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                        </svg>
                        Continuar com Google
                    </button>
                    <p class="my-2 center">ou</p>
                    <form action="" method="post" class="center mt-1 mb-3">
                        <div class="just-label"><label for="email_username">Email / nome de usuário:</label></div>
                        <div class="input-box">
                            <label for="email_username">
                            <img src="imagens/email.png" alt="" class="img-label">
                            </label>
                            <input type="text" name="email_username" id="email_username" required>
                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Insira o nome que aparece em sua conta utilizando o caractere @ ou use o email utilizado em seu cadastro"><i class="bi bi-question-circle"></i></span>
                        </div>
                        <div class="just-label"><label class="mt-3" for="password">Senha:</label></div>
                        <div class="input-box">
                            <label for="password">
                            <img src="imagens/padlock.png" alt="" class="img-label">
                            </label>
                            <input type="password" name="password" id="password" required>
                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Insira a senha utilizada em seu cadastro"><i class="bi bi-question-circle"></i></span>
                        </div>
                        <span id="invalid_msg" style="color: red; font-size: 14px;"><?=$msgErro;?></span>
                        <button type="submit" class="button my-4">
                            Entrar
                        </button>
                    </form>
                    <p>Não tem uma conta? <a href="signup.php" id="link-cadastrar">Cadastre-se</a></p>
                    <p><a href="index.php" id="link-sem-login">Continuar sem login</a></p>
                </div>
                <div class="row ext-borda">
                    <div class="col-5 bt"></div>
                    <div class="col-2 center"><img src="imagens/reciclagem-icone.png" id="img-rdp" class="pb-2" alt=""></div>
                    <div class="col-5 bt"></div>
                </div>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="alerts.js"></script>
    <!-- Utilizado para habilitar as tooltips-->
    <script> 
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>