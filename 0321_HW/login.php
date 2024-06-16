<?php
    include("setting.inc")
?>

<html>
<head>
    <meta charset="utf-8"> 
</head>
    
<body>
    if($_SESSION["check"]=="Yes"){
        if(isset($_COOKIE["userName"])){
            echo $_COOKIE["userName"]."歡迎回來!!<br/>";
    }}else{
        echo "初次登入成功!!<br/>";
    }
    ?>
    <br/><br/>
    <form action="check.php" method="GET">
        帳號：<input type="text" name="uName"><br/>
        密碼：<input type="password" name="uPSW"><br/>
        <br/>
        <input type="submit" value="送出">
    </form>
</body>

<?php
    include("footer.inc")
?>

</html>