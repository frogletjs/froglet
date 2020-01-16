<?php

namespace Drupal\froglet\Tools;

use Drupal\froglet\Froglet;

/**
 * Provides base utility functions for Froglet theme.
 */
abstract class FrogletTools {

  /**
   * Return the theme path relative to the Drupal root.
   *
   * @return string
   *   The theme path.
   */
  public static function getThemePath() {
    return drupal_get_path('theme', Froglet::THEME_NAME);
  }

  /**
   * Return the theme's name.
   *
   * @return string
   *   The theme's name.
   */
  public static function getThemeName() {
    return Froglet::THEME_NAME;
  }

}
