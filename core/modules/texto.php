<?php
// Modulo
$acf_texto = new Module('acf_texto', 'Texto', 0);

// Fields
$acf_texto->set_field('qtranslate_wysiwyg', 'Texto', 'texto');

// Locations
$acf_texto->set_location('page', 31);
$acf_texto->set_location('page', 107);
$acf_texto->set_location('post_type', 'noticias');

// Register
register_field_group($acf_texto->arguments());