<?php
if(isset($_COOKIE['user']) and isset($_COOKIE['senha'])){
    header('location: perfil.php?type=conta&user='.$_COOKIE['user']);
}
else{
    require_once 'database/config.php';
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $invalid_msg = "";
        $username = "";
        $email = "";  
        $password = ""; 
    }
            
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (trim($username) != "" && trim($email) != "" && trim($password) != "") {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $verifica1 = $conn->query("SELECT * FROM cl202247.EcoMomentBD_UsuarioWeb where NomeWeb = '$username'");
            $verifica2 = $conn->query("SELECT * FROM cl202247.EcoMomentBD_UsuarioWeb where EmailWeb = '$email'");
            if(mysqli_num_rows($verifica1) == 1){
                $invalid_msg = "Nome de usuário já existente!";
            }else if (mysqli_num_rows($verifica2)>= 1){
                $invalid_msg = "Email já cadastrado!";
            }else{
                $sql = 'INSERT INTO cl202247.EcoMomentBD_UsuarioWeb (nomeWeb, emailWeb, senhaWeb) values (?, ?, ?)';

                $stmt = $conn->prepare($sql);
                $stmt->bind_param('sss', $username, $email, $password);  // Bind the parameters to the parameter markers

                if($stmt->execute()){
                    setcookie('user', $username, time()+604800, '/');
                    setcookie('senha', $password, time()+604800, '/');
                    header('Location: sucesso.php?id=cadastro');
                }else{
                    echo '<script>alert("ERRO")</script>';
                }
                $stmt->close();
            }
        }
        else {
            $invalid_msg = 'Preencha todos os campos corretamente!';
        }    
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="styles/style-login.css">
    <link rel="stylesheet" href="styles/style-cadastro.css">
    <link rel="shortcut icon" href="midias/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <div class="row center">

            <div class="d-none d-md-flex col-6 center div-img">
                <h1 id="titulo-img">CHEGOU O MOMENTO DE AJUDAR O MUNDO!</h1>
                <img src="imagens/imgCadastro.png" alt="" id="img-login">
                <img src="imagens/EcoMomenticon.ico" alt="Logo EcoMoment" id="logo">
            </div>

            <div class="col-12 col-md-6 center div-form">
                <div class="row ext-borda">
                    <div class="col-2 bb"></div>
                    <div class="col-8 center"><h1 id="titulo-form">CADASTRE-SE</h1></div>
                    <div class="col-2 bb"></div>
                </div>
                <div id="borda" class="center">
                    <form action="" method="post" class="center mt-3">
                        <div class="just-label"><label for="username">Nome de usuário:</label></div>
                        <div class="input-box">
                            <label for="username">
                            <img src="imagens/usuario.png" alt="" class="img-label">
                            </label>
                            <input type="text" name="username" id="username" required>
                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Insira o nome que aparecerá em suas postagens e em seu perfil"><i class="bi bi-question-circle"></i></span>
                        </div>
                        <div class="just-label"><label class="mt-3" for="email">E-mail:</label></div>
                        <div class="input-box">
                            <label for="email">
                            <img src="imagens/email.png" alt="" class="img-label">
                            </label>
                            <input type="email" name="email" id="email" required>
                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Insira seu e-mail"><i class="bi bi-question-circle"></i></span>
                        </div>
                        <div class="just-label"><label class="mt-3" for="password">Senha:</label></div>
                        <div class="input-box">
                            <label for="password">
                            <img src="imagens/padlock.png" alt="" class="img-label">
                            </label>
                            <input type="password" name="password" id="password" required>
                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Crie uma senha com no mínimo 6 caracteres"><i class="bi bi-question-circle"></i></span>
                        </div>
                        <span id="invalid_msg" style="color: red; font-size: 14px;"><?=$invalid_msg;?></span>
                        <button type="submit" class="button mt-4 mb-1">
                            Cadastrar
                        </button>
                    </form>
                    <p class="mb-2 center">ou</p>
                    <button class="button mb-3" id="google" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                            <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                            <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                            <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                            <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                        </svg>
                        Continuar com Google
                    </button>
                    <p>Já tem uma conta? <a href="login.php" id="link-cadastrar">Entrar</a></p>
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