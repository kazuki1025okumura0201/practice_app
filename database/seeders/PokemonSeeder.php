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
            'description' => 'うまれてから　しばらくの　あいだは　せなかの　タネから　えいようを　もらって　おおきく　そだつ。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 1,
            'image' => 'image/1.png'
        ]);

        Pokemon::create([
            'name' => 'フシギソウ',
            'description' => 'せなかの　つぼみが　ふくらみだすと　あまい　においが　ただよいはじめる。　たいりんの　はなが　さく　まえぶれ。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 2,
            'image' => 'image/2.png'
        ]);

        Pokemon::create([
            'name' => 'フシギバナ',
            'description' => 'あめの　ふった　よくじつは　せなかの　はなの　かおりが　つよまる。　かおりに　さそわれ　ポケモンが　あつまる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 3,
            'image' => 'image/3.png'
        ]);

        Pokemon::create([
            'name' => 'ヒトカゲ',
            'description' => 'ヒトカゲの　しっぽの　ほのおは　いのちの　ともしび。　げんきな　ときは　ほのおも　ちからづよく　もえあがる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 4,
            'image' => 'image/4.png'
        ]);

        Pokemon::create([
            'name' => 'リザード',
            'description' => 'リザードが　くらす　いわやまを　よなかに　みあげると　しっぽの　ほのおが　ほしのように　みえる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 5,
            'image' => 'image/5.png'
        ]);

        Pokemon::create([
            'name' => 'リザードン',
            'description' => 'くるしい　たたかいを　けいけんした　リザードンほど　ほのおの　おんどが　たかくなると　いわれている。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 6,
            'image' => 'image/6.png'
        ]);

        Pokemon::create([
            'name' => 'ゼニガメ',
            'description' => 'こうらに　とじこもり　みを　まもる。　あいての　すきを　みのがさず　みずを　ふきだして　はんげきする。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 7,
            'image' => 'image/7.png'
        ]);

        Pokemon::create([
            'name' => 'カメール',
            'description' => 'いちまんねんの　じゅみょうを　もつと　いわれている。　ふさふさの　しっぽは　ながいきの　シンボルとして　にんき。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 8,
            'image' => 'image/8.png'
        ]);

        Pokemon::create([
            'name' => 'カメックス',
            'description' => 'こうらの　ロケットほうから　ふきだす　すいりゅうは　ぶあつい　てっぱんも　いっぱつで　つらぬく　はかいりょく。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 9,
            'image' => 'image/9.png'
        ]);

        Pokemon::create([
            'name' => 'キャタピー',
            'description' => 'あかい　しょっかくから　においを　だして　てきを　おいはらう。　だっぴを　くりかえし　おおきくなる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 10,
            'image' => 'image/10.png'
        ]);

        Pokemon::create([
            'name' => 'トランセル',
            'description' => 'こうてつのように　かたい　カラで　やわらかい　なかみを　まもっている。　しんかするまで　じっと　たえている。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 11,
            'image' => 'image/11.png'
        ]);

        Pokemon::create([
            'name' => 'バタフリー',
            'description' => 'はなの　ミツが　だいこうぶつ。　わずかな　かふんで　はなばたけの　ばしょを　さがしだすことが　できる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 12,
            'image' => 'image/12.png'
        ]);

        Pokemon::create([
            'name' => 'ビードル',
            'description' => 'まいにち　じぶんと　おなじ　おもさの　はっぱを　たべる。　あたまの　ハリで　おそってきた　てきを　げきたい。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 13,
            'image' => 'image/13.png'
        ]);

        Pokemon::create([
            'name' => 'コクーン',
            'description' => 'てんてきに　みつからないように　はっぱの　うらや　えだの　すきまに　かくれて　しんかの　ときを　まつ。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 14,
            'image' => 'image/14.png'
        ]);

        Pokemon::create([
            'name' => 'スピアー',
            'description' => 'こうそくで　とびまわり　どくバリで　こうげきしたあと　すぐに　とびさる　せんぽうが　とくいわざだ。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 15,
            'image' => 'image/15.png'
        ]);

        Pokemon::create([
            'name' => 'ポッポ',
            'description' => 'たたかいを　このまない　おとなしい　せいかくだが　へたに　てを　だすと　きょうれつに　はんげきされるぞ。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 16,
            'image' => 'image/16.png'
        ]);

        Pokemon::create([
            'name' => 'ピジョン',
            'description' => 'ひろい　なわばりを　とびまわりながら　えものを　さがす。　はったつした　あしの　ツメで　えものを　しとめる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 17,
            'image' => 'image/17.png'
        ]);

        Pokemon::create([
            'name' => 'ピジョット',
            'description' => 'ピジョットが　ちからいっぱい　はばたくと　たいぼくも　しなるほどの　きょうふうを　まきおこす。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 18,
            'image' => 'image/18.png'
        ]);

        Pokemon::create([
            'name' => 'コラッタ',
            'description' => 'どんな　ばしょにも　すみついて　いきていける　せいめいりょく。　けいかいしんが　とても　つよい。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 19,
            'image' => 'image/19.png'
        ]);

        Pokemon::create([
            'name' => 'ラッタ',
            'description' => 'のびつづける　まえばを　けずるため　かたい　ものを　かじる　しゅうせい。　ブロックべいも　かじって　こわす。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 20,
            'image' => 'image/20.png'
        ]);

        Pokemon::create([
            'name' => 'オニスズメ',
            'description' => 'ちいさな　つばさを　いそがしく　はばたかせて　とぶ。　くさむらにいる　えものを　くちばしで　さがしだす。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 21,
            'image' => 'image/21.png'
        ]);

        Pokemon::create([
            'name' => 'オニドリル',
            'description' => 'おおきな　つばさで　１にちじゅう　とびまわる　たいりょくの　もちぬし。　するどい　くちばしで　たたかう。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 22,
            'image' => 'image/22.png'
        ]);

        Pokemon::create([
            'name' => 'アーボ',
            'description' => 'おとを　まったく　たてずに　くさちの　なかを　すすむ。　ゆだんしている　えものに　はいごから　おそいかかる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 23,
            'image' => 'image/23.png'
        ]);

        Pokemon::create([
            'name' => 'アーボック',
            'description' => 'おなかの　もようで　てきを　いかく。　もように　おびえて　うごけなくなった　すきに　からだで　しめつける。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 24,
            'image' => 'image/24.png'
        ]);

        Pokemon::create([
            'name' => 'ピカチュウ',
            'description' => '頬に　電気を溜めし　袋を　有す。　森林を　棲み処とし　硬き　木の実は　電撃で　焼き　食べる　知恵者なり。　（『Pokémon LEGENDS アルセウス』より）',
            'pokedex_number' => 25,
            'image' => 'image/25.png'
        ]);

        Pokemon::create([
            'name' => 'ライチュウ',
            'description' => '尻尾が　アースの　役目をはたして　電気を　地面に　逃がすので　自分自身は　しびれたりしない。　（『ポケットモンスター スカーレット』より）',
            'pokedex_number' => 26,
            'image' => 'image/26.png'
        ]);

        Pokemon::create([
            'name' => 'サンド',
            'description' => 'あめが　ほとんど　ふらない　かんそうした　とちに　せいそく。　からだを　まるめて　みを　まもる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 27,
            'image' => 'image/27.png'
        ]);

        Pokemon::create([
            'name' => 'サンドパン',
            'description' => 'からだを　まるめて　せなかから　たいあたり。　するどい　トゲトゲが　おおきな　ダメージを　あたえる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 28,
            'image' => 'image/28.png'
        ]);

        Pokemon::create([
            'name' => 'ニドラン♀',
            'description' => 'たたかいを　このまない　せいかく。　どくバリから　ぶんぴつされる　どくは　ひとしずくでも　いのちとりだ。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 29,
            'image' => 'image/29.png'
        ]);

        Pokemon::create([
            'name' => 'ニドリーナ',
            'description' => 'きけんを　かんじると　ぜんしんの　トゲを　さかだてる。　ニドリーノに　くらべて　トゲの　そだちが　おそい。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 30,
            'image' => 'image/30.png'
        ]);

        Pokemon::create([
            'name' => 'ニドクイン',
            'description' => 'よろいのように　かたい　ウロコが　ぜんしんを　つつむ。　すあなの　こどもを　いのちがけで　まもる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 31,
            'image' => 'image/31.png'
        ]);

        Pokemon::create([
            'name' => 'ニドラン♂',
            'description' => 'くさむらの　うえに　みみだけ　だして　まわりの　けはいを　さぐる。　もうどくの　ツノで　みを　まもる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 32,
            'image' => 'image/32.png'
        ]);

        Pokemon::create([
            'name' => 'ニドリーノ',
            'description' => 'きしょうが　あらい　ポケモン。　あいてに　つきさした　しょうげきで　ツノから　もうどくが　にじみでる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 33,
            'image' => 'image/33.png'
        ]);

        Pokemon::create([
            'name' => 'ニドキング',
            'description' => 'しっぽの　いちげきは　でんちゅうを　まるで　マッチぼうのように　まっぷたつに　へしおってしまう。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 34,
            'image' => 'image/34.png'
        ]);

        Pokemon::create([
            'name' => 'トゲキッス',
            'description' => 'もめごとの　おこる　ばしょには　けっして　あらわれない。　ちかごろは　すがたを　みかけなくなった。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 468,
            'image' => 'image/35.png'
        ]);

        Pokemon::create([
            'name' => 'メガボーマンダ',
            'description' => 'やいばのように　するどい　はねでゆくてを　さえぎるもの　すべてをまっぷたつにし　とびつづける。　（『ポケットモンスター サン』より',
            'pokedex_number' => 373,
            'image' => 'image/36.png'
        ]);

        Pokemon::create([
            'name' => 'シャリタツ',
            'description' => '小型の　ドラゴンポケモン。　ヘイラッシャの　口の中に　棲み　外敵から　身を　守っている。　（『ポケットモンスター スカーレット』より',
            'pokedex_number' => 978,
            'image' => 'image/37.png'
        ]);

        Pokemon::create([
            'name' => 'ヨクバリス',
            'description' => '木の実の　木を　見つけると　たとえ　戦いの　最中であっても　一目散に　収穫に　行く。　（『ポケットモンスター スカーレット』より）',
            'pokedex_number' => 820,
            'image' => 'image/38.png'
        ]);

        Pokemon::create([
            'name' => 'ユキノオー',
            'description' => '<p>万年雪が　積もる　山脈で　静かに　暮らす。　ブリザードを　発生させて　姿を　隠す。　（『ポケットモンスター スカーレット』より）</p>',
            'pokedex_number' => 460,
            'image' => 'image/39.png'
        ]);

        Pokemon::create([
            'name' => 'バンギラス',
            'description' => '<p>万年雪が　積もる　山脈で　静かに　暮らす。　ブリザードを　発生させて　姿を　隠す。　（『ポケットモンスター スカーレット』より）</p>',
            'pokedex_number' => 248,
            'image' => 'image/40.png'
        ]);

        Pokemon::create([
            'name' => 'タチフサグマ',
            'description' => '<p>すさまじい　せいりょうを　もつ。　シャウトとともに　いかくするさまは　ブロッキングと　よばれている。　（『ポケットモンスター ソード』より）</p>',
            'pokedex_number' => 862,
            'image' => 'image/41.png'
        ]);

        Pokemon::create([
            'name' => 'サーナイト',
            'description' => '<p>トレーナーを　守るためなら　サイコパワーを　使いきり　小さな　ブラックホールを　作り出す。　（『ポケットモンスター スカーレット』より）</p>',
            'pokedex_number' => 282,
            'image' => 'image/42.png'
        ]);

        Pokemon::create([
            'name' => 'ヌメイル',
            'description' => '<p>背中の　渦巻き状の　突起に　脳や　心臓など　大事な　器官が　すべて　詰まっている。　（『ポケットモンスター スカーレット』より）</p>',
            'pokedex_number' => 705,
            'image' => 'image/43.png'
        ]);

        Pokemon::create([
            'name' => 'パンプジン',
            'description' => '<p>まよなかに　どうたいから　ひびく　ぶきみな　なきごえは　あのよで　くるしむ　ししゃの　なきごえらしい。　（『ポケットモンスター ソード』より）</p>',
            'pokedex_number' => 711,
            'image' => 'image/44.png'
        ]);

        Pokemon::create([
            'name' => 'ウルガモス',
            'description' => '<p>まよなかに　どうたいから　ひびく　ぶきみな　なきごえは　あのよで　くるしむ　ししゃの　なきごえらしい。　（『ポケットモンスター ソード』より）</p>',
            'pokedex_number' => 637,
            'image' => 'image/45.png'
        ]);

        Pokemon::create([
            'name' => 'ミカルゲ',
            'description' => '<p>いつも　悪さばかり　していたら　不思議な　術で　本体を　要石に　縛りつけられた。　（『ポケットモンスター スカーレット』より）</p>',
            'pokedex_number' => 442,
            'image' => 'image/46.png'
        ]);

        Pokemon::create([
            'name' => 'ウインディ',
            'description' => '<p>草原を　駆け抜ける　様子は　人々の　心を　虜にしたと　昔の　絵巻に　記されていた。　（『ポケットモンスター スカーレット』より）</p>',
            'pokedex_number' => 59,
            'image' => 'image/47.png'
        ]);

        Pokemon::create([
            'name' => 'トリトドン（にしのうみ）',
            'description' => '<p>全身　粘液で　べとべと。　昔は　この姿の　ほうが　圧倒的に　数が　多かった。　（『ポケットモンスター スカーレット』より）</p>',
            'pokedex_number' => 423,
            'image' => 'image/48.png'
        ]);

        Pokemon::create([
            'name' => 'トリトドン（ひがしのうみ）',
            'description' => '<p>昔は　あまり　見なかったが　今は　この姿の　トリトドンが　増えていると　漁師は　語る。　（『ポケットモンスター バイオレット』より）</p>',
            'pokedex_number' => 423,
            'image' => 'image/49.png'
        ]);

        Pokemon::create([
            'name' => 'ミュウ',
            'description' => 'あらゆる　わざを　つかうため　ポケモンの　せんぞと　かんがえる　がくしゃが　たくさん　いる。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より',
            'pokedex_number' => 151,
            'image' => 'image/50.png'
        ]);

        Pokemon::create([
            'name' => 'エンテイ',
            'description' => '<p>エンテイが　ほえると　せかいの　どこかの　かざんが　ふんかすると　いわれている。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）</p>',
            'pokedex_number' => 244,
            'image' => 'image/51.png'
        ]);

        Pokemon::create([
            'name' => 'ムゲンダイナ',
            'description' => '<p>むねの　コアが　ガラルちほうの　だいちから　わきだす　エネルギーを　きゅうしゅうして　かつどうしている。　（『ポケットモンスター ソード』より）</p>',
            'pokedex_number' => 890,
            'image' => 'image/52.png'
        ]);

        Pokemon::create([
            'name' => 'イーブイ',
            'description' => '<p>不規則な　遺伝子を　持つ。　石から出る　放射線によって　体が　突然変異を　起こす。　（『ポケットモンスター バイオレット』より）</p>',
            'pokedex_number' => 133,
            'image' => 'image/53.png'
        ]);

        Pokemon::create([
            'name' => 'グレイシア',
            'description' => '<p>体温を　自在に　コントロールし　大気の　水分を　凍らせて　ダイヤモンドダストを　巻き起こす。　（『ポケットモンスター スカーレット』より）</p>',
            'pokedex_number' => 471,
            'image' => 'image/54.png'
        ]);

        Pokemon::create([
            'name' => 'レジギガス',
            'description' => 'なわで　しばった　たいりくを　ひっぱって　うごかしたという　でんせつが　のこされている。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 48,
            'image' => 'image/55.png'
        ]);

        Pokemon::create([
            'name' => 'ルギア',
            'description' => 'なわで　しばった　たいりくを　ひっぱって　うごかしたという　でんせつが　のこされている。　（『ポケットモンスター ブリリアントダイヤモンド・シャイニングパール』より）',
            'pokedex_number' => 249,
            'image' => 'image/56.png'
        ]);

        Pokemon::create([
            'name' => 'マギアナ',
            'description' => '<p>５００ねんいじょうまえに　つくられたじんぞうポケモン。　ひとの　ことばをりかいするが　しゃべれない。　（『ポケットモンスター サン』より）</p>',
            'pokedex_number' => 801,
            'image' => 'image/57.png'
        ]);

        Pokemon::create([
            'name' => 'レックウザ',
            'description' => '<p>５００ねんいじょうまえに　つくられたじんぞうポケモン。　ひとの　ことばをりかいするが　しゃべれない。　（『ポケットモンスター サン』より）</p>',
            'pokedex_number' => 384,
            'image' => 'image/58.png'
        ]);
    }
}
