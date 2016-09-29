<?php

/**
* FICHIER POUR modifier le comportement de gravity forms
*/

// Modifier le séparateur d'export pour avoir les colonnes visibles sous Excel
add_filter('gform_export_separator', 'change_separator', 10, 2);
function change_separator($separator, $form_id) {
    return ';';
}
