<?php

use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Cart\Models\Product;
use Interop\Container\ContainerInterface;

use function Di\get;

return [
  'router' => get(Slim\Router::class),
  Twig::class => function(ContainerInterface $c) {
    $twig = new Twig(__DIR__.'/../resources/views',[
      'cache' => false
    ]);
    // 也可以使用其他helper來建立
    $twig->addExtension(new TwigExtension(
      $c->get('router'),
      $c->get('request')->getUri()
    ));

    return $twig;
  },
  Product::class => function(ContainerInterface $c) {
    return new Product;
  }
];