<?php

namespace Drupal\curso_config\Controller;

use Drupal\Core\Controller\ControllerBase;

class ConfigController extends ControllerBase {

  public function settings() {
    $config = $this->config('curso_config.nuestra_configuracion');
    dd($config);
    return [
      '#markup' => 'Controlador del modulo de curso_config'
    ];
  }
}
