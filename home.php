<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn {
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            padding: 6px 12px;
            color: white;
            background-color: #3da8d4;
            border: 1px solid #3da8d4;
            transition: 0.2s;
            text-align: center;
            margin: 10px 0px;
        }

        .btn:hover {
            color: #3da8d4;
            background-color: white;
        }

        .options {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: inline-flex;
            flex-direction: column;
        }
        
    </style>
</head>
<body>
    <section class="options">
        <h3 style="color: #999; font-size: 26px">Chọn Chức Năng</h3>
        <a href="./Functionals/Nhap.php" target="_blank" class="btn">Nhap Du Lieu</a>
        <a href="./Functionals/HienThi.php" target="_blank" class="btn">Hien Thi Kh</a>
        <a href="./Functionals/Sua.php" target="_blank" class="btn">Sua Kh</a>
        <a href="./Functionals/Xoa.php" target="_blank" class="btn">Xoa Kh</a>
    </section>
</body>
</html>