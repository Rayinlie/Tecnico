<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="css/estilologin.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="java/jquery/jquery-3.4.1.min.js"></script>
    <script src="java/javinha.js"></script>
    <script src="ajax/popper.min.js"></script>
    <script src="css/bootstrap/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	 <script type="text/javascript">
	 	$(".input").focus(function() {
	 		$(this).parent().addClass("focus");
	 	})
	 </script>
<div class="container-fluid">
		<div class="container">
			<div class="formBox">
				<form method="POST" action="postando.php">
						<div class="row">
							<div class="col-sm-12">
								<h1>Vamos socializar?</h1>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<div class="inputText"> Titulo do Post</div>
									<input type="text" name="titulo" class="input">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="inputBox">
									<div class="inputText">Assunto(tag)</div>
									<input type="text" name="tag" class="input">
								</div>
							</div>
						</div>

					

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Conteúdo</div>
									<textarea class="input height=200px" name="postagem"></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="Enviar" class="button rounded" value="Postar">
							</div>
						</div>
				</form>
			</div>
		</div>
    </div>
    
<?php




?>
</body>
</html>