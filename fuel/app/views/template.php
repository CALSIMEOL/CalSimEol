<!DOCTYPE html> <!--  -->
<html>
    <head>
        <meta charset="utf-8">
        <title>CALSIMEOL &bull; <?php echo $title ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.ico">
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
        
        <!-- Bootstrap.css -->
        <?php echo Asset::css('bootstrap.min.css'); ?>
        
        <!-- personal CSS -->
        <?php echo Asset::css('personal.css'); ?>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <?php echo Asset::js('bootstrap.min.js'); ?>
        <?php echo Asset::js('highcharts.js'); ?>
        <?php echo Asset::js('modules/exporting.js'); ?>
    </head>
    <body>
        
        <noscript><br> &nbsp; 
        <b style="color: #ff0000;background-color: rgba(255, 255, 255, 0.8);border-radius: 4px;"> &nbsp; 
            <span class="glyphicon glyphicon-alert"></span> &nbsp;
            Ce site nécessite JavaScript pour fonctionner, veuillez l'activer. &nbsp;
            <span class="glyphicon glyphicon-alert"></span> &nbsp; </b> &nbsp; 
        </noscript>
        
        <!-- navigation bar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a href="<?php echo Uri::base() ?>">
                        <?php echo Asset::img('logo CALSIMEOL blanc.png', array('id' => 'logoCALSIMEOL')) ?>
                    </a> 
                </div>
                
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo Uri::create('home/index') ?>">Accueil</a></li>
                        <li><a href="<?php echo Uri::create('simulation/choose') ?>">Simulation</a></li>
                        <li><a href="<?php echo Uri::create('place') ?>">Liste sites</a></li>
                        <li><a href="<?php echo Uri::create('turbine') ?>">Liste éoliennes</a></li>
                        <li><a href="<?php echo Uri::create('home/about') ?>">A propos</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
                
              </div>
        </nav>
        <div class="container" style="padding-top:40px">
<?php echo $content ?>

                <!-- licence + school logo -->
                <footer class="modal-footer">
                    <div  style="margin-bottom: 10px;"><a href="http://www.ece.fr/" target="_blank"><?php echo Asset::img('ECE_COUL_CMJN copie.png', array('id' => 'logoECE', 'class' => 'img-responsive')) ?></a></div>
                    <div class='text-center'>
                        <span id="copyright">
                            &nbsp;Le code source de ce site, ainsi que les données utilisées&nbsp;<br>&nbsp;et les résultats, sont sous licence CC-NY-NC 3.0.&nbsp;<br>
                            <a href="http://creativecommons.org/licenses/by-nc/3.0/" target="_blank"><?php echo Asset::img('by-nc.eu_petit.png', array('id' => 'logoECE', 'class' => 'img-responsive')) ?></a>
                        </span>
                    </div>
                </footer>
        </div>
    </body>
</html>
