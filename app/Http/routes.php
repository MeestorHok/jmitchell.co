<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    SEO::setTitle('Jake Mitchell')
        ->setSubtitle('MeestorHok')
        ->setDescription('My name is Jake Mitchell (aka MeestorHok) and I am a software developer, UI and UX designer, artist, entrepreneur, and much more!')
        ->addKeywords([
            "web designer", "freelance", "photographer", "videographer",
            "artist", "3d modeling", "photoshop", "illustrator",
            "tutorials", "UDF Academy", "ceo", "creator", "cv",
            "United Desk Federation", "student", "resume", "portfolio"
        ])
        ->addMeta('X-UA-Compatible', 'IE=edge', 'http-equiv')
        ->addMeta([
            'HandheldFriendly' => 'True',
            'MobileOptimized' => '320',
            'viewport' => 'width=device-width, initial-scale=1'
        ])
        ->setCanonical()
        ->setRobots()
        ->favicons()
            ->set('img/icons')
            ->setColors([
                'safari_pinned' => '#5bbad5',
                'ms_tile' => '#9f00a7',
                'theme' => '#9f00a7'
            ])
            ->setSizes(['32x32', '96x96'])
            ->setAppleSizes(['72x72', '120x120'])
            ->setAndroidSizes(['36x36', '96x96', '144x144']);
    
    return view('home');
});
