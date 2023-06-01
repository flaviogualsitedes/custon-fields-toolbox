<?php
/*
Plugin Name: Custom Fields Toolbox
Plugin URI: https://github.com/flaviogualsitedes/custon-fields-toolbox/
Description: O Custom Fields Toolbox é um plugin para WordPress que fornece recursos avançados para campos personalizados (Meta Fields). Ele adiciona funcionalidades extras aos campos personalizados, incluindo máscaras de entrada e manipulação de valores em tempo real. Saiba mais no arquivo read.me.
Version: 1.0
Author: Flávio Gual
Author URI: https://github.com/flaviogualsitedes/
License: GPLv2 or later
*/

function adicionar_scripts() {
    wp_enqueue_script('jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array('jquery'), '1.14.16', true);
    wp_enqueue_script('custom-fields', plugin_dir_url(__FILE__) . 'custom-fields.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'adicionar_scripts');
add_action('admin_enqueue_scripts', 'adicionar_scripts');

function adicionar_masks() {
    echo "
    <script type='text/javascript'>
        jQuery(document).ready(function($) {
            $('[id^=_op-teln_]').mask('(99) 9999-9999');
            $('[id^=_op-celn_]').mask('(99) 99999-9999');
        });
    </script>
    ";
}
add_action('wp_footer', 'adicionar_masks');
add_action('admin_footer', 'adicionar_masks');
