<?php
namespace Drupal\escuela\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DrupalController extends ControllerBase {

  /** @var \Drupal\Core\Messenger\MessengerInterface $messenger **/
  protected $messenger;

  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger')
    );
  }

  public function escuela() {
    //return new Response('Este es el controlador de escuela');
    $build = [];

    /**
     * @var \Drupal\Core\Messenger\MessengerInterface $messenger
     */
    //De la manera incorrecta
    /* $messenger = Drupal::service('messenger');*/
    //$messenger->addMessage($this->t('Este es un mensaje de prueba desde el controlador'));


    $this->messenger->addMessage($this->t('Este es un mensaje de prueba desde el controlador'));
    $this->messenger->addError($this->t('Mensaje de algún error'));

    $build['primero'] = [
      '#markup' => $this->t('<p>Hola este es mi primer controlador</p>'),
    ];

    $build['segundo'] = [
      '#markup' => $this->t('<div>Este es un segundo texto para el controlador</div>'),
    ];

    /* return [
      '#markup' => $this->t('Este es el controlador de escuela'),
    ]; */

    return $build;
  }
}
