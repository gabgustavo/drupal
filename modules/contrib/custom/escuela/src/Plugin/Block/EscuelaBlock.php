<?php
namespace Drupal\escuela\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @block(id = "escuela_block",
 *  admin_label = @Translation("Escuela Block")
 * )
 */
class EscuelaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Hola este es mi primer bloque'),
    ];
  }

}
