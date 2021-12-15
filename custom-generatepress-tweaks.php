<?php

/*
  Plugin Name: Custom GeneratePress Tweaks
  Description: My tweaks for the generatepress theme
  Version: 1.0.1
  Author: Matt Kiggen
  Author URI: https://github.com/mattkiggen/
*/

if (!defined('ABSPATH')) exit;

class CustomGeneratePressTweaks {
  function __construct() {
    add_action('init', [$this, 'onInit']);
  }

  function onInit() {
    add_filter('generate_post_author_output', [$this, 'changeAuthorLink']);
    add_filter('generate_post_date_output', [$this, 'changeDateOutput']);
  }

  function changeAuthorLink() {
    return 'by <a href="https://dotmatt.com">Matt</a>';
  }

  function changeDateOutput($output) {
    return 'Published on ' . $output;
  }
}

$customGeneratePressTweaks = new CustomGeneratePressTweaks();