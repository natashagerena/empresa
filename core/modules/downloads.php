<?php

// -----------------------------------------------------------------------------
// DOWNLOADS
// -----------------------------------------------------------------------------
// Modulo
$acf_downloads = new Module('acf_downloads', 'Downloads', 0);

// Fields
$acf_downloads->set_field('image', 'Imagem do arquivo', 'imagem_arquivo', array('required' => 1, 'instructions' => '267 x 267 pixels'));
$acf_downloads->set_field('qtranslate_text', 'Título do arquivo', 'titulo_arquivo', array('required' => 1));
$acf_downloads->set_field('file', 'Arquivo', 'arquivo', array('required' => 1));

// Locations
$acf_downloads->set_location('page', 103);

// Register
register_field_group($acf_downloads->arguments());