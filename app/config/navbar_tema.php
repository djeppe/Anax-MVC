<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'theme'  => [
            'text'  => 'Tema',   
            'url'   => '',  
            'title' => 'Här va det tema. Tema va det!'
        ],
        
        'regions' => [
        	'text'	=> 'Regioner',
        	'url'	=> 'regions.php',
        	'title'	=> 'Här va det regioner. Regioner va det här!'
        ],

    ],
 
    // Callback tracing the current selected menu item base on scriptname
    'callback' => function($url) {
        if ($url == $this->di->get('request')->getRoute()) {
            return true;
        }
    },

    // Callback to create the urls
    'create_url' => function($url) {
        return $this->di->get('url')->create($url);
    },
];
