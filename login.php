<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="shortcut icon" href="midias/favicon.png" type="image/x-icon">
    <style>
        body{
            background-color: #3A7D44;
            font-family: Circe, sans-serif;
        }
        /* div imagem */
        .div-img{
            height: 100vh;
            width: 50%;
            background-color: #3A7D44;
            flex-direction: column;
        }
        #titulo-img{
            color: #F4F4F4;
            text-shadow: 2px 2px #7ac143;
            font-size: 48px;
            margin-top: 6%;
            margin-bottom: 2%;
            text-align: center;
        }
        #img-login{
            width: 72%;
        }
        #logo{
            width: 40%;
        }

        /* div  formulário*/
        .div-form{
            background-color: #F4F4F4;
            width: 50%;
            height: 100vh;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form{
            flex-direction: column;
            width: 100%;
        }
        #titulo-form{
            text-shadow: 2px 2px rgb(5, 68, 15, 0.5);
            font-size: 48px;
            margin-top: 6%;
            margin-bottom: 2%;
            text-align: center;
        }
        .button{
            border: 2px solid #7ac143;
        }
        .button::before{
            background-color: #7ac143;
        }
        #google:before{
            width: 90px;
        }
        .button:hover{
            color: #f4f4f4;
        }
        svg{
            width: 24px;
            margin-right: 8px;
        }
        .input-box{
            background-color: white;
            border-radius: 10px;
            padding: 6px 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
            width: 80%;
        }
        input, input:focus{
            outline: 0;
            border: none;
            width: 100%;
            padding: 2px 5px;
        }
        .just-label{
            display: flex;
            justify-content: left;
            width: 80%;
        }
        .img-label{
            width: 18px;
        }
        #link-cadastrar, #link-sem-login{
            text-decoration: none;
            color: #7ac143;
            font-weight: bold;
        }
        #link-cadastrar:hover, #link-sem-login:hover{
            text-decoration: underline;
        }
        /* Media querys */
        @media screen and (max-width: 768px) {
            .div-form{
                width: 100%;
            }
        }
        @media screen and (min-width: 765px) and (max-width: 980px){
            #titulo-img{
                font-size: 36px;
                margin-top: 10%;
            }
            #img-login{
                width: 85%;
            }
            #logo{
                width: 45%;
            }
        }
        @media screen and (max-height: 512px){
            .div-img{
                height: 100%;
            }
            .div-form{
                height: 100%;
            }
        }
    </style>
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
                <h1 id="titulo-form">LOGIN</h1>
                <form action="" method="post" class="center my-3">
                    <button class="button" id="google" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                            <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                            <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                            <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                            <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                        </svg>
                        Continuar com Google
                    </button>

                    <p class="my-2 center">ou</p>

                    <div class="just-label"><label for="email_username">Email / nome de usuário:</label></div>
                    <div class="input-box">
                        <label for="email_username">
                        <img src="imagens/email.png" alt="" class="img-label">
                        </label>
                        <input type="text" name="email_username" id="email_username" required>
                        <span data-bs-toggle="tooltip" data-bs-placement="right" title="Insira o nome qua aparece em sua conta utilizando o caractere @ ou use o email utilizado em seu cadastro"><i class="bi bi-question-circle"></i></span>
                    </div>

                    <div class="just-label"><label class="mt-3" for="password">Senha:</label></div>
                    <div class="input-box">
                        <label for="password">
                        <img src="imagens/padlock.png" alt="" class="img-label">
                        </label>
                        <input type="password" name="password" id="password" required>
                        <span data-bs-toggle="tooltip" data-bs-placement="right" title="Insira a senha utilizada em seu cadastro"><i class="bi bi-question-circle"></i></span>
                    </div>

                    <button type="submit" class="button my-4">
                        Entrar
                    </button>
                </form>

                <p>Não tem uma conta? <a href="cadastroPage.php" id="link-cadastrar">Cadastre-se</a></p>

                <p class="mt-2"><a href="index.php" id="link-sem-login">Continuar sem login</a></p>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Utilizado para habilitar as tooltips-->
    <script> 
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>