<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/snippet/config.php';
$slug = 'item'; //仮のスラッグを指定
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>バトルステーション　コンポーネント集</title>
<link rel="stylesheet" href="assets/css/style.css">
<style>
    .comp-page-tit {
        padding: 25px 0 35px;
        font-size: 3.8rem;
        font-weight: bold;
        text-align: center;
    }
    .comp-tit {
        width: 92%;
        max-width: 1160px;
        margin: 0 auto;
        font-size: 3.2rem;
        margin-bottom: 15px;
        border-bottom: 1px solid #000;
    }
    .comp-tit {
        width: 92%;
        max-width: 1160px;
        margin: 0 auto;
        font-size: 2.4rem;
        margin-bottom: 15px;
    }
    .comp-bg {
        padding: 20px 0;
        background-color: #42210B;
    }
</style>
</head>
<body>
<div id="app">

<h1 class="comp-page-tit">コンポーネント集</h1>

<!-- # =================== パンくず ================= # -->
<h2 class="comp-tit">パンくず</h2>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/snippet/breadcrumb.php'; ?>

<br><br><br>

<!-- # =================== タイトル ================= # -->
<h2 class="comp-tit">タイトル</h2>

<div class="inner">

    <h2 class="tit wow animate__fadeIn">タイトル<span>title</span></h2>
    
    <br>
    
    <h2 class="tit is-left wow animate__fadeIn">タイトル（左寄せ）<span>title</span></h2>
    
    <br>
    
    <div class="comp-bg">
        <h2 class="tit is-w wow animate__fadeIn">タイトル（白）<span>title</span></h2>
    </div>

</div>

<br><br><br>

<!-- # =================== ボタン ================= # -->
<h2 class="comp-tit">ボタン</h2>

<div class="inner">
    
    <div class="btn wow animate__fadeIn">
        <a href="">ボタン</a>
    </div>
    
    <br>
    
    <div class="btn is-s wow animate__fadeIn">
        <a href="">ボタン（小さい）</a>
    </div>
    
    <br>
    
    <div class="comp-bg">
        <div class="btn is-w wow animate__fadeIn">
            <a href="">ボタン（白）</a>
        </div>
    </div>

</div>

<br><br><br>

<!-- # =================== テーブル ================= # -->
<h2 class="comp-tit">テーブル</h2>

<div class="inner">
    
    <!-- table -->
    <table class="table wow animate__fadeIn">
        <tr>
            <th class="table__th">タイトルタイトル</th>
            <td class="table__td">テキストテキストテキストテキスト</td>
        </tr>
        <tr>
            <th class="table__th">タイトルタイトル</th>
            <td class="table__td">テキストテキストテキストテキスト</td>
        </tr>
        <tr>
            <th class="table__th">タイトルタイトル</th>
            <td class="table__td">テキストテキストテキストテキスト</td>
        </tr>
    </table><!-- ./table -->

</div>

<br><br><br>

<!-- # =================== アコーディオン ================= # -->
<h2 class="comp-tit">アコーディオン</h2>

<div class="inner">
    
    <!-- aco -->
    <aco>
        <template v-slot:head>ヘッド</template>
        <template v-slot:body>
            <p class="aco__txt">
                中身中身中身中身中身<br>
                中身中身中身中身中身<br>
                中身中身中身中身中身<br>
                中身中身中身中身中身<br>
                中身中身中身中身中身
            </p>
        </template>
    </aco><!-- ./aco -->

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div><!-- #app -->
<script src="/assets/js/main.js"></script>
</body>
</html>