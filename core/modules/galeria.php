<?php

// -----------------------------------------------------------------------------
// GALERIA VIDEOS
// -----------------------------------------------------------------------------
// Modulo
$acf_galeria_videos = new Module('acf_galeria_videos', 'Galeria de vídeos', 0);

// Fields
$acf_galeria_videos->set_field('repeater', 'Videos', 'videos',
    array(
        array(
            'key'         => 'field_videos_link',
            'label'       => 'Link',
            'name'        => 'link',
            'type'        => 'text',
            'formatting'  => 'none',
            'placeholder' => 'http://',
            'required'    => 1,
        ),
    )
);

// Locations
$acf_galeria_videos->set_location('page', 109);

// Register
register_field_group($acf_galeria_videos->arguments());


// -----------------------------------------------------------------------------
// GALERIA IMAGENS
// -----------------------------------------------------------------------------
// Modulo
$acf_galeria_imagens = new Module('acf_galeria_imagens', 'Galeria de imagens', 1);

// Fields
$acf_galeria_imagens->set_field('repeater', 'Imagens', 'imagens',
    array(
        array (
            'key'          => 'field_imagens_imagem',
            'label'        => 'Imagem',
            'name'         => 'imagem',
            'type'         => 'image',
            'required'     => 1,
            'save_format'  => 'url',
            'preview_size' => 'thumbnail',
            'library'      => 'uploadedTo',
        ),
    )
);

// Locations
$acf_galeria_imagens->set_location('page', 109);

// Register
register_field_group($acf_galeria_imagens->arguments());