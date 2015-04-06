<?php

use mvc\model\modelClass as model;
use mvc\config\configClass as config;

/**
 * Description of bitacoraTableClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class bitacoraTableClass extends bitacoraBaseTableClass {
    
//    public static function verifyUser($usuario, $password) {
//    try {
//      $sql = 'SELECT ' . credencialTableClass::getNameField(credencialTableClass::NOMBRE) . ' as credencial,
//	' . bitacoraTableClass::getNameField(bitacoraTableClass::ID) . ' as id,
//	' . bitacoraTableClass::getNameField(bitacoraTableClass::USUARIO_ID) . ' as usuario_id
//    FROM ' . bitacoraTableClass::getNameTable() . ' LEFT JOIN ' . usuarioTableClass::getNameTable() . ' ON ' . bitacoraTableClass::getNameField(bitacoraTableClass::ID) . ' = ' . usuarioTableClass::getNameField(usuarioTableClass::USUARIO_ID) . '
//    LEFT JOIN ' . credencialTableClass::getNameTable() . ' ON ' . credencialTableClass::getNameField(credencialTableClass::ID) . ' = ' . usuarioTableClass::getNameField(usuarioTableClass::CREDENCIAL_ID) . '
//    WHERE ' . usuarioTableClass::getNameField(usuarioTableClass::ACTIVED) . ' = :actived
//    AND ' . usuarioTableClass::getNameField(usuarioTableClass::DELETED_AT) . ' IS NULL
//    AND ' . credencialTableClass::getNameField(credencialTableClass::DELETED_AT) . ' IS NULL
//    AND ' . usuarioTableClass::getNameField(usuarioTableClass::USER) . ' = :user
//    AND ' . usuarioTableClass::getNameField(usuarioTableClass::PASSWORD) . ' = :pass';
//      $params = array(
//          ':user' => $usuario,
//          ':pass' => md5($password),
//          ':actived' => ((config::getDbDriver() === 'mysql') ? 1 : 't')
//      );
//      $answer = model::getInstance()->prepare($sql);
//      $answer->execute($params);
//      $answer = $answer->fetchAll(PDO::FETCH_OBJ);
//      return (count($answer) > 0 ) ? $answer : false;
//    } catch (PDOException $exc) {
//      throw $exc;
//    }
//  }
//
//  public static function setRegisterLastLoginAt($id) {
//    try {
//      $sql = 'UPDATE ' . usuarioTableClass::getNameTable() . '
//              SET ' . usuarioTableClass::LAST_LOGIN_AT . ' = :last_login_at
//              WHERE ' . usuarioTableClass::ID . ' = :id';
//      $params = array(
//          ':id' => $id,
//          ':last_login_at' => date(config::getFormatTimestamp())
//      );
//      $answer = model::getInstance()->prepare($sql);
//      $answer->execute($params);
//      return true;
//    } catch (PDOException $exc) {
//      throw $exc;
//    }
//  }
//  
}
