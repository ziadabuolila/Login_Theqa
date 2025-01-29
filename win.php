<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link -->
    <link rel='icon' href='img/logo_icon.png'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- title -->
    <title>شركة ثقة &nbsp;&nbsp;|&nbsp;&nbsp; تم التسجيل بنجاح </title>
    <style>
        body {
            text-align: center;
            margin-top: 50px;
            font-family: Arial, sans-serif;
            background: #f0f0f0 !important;
        }
        h1 {
            color: green;
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px #aaa;
        }
        img {
            width: 200px;
            height: auto;
            border: 2px solid #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1>تم التسجيل بنجاح!</h1>
    <img src="<?php echo $imagePath; ?>" alt="هدية">
</body>
</html>


<?php
// إعداد رأس HTTP لإعادة التوجيه بعد 1.5 ثانية
header("refresh:2;url=create.php");
?>