<?php
/**
 * @file
 * recent_feeds_feature.features.inc
 */

/**
 * Implements hook_views_api().
 */
function recent_feeds_feature_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}
