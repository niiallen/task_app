<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //mass assignment
    protected $fillable=[
        'name','status'
    ];
}
