<?php

// Homepage.
$app->get('/', function () use ($app) {
    return $app['twig']->render('main/index.html.twig', array());
})->bind('homepage');
