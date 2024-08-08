<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>
    <div class="navbar">
        <div class="right">

            <a href="index.html">
                الصفحة الرئيسية
            </a>

            <div class="dropdown">
                <button class="dropbtn">اصناف</button>
                <div class="dropdown-content">
                    <a href="#">دراما</a>
                    <a href="#"> اكشن</a>
                    <a href="#"> رسوم متحركة</a>
                </div>
            </div>

        </div>
        <div class="search">
            <form action="/action_page.php">
                <input class="form-control" list="browsers" name="browser" id="browser">
                <datalist id="browsers">
                  <option value="Edge">
                  <option value="Firefox">
                  <option value="Chrome">
                  <option value="Opera">
                  <option value="Safari">
                </datalist>    
                <button type="submit" class="btn btn-primary mt-3">بحث</button>
              </form>
        </div>
        <div class="left">
            <a href="all.html">
                انشاء حساب
            </a>
            <a href="login.html">
                تسجيل دخول
            </a>

        </div>
        <div id="changemode">
            <button type="button" id="backmode"></button>
        </div>
    </div>
    <script type="text/javascript" src="./card.js"></script>
    
</body>

</html>