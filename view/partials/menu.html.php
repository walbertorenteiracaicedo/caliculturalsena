<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\session\sessionClass as session ?>
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo routing::getInstance()->getUrlWeb('default', 'home') ?>">Home</a>
                    </li>
                    <li>
                        <a href= "<?php echo routing::getInstance()->getUrlWeb('default', 'about') ?>">About</a>
                    </li>
                    <li>
                        <a href= "<?php echo routing::getInstance()->getUrlWeb('default', 'sample') ?>">Sample </a>
                    </li>
                    <li>
                        <a href= "<?php echo routing::getInstance()->getUrlWeb('default', 'admin') ?>">admin </a>                        
                    </li>
                    <?php if (session::getInstance()->isUserAuthenticated() == true){ ?>
                    <li>
                        <a href= "<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>">Salir </a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <a href= "<?php echo routing::getInstance()->getUrlWeb('default', 'signin') ?>">Login </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>