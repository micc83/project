<?php

namespace MyApp\Components;

class Router {

  var $klein;

  function __construct () {
    $this->klein = new \Klein\Klein();
  }

  function add ($method, $url, $param) {

    if (is_array($param)){
      $controllerName = '\MyApp\Controllers\\' . $param[0];
      $controller = new $controllerName;
      $controllerMethod = $param[1];
      $param = array($controller, $controllerMethod);
    }

    $this->klein->respond($method, $url, $param);
  }

  function handle_errors () {
    $this->klein->onHttpError(function ($code, $router) {
      switch ($code) {
        case 404:
          $router->response()->body(
            'Y U so lost?!'
          );
          break;
        case 405:
          $router->response()->body(
            'You can\'t do that!'
          );
          break;
        default:
          $router->response()->body(
            'Oh no, a bad error happened that caused a '. $code
          );
      }
    });
  }

  function start() {
    $this->handle_errors();
    $this->klein->dispatch();

  }

}