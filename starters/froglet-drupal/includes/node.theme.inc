<?php

/**
 * @file
 * Functions to support theming node entities in the Froglet theme.
 */

/**
 * Implements hook_preprocess_node().
 */
function froglet_preprocess_node(array &$variables) {
    // Default to turning off byline/submitted.
    //$variables['display_submitted'] = FALSE;
}