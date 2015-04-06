<?php use mvc\routing\routingClass as routing ?>


 <?php mvc\view\viewClass::includePartial('partials/menu.html') ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('http://localhost/SohoFramework/web/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Man must explore, and this is exploration at its greatest</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

     <h1>NUEVO USUARIO <?php echo $mensaje ?></h1>





     <form class="form-horizontal" role="form" method="POST" action="<?php echo routing::getInstance()->getUrlWeb('default', 'create') ?>">
    <div class="form-group">
        <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER,true) ?>" class="col-lg-2 control-label">usuario</label>
        <div class="col-lg-5">
            <input type="text" class="form-control" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER,true) ?> " name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER,true) ?>"
                   placeholder="nuevo usuario">
        </div>
    </div>
     <div class="form-group">
        <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD,true)?>" class="col-lg-2 control-label">contraceña</label>
        <div class="col-lg-5">
            <input type="password" class="form-control" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD,true) ?> " name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD,true) ?>"
                   placeholder="contraceña">
        </div>
    </div> 
       <div class="form-group">
        <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD,true) .'_1' ?>" class="col-lg-2 control-label">Confirmar contraceña</label>
        <div class="col-lg-5">
            <input type="password" class="form-control" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD,true) .'_1' ?> " name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD,true) .'_1'  ?>"
                   placeholder="confirmar contraceña">
        </div>
    </div> 
            
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-default">Entrar</button>
            </div>
        </div>
    </form>-->