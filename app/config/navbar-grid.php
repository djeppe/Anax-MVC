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
            'text'  => '<i class="fa fa-home"></i> Tema',   
            'url'   => '',  
            'title' => 'H�r va det tema. Tema va det!'
        ],
        
        'regions' => [
        	'text'	=> 'Regioner',
        	'url'	=> 'regioner',
        	'title'	=> 'H�r va det regioner. Regioner va det h�r!'
        ],
        
        // This is a menu item
        'grid'  => [
        	'text'  => 'Rutn�t',   
            'url'   => 'grid',
            'title' => 'Visa rutn�tet',
        ],
         
        // This is a menu item
        'typography'  => [
            'text'  => 'Typografi',   
            'url'   => 'typografi',
            'title' => 'Typografi',
        ],
         
        // This is a menu item
        'font-awesome' => [
            'text'  =>'Font Awesome', 
            'url'   =>'font-awesome',  
            'title' => 'Testa Font Awesome',
        ],
        
        // This is a menu item
        'source' => [
            'text'  =>'K�llkod', 
            'url'   =>'source',  
            'title' => 'Visa k�llkod',
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
