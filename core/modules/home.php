<?php

// -----------------------------------------------------------------------------
// Register
// -----------------------------------------------------------------------------
// Modulo
$acf_home_banners = new Module('acf_home_banners', 'Banners inicio', 0);

// Fields
$acf_home_banners->set_field('repeater', '', 'banners',
    array (
        array (
            'key'          => 'field_banners_imagem',
            'label'        => 'Imagem',
            'name'         => 'imagem',
            'type'         => 'image',
            'required'     => 1,
            'save_format'  => 'url',
            'preview_size' => 'thumbnail',
            'library'      => 'uploadedTo',
            'instructions' => '1920 x 578 pixels'
        ),
        array (
            'key'         => 'field_banners_link',
            'label'       => 'Link',
            'name'        => 'link',
            'type'        => 'text',
            'placeholder' => 'http://',
            'formatting'  => 'none',
        ),
    )
);

// Locations
$acf_home_banners->set_location('page', 2);

// Register
register_field_group($acf_home_banners->arguments());


// -----------------------------------------------------------------------------
// SOBRE
// -----------------------------------------------------------------------------
// Modulo
$acf_home_sobre = new Module('acf_home_sobre', 'Sobre', 1);

// Fields
$acf_home_sobre->set_field('image', 'Imagem', 'imagem_sobre', array('required' => 1, 'instructions' => '430 x 220 pixels'));
$acf_home_sobre->set_field('qtranslate_textarea', 'Texto', 'texto_sobre', array('required' => 1));

// Locations
$acf_home_sobre->set_location('page', 2);

// Register
register_field_group($acf_home_sobre->arguments());


// -----------------------------------------------------------------------------
// IMAGENS
// -----------------------------------------------------------------------------
// Modulo
$acf_home_imagens = new Module('acf_home_imagens', 'Imagens', 2);

// Fields
$acf_home_imagens->set_field('repeater', '', 'imagens_home',
    array (
        array (
            'key'          => 'field_imagens_home_imagem',
            'label'        => 'Imagem',
            'name'         => 'imagem',
            'type'         => 'image',
            'required'     => 1,
            'save_format'  => 'url',
            'preview_size' => 'thumbnail',
            'library'      => 'uploadedTo',
            'instructions' => '190 x 296 pixels'
        ),
    )
);

// Locations
$acf_home_imagens->set_location('page', 2);

// Register
register_field_group($acf_home_imagens->arguments());


// -----------------------------------------------------------------------------
// CHAMADA PRODUTOS
// -----------------------------------------------------------------------------
// Modulo
$acf_home_produtos = new Module('acf_home_produtos', 'Chamada produtos', 3);

// Fields
$acf_home_produtos->set_field('image', 'Imagem', 'imagem_prod', array('required' => 1, 'instructions' => '1920 x 790 pixels'));

// Locations
$acf_home_produtos->set_location('page', 2);

// Register
register_field_group($acf_home_produtos->arguments());


// -----------------------------------------------------------------------------
// CHAMADA TECNOLOGIAS
// -----------------------------------------------------------------------------
// Modulo
$acf_home_tecnologias = new Module('acf_home_tecnologias', 'Chamada tecnologias', 4);

// Fields
$acf_home_tecnologias->set_field('qtranslate_textarea', 'Texto', 'texto_tec', array('required' => 1));
$acf_home_tecnologias->set_field('image', 'Imagem', 'imagem_tec', array('required' => 1, 'instructions' => '722 x 484 pixels'));

// Locations
$acf_home_tecnologias->set_location('page', 2);

// Register
register_field_group($acf_home_tecnologias->arguments());


// -----------------------------------------------------------------------------
// CHAMADA EVENTOS
// -----------------------------------------------------------------------------
// Modulo
$acf_home_eventos = new Module('acf_home_eventos', 'Chamada eventos', 5);

// Fields
$acf_home_eventos->set_field('qtranslate_text', 'Texto', 'texto_eventos', array('required' => 1));
$acf_home_eventos->set_field('image', 'Imagem', 'imagem_eventos', array('required' => 1, 'instructions' => '1035 x 648 pixels'));

// Locations
$acf_home_eventos->set_location('page', 2);

// Register
register_field_group($acf_home_eventos->arguments());