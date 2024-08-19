<?php

use Timber\Timber;

$data         = Timber::get_context();
$data['post'] = Timber::get_post();

Timber::render('quem-somos.twig', $data);