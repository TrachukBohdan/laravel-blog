<?php

    return [

        'posts_per_page' => 2,

        'default_img_search_driver' => 'microsoft',

        'img_search_engine_drivers' => [
            'microsoft' => [
                'class' => \App\Services\ImgFinder\SearchEngines\MicrosoftSearchEngine::class,
                'configs' => [
                    'query_url' => 'https://api.cognitive.microsoft.com/bing/v7.0/images/search?q=',
                    'client_key' => '67bdbdca28d34df7924c3ad82b0eae0e'
                ]
            ],
            'google' => [
                'class' => \App\Services\ImgFinder\SearchEngines\GoogleSearchEngine::class,
                'configs' => [
                    //IMPORTANT not implemented yet
                ]
            ]
        ]
    ];