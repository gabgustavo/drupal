<?php

namespace Drupal\curso_module\Controller;

use \Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Drupal;
use Drupal\Core\Config\ConfigFactory;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\curso_module\Services\Repetir;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

class CursoController  extends  ControllerBase {

  /**
   * @var Repetir
   */
  private $repetir;

  protected $messenger;
  protected $configFactory;

  public function __construct(
    Repetir $repetir,
    MessengerInterface $messenger,
    EntityTypeManagerInterface $entityTypeManager,
    ConfigFactoryInterface $configFactory,
  )
  {
    $this->repetir = $repetir;
    $this->messenger = $messenger;
    $this->entityTypeManager = $entityTypeManager;
    $this->configFactory = $configFactory;
  }

  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('curso_module.repetir'),
      $container->get('messenger'),
      $container->get('entity_type.manager'),
      $container->get('config.factory'),
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


  public function formController() {
    $form = $this->formBuilder()->getForm('Drupal\curso_module\Form\CursoForm');

    $build = [];

    $build[] = ['#markup' => '<h1>Formulario desde el controlador</h1>'];
    $build[] = $form;

    return $build;
  }


  public function configCurso() {
    /*$config = $this->config('system.site');
    $config->get('name');
    dpm($config->get('name'));

    $configFactory = \Drupal::configFactory('config.factory');
    $config2 = $configFactory->get('system.site');
    dpm($config2->get('name'));*/
    //$config = $this->configFactory->get('system.site');
    //$configEdit = $this->configFactory->getEditable('system.site');
    //dpm($configEdit);

    //$configEdit->set('slogan', 'El slogan modificado desde el controlador')
    //->save();

    return [
      '#markup' => $this->t('Ruta de configuración'),
    ];
  }

}


