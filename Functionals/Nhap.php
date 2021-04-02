<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            margin: 5px 0px;
        }

        label {
            display: inline-block;
            min-width: 70px;
        }

        form > input {
            margin: 4px 0px 0px 100px;
        }

        .success {
            color: green;
        }

        .fail {
            color: red;
        }

    </style>
</head>
<body>
    <h3>Nhập Thông Tin Khách Hàng</h3>
    <form action="" method="POST">
        <div>
            <label for="">Ma KH:</label>
            <input type="text" name="MaKH">
        </div>
        <div>
            <label for="">Ten KH:</label>
            <input type="text" name="TenKH">
        </div>
        <div>
            <label for="">So Luong:</label>
            <input type="number" name="SoLuong">
        </div>
        <div>
            <label for="">Don Gia:</label>
            <input type="text" name="DonGia">
        </div>
        <input type="submit" name="submit" value="Thêm">
    </form>
    <?php
        include('../connect.php');
        if(isset($_POST['submit'])) {
            $MaKH = $_POST['MaKH'];
            $TenKH = $_POST['TenKH'];
            $SoLuong = $_POST['SoLuong'];
            $DonGia = $_POST['DonGia'];
            $TongTien = $SoLuong * $DonGia;

            $sqlAdd = 'insert into muahang values("'.$MaKH.'","'.$TenKH.'","'.$SoLuong.'","'.$DonGia.'","'.$TongTien.'")';
            $result = mysqli_query($conn, $sqlAdd);

            // Phần này ko bắt buộc phải có.
            if($result) {
                echo "<p>Nhap TT Khach Hang <span class='success'>Thanh Cong<span>.</p>";
            } else {
                echo "<p>Nhap TT Khach Hang <span class='fail'>That Bai</span>.</p>";
            }
        }
    ?>
</body>
</html>