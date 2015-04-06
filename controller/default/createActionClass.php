
<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;
use hook\log\logHookClass as bitacora;

/**
 * Description of ejemploClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $usuario = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true));
        $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
        echo 'usuario';
        if (strlen($usuario) > usuarioTableClass::USER_LENGTH) {
          throw new PDOException(i18n::__(00001, null, 'errors', array(':longitud' => usuarioTableClass::USER_LENGTH)), 00001);
        }

        $data = array(
            usuarioTableClass::USER => $usuario,
            usuarioTableClass::PASSWORD => md5($password)
        );
        usuarioTableClass::insert($data);
//        recuerde que debo poner la palabra insertar en el diccionario y esto es para bitacora para create  
        bitacora::register('insertar', usuarioTableClass::getNameTable());
        routing::getInstance()->redirect('default', 'insert');
      } else {
        routing::getInstance()->redirect('default', 'insert');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
