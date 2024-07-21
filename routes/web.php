<?php

use App\Models\JobHisttory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
// from JobHistory on model folder 
use App\Models\JobHistory;

// passing values from routes as an arrayy
Route::get('/', function () {
    // $jobs = JobHistory::all();
    // dd($jobs[0]->title);
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Yogi Arismet'
    ]);
});

Route::get('/experience', function () {
    return view('experience',[
        'jobs' => JobHistory::all()
    ]);
});

Route::get('/exp/{id}', function ($id) {
    
    // Arr::first($jobs, function ($job) use ($id) {
        //     return $job['id'] == $id;
        // });
    // setelah dunction find by id dipindh ke job.php
    $job =JobHistory::find($id);

    return view('exp', ['job' => $job]);
});

Route::get('contact', function () {
    return view('contact');
});