<?php

// -----------------------------------------------------------------------------
// TECNOLOGIAS
// -----------------------------------------------------------------------------
// Modulo
$acf_tecnologias = new Module('acf_tecnologias', 'Tecnologias', 0);

// Fields
$acf_tecnologias->set_field('qtranslate_text', 'Título 1', 'titulo_tec_1', array('required' => 1));
$acf_tecnologias->set_field('qtranslate_wysiwyg', 'Texto 1', 'texto_tec_1', array('required' => 1));
$acf_tecnologias->set_field('qtranslate_text', 'Título 2', 'titulo_tec_2', array('required' => 1));
$acf_tecnologias->set_field('qtranslate_wysiwyg', 'Texto 2', 'texto_tec_2', array('required' => 1));
$acf_tecnologias->set_field('image', 'Imagem 1', 'imagem_tec_1', array('required' => 1, 'instructions' => '385 x 490 pixels'));
$acf_tecnologias->set_field('image', 'Imagem 2', 'imagem_tec_2', array('required' => 1, 'instructions' => '385 x 490 pixels'));
$acf_tecnologias->set_field('image', 'Logo 1', 'logo_tec_1', array('required' => 1));
$acf_tecnologias->set_field('image', 'Logo 2', 'logo_tec_2', array('required' => 1));

// Locations
$acf_tecnologias->set_location('page', 25);

// Register
register_field_group($acf_tecnologias->arguments());