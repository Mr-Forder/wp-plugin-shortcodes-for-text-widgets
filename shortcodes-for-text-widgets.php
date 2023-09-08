<?php
/*
* Plugin Name: Shortcodes For Text Widgets
* Description:  Give your text widgets the ability to use shortcodes!
*/


defined('ABSPATH') or die("Access denied.");


add_filter('widget_text', 'do_shortcode');
