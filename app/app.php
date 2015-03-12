<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('input.twig');
    });

    $app->get("/score", function() use($app) {
        $scrabble = new Word;
        $score = $scrabble->scoreWord($_GET['word']);

        return $app['twig']->render('score.twig', array('score' => $score));
    });

    return $app;
?>
