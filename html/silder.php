<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>silder</title>
    <link rel="stylesheet" href="stylemain.css">

</head>
<body>
<div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="../image/8.jpg">
                <div class="content">
                    <div class="author">Mahir Birav</div>
                    <div class="title">حيرة </div>
                    <div class="topic">دراما</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        في حكاية يتخللها الحب والانتقام يتوجب على عاشقين مواجهة مجتمع قاس ووالد متسلط عازم على منع
                        زواجهما

                    </div>
                    <div class="buttons">
                        <a href="series1.html" class="buttons" style=" text-decoration: none;"><button> مشاهد
                                الان</button></a>

                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../image/series2.jpg">
                <div class="content">
                    <div class="author">بهاء خداج</div>
                    <div class="title"> خان الذهب</div>
                    <div class="topic">دراما</div>
                    <div class="des">
                        تنقلب حياة شاب على وشك أن يصبح أبا رأسا على عقب عندما يتسبب خبر حمل زوجته بإطلاق سلسلة من
                        الأحداث المأساوية دون قصد
                    </div>
                    <div class="buttons">
                        <a href="series2.html" class="buttons" style=" text-decoration: none;"><button> مشاهد
                                الان</button></a>

                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../image/14.jpg">
                <div class="content">
                    <div class="author">Jorge R. Gutierrez</div>
                    <div class="title"> مايا والمحاربون
                    </div>
                    <div class="topic">رسوم متحركة</div>
                    <div class="des">
                        أميرة محاربة من أمريكا الوسطى تسعى لتجنيد ثلاثة مقاتلين أسطوريين للمساعدة في إنقاذ عالم الآلهة
                        والبشرية
                    </div>
                    <div class="buttons">
                        <a href="series3.html" class="buttons" style=" text-decoration: none;"><button> مشاهد
                                الان</button></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../image/13.jpg">
                <div class="content">
                    <div class="author">Efehan Aslan Ilker Baris Okan Basar Bahar</div>
                    <div class="title">اخواتي </div>
                    <div class="topic">دراما</div>
                    <div class="des">
                        تدور أحداث هذا المسلسل حول النضال المؤلم والمستمر لهؤلاء الأشقاء الأربعة الذين لم يتبقى لهم إلا
                        بعضهم البعض بعد فقدانهم لوالديهم في تسلسل أحداث مؤسف

                    </div>
                    <div class="buttons">
                        <a href="series4.html" class="buttons" style=" text-decoration: none;"><button> مشاهد
                                الان</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="../image/8.jpg">
                <div class="content">
                    <div class="title">
                        حيرة </div>
                    <div class="description">
                        دراما
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../image/series2.jpg">
                <div class="content">
                    <div class="title">
                        خان الذهب </div>
                    <div class="description">
                        دراما
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../image/14.jpg">
                <div class="content">
                    <div class="title">
                        مايا والمحاربون </div>
                    <div class="description">
                        رسوم متحركة
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../image/13.jpg">
                <div class="content">
                    <div class="title">
                        اخواتي </div>
                    <div class="description">
                        دراما
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path
                        d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                </svg></button>
            <button id="next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path
                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg></button>
        </div>
        <!-- time running -->
        <div class="time"></div>

    </div>
    <script src="app.js"></script>

</body>
</html>