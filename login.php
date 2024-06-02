<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Medicos</title>
    <link href="https://db.onlinewebfonts.com/c/628d8334f66234c9480d472f2d7d911a?family=FilsonPro-Regular" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="assets/js/validacao.js"></script>
</head>
<body>
<div class="form-container">
	<p class="title">Login</p>
	<form class="form">
		<div class="input-group">
			<label for="username">Usuario:</label>
			<input type="text" name="username" id="username" placeholder="">
		</div>
        <br>
		<div class="input-group">
			<label for="password">Senha:</label>
			<input type="password" name="password" id="password" placeholder="">
            <br>
			<div class="forgot">
				<a rel="noopener noreferrer" href="#">Esqueceu a senha?</a>
			</div>
		</div>
        <br>
		<button class="sign">Entrar</button>
	</form>
</div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            let submit = document.querySelector('.sign');
            let forgot = document.querySelector('.forgot');

            forgot.addEventListener('click', function(event) {
                window.alert('Fale com o Suporte');
            })

            submit.addEventListener('click', function(event) {
                event.preventDefault();

                let user = document.querySelector('#username').value.toLowerCase();
                let password = document.querySelector('#password').value.toLowerCase();

                if (user === 'admin' && password === 'admin') {
                    // Salva a autenticação na sessão
                    fetch('login_process.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ authenticated: true })
                    }).then(response => {
                        if (response.ok) {
                            window.location.href = "http://localhost/projeto-final-main/dados.php";
                        } else {
                            window.alert('Falha ao autenticar. Tente novamente.');
                        }
                    });
                } else {
                    window.alert('Usuário ou senha Incorreto!');
                    document.querySelector('#username').value = '';
                    document.querySelector('#password').value = '';
                }
            });
        });
</script>