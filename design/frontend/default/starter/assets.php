<?php
return array(
    'assetic_configuration' => array(
        'modules' => array(
            'frontend' => array(
                'collections' => array(
                    'frontend_images' => null,
                    'frontend_css' => array(
                        'assets' => array(
                            'styles.css' => __DIR__ . '/../../../../design/frontend/default/starter/assets/css/starter.css',
                            'ie7.css' => null,
                            'ie7.css' => null,
                            'ie.css' => null
                        ),
                        'filters' => array(),
                        'options' => array(
                            'output' => 'frontend/css/main'
                        ),
                    ),
                    'head_frontend_js' => array(
                        'assets' => array(
                            'respond.js'     => __DIR__ . '/../../../../design/frontend/default/starter/assets/js/respond.src.js',
                        ),
                    ),
                )  
            ),
            'default_starter' => array(
                'root_path' => array(
                    __DIR__ . '/../../../../design/frontend/default/starter/assets'
                ),
                'collections' => array(
                    'starter_images' => array(
                        'assets' => array(
                            'images/**/*.png',
                            'images/**/*.jpg'
                        ),
                        'options' => array(
                            'move_raw' => true,
                            'output' => 'frontend'
                        )
                    )
                )
            )
        ),
        'routes' => array(
            'frontend.*' => array(
                //'@frontend_css' => '@starter_css',
                //'@head_frontend_js' => '@starter_js'
            )
        )
    )
);