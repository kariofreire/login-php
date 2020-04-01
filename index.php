<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="view/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 painel-login">
				<div class="jumbotron">
					<header class="text-center">
						<h2>ENTRAR</h2>
						<hr>
					</header>
					<div>
						<div class="col-md-12">
							<label>E-mail:</label>
							<input type="email" id="user_mail" class="form-control" placeholder="Digite seu E-mail"><br>
						</div>
						<div class="col-md-12">
							<label>Senha:</label>
							<input type="password" id="user_pass" class="form-control" placeholder="Digite sua Senha"><br>
						</div>
						<div class="col-md-12">
							<button id="sendData" class="btn btn-lg btn-block btn-primary">Entrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="view/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="view/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("#sendData").click(function() {
			var user_mail = $("#user_mail").val();
			var user_pass = $("#user_pass").val();

			$.post("controller/login.php", {user_mail: user_mail, user_pass: user_pass}, function(result) {
				console.log(result);
			});
		});
	</script>
</body>
</html>