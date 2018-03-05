<?php

namespace Drupal\th_stripe_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class ThStripeDemoController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
