<?php use mvc\routing\routingClass as routing ?>

    <?php mvc\view\viewClass::includePartial('partials/menu.html') ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('http://localhost/SohoFramework/web/img/about-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="page-heading">
              <h1>About Me</h1>
              <hr class="small">
              <span class="subheading">This is what I do.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-6">
            <form class="form-signin" role="form" action="<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'login') ?>" method="POST">
              <h2 class="form-signin-heading">Identificación</h2>
              <label for="inputUser" class="sr-only">Email address</label>
              <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Usuario" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="true" name="chkRememberMe"> Recordar me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
              <?php if (session::getInstance()->hasError() or session::getInstance()->hasInformation() or session::getInstance()->hasSuccess() or session::getInstance()->hasWarning()): ?>
                <?php view::includeHandlerMessage() ?>
              <?php endif ?>
            </form>
        </div>
        <div class="col-md-3">
          
        </div>
      </div>
    </div>

    <hr>
    <?php mvc\view\viewClass::includePartial('partials/footer.html') ?>
  
