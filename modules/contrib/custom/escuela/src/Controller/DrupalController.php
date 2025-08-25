<?php
namespace Drupal\escuela\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class DrupalController extends ControllerBase {

  public function escuela() {
    //return new Response('Este es el controlador de escuela');
    $build = [];

    $build['primero'] = [
      '#markup' => $this->t('Hola este es mi primer controlador'),
    ];

    $build['segundo'] = [
      '#markup' => $this->t('Este es un segundo texto para el controlador'),
    ];

    /* return [
      '#markup' => $this->t('Este es el controlador de escuela'),
    ]; */

    return $build;
  }
}