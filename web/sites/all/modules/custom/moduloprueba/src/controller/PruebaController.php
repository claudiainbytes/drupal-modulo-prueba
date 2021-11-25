<?php

namespace Drupal\moduloprueba\Controller;
use Drupal\Core\Controller\ControllerBase;
 
class PruebaController extends ControllerBase {
     
  public function index() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hola mundo !!'),
    );
  }
   
}
 
?>
