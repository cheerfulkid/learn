<!DOCTYPE html><!-- 宣告文件類型 -->
<html lang="zh-tw"><!-- 指定網頁使用的語言 -->
<head>
    <meta charset="utf-8"><!-- 指定網頁編碼 -->
    <title></title>
    <style>
        form {
            width: 600px;
            margin:20px auto 0 auto;
            position: relative;
        }
        body {
            background: GOLDENROD;
            font-family: '微軟正黑體';
        }
        fieldset {
            border: 2px solid #000;
            background: rgba(255,255,255,0.5);
        }
        legend {
            font-weight: bold;
            font-size: 1.5em;
            letter-spacing: 2px;
            background: #fff;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 5px 5px 10px #000;
            margin-bottom: 10px;
        }
        div {
            text-align: center;
        }
        .btn {
            background: GOLD;
            border: 1px solid #000;
            border-bottom: 5px solid #000;
            border-radius: 6px;
            padding: 10px;
            font-family: '微軟正黑體';
            font-size: 1.2em;
            transition: all .3s;
        }
        .btn:hover {
            cursor: pointer;
        }
        .btn:focus {
            border-bottom: 1px solid #000;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <form method="GET" action="05-2.php">
        <fieldset>
            <legend>個人資訊</legend>
            姓    名：<input type="text" name="username"><br>
            性    別：<input type="radio" name="sex" value="male" checked>男 <input type="radio" name="sex" value="female">女<br>
            最高學歷：<select name="edu"><option value="高中以下">高中以下</option><option value="大專院校">大專院校</option><option value="碩士">碩士</option><option value="博士">博士</option><option value="其它">其它</option></select>
        </fieldset>
        <br>
        <fieldset>
            <legend>其它資訊</legend>
            您喜歡下列哪些活動（可複選）？<input type="checkbox" name="activity[0]" value="閱讀" checked>閱讀  <input type="checkbox" name="activity[1]" value="打球">打球  <input type="checkbox" name="activity[2]" value="逛街">逛街  <input type="checkbox" name="activity[3]" value="聽音樂">聽音樂  <input type="checkbox" name="activity[4]" value="水上運動">水上運動  <input type="checkbox" name="activity[5]" value="旅行">旅行<br>
            您對於使用臉書經營社群有何看法？<br>
            <textarea name="thought" rows="4" cols="50"></textarea>
        </fieldset>
        <br>
        <div>
            <input class="btn" type="submit" value="傳送資料">&emsp;&emsp;<input class="btn" type="reset" value="清除資料">
        </div>
    </form>
</body>
</html>
