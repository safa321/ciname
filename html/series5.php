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

            <source src="../video/series5/video1.mp4" type="video/mp4" width="100%">
        </video>

    </div>

    <div class="introu">

        <div class="introu_contant">
            <div class="contant">
                <p>بنات صالح</p>
                <p>2020,دراما</p>
                <p>
                    أم تتولى رعاية بناتها الخمس، بعد دخول والدهن السجن في جريمة قتل، وتطلب منه الطلاق وتخبر بناتها أن والدهن قد توفي، وتتزوج برجل ثري، وتتشابك الأحداث بعد خروج الأب من السجن بعد مرور سنوات
                </p>

            </div>
        </div>
        <div class="introu_img">
            <div class="introu_img">
                <img src="../image/7.jpg">
            </div>
        </div>
    </div>

    <div class="tab">
        <div class="series5">
            <div class="card_img_series5">

                <img src="../image/7.jpg" onclick="changeVideo('../video/series5/video1.mp4')">
            </div>
            <div class="card_text">
                <p>الحلقة 1 </p>

            </div>
        </div>
        <div class="series5">
            <div class="card_img_series5">
                <img src="../image/7.jpg" onclick="changeVideo('../video/series5/video2.mp4')">
            </div>
            <div class="card_text">
                <p>الحلقة 2 </p>

            </div>
        </div>

        <div class="series5">
            <div class="card_img_series5">
                <img src="../image/7.jpg" onclick="changeVideo('../video/series5/video3.mp4')">
            </div>
            <div class="card_text">
                <p>الحلقة 3 </p>

            </div>
        </div>
        <div class="series5">
            <div class="card_img_series5">
                <img src="../image/7.jpg" onclick="changeVideo('../video/series5/video4.mp4')" />
            </div>
            <div class="card_text">
                <p>الحلقة 4 </p>

            </div>
        </div>
        <div class="series5">
            <div class="card_img_series5">
                <img src="../image/7.jpg" onclick="changeVideo('../video/series5/video5.mp4')" />
            </div>
            <div class="card_text">
                <p>الحلقة 5 </p>

            </div>
        </div>

        <div class="series5">
            <div class="card_img_series5">
                <img src="../image/7.jpg" onclick="changeVideo('../video/series5/video6.mp4')" />
            </div>
            <div class="card_text">
                <p>الحلقة 6 </p>

            </div>
        </div>

        <div class="series5">
            <div class="card_img_series5">
                <img src="../image/7.jpg" onclick="changeVideo('../video/series5/video7.mp4')" />
            </div>
            <div class="card_text">
                <p>الحلقة 7 </p>

            </div>
        </div>
        <div class="series5">
            <div class="card_img_series5">
                <img src="../image/7.jpg" onclick="changeVideo('../video/series5/video8.mp4')" />
            </div>
            <div class="card_text">
                <p>الحلقة 8 </p>

            </div>
        </div>
    </div>
    <h3>قد ترغب بالمشاهدة المزيد </h3>
    <div class="card" align="center">
        <div class="column">
            <div class="card_img">

                <a href="film1.html"> <img src="../image/film1.jpg"></a>

            </div>

            <div class="card_text">
                <a href="film1.html">
                    <p>
                        باي ذنب قتلت</p>
                </a>
                <p>2024,تاريخي</p>
            </div>
        </div>
        <div class="column">
            <div class="card_img">

                <a href="series1.html"> <img src="../image/8.jpg"></a>
            </div>
            <div class="card_text">
                <p>
                    حيرة </p>
                <p>2022,دراما</p>
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

                <a href=".html"> <img src="../image/6.jpg"></a>
            </div>
            <div class="card_text">
                <p>عروس بيروت </p>
                <p>2019,دراما</p>
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

                <a href=".html"> <img src="../image/9.jpg"></a>
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

    .tab {
        height: 130px;
        direction: rtl;
        transform: scaleX('25');
        border-radius: 15px;
        border: 2px solid;
        border-color: #1e2c36;
        display: flex;
        gap: 15px 2px;
        flex-flow: row;

        margin: 0px 4px;
        margin-bottom: 80px;

    }

    .tab .series5 .card_img_series5 img {
        border-radius: 15px;
        width: 100px;
        height: 80px;

    }




    .tab .series5 {
        margin: 5px;
        text-align: right;
        width: 150px;
        height: 100px;
    }
</style>

</html>