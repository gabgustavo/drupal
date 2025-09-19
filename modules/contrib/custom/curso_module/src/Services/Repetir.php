<?php
namespace Drupal\curso_module\Services;

class Repetir {
  public function repetir($palabra, $cantidad = 50) {
    return str_repeat($palabra, $cantidad);
  }
}
