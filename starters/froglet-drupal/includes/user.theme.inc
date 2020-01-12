<?php

/**
 * @file
 * Functions to support theming users in the Froglet theme.
 */

/**
 * Implements hook_preprocess_user().
 */
function froglet_preprocess_user(&$variables) {
    unset($variables['content']['member_for']);
}
