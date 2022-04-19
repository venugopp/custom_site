<?php

namespace Drupal\sample\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "sample_hello_block",
 *   admin_label = @Translation("Sample: Hello block"),
 *   category = @Translation("Sample: Hello World"),
 * )
 */
class SampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('SAMPLE - Hello, World!'),
    ];
  }

}