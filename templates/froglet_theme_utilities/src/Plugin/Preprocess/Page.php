<?php

namespace Drupal\froglet_theme_utilities\Plugin\Preprocess;

use Drupal\preprocess\PreprocessPluginBase;

/**
 * Provides a base page preprocessor.
 */
class FrogletPage extends PreprocessPluginBase {

  /**
   * Provides a page preprocessor.
   *
   * @TODO Update `theme_name` below before use.
   * @Preprocess(
   *   id = "theme_name.page",
   *   hook = "page"
   * )
   */
  public function preprocess(array $variables): array {
    // Customize page variables.
    return $variables;
  }

}
