<?php

require __DIR__.'/config_with_app.php';

$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_tema.php');
$app->theme->configure(ANAX_APP_PATH . 'config/theme_grid.php');

$app->router->add('', function() use ($app) {
    
    $app->theme->setTitle("Min Me-sida");
    
    $content = $app->fileContent->get('tema.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
    
    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
});


$app->router->handle();
$app->theme->render();

?>