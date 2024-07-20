<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
// from Job on model folder 
use App\Models\Job;

// passing values from routes as an arrayy
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Yogi Arismet'
    ]);
});

Route::get('/experience', function () {
    return view('experience',[
        'jobs' => Job::all()
    ]);
});

Route::get('/exp/{id}', function ($id) {
    
    // Arr::first($jobs, function ($job) use ($id) {
        //     return $job['id'] == $id;
        // });
    // setelah dunction find by id dipindh ke job.php
    $job =Job::find($id);

    return view('exp', ['job' => $job]);
});

Route::get('contact', function () {
    return view('contact');
});