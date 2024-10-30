<?php

class LoremExpert_Main {

    /**
     * Option name, on which we'll store if the plugin updated to v2
     */
    const PLUGIN_UPDATED_OPTION_VTWO = 'lorem_expert_updated_vtwo';

    /**
     * Option name, on which we'll store the generated wp token
     */
    const TOKEN_OPTION = 'lorem_expert_token';

    public static function init() {
    }

    public static function action_admin_init() {
    }

    public static function init_admin_hooks() {
    }

    /**
     * Add Lorems js script
     */
    public static function lorem_add_script() {
    }

    /**
     * Async load scripts
     */
    public static function async_scripts( $url ) {
    }

    public static function plugin_activation() {
    }

    public static function plugin_deactivation() {
        delete_option( self::PLUGIN_UPDATED_OPTION_VTWO );
        delete_option( self::TOKEN_OPTION );
    }

}

?>
