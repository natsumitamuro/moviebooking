<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Movie;
use \App\Models\Genre;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Genre::create([
            'name' => 'アクション', 
        ]);
        Genre::create([
            'name' => 'コメディ', 
        ]);
        Genre::create([
            'name' => 'ファミリー', 
        ]);
        Genre::create([
            'name' => '恋愛', 
        ]);
        Genre::create([
            'name' => 'サスペンス', 
        ]);
        Genre::create([
            'name' => 'ミュージカル', 
        ]);
        Genre::create([
            'name' => 'ホラー', 
        ]);
        Genre::create([
            'name' => 'ファンタジー', 
        ]);
        Genre::create([
            'name' => 'アドベンチャー', 
        ]);
        Genre::create([
            'name' => 'SF', 
        ]);
        Genre::create([
            'name' => 'ミステリー', 
        ]);
        Genre::create([
            'name' => 'サスペンス', 
        ]);

        $movies = [
            [
                'name' => 'THE BATMAN ザ・バットマン', 
                'description' => '【現時点で今年一番の“衝撃”】「ジョーカー」鑑賞者は全員観に行くべき“傑作”',
                'minutes' => 120,
                'published_year' => 2022,
                'image_path' => 'badman.jpeg',
            ],
            [
                'name' => 'HOMESTAY（ホームステイ）', 
                'description' => '僕はこれから、死んだ高校生の身体にホームステイする――人生が愛おしくなる感動作',
                'minutes' => 120,
                'published_year' => 2022,
                'image_path' => 'homestay.jpeg',    
            ],
            [
                'name' => '余命10年', 
                'description' => 'SNSを中心に反響を呼んだ小坂流加の同名恋愛小説を、小松菜奈と坂口健太郎の主演、「新聞記者」の藤井道人監督がメガホンで映画化。',
                'minutes' => 110,
                'published_year' => 2022,
                'image_path' => 'yomei.jpeg',
            ],
            [
                'name' => 'ナイル殺人事件', 
                'description' => 'ミステリーの女王アガサ・クリスティによる名作「ナイルに死す」を、同じくクリスティ原作の「オリエント急行殺人事件」を手がけたケネス・ブラ..',
                'minutes' => 110,
                'published_year' => 2022,
                'image_path' => 'nail.jpeg',
             ],
            [
                'name' => 'アンチャーテッド', 
                'description' => 'トレジャーハンターのネイサン・ドレイクが伝説の秘宝や古代都市の謎に挑む人気アクションアドベンチャーゲーム「アンチャーテッド」シリーズを...',
                'minutes' => 110,
                'published_year' => 2022,
                'image_path' => 'tedd.jpeg',
            ],
            [
                'name' => 'KAPPEI', 
                'description' => '「1999年7の月、人類は滅亡する」というノストラダムスの予言を信じ、来たるべき終末の世に備えて幼い頃から人類の救世主となるべく厳しい修行に人生を捧げてきた「終末の戦士」たちがいた。だが、粘っても粘っても世界は一向に滅亡せず…活躍の場を与えられなかった彼らがたどり着いたのは、その能力を全く必要としない現代の東京だった…。',
                'minutes' => 110,
                'published_year' => 2022,
                'image_path' => 'kappei.jpeg',
            ],
            [
                'name' => '映画おしりたんてい', 
                'description' => 'ホーホー博物館の地下にある開かなくなった扉…。ワンコロ警察が侵入者を捕らえるが、怪しい車に犯人を連れ去られてしまう。事件の裏にいたのは、悪の天才・シリアーティ教授。彼の狙いは謎につつまれた秘宝“お・パーツ”だ。目的のためなら手段を選ばない冷酷な犯罪者であるシリアーティを捕まえるため、おしりたんていは国際警察・ワンターポールからやってきたオードリーと共に捜査を開始する。',
                'minutes' => 100,
                'published_year' => 2022,
                'image_path' => 'osiri.jpeg',
            ],
            [
                'name' => '君が落とした青空', 
                'description' => '付き合い始めて2年経つ高校生の実結と修弥。“毎月1日は何があっても必ず一緒に映画を観に行く”という約束どおり、その日も映画館デートへ向かう2人だったが、修弥は休養を理由に突然キャンセルしてしまう。最近何かを隠しているような雰囲気だった修弥に、どこか不安を感じていた実結。',
                'minutes' => 120,
                'published_year' => 2022,
                'image_path' => 'kimiga.jpeg',
            ]
        ];


        foreach($movies as $movie){
            $genreIds = Genre::all()->random(2)->pluck("id");
            
            Movie::create($movie)->genres()->sync($genreIds);
        }
    }
}
