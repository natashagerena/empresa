<?php

// -----------------------------------------------------------------------------
//  API Key Google Maps
// -----------------------------------------------------------------------------
$api_maps = '';


// -----------------------------------------------------------------------------
// Includes 
// -----------------------------------------------------------------------------
include_once "core/helpers.php";
include_once "core/functions-modules.php";
include_once "core/functions-cpt.php";
include_once "core/functions-taxonomy.php";
include_once "core/functions-contact-form-front-end.php";
include_once "core/functions-contact-form.php";

// Admin
include_once "core/functions-admin.php";


// -----------------------------------------------------------------------------
// Incluo algumas informações no contexto do Timber
// -----------------------------------------------------------------------------
function add_to_context($data) {

    // Páginas
	$data['home']     = Timber::get_post(2);
	$data['produtos'] = Timber::get_posts(array(
		'post_type'      => 'produtos',
		'posts_per_page' => -1
	));

    // Formulários
    global $form_contato;
    $data['form_contato'] = $form_contato->render();


    // Return
    return $data;
}
add_filter('timber_context', 'add_to_context');


// -----------------------------------------------------------------------------
// Forms
// -----------------------------------------------------------------------------
$email = get_field('email_formulario', 'option');

// FORM CONTATO construct
$form_contato = new Contact_Form('form_contato', $email);

// Fields
$form_contato->set_field('text', 'nome', 'Nome completo', true);
$form_contato->set_field('email', 'email', 'E-mail', true);
$form_contato->set_field('text', 'telefone', 'Telefone', true);
$form_contato->set_field('text', 'cidade', 'Cidade', true);
$form_contato->set_field('text', 'estado', 'Estado', true);
$form_contato->set_field('textarea', 'mensagem', 'Mensagem', true);
$form_contato->set_field('text', 'notification', 'Quero receber comunicações', false);

// Button
$form_contato->set_button('submit', 'Enviar', 'Button');

// Informacoes para envio
$form_contato->set_subject('Formulário Contato - empresa1seeds');
$form_contato->set_reply_to('email');


// -----------------------------------------------------------------------------
// CPTs
// -----------------------------------------------------------------------------
$cpt_produtos = new Custom_Post_Type('Produtos', 'Produto', 'produtos');
$cpt_noticias = new Custom_Post_Type('Notícias', 'Notícia', 'noticias');