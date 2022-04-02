<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Row;

class Reservation extends Model
{
    use HasFactory;

    protected $table = "reservations";

    public $timestamps = false;

    protected $fillable = ['seat_id', 'user_id','scheduled_movie_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function seat()
    {
        return $this->belongsTo('App\Models\Seat');
    }

    public function scheduled_movie()
    {
        return $this->belongsTo('App\Models\ScheduledMovie');
    }

    // 購入された座席数を求める関数
    public static function get_reserved_seats($scheduled_movie_id)
    {
        $reserved_seats = Reservation::where('scheduled_movie_id',$scheduled_movie_id)->count("scheduled_movie_id");
        return $reserved_seats;
    }

    // 空席率を求める関数
    public static function get_reservation_rate($auditorium_id,$scheduled_movie_id)
    {               
        $reserved_seats = Reservation::where('scheduled_movie_id',$scheduled_movie_id)->count("scheduled_movie_id");
        $seats_count = Row::where('auditorium_id',$auditorium_id)->sum("seats");
        if($seats_count == 0){
            return 0;
        }
        $reserved_rate = ($reserved_seats / $seats_count) *100;
        return $reserved_rate;
    }
}
