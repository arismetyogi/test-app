<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
// passing values from routes as an arrayy
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Yogi Arismet'
    ]);
});

Route::get('/experience', function () {
    return view('experience',[
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Data Analyst',
                'place' => 'KFA',
            ],
            [
                'id'=> 2,
                'title'=> 'Data Scientist',
                'place'=>'KFA'
            ],
            [
                'id'=> 3,
                'title'=> 'Web Developer',
                'place' => 'anywhere'
            ]
        ]
    ]);
});

Route::get('/exp/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Data Analyst',
            'place' => 'KFA',
        ],
        [
            'id' => 2,
            'title' => 'Data Scientist',
            'place' => 'KFA'
        ],
        [
            'id' => 3,
            'title' => 'Web Developer',
            'place' => 'anywhere'
        ]
    ];

    // Arr::first($jobs, function ($job) use ($id) {
        //     return $job['id'] == $id;
        // });
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('exp', ['job' => $job]);
});

Route::get('contact', function () {
    return view('contact');
});