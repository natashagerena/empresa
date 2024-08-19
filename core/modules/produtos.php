<?php

// -----------------------------------------------------------------------------
// PRODUTOS
// -----------------------------------------------------------------------------

// Modulo
$acf_produtos_geral = new Module('acf_produtos', 'Geral', 0);

// Fields
$acf_produtos_geral->set_field('image', 'Imagem nome normal', 'imagem_nome_produto', array('required' => 1));
$acf_produtos_geral->set_field('image', 'Imagem nome ativo', 'imagem_nome_ativo_produto', array('required' => 1));
$acf_produtos_geral->set_field('image', 'Imagem home', 'imagem_home_produto', array('required' => 1, 'instructions' => '300 x 449 pixels'));
$acf_produtos_geral->set_field('image', 'Imagem produto', 'imagem_produto', array('required' => 1, 'instructions' => '500 x 500 pixels'));
// $acf_produtos_geral->set_field('image', 'Imagem desenho', 'imagem_desenho_produto', array('required' => 1));
// $acf_produtos_geral->set_field('image', 'Imagem circular', 'imagem_circular_produto', array('required' => 1));
$acf_produtos_geral->set_field('qtranslate_text', 'Rótulo home', 'rotulo_produto', array('required' => 1));
$acf_produtos_geral->set_field('qtranslate_text', 'Subtítulo', 'subtitulo_produto', array('required' => 1));

// Locations
$acf_produtos_geral->set_location('post_type', 'produtos');

// Register
register_field_group($acf_produtos_geral->arguments());


// Modulo
$acf_produtos_recomendacoes = new Module('acf_produtos_recomendacoes', 'Recomendações', 1);

// Fields
$acf_produtos_recomendacoes->set_field('qtranslate_textarea', 'Texto', 'recomendacoes_produto', array('required' => 1));

// Locations
$acf_produtos_recomendacoes->set_location('post_type', 'produtos');

// Register
register_field_group($acf_produtos_recomendacoes->arguments());


// Modulo
$acf_produtos_beneficios = new Module('acf_produtos_beneficios', 'Benefícios', 2);

// Fields
$acf_produtos_beneficios->set_field('qtranslate_textarea', 'Texto', 'beneficios_produto', array('required' => 1));

// Locations
$acf_produtos_beneficios->set_location('post_type', 'produtos');

// Register
register_field_group($acf_produtos_beneficios->arguments());


// Modulo
$acf_produtos_regioes = new Module('acf_produtos_regioes', 'Regiões de adaptação', 3);

// Fields
$acf_produtos_regioes->set_field('image', 'Mapa', 'mapa_produto', array('required' => 1));
$acf_produtos_regioes->set_field('radio', 'Cor da legenda', 'cor_legenda_produto', array(
	'required' => 1,
	'layout'   => 'horizontal',
	'choices'  => array(
		'verde'  => 'Verde',
		'marrom' => 'Marrom'
	),
));

// Locations
$acf_produtos_regioes->set_location('post_type', 'produtos');

// Register
register_field_group($acf_produtos_regioes->arguments());


// Modulo
$acf_produtos_caracteristicas = new Module('acf_produtos_caracteristicas', 'Características', 4);

// Fields
$acf_produtos_caracteristicas->set_field('qtranslate_text', 'Tipo de uso', 'tipo_uso_produto', array('required' => 1));
$acf_produtos_caracteristicas->set_field('qtranslate_text', 'Tecnologia', 'tecnologia_produto', array('required' => 1));
$acf_produtos_caracteristicas->set_field('qtranslate_text', 'Planta', 'planta_produto', array('required' => 1));
$acf_produtos_caracteristicas->set_field('qtranslate_text', 'Colmo', 'colmo_produto', array('required' => 1));
$acf_produtos_caracteristicas->set_field('qtranslate_text', 'Raiz', 'raiz_produto', array('required' => 1));
$acf_produtos_caracteristicas->set_field('qtranslate_text', 'Espiga', 'espiga_produto');
$acf_produtos_caracteristicas->set_field('qtranslate_text', 'Panícula', 'panicula_produto');
$acf_produtos_caracteristicas->set_field('qtranslate_text', 'Grão', 'grao_produto', array('required' => 1));

// Locations
$acf_produtos_caracteristicas->set_location('post_type', 'produtos');

// Register
register_field_group($acf_produtos_caracteristicas->arguments());


// Modulo
$acf_produtos_resultados = new Module('acf_produtos_resultados', 'Resultados', 5);

// Fields
$acf_produtos_resultados->set_field('qtranslate_wysiwyg', 'Texto', 'resultados_produto', array('required' => 1));

// Locations
$acf_produtos_resultados->set_location('post_type', 'produtos');

// Register
register_field_group($acf_produtos_resultados->arguments());


// Modulo
$acf_produtos_tolerancia = new Module('acf_produtos_tolerancia', 'Tolerância', 6);

// Fields
$acf_produtos_tolerancia->set_field('qtranslate_wysiwyg', 'Tolerância a herbicidas', 'tolerancia_produto', array('required' => 1));
$acf_produtos_tolerancia->set_field('image', 'Tolerância a doenças', 'imagem_tolerancia_produto', array('required' => 1));

// Locations
$acf_produtos_tolerancia->set_location('post_type', 'produtos');

// Register
register_field_group($acf_produtos_tolerancia->arguments());