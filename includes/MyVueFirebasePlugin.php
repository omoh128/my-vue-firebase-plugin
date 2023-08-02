<?php


namespace MyVueFirebasePlugin\Includes;

class MyVueFirebasePlugin {
    private static $instance;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        // Initialize your plugin here, e.g., setup hooks, actions, and filters
        add_action('init', array($this, 'init'));
    }

    public function init() {
        // Any initialization code for your plugin can go here
        // For example, set up shortcode handlers or custom post types
        add_shortcode('my_vue_firebase_app', array($this, 'render_shortcode'));
    }

    public function render_shortcode($atts) {
        ob_start();
        ?>
        <div id="my-vue-firebase-app">
            <!-- Vue.js app will be rendered here -->
        </div>
        <?php
        return ob_get_clean();
    }
}

// Initialize the plugin
add_action('plugins_loaded', array(MyVueFirebasePlugin::get_instance(), 'init'));
