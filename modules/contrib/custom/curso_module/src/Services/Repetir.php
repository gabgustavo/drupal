<?php
namespace Drupal\curso_module\Services;

use Drupal\Core\Entity\EntityTypeManager;
use Drupal\Core\Messenger\MessengerInterface;

class Repetir {

  /**
  * @var MessengerInterface
  */
  private $messenger;

  /**
  * @var EntityTypeManager
  */
  private $entityTypeManager;

  public function __construct(
    MessengerInterface $messenger,
    EntityTypeManager $entityTypeManager
    ) {
    $this->messenger = $messenger;
    $this->entityTypeManager = $entityTypeManager;

  }

  public function repetir($palabra, $cantidad = 50) {
    $result = str_repeat($palabra, $cantidad);
    $this->messenger->addWarning('Este es un mensaje de prueba desde el servicio repetir');

    return $result;
  }
}
