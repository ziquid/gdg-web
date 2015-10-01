<?php

/**/
function gdg_preprocess_html(&$variables) {

// add bg image if node has one
  if (arg(0) == 'node') {

    $node = node_load(arg(1));

    if (isset($node->field_background_image[LANGUAGE_NONE][0]['uri'])) {

      $image_uri = image_style_url('1600px_wide',
        $node->field_background_image[LANGUAGE_NONE][0]['uri']
      );

      drupal_add_css('
        body {
          background: url("' . $image_uri . '") center center fixed;
          -moz-background-size: cover;
          -webkit-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }', array(
          'group' => CSS_THEME,
          'type' => 'inline',
          'weight' => -10,
          'media' => 'screen',
        )
      );

      $variables['styles'] = drupal_get_css();

    }

  }

}
