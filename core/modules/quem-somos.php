<?php

// -----------------------------------------------------------------------------
// QUEM SOMOS
// -----------------------------------------------------------------------------
// Modulo
$acf_quem_somos = new Module('acf_quem_somos', 'Quem somos', 0);

// Fields
$acf_quem_somos->set_field('qtranslate_wysiwyg', 'Texto', 'texto_quem_somos', array('required' => 1));
$acf_quem_somos->set_field('image', 'Imagem', 'imagem_quem_somos', array('required' => 1, 'instructions' => '498 x 337 pixels'));

// Locations
$acf_quem_somos->set_location('page', 22);

// Register
register_field_group($acf_quem_somos->arguments());