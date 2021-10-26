<?php

/*
  Plugin Name: Custom GeneratePress Tweaks
  Description: My tweaks for the generatepress theme
  Version: 1.0.0
  Author: Matt Kiggen
  Author URI: https://github.com/mattkiggen/
*/

if (!defined('ABSPATH')) exit;

class CustomGeneratePressTweaks {
  function __construct() {
    add_action('init', [$this, 'onInit']);
  }

  function onInit() {
    add_filter('generate_typography_customize_list', [$this, 'addGoogleFonts']);
  }

  function addGoogleFonts($fonts) {
    $fonts['dm_sans'] = [
      'name' => 'DM Sans',
      'variants' => ['400', '700'],
      'category' => 'sans'
    ];

    $fonts['inter'] = [
      'name' => 'Inter',
      'variants' => ['400', '700'],
      'category' => 'sans'
    ];
    return $fonts;
  }
}

$customGeneratePressTweaks = new CustomGeneratePressTweaks();