<?php
class Controller
{
  protected $viewsPath;

  public function __construct() {
    $this->viewsPath = rtrim(APP_DIR, '/') . '/views/';
  }

  // Load any class
  protected function load($className) {
    if (!class_exists($className)) {
      throw new Exception("$className: class is not defined");
    }

    if (!isset($this->$className) || !is_a($this->$className, $className, true)) {
      $this->$className = new $className();
    }
  }

  // JSON response
  protected function response($data, $http_code = 200) {
  	header('Content-Type: application/json');
  	http_response_code($http_code);
  	echo json_encode($data, JSON_PRETTY_PRINT);
  }

  // Render HTML view
  protected function view($path, $data = []) {
    ob_start();
    extract($data);
    if (!strrchr(basename($path), '.')) $path.= '.php';
    include $this->viewsPath . '/' . ltrim($path, '/');
    ob_end_flush();
  }
}
