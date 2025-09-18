<?php

namespace Drupal\curso_module\Controller;

use \Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Symfony\Component\HttpFoundation\Response;

class CursoController  extends  ControllerBase{
  public function home($pagina) {
    return [
      #'#plain_text' => $this->t('Hola este es mi primer controlador del curso con plain text'),
      '#markup' => $this->t('Hola este es mi primer controlador del curso con markup::'.$pagina),
    ];
  }

  public function homeDinamico(NodeInterface $node) {
    return [
      '#markup' => $this->t('Hola este es mi primer controlador con node dinamico '.$node->label()),
    ];
  }

  public function homeManual($node) {
    return [
      '#theme' => 'curso_plantilla',
      '#etiqueta' => 'Curso de Drupal 9',
      '#tipo' => 'Pagina basica',
    ];
  }

  public function homeDinamicoDos(NodeInterface $node) {
    return [
      '#theme' => 'curso_plantilla',
      '#etiqueta' => $node->label(),
      '#tipo' => $node->bundle(),
    ];
  }
}


