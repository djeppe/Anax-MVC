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
        'home'  => [
            'text'  => 'Hem',   
            'url'   => '',  
            'title' => 'Jespers Me-sida'
        ],
 
        // This is a menu item
        'test'  => [
            'text'  => 'Redovisning',   
            'url'   => 'redovisning',   
            'title' => 'Redovisning av kursmoment',

            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item of the submenu
                    'item 1'  => [
                        'text'  => 'Kmom01',   
                        'url'   => 'redovisning#kmom01',  
                        'title' => 'Kursmoment 1'
                    ],

                    // This is a menu item of the submenu
                    'item 2'  => [
                        'text'  => 'Kmom02',   
                        'url'   => 'redovisning#kmom02',  
                        'title' => 'Kursmoment 2'
                    ],
                    
                    // This is a menu item of the submenu
                    'item 3'  => [
                        'text'  => 'Kmom03',   
                        'url'   => 'redovisning#kmom03',  
                        'title' => 'Kursmoment 3'
                    ],
                ],
            ],
        ],
        
        // This is a menu item
        'theme' => [
            'text'  =>'Tema', 
            'url'   =>'theme',  
            'title' => 'Mitt Tema',
            
            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item of the submenu
                    'item 1'  => [
                        'text'  => 'Regioner',   
                        'url'   => 'regioner',  
                        'title' => 'Tema: Regioner'
                    ],

                    // This is a menu item of the submenu
                    'item 2'  => [
                        'text'  => 'Rutnät',   
                        'url'   => 'grid',  
                        'title' => 'Tema: Grid'
                    ],
                    
                    // This is a menu item of the submenu
                    'item 3'  => [
                        'text'  => 'Font Awesome',   
                        'url'   => 'font-awesome',  
                        'title' => 'Test av FontAwesome'
                    ],
                ],
            ],            
        ],
 
        // This is a menu item
        'about' => [
            'text'  =>'Källkod', 
            'url'   =>'source',  
            'title' => 'Spana in Källkoden här'
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
