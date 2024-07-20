<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    // explicitly define the return type: array
    public static function all(): array 
    {
        return [
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
    }
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        // error handling for when the id is out of bound
        if (! $job) {
            abort(404);
        }

        return $job;
    }
};