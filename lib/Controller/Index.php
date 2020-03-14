<?php
namespace MyApp\Controller;

class Index extends \MyApp\Controller {
  
  public function run() {
      $animalModel = new \MyApp\Model\Animals();
      $this->setVal('animals', $animalModel->findAll());
      
  }
}