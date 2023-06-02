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
    //wp_enqueue_script('custom-fields', plugin_dir_url(__FILE__) . 'custom-fields.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'adicionar_scripts');
add_action('admin_enqueue_scripts', 'adicionar_scripts');

function adicionar_masks() {
    echo "
    <script type='text/javascript'>
        jQuery(document).ready(function($) {
			// Máscaras para campos com prefixo _opteln_
			$('[id*=_cftteln_]').mask('(99) 9999-9999');
			$('[id*=_cftceln_]').mask('(99) 99999-9999');

			// Atualizar campo _cfttell_ com o conteúdo de _cftteln_ sem caracteres especiais
			$('[id*=_cftteln_]').on('input', function() {
				var teln_value = $(this).val().replace(/[\s\(\)\-]/g, '');
				var field_name = $(this).attr('id').replace('_cftteln_', '_cfttell_');
				$('#' + field_name).val(teln_value);
			});

			// Atualizar campo _cftcell_ com o conteúdo de _cftceln_ sem caracteres especiais
			$('[id*=_cftceln_]').on('input', function() {
				var celn_value = $(this).val().replace(/[\s\(\)\-]/g, '');
				var field_name = $(this).attr('id').replace('_cftceln_', '_cftcell_');
				$('#' + field_name).val(celn_value);
			});

			// Atualizar campo _cftslugl_ com o conteúdo de _cftslugn_ sem caracteres especiais e em letras minúsculas
			$('[id*=_cftslugn_]').on('input', function() {
				var slugn_value = $(this).val();
				var slugl_value = slugify(slugn_value);
				var field_name = $(this).attr('id').replace('_cftslugn_', '_cftslugl_');
				$('#' + field_name).val(slugl_value);
			});

			function slugify(text) {
				return text.toString().toLowerCase()
					.replace(/\s+/g, '-')
					.replace(/[^\w\-]+/g, '')
					.replace(/\-\-+/g, '-');
			}
		});
    </script>
    ";
}
add_action('wp_footer', 'adicionar_masks');
add_action('admin_footer', 'adicionar_masks');
