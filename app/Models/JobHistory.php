<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model{
    // explicitly define the return type: array
    protected $table = 'job_hist';
    protected $fillable = ['title', 'workplace', 'salary'];
};