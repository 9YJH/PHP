<?php
    include("setting.inc")
?>

<html>

<head>
    <meta charset="utf-8"> 
    <title> 資管晚會報名表 </title>
</head>

<body background = "party.jpg">
    <center><font size=7><b>-資管晚夜報名表- </b></font></center>
    <font size=3>
    <br/>
    資管晚會開跑嚕！邀請你一銅共襄盛舉！</br>
    活動時間：12/30(五) 18:00-21:00 </br> 
    有超好吃的甜點以及精美的獎品！請大家踴躍報名參加!!</br>
    </font>
    <p>
</body>

<form action="reply.php" method="post">
    姓名：<input type="text" name="sName" value="" placeholder="請打上你的姓名" required></br>
    學號：<input type="text" name="sID" value="" placeholder="請打上你的學號" required></br>
    系級：<input type="text" name="sLevel" value="" placeholder="請打上你的年級和科系" required></br>
    生日：
    <input type="date" name="sDate" value="">
    <br/>
    性別：
    <input type="radio" name="sGender" value="男">男
    <input type="radio" name="sGender" value="女" checked>女    
    </br>
    是否團體報名：
    <input type="radio" name="sParticipants" value="是">是
    <input type="radio" name="sParticipants" value="否" checked>否</br>  
    一同參與人數：<input type="number" name="sNumber" placeholder="若沒有免填" ><br/>
    一同參與人的學號、姓名：<input type="text" name="sName1" value="" placeholder="若沒有免填"  ></br>
    <P>
    </select>
    </br>
    <p>
    E-mail：<input type="email" name="sEmail" placeholder="請留下學校的信箱"><br/>
    你的寶貴意見是對我們最大的支持：<br/>
    <textarea name="sComment" value="" rows="8" cols="40">
    </textarea>
    <p>
    <p>
    <input type="submit" value="送出">
    <input type="reset" value="重整表單">
</form>
</html>
<?php
        if(isset($_SESSION["check"])) {
            if($_SESSION["check"] == "No") {
                header("Location:fail.php");
            }
        } else {
            header("Location:fail.php");
        }
?>