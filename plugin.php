<?php
/*
Plugin Name: Mixed Number Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/mixed-number-calculator/
Description: Mixed number calculator is designed to help you add, subtract, multiply, and divide mixed numbers. Mixed Fractions Calculator is created for performing mathematical operations on mixed numbers.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_mixed_number_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_mixed_number_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/mixed-number-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Mixed Number Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_mixed_number_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_mixed_number_calculator', 'display_ci_mixed_number_calculator' );