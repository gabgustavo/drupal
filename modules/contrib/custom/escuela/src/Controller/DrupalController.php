<?php
namespace Drupal\escuela\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal;
use Drupal\Core\Database\Connection;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DrupalController extends ControllerBase {

  /** @var \Drupal\Core\Messenger\MessengerInterface $messenger **/
  protected $messenger;
  protected $connection;
  protected $dbAlias = 'gab_';

  public function __construct(MessengerInterface $messenger, Connection $connection) {
    $this->messenger = $messenger;
    $this->connection = $connection;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger'),
      $container->get('database'),
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

    $dbData = $this->dbQuery();
    //dd($dbData);


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

  private function dbQuery() {
    return $this->connection
    ->query('SELECT * FROM {users_field_data}
    WHERE uid = :uid', [':uid' => 1])
    ->fetchAll();
  }
}
