jQuery(document).ready(function($) {
    // Máscara para campo de telefone
    $(document).on('input', '[id^=_op-teln_]', function() {
        var teln_value = $(this).val().replace(/[^0-9]/g, '');
        var field_name = $(this).attr('id').replace('_op-teln_', '_op-tell_');
        teln_value = teln_value.replace(/[\s\(\)\-]/g, '');
        $('#' + field_name).val(teln_value);
    }).keyup(function() {
        $(this).trigger('input');
    });
	
    $(document).on('input', '[id^=_opteln_]', function() {
        var teln_value = $(this).val().replace(/[^0-9]/g, '');
        var field_name = $(this).attr('id').replace('_opteln_', '_optell_');
        teln_value = teln_value.replace(/[\s\(\)\-]/g, '');
        $('#' + field_name).val(teln_value);
    }).keyup(function() {
        $(this).trigger('input');
    });

    $(document).on('input', '[id^=_op_teln_]', function() {
        var teln_value = $(this).val().replace(/[^0-9]/g, '');
        var field_name = $(this).attr('id').replace('_op_teln_', '_op_tell_');
        teln_value = teln_value.replace(/[\s\(\)\-]/g, '');
        $('#' + field_name).val(teln_value);
    }).keyup(function() {
        $(this).trigger('input');
    });

    // Máscara para campo de celular
    $(document).on('input', '[id^=_op-celn_]', function() {
        var celn_value = $(this).val().replace(/[^0-9]/g, '');
        var field_name = $(this).attr('id').replace('_op-celn_', '_op-cell_');
        celn_value = celn_value.replace(/[\s\(\)\-]/g, '');
        $('#' + field_name).val(celn_value);
    }).keyup(function() {
        $(this).trigger('input');
    });
	
    $(document).on('input', '[id^=_op_celn_]', function() {
        var celn_value = $(this).val().replace(/[^0-9]/g, '');
        var field_name = $(this).attr('id').replace('_op_celn_', '_op_cell_');
        celn_value = celn_value.replace(/[\s\(\)\-]/g, '');
        $('#' + field_name).val(celn_value);
    }).keyup(function() {
        $(this).trigger('input');
    });
	
    $(document).on('input', '[id^=_opceln_]', function() {
        var celn_value = $(this).val().replace(/[^0-9]/g, '');
        var field_name = $(this).attr('id').replace('_opceln_', '_opcell_');
        celn_value = celn_value.replace(/[\s\(\)\-]/g, '');
        $('#' + field_name).val(celn_value);
    }).keyup(function() {
        $(this).trigger('input');
    });

    // Slug para campo de slug
    $(document).on('input', '[id^=_op-slugn_]', function() {
        var slugn_value = $(this).val().trim();
        var field_name = $(this).attr('id').replace('_op-slugn_', '_op-slugl_');
        var slugl_value = slugify(slugn_value);
        $('#' + field_name).val(slugl_value);
    });
	
    $(document).on('input', '[id^=_op_slugn_]', function() {
        var slugn_value = $(this).val().trim();
        var field_name = $(this).attr('id').replace('_op_slugn_', '_op_slugl_');
        var slugl_value = slugify(slugn_value);
        $('#' + field_name).val(slugl_value);
    });
	
    $(document).on('input', '[id^=_opslugn_]', function() {
        var slugn_value = $(this).val().trim();
        var field_name = $(this).attr('id').replace('_opslugn_', '_opslugl_');
        var slugl_value = slugify(slugn_value);
        $('#' + field_name).val(slugl_value);
    });

    function slugify(text) {
        var slug = text.toString().toLowerCase();
        var accents = {
            a: /[àÀáÁâÂãäÄÅåª]/g,
            e: /[èÈéÉêÊëË]/g,
            i: /[ìÌíÍîÎïÏ]/g,
            o: /[òÒóÓôÔõÕöÖº]/g,
            u: /[ùÙúÚûÛüÜ]/g,
            y: /[ýÝÿŸ]/g,
			n: /[ñÑ]/g,
			c: /[çÇ]/g
        };

        for (var letter in accents) {
            if (accents.hasOwnProperty(letter)) {
                slug = slug.replace(accents[letter], letter);
            }
        }

        slug = slug.replace(/[^a-z0-9\-]/g, '-');
        slug = slug.replace(/-+/g, '-');
        slug = slug.replace(/^-|-$/g, '');

        return slug;
    }
});
