<?php

use Timber\Timber;

$data         = Timber::get_context();
$data['post'] = Timber::get_post();

Timber::render('downloads.twig', $data);