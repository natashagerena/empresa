<?php

// -----------------------------------------------------------------------------
// Register
// -----------------------------------------------------------------------------
// Modulo
$acf_imagem_destacada = new Module('acf_imagem_destacada', 'Imagem destacada');

// Fields
$acf_imagem_destacada->set_field('image', 'Imagem', 'imagem', ['instructions' => '1022 x 260 pixels <br> 1022 x 682 pixels (notícias)']);

// Locations
$acf_imagem_destacada->set_location('page', 22);
$acf_imagem_destacada->set_location('page', 25);
$acf_imagem_destacada->set_location('page', 31);
$acf_imagem_destacada->set_location('page', 103);
$acf_imagem_destacada->set_location('page', 107);
$acf_imagem_destacada->set_location('post_type', 'noticias');

// Options
$acf_imagem_destacada->set_options(array(
    'position' => 'side'
));

// Register
register_field_group($acf_imagem_destacada->arguments());