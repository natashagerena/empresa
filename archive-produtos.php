<?php

use Timber\Timber;

$data          = Timber::get_context();
$data['posts'] = Timber::get_posts('post_type=produtos&posts_per_page=-1');

Timber::render('archive-produtos.twig', $data);