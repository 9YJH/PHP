<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資管晚會報名表</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f3f3f3;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 188, 230);
        }
        h1 {
            color: #000000;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        textarea,
        select,
        input[type="file"],
        input[type="range"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1><資管晚會報名表></h1>
    <form action="result.php" method="post">
        <label for="name">活動時間：12/30(五)18:00-21:00</label>
        <label for="name">活動地點：高雄大學管理學院B105</label>
        <label for="name">豐富的抽獎獎品以及好吃的甜點等你們呦！</label>

        <br>

        <label for="name">&#10084; 請輸入姓名:</label>
        <input type="text" name="name" value="" placeholder="請輸入中文姓名"><br><br>

        <label for="id">&#10084; 請輸入學號:</label>
        <input type="text" name="id" value="" placeholder="請輸入學號" maxlength="8" required><br><br>

        <label for="email">&#10084; 請輸入Email帳號:</label>
        <input type="email" name="email" placeholder="請輸入高雄大學email帳號" required><br><br>

        <label for="gender">&#10084; 您的性別:</label>
        <input type="radio" name="gender" value="男">男
        <input type="radio" name="gender" value="女">女<br><br>

        您的生日:<input type="date" name="date" value=""><br><br>

        &#10084; 參加人數:<input type="number" name="number" value="0" min="0"><br><br>

        &#10084; 意見回饋:<textarea name="comment" value="" rows="10" cols="20"></textarea><br><br>
        <input type="submit" value="送出資料">
        <input type="reset" value="清除資料">
    </form>
</body>

</html>


