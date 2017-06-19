<?php
/**
 * Plugin name: Test
 * Description: Fake plugin to test codacy/codeclimate coding standards
 * Version: 1.0
 *
 */
require_once __DIR__ . '/classes/class-test-plugin.php';


register_activation_hook( __FILE__, [ Test_Plugin::class, 'activate_plugin' ] );
register_deactivation_hook( __FILE__, [ Test_Plugin::class, 'deactivate_plugin' ] );

$test_plugin = new Test_Plugin();

