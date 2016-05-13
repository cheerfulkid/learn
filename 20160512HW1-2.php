<!DOCTYPE html><!-- 宣告文件類型 -->
<html lang="zh-tw"><!-- 指定網頁使用的語言 -->
<head>
    <meta charset="utf-8"><!-- 指定網頁編碼 -->
    <title></title>
    <style>
        body {
            background: PALEVIOLETRED;
            font-family: '微軟正黑體';            
        }
        div {
            width:550px;
            margin: 20px auto 0 auto;
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 1px 1px 20px #000;
        }
        div.content {
            font-size: 2em;
            padding: 0;
            box-shadow: none;
        }
        h1 {
            font-size: 3em;
            text-align: center;
            letter-spacing: 2px;
            margin: 0;
        }
    </style>
    <script>
// 如何讓 checkbox 至少要勾一項 否則無法通過送出?
//        window.onload=function(){
//            var aF = document.getElementsByTagName('fieldset')[1];
//            var aL = aF.getElementsByTagName('input');
//            var aD = document.getElementsByTagName('div')[0];
//            var aB = aD.getElementsByTagName('input')[0];
//            
//            aB.onclick = function(){
//                if(){
//                alert('活動請至少選一項');
//                }
//            };
//            
//        };
    </script>
</head>
<body>
    <?php
        if($_GET["sex"]=="male"){
           $a = "先生";
        }else{
           $a = "女士";
        }
        echo '<div>';
        echo "<h1>" . $_GET["username"] . '&nbsp;' . $a . "您好！</h1><br>";
        echo '<div class="content">';        
        switch ($_GET["edu"]){
            case "高中以下":
                echo "<strong>您的學歷為：</strong><br>高中以下<br><br><br>";
                break;
            case "大專院校":
                echo "<strong>您的學歷為：</strong><br>大專院校<br><br><br>";
                break;
            case "碩士":
                echo "<strong>您的學歷為：</strong><br>碩士<br><br><br>";
                break;
            case "博士":
                echo "<strong>您的學歷為：</strong><br>博士<br><br><br>";
                break;
            default:
                echo "<strong>您的學歷為：</strong><br>其它<br><br><br>";
        }
        
        echo "<strong>您喜歡的活動如下：</strong><br>";
        echo "<ul>";
        foreach($_GET["activity"] as $value){
            echo "<li>" . $value . "</li>";
        }
        echo "</ul><br>";
        echo "<strong>您對於使用臉書經營社群有何看法為：</strong><br>";
        echo $_GET["thought"];
        echo '</div>';
        echo '</div>';
    ?>
</body>
</html>