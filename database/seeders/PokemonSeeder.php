<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::create([
            'name' => 'フシギダネ',
            'description' => 'うまれてから　しばらくの　あいだは　せなかの　タネから　えいようを　もらって　おおきく　そだつ。',
            'pokedex_number' => 1,
            'image' => 'image/1.png'
        ]);

        Pokemon::create([
            'name' => 'フシギバナ',
            'description' => 'あめの　ふった　よくじつは　せなかの　はなの　かおりが　つよまる。　かおりに　さそわれ　ポケモンが　あつまる。',
            'pokedex_number' => 3,
            'image' => 'image/3.png'
        ]);

        Pokemon::create([
            'name' => 'ヒトカゲ',
            'description' => 'ヒトカゲの　しっぽの　ほのおは　いのちの　ともしび。　げんきな　ときは　ほのおも　ちからづよく　もえあがる。',
            'pokedex_number' => 4,
            'image' => 'image/4.png'
        ]);

        Pokemon::create([
            'name' => 'リザードン',
            'description' => 'くるしい　たたかいを　けいけんした　リザードンほど　ほのおの　おんどが　たかくなると　いわれている。',
            'pokedex_number' => 6,
            'image' => 'image/6.png'
        ]);

        Pokemon::create([
            'name' => 'ゼニガメ',
            'description' => 'こうらに　とじこもり　みを　まもる。　あいての　すきを　みのがさず　みずを　ふきだして　はんげきする。',
            'pokedex_number' => 7,
            'image' => 'image/7.png'
        ]);

        Pokemon::create([
            'name' => 'カメックス',
            'description' => 'こうらの　ロケットほうから　ふきだす　すいりゅうは　ぶあつい　てっぱんも　いっぱつで　つらぬく　はかいりょく。',
            'pokedex_number' => 9,
            'image' => 'image/9.png'
        ]);

        Pokemon::create([
            'name' => 'バタフリー',
            'description' => 'はなの　ミツが　だいこうぶつ。　わずかな　かふんで　はなばたけの　ばしょを　さがしだすことが　できる。',
            'pokedex_number' => 12,
            'image' => 'image/12.png'
        ]);

        Pokemon::create([
            'name' => 'スピアー',
            'description' => 'こうそくで　とびまわり　どくバリで　こうげきしたあと　すぐに　とびさる　せんぽうが　とくいわざだ。',
            'pokedex_number' => 15,
            'image' => 'image/15.png'
        ]);

        Pokemon::create([
            'name' => 'ピジョット',
            'description' => 'ピジョットが　ちからいっぱい　はばたくと　たいぼくも　しなるほどの　きょうふうを　まきおこす。',
            'pokedex_number' => 18,
            'image' => 'image/18.png'
        ]);

        Pokemon::create([
            'name' => 'オニスズメ',
            'description' => 'ちいさな　つばさを　いそがしく　はばたかせて　とぶ。　くさむらにいる　えものを　くちばしで　さがしだす。',
            'pokedex_number' => 21,
            'image' => 'image/21.png'
        ]);

        Pokemon::create([
            'name' => 'オニドリル',
            'description' => 'おおきな　つばさで　１にちじゅう　とびまわる　たいりょくの　もちぬし。　するどい　くちばしで　たたかう。',
            'pokedex_number' => 22,
            'image' => 'image/22.png'
        ]);

        Pokemon::create([
            'name' => 'アーボック',
            'description' => 'おなかの　もようで　てきを　いかく。　もように　おびえて　うごけなくなった　すきに　からだで　しめつける。',
            'pokedex_number' => 24,
            'image' => 'image/24.png'
        ]);

        Pokemon::create([
            'name' => 'ピカチュウ',
            'description' => '頬に　電気を溜めし　袋を　有す。　森林を　棲み処とし　硬き　木の実は　電撃で　焼き　食べる　知恵者なり。',
            'pokedex_number' => 25,
            'image' => 'image/25.png'
        ]);

        Pokemon::create([
            'name' => 'ライチュウ',
            'description' => '尻尾が　アースの　役目をはたして　電気を　地面に　逃がすので　自分自身は　しびれたりしない。',
            'pokedex_number' => 26,
            'image' => 'image/26.png'
        ]);

        Pokemon::create([
            'name' => 'サンドパン',
            'description' => 'からだを　まるめて　せなかから　たいあたり。　するどい　トゲトゲが　おおきな　ダメージを　あたえる。',
            'pokedex_number' => 28,
            'image' => 'image/28.png'
        ]);

        Pokemon::create([
            'name' => 'ニドリーナ',
            'description' => 'きけんを　かんじると　ぜんしんの　トゲを　さかだてる。　ニドリーノに　くらべて　トゲの　そだちが　おそい。',
            'pokedex_number' => 30,
            'image' => 'image/30.png'
        ]);

        Pokemon::create([
            'name' => 'ニドクイン',
            'description' => 'よろいのように　かたい　ウロコが　ぜんしんを　つつむ。　すあなの　こどもを　いのちがけで　まもる。',
            'pokedex_number' => 31,
            'image' => 'image/31.png'
        ]);

        Pokemon::create([
            'name' => 'ニドリーノ',
            'description' => 'きしょうが　あらい　ポケモン。　あいてに　つきさした　しょうげきで　ツノから　もうどくが　にじみでる。',
            'pokedex_number' => 33,
            'image' => 'image/33.png'
        ]);

        Pokemon::create([
            'name' => 'ニドキング',
            'description' => 'しっぽの　いちげきは　でんちゅうを　まるで　マッチぼうのように　まっぷたつに　へしおってしまう。',
            'pokedex_number' => 34,
            'image' => 'image/34.png'
        ]);

        Pokemon::create([
            'name' => 'トゲキッス',
            'description' => 'もめごとの　おこる　ばしょには　けっして　あらわれない。　ちかごろは　すがたを　みかけなくなった。',
            'pokedex_number' => 468,
            'image' => 'image/35.png'
        ]);

        Pokemon::create([
            'name' => 'メガボーマンダ',
            'description' => 'やいばのように　するどい　はねでゆくてを　さえぎるもの　すべてをまっぷたつにし　とびつづける。',
            'pokedex_number' => 373,
            'image' => 'image/36.png'
        ]);

        Pokemon::create([
            'name' => 'シャリタツ',
            'description' => '小型の　ドラゴンポケモン。　ヘイラッシャの　口の中に　棲み　外敵から　身を　守っている。',
            'pokedex_number' => 978,
            'image' => 'image/37.png'
        ]);

        Pokemon::create([
            'name' => 'ヨクバリス',
            'description' => '木の実の　木を　見つけると　たとえ　戦いの　最中であっても　一目散に　収穫に　行く。',
            'pokedex_number' => 820,
            'image' => 'image/38.png'
        ]);

        Pokemon::create([
            'name' => 'ユキノオー',
            'description' => '万年雪が　積もる　山脈で　静かに　暮らす。　ブリザードを　発生させて　姿を　隠す。',
            'pokedex_number' => 460,
            'image' => 'image/39.png'
        ]);

        Pokemon::create([
            'name' => 'バンギラス',
            'description' => '万年雪が　積もる　山脈で　静かに　暮らす。　ブリザードを　発生させて　姿を　隠す。',
            'pokedex_number' => 248,
            'image' => 'image/40.png'
        ]);

        Pokemon::create([
            'name' => 'タチフサグマ',
            'description' => 'すさまじい　せいりょうを　もつ。　シャウトとともに　いかくするさまは　ブロッキングと　よばれている。',
            'pokedex_number' => 862,
            'image' => 'image/41.png'
        ]);

        Pokemon::create([
            'name' => 'サーナイト',
            'description' => 'トレーナーを　守るためなら　サイコパワーを　使いきり　小さな　ブラックホールを　作り出す。',
            'pokedex_number' => 282,
            'image' => 'image/42.png'
        ]);

        Pokemon::create([
            'name' => 'ヌメイル',
            'description' => '背中の　渦巻き状の　突起に　脳や　心臓など　大事な　器官が　すべて　詰まっている。',
            'pokedex_number' => 705,
            'image' => 'image/43.png'
        ]);

        Pokemon::create([
            'name' => 'パンプジン',
            'description' => 'まよなかに　どうたいから　ひびく　ぶきみな　なきごえは　あのよで　くるしむ　ししゃの　なきごえらしい。',
            'pokedex_number' => 711,
            'image' => 'image/44.png'
        ]);

        Pokemon::create([
            'name' => 'ウルガモス',
            'description' => 'まよなかに　どうたいから　ひびく　ぶきみな　なきごえは　あのよで　くるしむ　ししゃの　なきごえらしい。',
            'pokedex_number' => 637,
            'image' => 'image/45.png'
        ]);

        Pokemon::create([
            'name' => 'ミカルゲ',
            'description' => 'いつも　悪さばかり　していたら　不思議な　術で　本体を　要石に　縛りつけられた。',
            'pokedex_number' => 442,
            'image' => 'image/46.png'
        ]);

        Pokemon::create([
            'name' => 'ウインディ',
            'description' => '草原を　駆け抜ける　様子は　人々の　心を　虜にしたと　昔の　絵巻に　記されていた。',
            'pokedex_number' => 59,
            'image' => 'image/47.png'
        ]);

        Pokemon::create([
            'name' => 'トリトドン(にしのうみ)',
            'description' => '全身　粘液で　べとべと。　昔は　この姿の　ほうが　圧倒的に　数が　多かった。',
            'pokedex_number' => 423,
            'image' => 'image/48.png'
        ]);

        Pokemon::create([
            'name' => 'トリトドン(ひがしのうみ)',
            'description' => '昔は　あまり　見なかったが　今は　この姿の　トリトドンが　増えていると　漁師は　語る。',
            'pokedex_number' => 423,
            'image' => 'image/49.png'
        ]);

        Pokemon::create([
            'name' => 'ミュウ',
            'description' => 'あらゆる　わざを　つかうため　ポケモンの　せんぞと　かんがえる　がくしゃが　たくさん　いる。',
            'pokedex_number' => 151,
            'image' => 'image/50.png'
        ]);

        Pokemon::create([
            'name' => 'エンテイ',
            'description' => 'エンテイが　ほえると　せかいの　どこかの　かざんが　ふんかすると　いわれている。',
            'pokedex_number' => 244,
            'image' => 'image/51.png'
        ]);

        Pokemon::create([
            'name' => 'ムゲンダイナ',
            'description' => 'むねの　コアが　ガラルちほうの　だいちから　わきだす　エネルギーを　きゅうしゅうして　かつどうしている。',
            'pokedex_number' => 890,
            'image' => 'image/52.png'
        ]);

        Pokemon::create([
            'name' => 'イーブイ',
            'description' => '不規則な　遺伝子を　持つ。　石から出る　放射線によって　体が　突然変異を　起こす。',
            'pokedex_number' => 133,
            'image' => 'image/53.png'
        ]);

        Pokemon::create([
            'name' => 'グレイシア',
            'description' => '体温を　自在に　コントロールし　大気の　水分を　凍らせて　ダイヤモンドダストを　巻き起こす。',
            'pokedex_number' => 471,
            'image' => 'image/54.png'
        ]);

        Pokemon::create([
            'name' => 'レジギガス',
            'description' => 'なわで　しばった　たいりくを　ひっぱって　うごかしたという　でんせつが　のこされている。',
            'pokedex_number' => 48,
            'image' => 'image/55.png'
        ]);

        Pokemon::create([
            'name' => 'ルギア',
            'description' => 'なわで　しばった　たいりくを　ひっぱって　うごかしたという　でんせつが　のこされている。',
            'pokedex_number' => 249,
            'image' => 'image/56.png'
        ]);

        Pokemon::create([
            'name' => 'マギアナ',
            'description' => '５００ねんいじょうまえに　つくられたじんぞうポケモン。　ひとの　ことばをりかいするが　しゃべれない。',
            'pokedex_number' => 801,
            'image' => 'image/57.png'
        ]);

        Pokemon::create([
            'name' => 'レックウザ',
            'description' => '５００ねんいじょうまえに　つくられたじんぞうポケモン。　ひとの　ことばをりかいするが　しゃべれない。',
            'pokedex_number' => 384,
            'image' => 'image/58.png'
        ]);

        Pokemon::create([
            'name' => 'ゲンガー',
            'description' => '命を　奪おうと　決めた　獲物の　影に　潜り込み　じっと　チャンスを　狙ってる。',
            'pokedex_number' => 94,
            'image' => 'image/59.png'
        ]);

        Pokemon::create([
            'name' => 'ガブリアス',
            'description' => '高速で　駆け抜けると　翼は　空気の　刃を　生み出し　まわりの木は　切断　されている。',
            'pokedex_number' => 445,
            'image' => 'image/60.png'
        ]);

        Pokemon::create([
            'name' => 'カイオーガ',
            'description' => 'おおあめを　ふらせる　のうりょくで　うみを　ひろげたと　いわれている。　かいこうの　そこで　ねむっていた。',
            'pokedex_number' => 382,
            'image' => 'image/61.png'
        ]);

        Pokemon::create([
            'name' => 'メタモン',
            'description' => '体の　細胞の　作りを　自分で　組み替えて　ほかの　生命体に　変身する。',
            'pokedex_number' => 132,
            'image' => 'image/62.png'
        ]);

        Pokemon::create([
            'name' => 'ディアルガ',
            'description' => 'じかんを　あやつる　ちからを　もつ。　シンオウちほうでは　かみさまと　よばれ　しんわに　とうじょうする。',
            'pokedex_number' => 483,
            'image' => 'image/63.png'
        ]);

        Pokemon::create([
            'name' => 'パルキア',
            'description' => 'くうかんを　ゆがめる　のうりょくを　もち　シンオウちほうの　しんわでは　かみさまとして　えがかれている。',
            'pokedex_number' => 484,
            'image' => 'image/64.png'
        ]);

        Pokemon::create([
            'name' => 'デオキシス',
            'description' => 'いんせきに　ふちゃくしていたうちゅうウイルスの　ＤＮＡがへんいして　うまれた　ポケモン。',
            'pokedex_number' => 386,
            'image' => 'image/65.png'
        ]);

        Pokemon::create([
            'name' => 'オノノクス',
            'description' => '洞窟や　廃鉱山が　ねぐら。　おとなしいが　キバに　触れられると　激しく　怒るので　要注意。',
            'pokedex_number' => 612,
            'image' => 'image/66.png'
        ]);

        Pokemon::create([
            'name' => 'ドラパルト',
            'description' => '意識を　研ぎ澄ますと　全身を　透明に　できる。　ツノの　中の　ドラメシヤも　見えなくなるのだ。',
            'pokedex_number' => 887,
            'image' => 'image/67.png'
        ]);

        Pokemon::create([
            'name' => 'ツンデツンデ',
            'description' => 'ウルトラホールから　しゅつげんした。　ふくすうの　せいめいが　つみあがり１ぴきを　けいせいしている　ようだ。',
            'pokedex_number' => 805,
            'image' => 'image/68.png'
        ]);

        Pokemon::create([
            'name' => 'アクジキング',
            'description' => 'やまを　くらい　けずり　ビルをのみこむ　すがたが　ほうこく　された。　ウルトラビーストの　いっしゅ。',
            'pokedex_number' => 799,
            'image' => 'image/69.png'
        ]);

        Pokemon::create([
            'name' => 'バチンウニ',
            'description' => 'エサを　消化するときに　電気を　生みだす。　５本の　硬い　歯で　海藻を　こそぎ落とし　食べる。',
            'pokedex_number' => 871,
            'image' => 'image/70.png'
        ]);

        Pokemon::create([
            'name' => 'デカヌチャン',
            'description' => '知能が　高く　とても　豪快。　ハンマーで　岩を　殴り飛ばして　空飛ぶ　アーマーガアを　狙う。',
            'pokedex_number' => 959,
            'image' => 'image/71.png'
        ]);
    }
}
