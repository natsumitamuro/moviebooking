<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScheduledMovie;
use App\Models\Reservation;
use App\Models\Seat;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller
{
    //予約席一覧機能
    public function reservation(Request $request)
    {
        $scheduledmovie_id = $request->id;//取得したidの変数
        $scheduledmovie = ScheduledMovie::find($scheduledmovie_id);//ScheduledMovieテーブルの中からidが同じものを持ってくる
        $rows = $scheduledmovie->auditorium->rows;//列の取得

        //map（それぞれの要素に処理を適用して結果を返す）
        $seats = $rows->map(function($row){
            return Seat::where('row_id','=',$row->id)->get();
        });
        //予約しているidを取得
        //whereメソッド（'第一引数「カラム名」','第二引数「カラムと比較する値」'）取得したidと同じscheduled_movie_idを全て取得

        $reservedseats = Reservation::where('scheduled_movie_id',$scheduledmovie_id)->get()->toArray();
        
        //dd($reservedseats);データを表示する
        //予約画面にデータを持っていく
        return view('/reservation')->with(['seats'=>$seats,'reservedseats'=>$reservedseats,'scheduled_movie_id'=>$scheduledmovie_id]);

    }

    //購入機能
    public function purchase(Request $request)
    {
        $selectedseats = $request->selected_seats;
        //選択した席の情報を取得
        foreach($selectedseats as $index => $selectedseat){
            $data[$index]['seat_id'] = $selectedseat;
            $data[$index]['scheduled_movie_id'] = $request->scheduled_movie_id;
            $data[$index]['user_id'] = Auth::id();
            $data[$index]['created_at'] = Carbon::now();
        }
        //insert データがあればtrueなければfalseで返す
        $result = Reservation::insert($data);

        //trueであればホーム画面へ
        if($result){
            // ホーム画面へリダイレクト
            return response('success',200);
            
        }
    }

}


