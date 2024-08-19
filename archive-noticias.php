<?php

use Timber\PostQuery;
use Timber\Timber;

$data          = Timber::get_context();
$data['posts'] = new PostQuery();

Timber::render('archive-noticias.twig', $data);