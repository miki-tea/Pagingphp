<?php

namespace MyApp;

class Controller {

  private $_errors;
  private $_values;


  public function __construct() {
    $this->_errors = new \stdClass();
    $this->_values = new \stdClass();
  }
  // Set/Get error
  protected function setErr($key, $error){
    $this->_errors->$key = $error;
  }
  public function getErr($key){
    return isset($this->_errors->$key) ? $this->_errors->$key : '';
  }
  // Set/Get Value
  protected function setVal($key, $val){
    $this->_values->$key = $val;
  }
  public function getVal(){
    return $this->_values;
  }
}