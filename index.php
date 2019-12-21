<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="desenvolvimento-web, Websites, Blog, Redes-Sociais, portifolio, desenvolvimento-php,
        desenvolvimento-java">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Nobuyoshi Ishizuka Developer Web Aplications</title>
        <meta name="author" content="Nobuyoshi Ishizuka">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap');
         </style>
         <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/all.css">
         <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>style/style.css">
    </head>

<body>
    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;

            case 'sevicos':
                    echo '<target target="servicos" />';
                    break;
        }

    ?>
  	<header>
		<div class="center">
			<div class="logo left"><a href="/">石塚信義@Web-Developer</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div><!--center-->
    </header>
    
    <div class="container-principal">
	<?php

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			if($url != 'depoimentos' && $url != 'servicos'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}

	?>

	</div><!--container-principal-->

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/main.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

	<?php
		if($url == 'contato'){
	?>
	<?php } ?>
	<!--<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>-->
	<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>

</html>