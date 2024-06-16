<?php
    include("setting.inc")
?>

<?php
    $uId="nuk";
    $uPwd="1234567890";

    $uName=$_GET["uName"];
    $uPSW=$_GET["uPSW"];

    if($uId==$uName && $uPwd==$uPSW){
        $_SESSION["check"] = "Yes";
        setcookie("userName",$uId,time()+36000);
        header("Location:party_form.php");
    }else{
        $_SESSION["check"] = "No";
        header("Location:fail.php");
    }
   ob_flush();
?>