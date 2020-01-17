<?php

namespace Drupal\froglet_theme_utilities\TwigExtension;

use Drupal\Core\Template\Attribute;

/**
 * {@inheritdoc}
 */
class FrogletThemeUtilitiesTwig extends \Twig_Extension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'froglet_theme.twig_extension';
  }

  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('froglet_attributes', [$this, 'attributes'], ['is_safe' => ['html']]),
    ];
  }

  /**
   * Filter to combine simple html attributes.
   *
   * @param array|string $attributes
   *   A collection of html safe items to concat into attributes string.
   *
   * @return string
   *   Return a string of renderable attributes for theme.
   */
  public function attributes($attributes = []) {
    return new Attribute($attributes);
  }

}
