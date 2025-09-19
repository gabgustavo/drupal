<?php

namespace Drupal\curso_module\Controller;

use \Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Drupal;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\curso_module\Services\Repetir;

class CursoController  extends  ControllerBase {

  /**
   * @var Repetir
   */
  private $repetir;

  protected $messenger;

  public function __construct(
    Repetir $repetir,
    MessengerInterface $messenger,
  )
  {
    $this->repetir = $repetir;
    $this->messenger = $messenger;
  }

  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('curso_module.repetir'),
      $container->get('messenger'),
      $container->get('entity_type.manager'),
    );
  }

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
    //Esta implementacion no es la correcta
    //$repetir = Drupal::service('curso_module.repetir');
    $resultado = $this->repetir->repetir('Desarrollos ', 7);
    return [
      '#theme' => 'curso_plantilla',
      '#etiqueta' => $node->label(),
      '#tipo' => $resultado,
    ];
  }
}


