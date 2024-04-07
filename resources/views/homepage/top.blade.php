<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>デスペラード</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('css/top.css?20240406') }}"> <!-- CSSファイルのパスを指定 -->
    <link rel="icon" href="{{ secure_asset('img/ロゴデスペ.png') }}" type="image/x-icon">
    
    <!-- Meta Tags for SEO -->
    <meta name="description" content="デスペラードは高崎経済大学の非公認草野球サークルです。高崎経済大学で楽しい野球ライフを送りましょう。">
    <meta name="keywords" content="デスペラード, 高崎経済大学, 草野球, 野球サークル">
    <meta name="author" content="Your Name">
    <meta name="robots" content="index, follow"> <!-- クローラーにインデックスとフォローを許可 -->
    <!-- Google Mapsのスクリプトを修正 -->
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFpv91YFKQTqIsHlVuvzoSmzf1J81DBL4&callback=initMap" async></script>
    <style>
        body {
            background-image: url('{{ secure_asset('img/背景.jpg') }}');
            background-position: center;
            background-attachment: fixed;
            background-color: rgba(255, 255, 255, 0.1);
            background-size: cover; /* 画像をカバーするように拡大縮小 */
            /* 他の必要なスタイル */
            margin: 0; /* デフォルトのマージンをリセット */
            padding: 0; /* デフォルトのパディングをリセット */
            /* その他のサイト全体のスタイル */
        }
    </style>
</head>

<body>

<div class='heading'>
    <img class='hyousi' src="{{ secure_asset('img/表紙.jpg') }}" alt="表紙の画像です">
    <h1 class='kakugenn'>
        ユルい野球ほど楽しいものはない
    </h1>
</div>

<div class='achievements'>
    <h1 class='dendou'>田頭杯2022年大会優勝！</h1>
    <div class='comment'>
        <p>
            高崎経済大学で行われる<br>
            冬の早朝野球大会である田頭杯。<br>
            ２３チームが集う２０２２年大会で<br>
            見事優勝することができました。<br>
        </p>
    </div>
</div>

<div class='recruitment'>
    <h1 class='daimei1'>
        2024
        新メンバー
        募集中
    </h1>
    <a class='instagram' href="https://www.instagram.com/desperado_2024?igsh=ZGsxNHd0bHlvMGVq">
        新歓instagramアカウントはこちら
    </a>
</div>

<div class='overview'>
    <img class='jinbutu' src="{{ secure_asset('img/良助.jpg') }}" alt="イメージ画像です">
    <h1 class='daimei2'>
        デスペラードとは
    </h1>
    <div class='comment2'>
        デスペラードとは
        高崎経済大学の非公認野球サークルである。<br>
        非公認らしく、非常に自由に活動しているのが<br>
        当サークルの特徴である。<br>
        活動する日は基本土曜日のみ。<br>
        そのため気軽に入部して野球を楽しむことが出来る。<br>
        気ままな野球lifeを過ごしたい方はぜひデスペラードまで<br>
    </div>
</div>

<div class='counts'>
    <h1 class='daimei'>
        所属人数
    </h1>
    <div class='table'>
        <table>
            <tr> <!-- 1行目 -->
                <td>1年生</td>
                <td>2年生</td>
                <td>3年生</td>
                <td>4年生</td>
            </tr>
            <tr> <!-- 2行目 -->
                <td>未定</td>
                <td>５（３）</td>
                <td>１４（０）</td>
                <td>６（０）</td>
            </tr>
        </table>
        （）はそのうちマネージャーの人数。
    </div>
</div>

<div class='schedule'>
    <h1 class='schedule_daimei'>
        スケジュール
    </h1>
    <div class='schedule_hyou'>
        <p>４月：新入生歓迎会,モーニング杯,GET杯</p>
        <p>７月：前期納会</p>
        <p>８月：夏合宿</p>
        <p>10月：オータム杯</p>
        <p>11月：田頭杯</p>
        <p>12月：後期納会</p>
        <p>３月：卒業記念試合</p>
    </div>
</div>

<div class='place'>
    <h1 class='map_daimei'>
        活動場所：町屋橋運動広場
    </h1>
    <!-- マップを表示するためのdiv要素 -->
    <div class='map' id="map"></div>
    <div class='map_comment'>
        ここが普段の活動場所です！（大学から自転車で15分弱）
    </div>
</div>

<div class='eikou'>
    <img class='batta' src="{{ secure_asset('img/野球_フォーム-removebg-preview.png') }}" alt="実績の画像です">
    <div class='eikoubun'>
        <h1 class='daimei3'>
            大会実績
        </h1>
        <div class='comment3'>
            2001年GETリーグ優勝<br>2006年GET　UNION優勝<br>2021年GETG4 優勝<br>第4回田頭杯2021準優勝<br>2022年GETG3準優勝<br>第5回田頭杯2022優勝<br>
        </div>
    </div>
    <img class='pittya' src="{{ secure_asset('img/ダウンロード-removebg-preview.png') }}" alt="実績の画像です">
</div>
        
<script>
　　window.onload = function() {
        initMap();
    };
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 36.350916, lng: 138.965597}, // 中心地を高崎市の座標に設定
            zoom: 14 // ズームレベル
        });
        var marker = new google.maps.Marker({
            position: {lat: 36.355987, lng: 138.954202}, // 運動広場の座標
            map: map,
            title: '高崎市町屋橋運動広場'
        });
    }
</script>
</body>
</html>
