<?php

namespace Drupal\moduloprueba\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Despliegue del bloque Prueba.
 *
 * @Block(
 *   id = "prueba_block",
 *   admin_label = @Translation("Bloque Prueba"),
 *   category = @Translation("Custom"),
 * )
 */
class PruebaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'prueba_block',
      '#markup' => $this->t('Bloque de prueba'),
      '#test_var' => $this->t('Test Value'),
    ];
  }

}