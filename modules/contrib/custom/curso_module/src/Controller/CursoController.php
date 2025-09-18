<?php

namespace Drupal\curso_module\Controller;

use \Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class CursoController  extends  ControllerBase{
  public function home() {
    return [
      #'#plain_text' => $this->t('Hola este es mi primer controlador del curso con plain text'),
      '#markup' => $this->t('Hola este es mi primer controlador del curso con markup'),
    ];
  }
}


