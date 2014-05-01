<?php
/**
 * @file
 *
 * Page callbacks for Twitter Post module.
 */

/**
 * Settings form callback
 */
function twitter_post_admin_settings($form, &$form_state) {
  $form['twitter_post_types'] = array(
    '#title' => t('Node types'),
    '#type' => 'checkboxes',
    '#description' => t('Choose which node types should support posting to Twitter.'),
    '#options' => node_type_get_names(),
    '#default_value' => variable_get('twitter_post_types', NULL),
  );

// borrowed from
// https://api.drupal.org/api/drupal/modules%21taxonomy%21taxonomy.module/function/taxonomy_get_vocabularies/7

  $vocabulary = taxonomy_get_vocabularies();
  $vocab_array = array('0' => '(do not add hashtags)');

  foreach ($vocabulary as $item)
    $vocab_array[$item->vid] = $item->name;

  $form['twitter_post_vocabs'] = array(
    '#title' => t('Vocabulary name'),
    '#type' => 'select',
    '#description' => t('Choose which vocabulary\'s tagged terms should be included as hashtags when posting to Twitter.'),
    '#options' => $vocab_array,
    '#default_value' => variable_get('twitter_post_vocabs', 0),
  );

  $form['twitter_post_default_format'] = array(
    '#type' => 'textfield',
    '#title' => t('Default format string'),
    '#maxlength' => 140,
    '#description' => t('The given text will be used as a template for posting to Twitter.com. ' .
                        'The following token replacements are available: !url, !url-alias, !tinyurl, !title, !user, and !hashtags.'),
    '#default_value' => variable_get('twitter_post_default_format', 'New post: !title !tinyurl !hashtags'),
  );

  $form['twitter_post_default_value'] = array(
    '#type' => 'checkbox',
    '#description' => t('When active, tweets will be automatically published.'),
    '#title' => t('Post to twitter by default'),
    '#default_value' => variable_get('twitter_post_default_value', 0),
  );

  return system_settings_form($form);
}

