<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    use HasFactory;

    protected $table = "rows";

    public $timestamps = false;

    protected $fillable = ['auditorium_id', 'number','seats'];

    public function auditorium()
    {
        return $this->belongsTo('App\Models\Auditorium');
    }

    public function seats()
    {
        return $this->hasMany('App\Models\Seat');
    }
 
    // スクリーンの座席数を求める関数
    public static function get_seats_count($auditorium_id)
    {
        $seats_count = Row::where('auditorium_id',$auditorium_id)->sum("seats");
        return $seats_count;
    }
}
