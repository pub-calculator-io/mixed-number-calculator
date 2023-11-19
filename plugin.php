<?php
/*
Plugin Name: Mixed Number Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/mixed-number-calculator/
Description: Mixed number calculator is designed to help you add, subtract, multiply, and divide mixed numbers. Mixed Fractions Calculator is created for performing mathematical operations on mixed numbers.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_mixed_number_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Mixed Number Calculator by Calculator.iO";

function display_ci_mixed_number_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Mixed Number Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_mixed_number_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_mixed_number_calculator', 'display_ci_mixed_number_calculator' );