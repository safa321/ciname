<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema in Your Hands</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
<?php include_once('./navbar.php'); ?>

    <div id="video-container">
        <video id="video-player" controls>
            
                <source src="../video/flim1/film1.mp4" type="video/mp4" width="100%">
            </video>
            
        </div>
    
    <div class="introu">

        <div class="introu_contant">
            <div class="contant">
                <p> باي ذنب قتلت</p>
                <p>2024,تاريخي</p>
<p>
    يحكي احداثاً تاريخية واقعية في الساعات الاولى التي مر بها آل النبي محمد صلى الله عليه واله بعد وفاته
</p>

            </div>
        </div>
        <div class="introu_img">
            <div class="introu_img">
                <img src="../image/film1.jpg">
            </div>
        </div>
    </div>

<br>
   
<h3>قد ترغب بالمشاهدة المزيد </h3>
<div class="card" align="center">
    <div class="column">
        <div class="card_img">

         <a href="series1.html" > <img src="../image/8.jpg"></a> 
        </div>
        <div class="card_text">
            <p>
                حيرة </p>
            <p>2022,دراما</p>
        </div>
    </div>
    <div class="column">
        <div class="card_img">

            <a href="series2.html"><img src="../image/series2.jpg"></a>
        </div>
        <div class="card_text">
            <p>خان الذهب </p>
            <p>2023,دراما</p>
        </div>
    </div>
    <div class="column">
        <div class="card_img">

            <a href="series.html"> <img src="../image/5.gif"></a>
        </div>
        <div class="card_text">
            <p>عدنان ولينا</p>
            <p>1978,مغامرة</p>
        </div>
    </div>
    <div class="column">
        <div class="card_img">

            <a href="film1.html"> <img src="../image/6.jpg"></a>
        </div>
        <div class="card_text">
            <p>عروس بيروت </p>
            <p>2019,دراما</p>
        </div>
    </div>
    <div class="column">
        <div class="card_img">

            <a href="series5.html"> <img src="../image/7.jpg"></a>
        </div>
        <div class="card_text">
            <p>بنات صالح</p>
            <p>2020,دراما</p>
        </div>
    </div>
    <div class="column">
        <div class="card_img">

            <a href="film1.html"> <img src="../image/9.jpg"></a>
        </div>
        <div class="card_text">
            <p>ستيلتو</p>
            <p>2022,دراما</p>
        </div>
    </div>
</div>

</body>
<script>
function changeVideo(newVideoSrc) {
    var videoPlayer = document.getElementById('video-player');
    videoPlayer.src = newVideoSrc;
    videoPlayer.load();
    videoPlayer.play();
}
</script>
<style>
h3 {
    text-align: right;
    margin-right: 25px;
}

.contant {
    text-align: right;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}


.columns {
    text-align: center;
    margin-left: 50px;
}


video {
    width: 100%;
    height: 90dvh;
    background-color: black;
}

hr {
    color: cornflowerblue;
}

.introu {
    margin-top: 6px;
    margin-bottom: 10px;

    width: 98%;
    height: 180px;
    display: flex;
    gap: 15px 2px;
    flex-flow: row wrap;
    justify-content: right;
}

.introu .introu_img img {
    height: 180px;
    width: 200px;
}

</style>

</html>