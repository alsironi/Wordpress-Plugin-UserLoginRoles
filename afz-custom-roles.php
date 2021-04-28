<?php
/**
* Plugin Name: Custom User Roles
* Description: Add custom user roles.
* Version: 1.0.2
* Author: Álvaro Franz
* GitHub Plugin URI: https://github.com/alvarofranz/afz-custom-roles
**/

defined('ABSPATH') || exit;

// Plugin Activation
function afz_custom_roles_activation(){

    // Set default option values
    do_action( 'afz_custom_roles_setup_action' );
}
register_activation_hook( __FILE__, 'afz_custom_roles_activation' );

// Set custom roles
function afz_custom_roles_setup_function(){

    add_role( 'bar', 'Bar', array(
        'read' => true,
    ) );

    add_role( 'pub', 'Pub', array(
        'read' => true,
    ) );

    add_role( 'restaurant', 'Restaurant', array(
        'read' => true,
    ) );

    add_role( 'client', 'Client', array(
        'read' => true,
    ) );

}
add_action( 'afz_custom_roles_setup_action', 'afz_custom_roles_setup_function' );

// Removeroles on deactivation
function afz_custom_roles_deactivation(){

    remove_role( 'bar' );
    remove_role( 'pub' );
    remove_role( 'restaurant' );
    remove_role( 'client' );

}
register_deactivation_hook( __FILE__, 'afz_custom_roles_deactivation' );