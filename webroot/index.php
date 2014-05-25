<?php

require __DIR__.'/config_with_app.php';

$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');
$app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');

$app->theme->addStylesheet('css/anax-grid/Flaticon/flaticon.css');

$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);

$di->set('CommentController', function() use ($di) {
    $controller = new Phpmvc\Comment\CommentController();
    $controller->setDI($di);
    return $controller;
});

$app->router->add('', function() use ($app) {
    
    $app->theme->setTitle("Min Me-sida");
    
    $content = $app->fileContent->get('me.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
    
    /*$app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);*/
    
	$app->views->add('me/page', [
		'content' => '',
		'byline'  => null,
	], 'flash');
	
	$app->views->add('me/theme', [
		'content' => $content,
		'byline'  => $byline,
	], 'main');
	
	$app->views->add('me/theme', [
		'content' => '',
		'byline'  => null,
	], 'sidebar');
	
    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
    ]);

    $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
    ]);	
	
	$app->views->add('me/theme', [
		'content' => $byline,
		'byline'  => null,
	], 'main');    
});

$app->router->add('redovisning', function() use ($app) {
    
    $app->theme->setTitle("Redovisning");
    
    $content = $app->fileContent->get('redovisning.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
    
    $links = $app->fileContent->get('redovisning-links.html');
    
    $app->views->add('me/page', [
		'content' => $content,
		'byline'  => $byline,
	], 'main');
	
	$app->views->add('me/theme', [
		'content' => $links,
		'byline'  => $byline,
	], 'sidebar');
    
    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
    ]);

    $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
    ]);
});

$app->router->add('theme', function() use ($app) {
    
    $app->theme->addStylesheet('css/anax-grid/regions_demo.css');
    $app->theme->setTitle("Mitt Tema");
    
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');

	$app->views->add('me/theme', [
		'content' => '<img width="940" alt="Landscape" src="http://www.phoenixdodgeball.com/wp-content/uploads/2014/04/star-wars-banner.jpg">',
		'byline'  => null,
	], 'flash');
	
	$app->views->add('me/theme', [
		'content' => '<a href="regioner"><img src="img/drupal.png" alt="Här skulle varit en bild minsann."></a>',
		'byline'  => null,
	], 'featured-1');
	
	$app->views->add('me/theme', [
		'content' => '<a href="grid"><img src="img/semantic-grid.jpg" alt="Här skulle det också varit en bild. En fin bild."></a>',
		'byline'  => $byline,
	], 'featured-2');
	
	$img = $app->fileContent->get('f_img01.md');
	$app->views->add('me/theme', [
		'content' => '<a href="font-awesome"><img src="img/font-awesome.png" alt="Här skulle varit en bild."></a>',
		'byline'  => null,
	], 'featured-3');
	
	$app->views->add('me/theme', [
		'content' => 'main',
		'byline'  => null,
	], 'main');
	
	$app->views->add('me/theme', [
		'content' => 'sidebar',
		'byline'  => null,
	], 'sidebar');
	
	$content = $app->fileContent->get('triptych_01.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
	$app->views->add('me/theme', [
		'content' => $content,
		'byline'  => null,
	], 'triptych-1');
	
	$content = $app->fileContent->get('triptych_02.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
	$app->views->add('me/theme', [
		'content' => $content,
		'byline'  => null,
	], 'triptych-2');
	
	$content = $app->fileContent->get('triptych_03.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
	$app->views->add('me/theme', [
		'content' => $content,
		'byline'  => null,
	], 'triptych-3');

});

$app->router->add('regioner', function() use ($app) {
    
    $app->theme->addStylesheet('css/anax-grid/regions_demo.css');
    $app->theme->setTitle("Temat regioner");
    
    $app->views->addString('flash', 'flash')
               ->addString('featured-1', 'featured-1')
               ->addString('featured-2', 'featured-2')
               ->addString('featured-3', 'featured-3')
               ->addString('main', 'main')
               ->addString('sidebar', 'sidebar')
               ->addString('triptych-1', 'triptych-1')
               ->addString('triptych-2', 'triptych-2')
               ->addString('triptych-3', 'triptych-3')
               ->addString('footer-col-1', 'footer-col-1')
               ->addString('footer-col-2', 'footer-col-2')
               ->addString('footer-col-3', 'footer-col-3')
               ->addString('footer-col-4', 'footer-col-4');

});

$app->router->add('grid', function() use ($app) {
	
	$app->theme->addStylesheet('css/anax-grid/display_grid.css');
	$app->theme->setTitle("Visa rutnät");
	
	$content = $app->fileContent->get('tema.md');
	$content = $app->textFilter->doFilter($content, 'shortcode, markdown');
	
	$app->views->add('welcome/page', [
		'content' => $content,
	]);
});

$app->router->add('font-awesome', function() use ($app) {

    $app->theme->setTitle("Font Awesome");

    $content = $app->fileContent->get('fontawesome.html');

    $app->views->add('welcome/page', ['content' => $content]);
    
    $content = $app->fileContent->get('fontawesome_sidebar.html');
    $app->views->add('welcome/page', ['content' => $content], 'sidebar');

});

$app->router->add('source', function() use ($app) {
    
    $app->theme->addStylesheet('css/source.css');
    $app->theme->setTitle("Källkod");
    
    $source = new \Mos\Source\CSource([
        'secure_dir' => '..',
        'base_dir' => '..',
        'add_ignore' => ['.htaccess'],    
    ]);
    
    $app->views->add('me/source', [
        'content' => $source->View()
        ]);
});

$app->router->handle();
$app->theme->render();

?>