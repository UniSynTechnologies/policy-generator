<?php
/**
 * @package UnisynPolicyGenerator
 */
/*
Plugin Name: UniSyn Policy Generator
Plugin URI: https://github.com/UniSynTechnologies/policy-generator/tree/master
Description: This is a plugin that generates fast GDPR-compliant privacy policies for your company website or app.
Version: 1.0.0
Author: UniSyn Technologies
Author URI: https://www.unisyntechnologies.com/
License: The MIT License (MIT)
Text Domain: unisyn-policy-generator
 */

if (!defined('ABSPATH')) {
    die;
}

// Shortcode to output needed markup

add_shortcode( 'unisyn_policy_generator', 'unisyn_policy_generator_show_generator' );
function unisyn_policy_generator_show_generator() {
    echo '
    <div ng-app="policyGenerator" ng-cloak>
        <privacy-policy-generator></privacy-policy-generator>
    </div>';
}

add_action( 'wp_enqueue_scripts', 'unisyn_policy_generator_enqueue_scripts' );
function unisyn_policy_generator_enqueue_scripts() {

// Add angular modules and jQuery

    echo '
    <script>
        var unisynPolicyGenerator_plugin_dir_url = "' . plugin_dir_url( __FILE__ ) . '";
    </script>';

    wp_enqueue_script( 'jQuery-3.3.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );

    wp_enqueue_script( 'angularjs-1.6.4', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js' );

    wp_enqueue_script( 'angular-sanitize-1.6.4', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js' );

    wp_enqueue_script( 'angular-animate-1.6.4', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.min.js' );

    wp_enqueue_script( 'angular-aria-1.6.4', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-aria.min.js' );

    wp_enqueue_script( 'angular-messages-1.6.4', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-messages.min.js' );

    wp_enqueue_script( 'angular-ui-mask', plugin_dir_url( __FILE__ ) . 'src/modules/angular-ui-mask/mask.min.js' );

// Add angular 1.1.10

    wp_enqueue_script( 'angular-material-1.1.10-script', plugin_dir_url( __FILE__ ) . 'src/app/modules/angular-material/1.1.10/angular-material.min.js' );

    wp_enqueue_style( 'angular-material-1.1.10-style', plugin_dir_url( __FILE__ ) . 'src/modules/angular-material/1.1.10/angular-material.min.css' );

// Add JavaScript

    wp_enqueue_script( 'unisyn-policy-generator.min', plugin_dir_url( __FILE__ ) . '/dist/unisyn-policy-generator.min.js' );

// Add app styles

    wp_enqueue_style( 'unisyn-policy-generator-style', plugin_dir_url( __FILE__ ) . '/src/css/app.css' );

    wp_enqueue_style( 'angular-material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );

}



