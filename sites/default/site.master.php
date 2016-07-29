<?php

$conf['install_profile'] = 'minimal';
$conf['master_version'] = 2;
$conf['master_modules'] = array(
  'base' => array(
    'minimal',
    'admin_menu_toolbar',
    'adminrole',
    'auto_nodetitle',
    'block_class',
    'blog',
    'ckeditor_media',
    'clone',
    'codefilter',
    'contact',
    'contextual',
    'date',
    'draggableviews',
    'entity_token',
    'entityreference',
    'features',
    'fontyourface_ui',
    'fontyourface_wysiwyg',
    'geshifield',
    'globalredirect',
    'googleanalytics',
    'imagecache_token',
    'jcarousel',
    'lightbox2',
    'link',
    'logintoboggan',
    'markdown',
    'media_internet',
    'menu',
    'metatag',
    'metatag_dc',
    'metatag_facebook',
    'metatag_google_plus',
    'metatag_opengraph',
    'metatag_twitter_cards',
    'noindex_external_links',
    'page_manager',
    'panels_node',
    'pathauto',
    'php',
    'rdf',
    'redirect',
//     'remove_ron',
    'rotating_banner',
    'statistics',
    'strongarm',
    'subpathauto',
    'taxonomy',
    'tracker',
    'transliteration',
    'twitter_post',
    'typekit_api',
    'typogrify',
    'update',
    'video_embed_field',
    'webform',
    'wysiwyg',
    'xmlsitemap',
    'xmlsitemap_engines',
    'xmlsitemap_menu',
    'xmlsitemap_node',
/*
    'adsense',
    'adsense_managed',
    'auto_nodetitle',
    'backup_migrate',
    'better_formats',
    'bootstrap',
    'ds',
    'ds_extras',
    'ds_format',
    'exif_custom',
    'feeds',
    'feeds_tamper',
    'field_group',
    'htmlpurifier',
    'job_scheduler',
    'list',
    'media_bulk_upload',
    'media_migrate_file_types',
    'multiform',
    'nice_menus',
    'number',
    'plupload',
    'publication_date',
    'swiftype_integration',
    'taxonomy_menu',
    'twitter_actions',



// GDG modules
    'basic_config',
    'content_dashboard',
    'earthquake_news',
    'feeds_article',
    'section_taxonomy',
*/
  ),

  'local' => array(
    'dblog',
    'devel',
    'diff',
//     'ds_devel',
//     'ds_ui',
//     'feeds_tamper_ui',
//     'feeds_ui',
    'field_ui',
    'stage_file_proxy',
    'views_ui',
  ),

  'dev' => array(
    'dblog',
    'devel',
    'diff',
//     'ds_devel',
//     'ds_ui',
//     'feeds_tamper_ui',
//     'feeds_ui',
    'field_ui',
    'stage_file_proxy',
    'views_ui',
  ),

  'prod' => array(),

);
$conf['master_uninstall_blacklist'] = array(
  'base' => array(
//     0 => 'ckeditor',
  ),
);
$conf['master_removable_blacklist'] = array(
  0 => 'modules/*',
);
