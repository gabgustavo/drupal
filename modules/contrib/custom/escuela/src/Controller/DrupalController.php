<?php
namespace Drupal\escuela\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class DrupalController extends ControllerBase {

  public function escuela() {
    return new Response('Este es el controlador de escuela');
  }
}