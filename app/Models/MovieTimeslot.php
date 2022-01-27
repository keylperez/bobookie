<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieTimeslot extends Model
{
    use HasFactory;
    protected $fillable = ['movie_id','timeslot_id'];
}
