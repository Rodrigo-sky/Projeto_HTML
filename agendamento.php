<!DOCTYPE html>
<html lang="br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/styles/css/styles.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<title>Pet piscar</title>
	<script>
        $(function() {
			$('#inserir').click(function() {
				var nomeTutor = $('#nomeTutor').val();
                var emailContato = $('#emailContato').val();
                var dataConsulta = $('#dataConsulta').val();
                var nomeExame = $('#nomeExame').val();
                var descricaoSintomas = $('#descricaoSintomas').val();
                $.post(
					'inserir_agendamento.php', 
                    {
                    	action: "inserir", 
                        nomeTutor: nomeTutor, 
                        emailContato: emailContato, 
                        dataConsulta: dataConsulta,
                        nomeExame: nomeExame,
                        descricaoSintomas: descricaoSintomas
                    },
                    function(res) {
                    	$.post('listar_agendamento.php', {action: "listar"}, function(res) {
                        	location.reload();
                        });
                    }
                )
            });
		});

		$(function () {

			$("#dataConsulta").datepicker({
				dateFormat: "yy-mm-dd",
				minDate:0,
				maxDate: "+1M",
			});
		});

	</script>
</head>

<body>
	<header>
		<div class="container" id="plantao">
			<strong>Agendamento</strong> <a href="tel:+553199999-9999"><img src="assets/img/tel.svg" alt="Logo"
					width="25" height="25"><span>Tel: (31) 99999-9999</span></a>
		</div>
		<nav class="navbar navbar-expand-lg bg-success">
			<div class="container">
				<a class="navbar-brand" href="#"> <img src="assets/img/dog-paw.svg" alt="Logo"
						class="d-inline-block align-text-top"> Pet Life</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
					aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item"> <a class="nav-link active" aria-current="page" href="index.html">Home</a> </li>
						<li class="nav-item"> <a class="nav-link" href="quem_somos.html">Quem Somos</a> </li>
						<li class="nav-item"> <a class="nav-link" href="agendamento.php">Agendamento</a> </li>
						<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								Serviços
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Pronto Atendimento</a></li>
								<li><a class="dropdown-item" href="#">Hotelaria</a></li>
								<li><a class="dropdown-item" href="#">nomeExames</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<div class="container">
			
            <h2>Agendamento</h2>
			<div class="row">
				<div class="formAgen">Nome Tutor: <input type="text" id="nomeTutor"></div>
				<div class="formAgen">Contato e-mail: <input type="text" id="emailContato"></div>
			</div>
            <div class="row">
				<div class="formAgen">Data da Consulta: <input type="text" id="dataConsulta"></div>
				<div class="formAgen">nomeExame: <input type="text" id="nomeExame"></div>
			</div>
			<br>
			<div>descricaoSintomas <br>
			<input type="text" id="descricaoSintomas">
			</div>
            <br>
            
            <button id="inserir">Inserir</button>
            <br><br><br>
			<?php include 'listar_agendamento.php' ?>
		</div>
	</main>
	<footer>
		<p>Desenvolvido por Rodrigo Teixeira e Guilherme Aguilar com finalidade de conclusão de curso</p>
	</footer>
</body>
<script src="assets/styles/script/bootstrap.bundle.min.js"></script>

</html>
