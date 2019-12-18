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
            <div class="logo left"><a href="">石塚信義 @WebDeveloper</a>
              
            </div>  <!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Contato</a></li>
                </ul>
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!--center-->       
    </header>
    <?php 

            if (file_exists('pages/'.$url.'.php')) {
                include('pages/'.$url.'.php');
            }else{
                //Podemos fazer o que quisermos, pois a página não existe.
                if ($url != 'depoimentos' && $url != 'servicos') {
                    $pagina404 = true;
                    include('pages/404.php');
                }else{
                    include('pages/home.php');
                }
            }

    ?>
   
    <footer>
        <div class="center">
            <p>Nobu-WebDeveloper  Todos os direitos reservados.</p>
        </div><!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/main.js"></script>
</body>

</html>