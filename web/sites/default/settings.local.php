<?php
$info = json_decode(getenv('LANDO_INFO'), TRUE);

$databases['default']['default'] = [
  'database' => $info['database']['creds']['database'],
  'username' => $info['database']['creds']['user'],
  'password' => $info['database']['creds']['password'],
  'prefix' => '',
  'host' => $info['database']['internal_connection']['host'],
  'port' => $info['database']['internal_connection']['port'],
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];
// Disable all caches
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
// Php logging level
$config['system.logging']['error_level'] = 'verbose';

// Performance CSS & JS
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Disable all caches
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$cache_bins = ['bootstrap','config','data','default','discovery','dynamic_page_cache','entity','menu','migrate','render','rest','static','toolbar'];
// foreach ($cache_bins as $bin) {
//   $settings['cache']['bins'][$bin] = 'cache.backend.null';
// }

$settings['extension_discovery_scan_tests'] = TRUE;

// Local trusted host
$settings['trusted_host_patterns'] = [
  '^way-share\.lndo\.site',
];

/**
* Redis Configuration.
*/
/* $settings['redis.connection']['interface'] = 'PhpRedis';
$settings['redis.connection']['host'] = 'appcache';
$settings['cache']['default'] = 'cache.backend.redis'; */
