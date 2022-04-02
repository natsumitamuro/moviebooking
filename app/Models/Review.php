<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $fillable = ['review'];

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie','movie_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
